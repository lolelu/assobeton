@extends('twill::layouts.form')




@section('sideFieldset')
    @formField('checkbox' , [
    'name' => 'private',
    'label' => 'Riservato ai soci',
    'default' => false,
    'requireConfirmation' => true,
    'note' => 'Selezionando questa opzione l\'articolo sarà visibile solo ai soci'
    ])
@endsection

@section('contentFields')

    @formField('browser', [
    'moduleName' => 'filterTopics',
    'name' => 'filterTopic',
    'label' => 'Argomento',

    'max' => 1,
    'required' => true
    ])


    @formField('medias', [
    'name' => 'cover',
    'label' => 'Immagine di copertina',
    'note' => 'Seleziona un\'immagine di copertina per l\'articolo',
    'max' => 1
    ])

    @formField('input', [
    'name' => 'subtitle',
    'label' => 'Sottotitolo',
    'maxlength' => 200,
    'required' => true
    ])


    @formField('input', [
    'name' => 'description',
    'label' => 'Descrizione',
    'maxlength' => 200,
    'required' => true,
    'type' => 'textarea',
    'rows' => 3
    ])

    @formField('input', [
    'name' => 'author',
    'label' => 'Autore',
    'maxlength' => 200,
    'required' => true
    ])


    @formField('files', [
    'name' => 'main_attachment',
    'label' => 'Allegato principale',
    ])


@stop


@section('fieldsets')

    @formFieldset(['id' => 'Contenuto', 'title' => 'Contenuto', 'open' => false])

    @formField('block_editor' , [
    'name' => 'Contenuto',
    'label' => 'Contenuto',
    'blocks' => ['text', 'quote', 'media', 'image']

    ])

    @endformFieldset

    @formFieldset(['id' => 'Allegati', 'title' => 'Allegati', 'open' => false])


    @formField('block_editor', [
    'name' => 'Files',
    'label' => 'Files',
    'max' => 10,
    'note' => 'Seleziona i file addizionali da allegare all\'articolo',
    'blocks' => [ 'file' ]
    ])



    @endformFieldset


@stop
