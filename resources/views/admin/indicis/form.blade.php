@extends('twill::layouts.form')

@section('contentFields')
    @formField('input', [
    'name' => 'description',
    'label' => 'Descrizione',
    'maxlength' => 200
    ])

    @formField('input', [
    'name'=> 'subtitle',
    'label' => 'Sottotitolo',
    'maxlength' => 100
    ])

    @formField('checkbox', [
    'name' => 'private',
    'label' => 'Riservato ai soci',
    'default' => false,
    'requireConfirmation' => true,
    'note' => "Selezionando questa opzione l\'articolo sarà visibile solo ai soci"
    ])

    @formField('files', [
    'name' => 'indice',
    'label' => 'Indice PDF',
    'note' => "Seleziona il file PDF dell\'indice dei costi di prefabbricazione",
    ])
@stop
