@twillBlockTitle('Testo')
@twillBlockIcon('text')

@formField('input', [
'name' => 'title',
'label' => 'Titolo',
'maxlength' => 100,
'note' => 'Titolo del blocco di testo, opzionale'
])

@formField('wysiwyg', [
'name' => 'text',
'label' => 'Testo',
'placeholder' => 'Testo',
'toolbarOptions' => [
'bold',
'italic',
["align" => []],
['list' => 'bullet'],
['list' => 'ordered'],
[ 'script' => 'super' ],
[ 'script' => 'sub' ],
'link',
'clean'
],

])
