@extends('layouts.app')

@section('title', 'About')

@section('content')
<div class="bg-slate-900 py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl lg:mx-0 lg:max-w-none">
            <h1 class="mt-2 text-3xl font-bold tracking-tight text-white sm:text-4xl">About Me</h1>
            <div class="grid grid-cols-1 gap-x-8 gap-y-16 lg:grid-cols-2 lg:items-start lg:gap-y-10">
                <div class="lg:pr-4">
                    <div class="max-w-xl text-base leading-7 text-slate-300 lg:max-w-lg">
                        <p class="mb-8">
                            I am a dedicated software developer with a passion for building robust and scalable web applications. 
                            My journey in coding started with a curiosity about how things work on the internet, which quickly turned into a career obsession.
                        </p>
                        <p class="mb-8">
                            I specialize in PHP, Laravel, and JavaScript ecosystems. I believe in writing clean, maintainable code and keeping up with the latest industry trends.
                        </p>
                        <ul role="list" class="mt-8 space-y-8 text-slate-400">
                            <li class="flex gap-x-3">
                                <svg class="mt-1 h-5 w-5 flex-none text-indigo-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span><strong class="font-semibold text-white">Continuous Learning.</strong> I am always learning new technologies and improving my skills.</span>
                            </li>
                            <li class="flex gap-x-3">
                                <svg class="mt-1 h-5 w-5 flex-none text-indigo-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span><strong class="font-semibold text-white">Problem Solving.</strong> I enjoy tackling complex problems and finding efficient solutions.</span>
                            </li>
                            <li class="flex gap-x-3">
                                <svg class="mt-1 h-5 w-5 flex-none text-indigo-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span><strong class="font-semibold text-white">Collaboration.</strong> I value teamwork and open communication.</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="lg:sticky lg:top-4 lg:col-start-2 lg:row-span-2 lg:row-start-1 lg:overflow-hidden">
                   <div class="relative">
                        <div class="absolute inset-0 bg-gradient-to-tr from-indigo-500 to-cyan-500 rounded-2xl transform rotate-3 scale-105 opacity-20"></div>
                        <img class="relative w-full max-w-none rounded-2xl bg-slate-800 shadow-xl ring-1 ring-slate-400/10 object-cover" src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2670&q=80" alt="Workstation">
                   </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
