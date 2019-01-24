<div class="font-sans author-box border-t-2 border-dashed border-grey-lighter mt-16 leading-loose rounded relative">
    <div class="flex">
        <img class="rounded-full mt-4 h-10 w-10 md:h-12 md:w-12" src="{{ $post->author->avatar }}">
        <div class="ml-4 mt-4 mb-0 bg-transparent mb-4 text-grey-darker">{!! $post->author->bio !!}</div>
    </div>
</div>