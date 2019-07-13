@extends('_layouts.master')

@section('title')
Dad. Husband. Developer. Human.
@endsection

@section('body')
<section class="welcome items-center flex px-12 pt-40 pb-20 md:pr-12 w-screen min-h-screen sm:px-20 sm:pb-20 lg:px-24 lg:pb-24 flex-wrap content-center">
    <div class="w-full mb-16 lg:mb-0 md:w-auto md:pr-16 xl:pr-24">
        <h1 class="font-serif text-4xl leading-none font-bold sm:text-5xl md:text-6xl mb-8">Hello. <br>I'm Joshua.</h1>
        <p class="max-w-lg">Father. Husband. Craftsman. Adventurer. I am a human who enjoys building things on the internet for other humans.</p>
    </div>
    <div class="relative md:max-w-md lg:flex-1 lg:max-w-lg">
        <img class="headshot shadow" src="/assets/images/me.jpg" alt="A photograph of Joshua Costello" />
        <div aria-hidden="true" class="crosshatch-salmon absolute"></div>
        <div aria-hidden="true" class="gradient-pink-lemonade absolute bottom-0 left-0 right-0 top-0"></div>
    </div>
</section>
@endsection
