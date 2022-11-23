@twillBlockTitle('File')
@twillBlockIcon('b-mail')

@formField('input', [
'name' => 'title',
'label' => 'Nome file',
])

@formField('input' , [
'name' => 'description',
'label' => 'Descrizione',
'maxlength' => 200,
'required' => false
])

@formField('files', [
'name' => 'file',
'label' => 'File',
'max' => 1,
])
