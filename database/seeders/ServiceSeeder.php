<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    public function run(): void
    {
        $services = [
            [
                'slug' => 'brand-strategy', 'title' => 'Brand strategy & identity', 'category' => 'Branding', 'icon' => '✦',
                'excerpt' => 'Build a brand people remember, trust, and choose.',
                'description' => 'We turn your point of view into a focused brand system that is clear in the boardroom and unmistakable in the market. From positioning to visual direction, you leave with the confidence to show up consistently everywhere.',
                'image_url' => 'https://images.unsplash.com/photo-1559028012-481c04fa702d?auto=format&fit=crop&w=1400&q=85',
                'starting_price' => 4800, 'rating' => 5, 'review_count' => 42, 'delivery_time' => '3–5 weeks', 'featured' => true,
                'features' => ['Positioning workshop', 'Verbal identity & messaging', 'Logo and visual identity system', 'Brand guidelines playbook'],
            ],
            [
                'slug' => 'product-design', 'title' => 'Product design sprint', 'category' => 'Design', 'icon' => '◈',
                'excerpt' => 'Move from a fuzzy idea to a tested, clickable product direction.',
                'description' => 'A collaborative design sprint for teams that need momentum. We map the experience, prototype the critical path, and put the right questions in front of real users before you invest in code.',
                'image_url' => 'https://images.unsplash.com/photo-1558655146-9f40138edfeb?auto=format&fit=crop&w=1400&q=85',
                'starting_price' => 6500, 'rating' => 5, 'review_count' => 36, 'delivery_time' => '2–3 weeks', 'featured' => true,
                'features' => ['Product discovery workshop', 'User journey & information architecture', 'High-fidelity prototype', 'Usability test readout'],
            ],
            [
                'slug' => 'growth-engine', 'title' => 'Growth engine launch', 'category' => 'Growth', 'icon' => '↗',
                'excerpt' => 'A sharper growth system for your next stage of momentum.',
                'description' => 'We find the few growth levers that matter most, then turn them into a practical operating system. Expect a clear funnel, a focused experiment roadmap, and the content foundations to keep learning.',
                'image_url' => 'https://images.unsplash.com/photo-1556761175-b413da4baf72?auto=format&fit=crop&w=1400&q=85',
                'starting_price' => 3900, 'rating' => 5, 'review_count' => 28, 'delivery_time' => '4–6 weeks', 'featured' => true,
                'features' => ['Funnel and audience audit', 'Growth opportunity map', '90-day experiment roadmap', 'Campaign measurement setup'],
            ],
            [
                'slug' => 'web-development', 'title' => 'Web design & development', 'category' => 'Technology', 'icon' => '⌘',
                'excerpt' => 'A high-performing digital home that feels as good as it works.',
                'description' => 'We design and build thoughtful, fast websites for teams ready to make a stronger first impression. Every page is crafted around your story, your customers, and the action that moves the business forward.',
                'image_url' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=1400&q=85',
                'starting_price' => 7200, 'rating' => 5, 'review_count' => 51, 'delivery_time' => '5–8 weeks',
                'features' => ['Content and sitemap direction', 'Responsive UI design', 'Laravel / modern web build', 'SEO and performance handoff'],
            ],
            [
                'slug' => 'content-studio', 'title' => 'Content studio', 'category' => 'Content', 'icon' => '✎',
                'excerpt' => 'Turn your expertise into a body of work that earns attention.',
                'description' => 'A flexible editorial partner for teams with something meaningful to say. We find your strongest ideas, shape them into a point of view, and make it easy to publish with consistency.',
                'image_url' => 'https://images.unsplash.com/photo-1499750310107-5fef28a66643?auto=format&fit=crop&w=1400&q=85',
                'starting_price' => 2800, 'rating' => 5, 'review_count' => 19, 'delivery_time' => '3–4 weeks',
                'features' => ['Editorial voice guide', 'Content pillars and calendar', 'Four launch-ready articles', 'Repurposing templates'],
            ],
            [
                'slug' => 'team-workshops', 'title' => 'Team workshops', 'category' => 'Workshops', 'icon' => '◎',
                'excerpt' => 'Get the room aligned, energized, and ready to make a decision.',
                'description' => 'Structured, highly participatory sessions that turn competing opinions into a shared next step. Great for launches, pivots, positioning questions, and teams at an inflection point.',
                'image_url' => 'https://images.unsplash.com/photo-1556761175-5973dc0f32e7?auto=format&fit=crop&w=1400&q=85',
                'starting_price' => 1200, 'rating' => 5, 'review_count' => 64, 'delivery_time' => '1–2 days',
                'features' => ['Pre-session stakeholder interviews', 'Tailored workshop facilitation', 'Decision documentation', 'Action plan and next steps'],
            ],
        ];

        foreach ($services as $service) {
            Service::create($service);
        }
    }
}

