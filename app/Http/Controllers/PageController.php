<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    private $posts = [
        [
            'id' => 1,
            'title' => 'Getting Started with Laravel 12',
            'slug' => 'getting-started-laravel-12',
            'excerpt' => 'Explore the new features in Laravel 12 and how it streamlines modern web development with improved defaults and performance.',
            'category' => 'Development',
            'date' => 'Dec 10, 2025',
            'content' => 'Full content here...'
        ],
        [
            'id' => 2,
            'title' => 'Why Tailwind CSS is the Future',
            'slug' => 'why-tailwind-css-future',
            'excerpt' => 'Utility-first CSS frameworks are changing the way we build interfaces. Here is why you should consider switching.',
            'category' => 'Design',
            'date' => 'Dec 05, 2025',
            'content' => 'Full content here...'
        ],
        [
            'id' => 3,
            'title' => 'Building a Portfolio that Stands Out',
            'slug' => 'building-portfolio-stands-out',
            'excerpt' => 'Tips and tricks for developers to showcase their work effectively and attract potential clients or employers.',
            'category' => 'Career',
            'date' => 'Nov 28, 2025',
            'content' => 'Full content here...'
        ],
    ];

    public function home()
    {
        return view('welcome', [
            'featured_posts' => array_slice($this->posts, 0, 3)
        ]);
    }

    public function about()
    {
        return view('about');
    }

    public function blog()
    {
        return view('blog', [
            'posts' => $this->posts
        ]);
    }

    public function contact()
    {
        return view('contact');
    }
}
