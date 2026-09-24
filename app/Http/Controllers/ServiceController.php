<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Service;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ServiceController extends Controller
{
    public function home(): View
    {
        return view('home', [
            'featuredServices' => Service::where('featured', true)->latest()->take(3)->get(),
            'categories' => Service::query()->select('category')->distinct()->orderBy('category')->pluck('category'),
        ]);
    }

    public function index(Request $request): View
    {
        $query = Service::query();
        $search = trim((string) $request->string('q'));
        $category = $request->string('category')->toString();

        if ($search !== '') {
            $query->where(fn ($q) => $q->where('title', 'like', "%{$search}%")
                ->orWhere('excerpt', 'like', "%{$search}%")
                ->orWhere('category', 'like', "%{$search}%"));
        }
        if ($category !== '') {
            $query->where('category', $category);
        }

        return view('services.index', [
            'services' => $query->orderByDesc('featured')->latest()->paginate(9)->withQueryString(),
            'categories' => Service::query()->select('category')->distinct()->orderBy('category')->pluck('category'),
            'activeCategory' => $category,
            'search' => $search,
        ]);
    }

    public function show(Service $service): View
    {
        return view('services.show', [
            'service' => $service,
            'relatedServices' => Service::where('id', '!=', $service->id)->where('category', $service->category)->take(2)->get(),
        ]);
    }

    public function storeBooking(Request $request, Service $service): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:120'],
            'email' => ['required', 'email', 'max:180'],
            'company' => ['nullable', 'string', 'max:120'],
            'budget' => ['required', 'string', 'max:80'],
            'preferred_date' => ['nullable', 'date', 'after_or_equal:today'],
            'project_details' => ['required', 'string', 'min:20', 'max:4000'],
        ]);

        $service->bookings()->create($validated);

        return redirect()->route('booking.success', ['service' => $service->slug]);
    }

    public function success(Service $service): View
    {
        return view('bookings.success', compact('service'));
    }
}

