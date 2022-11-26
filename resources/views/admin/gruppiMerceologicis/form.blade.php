@extends('twill::layouts.form')

@section('contentFields')
    @formField('input', [
    'name' => 'description',
    'label' => 'Descrizione',
    'maxlength' => 100
    ])

    @formField('input', [
    'name' => 'subtitle',
    'label' => 'Sottotitolo',
    'maxlength' => 100
    ])

    @formField('medias', [
    'name' => 'thumbnail',
    'label' => 'Thumbnail',
    'note' => 'Dimensione consigliata 300x300px',
    'max' => 1,
    'required' => true
    ])


    @formField('wysiwyg', [
    'name' => 'introduction',
    'label' => "Introduzione",
    'toolbarOptions' => [
    ['header' => [2, 3, 4, 5, 6, false]],
    'bold',
    'italic',
    'underline',
    'strike',
    ["script" => "super"],
    ["script" => "sub"],
    "blockquote",
    "code-block",
    ['list' => 'ordered'],
    ['list' => 'bullet'],
    ['indent' => '-1'],
    ['indent' => '+1'],
    ["align" => []],
    ["direction" => "rtl"],
    'link',
    "clean",
    ],
    'placeholder' =>'Inserisci l\'introduzione',
    'maxlength' => 5000,
    'editSource' => true,
    'note' => 'Inserisci l\'introduzione'
    ])

    @formField('wysiwyg', [
    'name' => 'description',
    'label' => "Descrizione",
    'toolbarOptions' => [
    ['header' => [2, 3, 4, 5, 6, false]],
    'bold',
    'italic',
    'underline',
    'strike',
    ["script" => "super"],
    ["script" => "sub"],
    "blockquote",
    "code-block",
    ['list' => 'ordered'],
    ['list' => 'bullet'],
    ['indent' => '-1'],
    ['indent' => '+1'],
    ["align" => []],
    ["direction" => "rtl"],
    'link',
    "clean",
    ],
    'placeholder' =>'Inserisci la descrizione',
    'maxlength' => 5000,
    'editSource' => true,
    'note' => 'Inserisci la descrizione'
    ])

    @formField('wysiwyg', [
    'name' => 'applications',
    'label' => "Applicazioni",
    'toolbarOptions' => [
    ['header' => [2, 3, 4, 5, 6, false]],
    'bold',
    'italic',
    'underline',
    'strike',
    ["script" => "super"],
    ["script" => "sub"],
    "blockquote",
    "code-block",
    ['list' => 'ordered'],
    ['list' => 'bullet'],
    ['indent' => '-1'],
    ['indent' => '+1'],
    ["align" => []],
    ["direction" => "rtl"],
    'link',
    "clean",
    ],
    'placeholder' =>'Inserisci le applicazioni',
    'maxlength' => 5000,
    'editSource' => true,
    'note' => 'Inserisci le applicazioni'
    ])


    @formField('medias', [
    'name' => 'carousel',
    'label' => 'Carosello',
    'note' => 'Dimensione consigliata 1920x1080px',
    'max' => 5,
    'required' => false
    ])


    {{-- TODO: Utile per il prefill dei blocchi --}}
    {{-- @formField('block_editor', [
    'blocks' => \App\Models\GruppiMerceologici::AVAILABLE_BLOCKS,
    ]) --}}
@stop
