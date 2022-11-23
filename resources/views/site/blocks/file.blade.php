<div class="border border-gray-300 p-4 m-2">
    <div class="font-semibold text-2xl text-slate-800 leading-8"> {!! $block->input('title') !!} </div>
    <div class=" font-normal text-lg text-slate-700"> {!! $block->input('description') !!} </div>
    <div class=" font-normal text-lg text-slate-700"> {!! $block->fileObject('file') !!} </div>
    <div class=" font-normal text-lg text-slate-700"> {!! $block->file('file') !!} </div>


    dowload file from link
    <a href="{{ $block->file('file') }}" download class="text-slate-700 hover:text-slate-900">Download</a>






</div>
