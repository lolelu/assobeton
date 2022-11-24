@twillBlockTitle('File')
@twillBlockIcon('b-mail')

@formField('input', [
'name' => 'title',
'label' => 'Nome file',
'maxlength' => 100,
])

@formField('input' , [
'name' => 'description',
'label' => 'Descrizione',
'maxlength' => 200,
])

@formField('files', [
'name' => 'file',
'label' => 'File',
'max' => 1,
])
