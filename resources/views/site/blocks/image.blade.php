<div class="flex flex-col items-center justify-around gap-4 p-4 m-4">


    <div class="max-w-md ">
        <div class="" flex ">
            <img class="shadow-lg  " src={!! $block->image('image', 'desktop') !!} alt="immgine" />
        </div>
        <div class="mt-4">
            <div class=" text-right font-semibold text-sm text-slate-500 ">{{ $block->input('author') }}</div>
            <div class=" text-right  text-sm text-slate-500 max-w-sm ml-auto mr-0">{{ $block->input('caption') }}</div>
        </div>
    </div>

</div>
