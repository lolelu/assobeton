<div class="p-4 m-4 text-center space-y-4">
    <div class="font-semibold text-2xl text-slate-800 leading-8"> {!! $block->input('title') !!} </div>
    <div class=" font-normal text-lg text-slate-700"> {!! $block->input('description') !!} </div>

    <div>
        <a href="{{ $block->file('file') }}" download class="text-slate-700 hover:text-blue-300">Download
            {{ $block->fileObject('file')->filename }}</a>
    </div>
</div>
