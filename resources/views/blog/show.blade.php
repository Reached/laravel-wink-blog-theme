@extends('app')

@include('blog.includes.meta')

@section('content')
    <section class="container mx-auto p-4 max-w-lg">
        <article class="content leading-loose max-w-2xl font-sans">
            {{--<img src="{{ $post->featured_image }}">--}}
            <h1 class="font-serif leading-normal md:text-xl lg:text-4xl pt-4 mb-0">{{ $post->title }}</h1>
            <time class="font-semibold text-sm md:text-base text-grey-darker">{!! $post->publish_date->formatLocalized('%d %B %Y') !!}</time>
            <p class="md:text-lg lg:text-xl md:mt-6">{!! $post->body !!}</p>
        </article>

        @include('blog.includes.author-meta')
    </section>
@endsection