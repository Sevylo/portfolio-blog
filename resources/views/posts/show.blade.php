@extends('layouts.app')

@section('title', $post['title'])

@section('content')
<div class="bg-slate-900 py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-3xl">
            <!-- Back Link -->
            <a href="{{ url('/blog') }}" class="inline-flex items-center text-sm font-medium text-slate-400 hover:text-indigo-400 mb-8 transition-colors">
                <svg class="mr-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
                Back to Blog
            </a>

            <!-- Header -->
            <div class="text-center mb-12">
                <div class="flex items-center justify-center gap-x-4 text-xs mb-4">
                    <time datetime="{{ $post['date'] }}" class="text-slate-400">{{ $post['date'] }}</time>
                    <span class="relative z-10 rounded-full bg-slate-800 px-3 py-1 font-medium text-indigo-400 ring-1 ring-inset ring-slate-700/10">{{ $post['category'] }}</span>
                </div>
                <h1 class="text-3xl font-bold tracking-tight text-white sm:text-5xl mb-6">{{ $post['title'] }}</h1>
                <p class="text-lg leading-8 text-slate-300">{{ $post['excerpt'] }}</p>
            </div>

            <!-- Image -->
             <div class="relative w-full aspect-[16/9] mb-12 rounded-2xl overflow-hidden bg-slate-800">
                <div class="absolute inset-0 bg-gradient-to-tr from-indigo-500/20 to-cyan-500/20 mix-blend-overlay"></div>
                <div class="absolute inset-0 flex items-center justify-center text-6xl">🚀</div>
            </div>

            <!-- Content -->
            <div class="prose prose-lg prose-invert mx-auto">
                <p>
                    This is a placeholder for the actual blog post content. In a real application, this would be retrieved from a database or a markdown file.
                </p>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </p>
                <h2>Subheading</h2>
                <p>
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
                <blockquote>
                    <p>
                        "The best way to predict the future is to invent it."
                    </p>
                </blockquote>
                <p>
                   More detailed content would go here, explaining the topic in depth with code snippets, images, and other rich media.
                </p>
            </div>

            <!-- Author -->
            <div class="mt-16 pt-8 border-t border-slate-800 flex items-center gap-x-4">
                <img src="https://github.com/Sevylo.png" alt="" class="h-12 w-12 rounded-full bg-slate-800">
                <div>
                    <h3 class="text-base font-semibold leading-7 tracking-tight text-white">Sevylo</h3>
                    <p class="text-sm font-semibold leading-6 text-indigo-400">Full Stack Developer</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
