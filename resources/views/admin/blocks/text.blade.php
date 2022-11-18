@twillBlockTitle('Body text')
@twillBlockIcon('text')

@formField('input', [
'name' => 'title',
'label' => 'Title',

])

@formField('wysiwyg', [
'name' => 'text',
'label' => 'Text',
'placeholder' => 'Text',
'toolbarOptions' => [
'bold',
'italic',
['list' => 'bullet'],
['list' => 'ordered'],
[ 'script' => 'super' ],
[ 'script' => 'sub' ],
'link',
'clean'
],

])
