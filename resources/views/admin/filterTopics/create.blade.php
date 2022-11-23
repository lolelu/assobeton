@include('twill::partials.create')

@formField('input', [
'name' => 'description',
'label' => 'Descrizione',
'maxlength' => 100
])

@formField('medias', [
'name' => 'icon',
'label' => 'Icona',
'note' => 'Recommended size 300x300px',
'max' => 1,
'required' => true
])
