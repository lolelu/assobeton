@extends('twill::layouts.form')




@section('sideFieldset')

    @formField('checkbox' , [
    'name' => 'private',
    'label' => 'Riservato ai soci',
    'default' => false,
    'requireConfirmation' => true,
    'note' => 'Selezionando questa opzione l\'articolo sarà visibile solo ai soci'
    ])


    @formField('checkbox' , [
    'name' => 'event',
    'label' => 'Evento',
    'default' => false,
    'note' => 'Seleziona se l\'articolo è un evento'
    ])

    @formConnectedFields([
    'fieldName' => 'event',
    'fieldValues' => true,
    'renderForBlocks' => false,
    ])

    @formField('date_picker', [
    'name' => 'event_date',
    'label' => 'Data evento',
    'default' => date('Y-m-d H:i:s'),
    'note' => 'Seleziona la data dell\'evento'
    ])

    @endformConnectedFields


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
    'note' => "Seleziona i file da allegare all\'articolo",
    'blocks' => [ 'file' ]
    ])



    @endformFieldset

@stop
