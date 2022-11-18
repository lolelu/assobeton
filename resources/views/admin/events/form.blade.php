@extends('twill::layouts.form')


@php
    
    $thematics = [['value' => 'Test_Matica', 'label' => 'Test_Matica'], ['value' => 'Tematicatest', 'label' => 'Tematicatest']];
    
@endphp

@section('contentFields')

    @formField('input', [
    'name' => 'title',
    'label' => 'Nome',
    'maxlength' => 200,
    'required' => true
    ])

    @formField('input', [
    'name' => 'subtitle',
    'label' => 'Sottotitolo',
    'maxlength' => 200,
    'required' => true
    ])


    @formField('wysiwyg', [
    'name' => 'description',
    'label' => "Breve descrizione dell'articolo",
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
    'placeholder' => 'Inserisci la descrizione dell\'azienda',
    'maxlength' => 500,
    'editSource' => true,
    'note' => 'Inserisci la descrizione dell\'azienda'
    ])

    @formField('select', [
    'name' => 'thematic',
    'label' => 'Tematica',
    'placeholder' => 'Seleziona una tematica',
    'options' => $thematics,
    'required' => true
    ])

    @formField('checkbox' , [
    'name' => 'private',
    'label' => 'Riservato ai soci',
    'default' => false,
    'requireConfirmation' => true,
    'note' => 'Selezionando questa opzione l\'articolo sarà visibile solo ai soci'
    ])


    @formField('medias', [
    'name' => 'cover',
    'label' => 'Immagine di copertina',
    'note' => 'Seleziona un\'immagine di copertina per l\'articolo',
    'max' => 1
    ])




    @formField('block_editor')


    {{-- //da sostiturie con un blockeditor con file allegati --}}
    @formField('files', [
    'name' => 'file',
    'label' => 'File',
    'max' => 4,
    ])

@stop
