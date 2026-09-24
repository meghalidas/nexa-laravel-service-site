@extends('layouts.app')
@section('content')
<section class="success-section"><div class="container success-card"><div class="success-mark">✓</div><p class="eyebrow">Message received</p><h1>Good things<br><em>are in motion.</em></h1><p>Thanks for reaching out about <strong>{{ $service->title }}</strong>. Someone from our team will be in touch within two business days.</p><div><a href="{{ route('home') }}" class="button button-dark">Back to home <span>↗</span></a><a href="{{ route('services.index') }}" class="text-link">Explore more services <span>↗</span></a></div></div></section>
@endsection
