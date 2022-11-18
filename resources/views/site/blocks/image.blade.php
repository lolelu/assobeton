<div class="flex flex-col items-center justify-around gap-4 p-4">

    <div class=" font-semibold text-2xl text-slate-800 leading-8">{{ $block->input('author') }}</div>
    <div class="p-4 rounded-lg bg-slate-800">
        <img class=" rounded-lg max-w-md" src={!! $block->image('image', 'tablet') !!} alt="immgine" />
    </div>
</div>
