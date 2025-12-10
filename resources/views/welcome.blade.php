@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <!-- Hero Section -->
    <section class="relative bg-slate-900 overflow-hidden">
        <div class="absolute inset-0">
            <div class="absolute inset-0 bg-gradient-to-br from-indigo-900/20 to-slate-900"></div>
        </div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 md:py-32">
            <div class="md:w-2/3">
                <h1 class="text-4xl md:text-6xl font-bold text-white tracking-tight mb-6">
                    Hi, I'm <span class="text-transparent bg-clip-text bg-gradient-to-r from-indigo-400 to-cyan-400">Sevylo</span>.
                    <br>I build web experiences.
                </h1>
                <p class="text-xl text-slate-300 mb-8 max-w-2xl leading-relaxed">
                    A passionate developer focused on creating intuitive and dynamic user experiences. 
                    Specializing in modern web technologies and clean code.
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="{{ url('/contact') }}" class="inline-flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-lg text-slate-900 bg-indigo-400 hover:bg-indigo-300 transition-colors duration-200">
                        Get in Touch
                    </a>
                    <a href="{{ url('/blog') }}" class="inline-flex items-center justify-center px-8 py-3 border border-slate-700 text-base font-medium rounded-lg text-slate-300 hover:bg-slate-800 hover:text-white transition-all duration-200">
                        Read My Blog
                    </a>
                </div>
            </div>
        </div>
        
        <!-- Decoration -->
        <div class="absolute top-1/2 right-0 transform -translate-y-1/2 translate-x-1/3 opacity-20 pointer-events-none">
            <div class="w-96 h-96 bg-indigo-500 rounded-full filter blur-[100px]"></div>
        </div>
    </section>

    <!-- Featured Projects / Blog Snippet -->
    <section class="py-20 bg-slate-800/50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-end mb-12">
                <div>
                    <h2 class="text-3xl font-bold text-white mb-2">Latest Articles</h2>
                    <p class="text-slate-400">Thoughts, tutorials, and insights.</p>
                </div>
                <a href="{{ url('/blog') }}" class="hidden md:inline-flex items-center text-indigo-400 hover:text-indigo-300 font-medium transition-colors">
                    View all posts
                    <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <!-- Blog Card 1 -->
                @foreach($featured_posts as $post)
                <article class="bg-slate-900 rounded-xl overflow-hidden border border-slate-700/50 hover:border-indigo-500/50 transition-all duration-300 hover:shadow-lg hover:shadow-indigo-500/10 group">
                    <div class="h-48 bg-slate-800 relative overflow-hidden">
                        <!-- Placeholder for image -->
                        <div class="absolute inset-0 bg-gradient-to-br from-slate-700 to-slate-800 flex items-center justify-center text-slate-600 group-hover:scale-105 transition-transform duration-500">
                            <svg class="w-12 h-12 opacity-50" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center text-xs text-indigo-400 mb-2 font-medium">
                            <span>{{ $post['category'] }}</span>
                            <span class="mx-2 text-slate-600">&bull;</span>
                            <span class="text-slate-500">{{ $post['date'] }}</span>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-3 group-hover:text-indigo-400 transition-colors">
                            <a href="#">{{ $post['title'] }}</a>
                        </h3>
                        <p class="text-slate-400 text-sm line-clamp-2 mb-4">
                            {{ $post['excerpt'] }}
                        </p>
                        <a href="#" class="inline-flex items-center text-sm font-medium text-white hover:text-indigo-400 transition-colors">
                            Read more
                            <svg class="ml-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                        </a>
                    </div>
                </article>
                @endforeach
            </div>
            
            <div class="mt-10 text-center md:hidden">
                <a href="{{ url('/blog') }}" class="inline-flex items-center text-indigo-400 hover:text-indigo-300 font-medium transition-colors">
                    View all posts
                    <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
            </div>
        </div>
    </section>

    <!-- Skills/Tech Stack -->
    <section class="py-20 bg-slate-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-white mb-12 text-center">Tech Stack</h2>
            <div class="flex flex-wrap justify-center gap-4 md:gap-8">
                <!-- Skill Pills -->
                <div class="px-6 py-3 bg-slate-800 rounded-full border border-slate-700 text-slate-300 font-medium hover:border-indigo-500/50 hover:text-white transition-colors cursor-default">
                    Laravel
                </div>
                <div class="px-6 py-3 bg-slate-800 rounded-full border border-slate-700 text-slate-300 font-medium hover:border-indigo-500/50 hover:text-white transition-colors cursor-default">
                    PHP
                </div>
                <div class="px-6 py-3 bg-slate-800 rounded-full border border-slate-700 text-slate-300 font-medium hover:border-indigo-500/50 hover:text-white transition-colors cursor-default">
                    Tailwind CSS
                </div>
                <div class="px-6 py-3 bg-slate-800 rounded-full border border-slate-700 text-slate-300 font-medium hover:border-indigo-500/50 hover:text-white transition-colors cursor-default">
                    JavaScript
                </div>
                <div class="px-6 py-3 bg-slate-800 rounded-full border border-slate-700 text-slate-300 font-medium hover:border-indigo-500/50 hover:text-white transition-colors cursor-default">
                    Git & GitHub
                </div>
            </div>
        </div>
    </section>
@endsection
