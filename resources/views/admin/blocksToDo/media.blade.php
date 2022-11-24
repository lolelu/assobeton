@twillBlockTitle('Media')
@twillBlockIcon('image')

@formField('medias', [
'name' => 'image',
'label' => 'Images',
'withVideoUrl' => false,
'max' => 20,
])

@formField('files', [
'name' => 'video',
'label' => 'Video',
'note' => 'Video will overwrite previously selected images',
'max' => 1
])

@formField('input', [
'name' => 'caption',
'label' => 'Caption',
'maxlength' => 250,
])

@formField('select', [
'name' => 'effect',
'label' => 'Transition Effect',
'placeholder' => 'Select Transition Effect',
'default' => 'cut',
'options' => [
[
'value' => 'cut',
'label' => 'Cut'
],
[
'value' => 'fade',
'label' => 'Fade In/Out'
]
]
])

@formField('color', [
'name' => 'bg',
'label' => 'Background color',
'note' => 'Default is light grey (#E6E6E6)',
])

@formField('input', [
'name' => 'timing',
'label' => 'Timing',
'maxlength' => 250,
'note' => 'Timing in ms (default is 4000ms)',
])
