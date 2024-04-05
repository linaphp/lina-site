@extends('layout')

@php
    $posts = collect(lina()->index('posts'))->sort(fn($a, $b) => $b->createdAt <=> $a->createdAt);
@endphp

@section('content')
    <div text-center mt-16>
        <img src="/images/logo.png" alt="logo" size-48 />
        <h1 text="center 4xl red-500" >
            <span block text-6xl>Lina</span>
            <span mt-6 block>Blazingly fast static site generator</span>
        </h1>
        <p text-sm>If you are an PHP and Laravel developer, and want a minimalism blog, Lina is made for you!</p>
    </div>


    <div mt-12 flex="~ items-center justify-center gap-12">
        <a block
           px-10 py-6
           decoration-none
           border="~ 1 solid red-500"
           text-red-500
           transition
           hover:text-white hover:bg-red-500
           href="https://github.com/bangnokia/lina">
            Get started
        </a>
        <a flex items-center gap-2
           px-10 py-6
           decoration-none
           border="~ 1 solid neutral-900"
           text-neutral-900
           transition
           hover:border-red-500 hover:text-red-500
           href="https://github.com/bangnokia/lina">
            <svg size-6 xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"><path fill="currentColor" fill-rule="evenodd" d="M16 2a14 14 0 0 0-4.43 27.28c.7.13 1-.3 1-.67v-2.38c-3.89.84-4.71-1.88-4.71-1.88a3.71 3.71 0 0 0-1.62-2.05c-1.27-.86.1-.85.1-.85a2.94 2.94 0 0 1 2.14 1.45a3 3 0 0 0 4.08 1.16a2.93 2.93 0 0 1 .88-1.87c-3.1-.36-6.37-1.56-6.37-6.92a5.4 5.4 0 0 1 1.44-3.76a5 5 0 0 1 .14-3.7s1.17-.38 3.85 1.43a13.3 13.3 0 0 1 7 0c2.67-1.81 3.84-1.43 3.84-1.43a5 5 0 0 1 .14 3.7a5.4 5.4 0 0 1 1.44 3.76c0 5.38-3.27 6.56-6.39 6.91a3.33 3.33 0 0 1 .95 2.59v3.84c0 .46.25.81 1 .67A14 14 0 0 0 16 2Z"/></svg>
            Source code
        </a>
    </div>

    <div mt-16 container mx-auto leading-10 prose text-center max-w-4xl>
        <h2 text-2xl lg:text-4xl>Smart content organizing</h2>
        <p>Your content files should start with timestamp, to easy manage them. Don't worry, Lina is smart enough to strip them out of the url.</p>
        <img w-full h-full max-w-3xl mt-4 rounded-lg h-full src="/images/organize-content.png" alt="blazing fast build" />
    </div>

    <div mt-16 container mx-auto leading-10 prose text-center max-w-4xl>
        <h2 text-2xl lg:text-4xl>Blazing fast build</h2>
        <p>It's just miliseconds! Then all your pages are generated to html files</p>
        <img w-full h-full max-w-3xl mt-4 rounded-lg h-full src="/images/fast-build.png" alt="blazing fast build" />
    </div>

    <div mt-16 container mx-auto leading-10 prose text-center max-w-4xl>
        <h2 text-2xl lg:text-4xl>Built-in web server</h2>
        <p>You just need to run <code text-red-500 bg-white px-2 rounded>lina serve</code> and your site is ready to be preview!</p>
        <img w-full h-full max-w-3xl mt-4 rounded-lg h-full src="/images/serve.png" alt="fast serve" />
    </div>


    <div mt-16 container mx-auto leading-10 prose text-center max-w-4xl>
        <h2 text-2xl lg:text-4xl>Syntax highlighting</h2>
        <p>
            Lina use the moderm and super fast <a href="https://github.com/tempestphp/highlight" target="_blank">tempestphp/highlight</a> and you can use it in your markdown files
        </p>
    </div>

    <div mt-16 container mx-auto leading-10 prose text-center max-w-4xl>
        <h2 text-2xl lg:text-4xl>Deploy everywhere</h2>
        <p>All your markdown files are generated to html files. So Github pages, Cloudflare pages... you don't have to pay any cost for you site.</p>
    </div>

@endsection

