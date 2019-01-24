@extends('app')

@push('title')
    <title>Casper Sørensen's blog</title>
@endpush

@section('content')
    <main class="container mx-auto font-sans p-4 max-w-lg content leading-normal">
        @foreach($posts as $post)
            <article class="md:mb-8">
                <a class="no-underline leading-loose text-grey-darkest" href="{{ route('blog.show', $post->slug) }}">
                    <h2 class="font-serif leading-normal md:text-xl lg:text-4xl pt-4 mb-0">{{ $post->title }}</h2>
                    <time class="font-semibold text-sm md:text-base text-grey-darker">{!! $post->publish_date->formatLocalized('%d %B %Y') !!}</time>
                </a>
                <p class="mt-4 text-lg">{!! $post->excerpt !!}</p>
                <p class="mt-4">
                    <a href="{{ route('blog.show', $post->slug) }}">Read post</a>
                </p>
            </article>
        @endforeach
    </main>
@endsection