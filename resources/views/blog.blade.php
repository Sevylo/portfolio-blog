@extends('layouts.app')

@section('title', 'Blog')

@section('content')
<div class="bg-slate-900 py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl text-center">
            <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">From the blog</h2>
            <p class="mt-2 text-lg leading-8 text-slate-300">
                Learn how to grow your business with our expert advice.
            </p>
        </div>
        <div class="mx-auto mt-16 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-3">
            @foreach($posts as $post)
            <article class="flex flex-col items-start justify-between">
                <div class="relative w-full">
                    <div class="absolute inset-0 bg-gradient-to-br from-indigo-500/20 to-slate-900 rounded-2xl"></div>
                    <img src="https://images.unsplash.com/photo-1496128858413-b36217c2ce36?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=3603&q=80" alt="" class="aspect-[16/9] w-full rounded-2xl bg-slate-800 object-cover sm:aspect-[2/1] lg:aspect-[3/2] opacity-80 hover:opacity-100 transition-opacity">
                    <div class="absolute inset-0 rounded-2xl ring-1 ring-inset ring-slate-900/10"></div>
                </div>
                <div class="max-w-xl">
                    <div class="mt-8 flex items-center gap-x-4 text-xs">
                        <time datetime="{{ $post['date'] }}" class="text-slate-400">{{ $post['date'] }}</time>
                        <a href="#" class="relative z-10 rounded-full bg-slate-800 px-3 py-1.5 font-medium text-slate-300 hover:bg-slate-700">{{ $post['category'] }}</a>
                    </div>
                    <div class="group relative">
                        <h3 class="mt-3 text-lg font-semibold leading-6 text-white group-hover:text-indigo-400 transition-colors">
                            <a href="{{ route('blog.show', $post['slug']) }}">
                                <span class="absolute inset-0"></span>
                                {{ $post['title'] }}
                            </a>
                        </h3>
                        <p class="mt-5 line-clamp-3 text-sm leading-6 text-slate-300">{{ $post['excerpt'] }}</p>
                    </div>
                    <div class="relative mt-8 flex items-center gap-x-4">
                        <img src="https://github.com/Sevylo.png" alt="" class="h-10 w-10 rounded-full bg-slate-800">
                        <div class="text-sm leading-6">
                            <p class="font-semibold text-white">
                                <a href="#">
                                    <span class="absolute inset-0"></span>
                                    Sevylo
                                </a>
                            </p>
                            <p class="text-slate-400">Author</p>
                        </div>
                    </div>
                </div>
            </article>
            @endforeach
        </div>
    </div>
</div>
@endsection
