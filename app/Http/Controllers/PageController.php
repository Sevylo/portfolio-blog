<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    private $posts = [
        [
            'id' => 1,
            'title' => 'Project Showcase: Facilis',
            'slug' => 'project-showcase-facilis',
            'excerpt' => 'An efficient software solution meant to facilitate complex workflows. Check out the code structure and logic on GitHub.',
            'category' => 'Web App',
            'date' => 'Dec 12, 2025',
            'content' => '
                <h2>About the Project</h2>
                <p><strong>Facilis</strong> is designed to make things easier. This project explores modern development patterns to simplify user tasks.</p>
                <p>Key features include:</p>
                <ul>
                    <li>Streamlined user interface</li>
                    <li>Efficient backend processing</li>
                </ul>
                <p>Explore the repository to see how I implemented the core features.</p>
                <p><a href="https://github.com/Sevylo/Facilis" target="_blank" class="text-indigo-400 hover:underline">View on GitHub</a></p>
            '
        ],
        [
            'id' => 2,
            'title' => 'Simpeg-23: Personnel Management',
            'slug' => 'simpeg-23-personnel-management',
            'excerpt' => 'A comprehensive Sistem Informasi Kepegawaian (Personnel Management System) built for efficient employee data handling.',
            'category' => 'System',
            'date' => 'Nov 20, 2025',
            'content' => '
                <h2>System Overview</h2>
                <p><strong>Simpeg-23</strong> is a personnel management system designed to handle employee data, attendance, and administrative tasks.</p>
                <p>The system focuses on:</p>
                <ul>
                    <li>Data integrity and security</li>
                    <li>Easy retrieval of employee records</li>
                    <li>Automated reporting features</li>
                </ul>
                <p>This project demonstrates my ability to build robust information systems.</p>
                <p><a href="https://github.com/Sevylo/simpeg-23" target="_blank" class="text-indigo-400 hover:underline">View on GitHub</a></p>
            '
        ],
        [
            'id' => 3,
            'title' => 'DeltaFishing: Catch the Digital Wave',
            'slug' => 'deltafishing-digital-wave',
            'excerpt' => 'A specialized platform for fishing enthusiasts or business management in the fishery sector.',
            'category' => 'Platform',
            'date' => 'Oct 15, 2025',
            'content' => '
                <h2>Project Details</h2>
                <p><strong>DeltaFishing</strong> caters to the specific needs of the fishing community. Whether it is tracking spots, managing gear, or handling sales, this application provides a digital solution.</p>
                <p>Technically, it involves:</p>
                <ul>
                    <li>Real-time data updates</li>
                    <li>User-friendly dashboard</li>
                </ul>
                <p><a href="https://github.com/Sevylo/deltafishing" target="_blank" class="text-indigo-400 hover:underline">View on GitHub</a></p>
            '
        ],
        [
            'id' => 4,
            'title' => 'Mancing Mas: Public Archive',
            'slug' => 'mancing-mas-archive',
            'excerpt' => 'An archival project related to fishing ("Mancing"), showcasing early development concepts and legacy code.',
            'category' => 'Archive',
            'date' => 'Sep 05, 2025',
            'content' => '
                <h2>Legacy Code</h2>
                <p><strong>Mancing Mas</strong> is a public archive of one of my earlier projects. It serves as a testament to my growth as a developer.</p>
                <p>You can browse the code to see where I started and how my coding style has evolved.</p>
                <p><a href="https://github.com/Sevylo/mancing-mas" target="_blank" class="text-indigo-400 hover:underline">View on GitHub</a></p>
            '
        ],
        [
            'id' => 5,
            'title' => 'Aplikasi Warung Nasi Punel',
            'slug' => 'aplikasi-warung-nasi-punel',
            'excerpt' => 'A Point of Sale (POS) and management application for a local culinary business, Warung Nasi Punel.',
            'category' => 'Management',
            'date' => 'Aug 10, 2025',
            'content' => '
                <h2>Business Solution</h2>
                <p>This application was developed to help manage <strong>Warung Nasi Punel</strong>. It aids in transaction processing, inventory management, and daily sales tracking.</p>
                <p>Features:</p>
                <ul>
                    <li>Transaction logging</li>
                    <li>Menu management</li>
                    <li>Reports generation</li>
                </ul>
                <p>It solves real-world problems for small businesses using technology.</p>
                <p><a href="https://github.com/Sevylo/Aplikasi-Warung-Nasi-Punel" target="_blank" class="text-indigo-400 hover:underline">View on GitHub</a></p>
            '
        ],
        [
            'id' => 6,
            'title' => 'Why Tailwind CSS is the Future',
            'slug' => 'why-tailwind-css-future',
            'excerpt' => 'Utility-first CSS frameworks are changing the way we build interfaces. Here is why you should consider switching.',
            'category' => 'Design',
            'date' => 'Dec 05, 2025',
            'content' => '
                <h2>The Utility-First Revolution</h2>
                <p>Tailwind CSS has completely transformed how I write CSS. Instead of wrestling with semantic class names that lose their meaning over time, I can compose designs directly in my build.</p>
                <p>It promotes consistency and speed.</p>
            '
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

    public function showPost($slug)
    {
        $post = collect($this->posts)->firstWhere('slug', $slug);

        if (!$post) {
            abort(404);
        }

        return view('posts.show', ['post' => $post]);
    }
}
