<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    private $posts = [
        [
            'id' => 1,
            'title' => 'Facilis: Hotel Booking Information System',
            'slug' => 'facilis-hotel-booking-system',
            'excerpt' => 'A desktop-based Information System for Hotel Booking built with Visual Basic .NET and MySQL/Oracle.',
            'category' => 'Desktop App',
            'date' => 'Dec 12, 2025',
            'content' => '
                <h2>Project Overview</h2>
                <p><strong>Facilis</strong> is a comprehensive Hotel Reservation Information System designed to streamline hotel operations. It bridges the gap between hotel administration and customer service through a user-friendly desktop interface.</p>
                
                <h3>Key Features</h3>
                <div class="grid md:grid-cols-2 gap-6 my-6">
                    <div class="bg-slate-800 p-6 rounded-lg">
                        <h4 class="text-indigo-400 font-semibold mb-2">For Customers</h4>
                        <ul class="list-disc list-inside text-slate-300 space-y-1">
                            <li>Account Registration & Login</li>
                            <li>Browse Room Categories & Details</li>
                            <li>Real-time Room Booking</li>
                            <li>Payment Processing</li>
                            <li>Transaction Receipt Printing</li>
                        </ul>
                    </div>
                    <div class="bg-slate-800 p-6 rounded-lg">
                        <h4 class="text-cyan-400 font-semibold mb-2">For Admins</h4>
                        <ul class="list-disc list-inside text-slate-300 space-y-1">
                            <li>Secure Admin Dashboard</li>
                            <li>Manage Rooms (CRUD)</li>
                            <li>Manage Customer Data</li>
                            <li>View & Monitor Transactions</li>
                        </ul>
                    </div>
                </div>

                <h3>Technology Stack</h3>
                <p>The system is built using robust desktop development technologies:</p>
                <ul class="list-disc list-inside mb-6">
                    <li><strong>Language:</strong> Visual Basic .NET (VB.NET)</li>
                    <li><strong>Database:</strong> Oracle 10g / MySQL</li>
                    <li><strong>IDE:</strong> Visual Studio 2022</li>
                </ul>

                <p>This project demonstrates proficiency in desktop application development, database design, and creating role-based access control systems.</p>
                
                <div class="mt-8">
                    <a href="https://github.com/Sevylo/Facilis" target="_blank" class="inline-flex items-center justify-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-slate-900 bg-indigo-400 hover:bg-indigo-300 transition-colors">
                        View Source Code
                    </a>
                </div>
            '
        ],
        [
            'id' => 2,
            'title' => 'Simpeg-23: Personnel Information System',
            'slug' => 'simpeg-23-personnel-management',
            'excerpt' => 'A robust Sistem Informasi Kepegawaian (Personnel Management System) tailored for efficient organizational data handling.',
            'category' => 'Web System',
            'date' => 'Nov 20, 2025',
            'content' => '
                <h2>About Simpeg-23</h2>
                <p><strong>Simpeg-23</strong> (Sistem Informasi Kepegawaian) is a specialized web-based application designed to digitalize and simplify human resource management. It assists organizations in maintaining accurate records of their employees.</p>
                
                <h3>Core Functionality</h3>
                <p>The system addresses the complexities of personnel administration by providing:</p>
                <ul class="list-disc list-inside mb-6 space-y-2">
                    <li><strong>Employee Database:</strong> Centralized storage for personal details, employment history, and rank/position data.</li>
                    <li><strong>Attendance Tracking:</strong> Monitoring employee presence and leave requests.</li>
                    <li><strong>Document Management:</strong> Digital archiving of important employee files using <code>php-flysystem</code>.</li>
                    <li><strong>Reporting:</strong> Automated generation of personnel reports for decision-making.</li>
                </ul>

                <h3>Technical Implementation</h3>
                <p>Built with efficiency in mind, Simpeg-23 leverages modern web technologies to ensure security and scalability, likely utilizing PHP frameworks to handle complex business logic and data relations.</p>

                <div class="mt-8">
                    <a href="https://github.com/Sevylo/simpeg-23" target="_blank" class="inline-flex items-center justify-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-slate-900 bg-indigo-400 hover:bg-indigo-300 transition-colors">
                        View Repository
                    </a>
                </div>
            '
        ],
        [
            'id' => 3,
            'title' => 'DeltaFishing: Fishery Management Platform',
            'slug' => 'deltafishing-digital-wave',
            'excerpt' => 'A Laravel-based platform digitalizing the fishery sector/community operations.',
            'category' => 'Web App',
            'date' => 'Oct 15, 2025',
            'content' => '
                <h2>Project Overview</h2>
                <p><strong>DeltaFishing</strong> is a modern web application designed to support the fishing ecosystem. Built using the <strong>Laravel</strong> framework, it provides a robust platform for managing data related to fishery activities.</p>
                
                <h3>Why Laravel?</h3>
                <p>Laravel was chosen for its expressive syntax and powerful features that accelerated development:</p>
                <ul class="list-disc list-inside mb-6">
                    <li><strong>Routing:</strong> Simple and fast routing engine for clean URLs.</li>
                    <li><strong>ORM:</strong> Eloquent ORM for intuitive database interactions.</li>
                    <li><strong>Security:</strong> Built-in protection against common web vulnerabilities.</li>
                    <li><strong>Authentication:</strong> Robust user management system.</li>
                </ul>

                <h3>Application Scope</h3>
                <p>The application digitizes manual processes in the fishery business, offering features such as:</p>
                <ul class="list-disc list-inside mb-6">
                    <li>Data recording for catch and sales.</li>
                    <li>Management of fishing gear and inventory.</li>
                    <li>User dashboards for different stakeholders.</li>
                </ul>

                <div class="mt-8">
                    <a href="https://github.com/Sevylo/deltafishing" target="_blank" class="inline-flex items-center justify-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-slate-900 bg-indigo-400 hover:bg-indigo-300 transition-colors">
                        Check it out on GitHub
                    </a>
                </div>
            '
        ],
        [
            'id' => 5,
            'title' => 'Warung Nasi Punel Management App',
            'slug' => 'aplikasi-warung-nasi-punel',
            'excerpt' => 'A Java-based Point of Sale (POS) application optimizing operations for a local culinary business.',
            'category' => 'Java App',
            'date' => 'Aug 10, 2025',
            'content' => '
                <h2>Digitalizing Local Business</h2>
                <p>This project is a dedicated software solution for <strong>Warung Nasi Punel</strong>, a local culinary establishment. It was developed to replace manual booking and recording systems with an efficient digital solution.</p>
                
                <h3>System Capabilities</h3>
                <p>The application handles the core operational needs of a food business:</p>
                <div class="bg-slate-800 p-6 rounded-lg my-6 border-l-4 border-indigo-500">
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <span class="text-indigo-400 mr-2">✓</span>
                            <span><strong>Transaction Processing:</strong> Fast and accurate order input and billing.</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-indigo-400 mr-2">✓</span>
                            <span><strong>Menu Management:</strong> Easy updating of food prices and availability.</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-indigo-400 mr-2">✓</span>
                            <span><strong>Sales Reporting:</strong> Daily and monthly income tracking.</span>
                        </li>
                    </ul>
                </div>

                <h3>Under the Hood</h3>
                <p>Written entirely in <strong>Java</strong>, this application focuses on reliability and performance. It utilizes Object-Oriented Programming (OOP) principles to ensure code maintainability and scalability.</p>

                <div class="mt-8">
                    <a href="https://github.com/Sevylo/Aplikasi-Warung-Nasi-Punel" target="_blank" class="inline-flex items-center justify-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-slate-900 bg-indigo-400 hover:bg-indigo-300 transition-colors">
                        View Project
                    </a>
                </div>
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
