@formField('input', [
'name' => $titleFormKey ?? 'title',
'label' => $titleFormKey === 'title' ? twillTrans('twill::lang.modal.title-field') : ucfirst($titleFormKey),
'translated' => $translateTitle ?? false,
'required' => true,
'onChange' => 'formatPermalink'
])

{{-- TODO: utile per il prefill dei blocchi --}}

{{-- @if ($item->template ?? false)


@formField('input', [
'name' => 'template_label',
'label' => 'Template',
'disabled' => true,
])
@else


@formField('select', [
'name' => 'template',
'label' => 'Template',
'default' => \App\Models\GruppiMerceologici::DEFAULT_TEMPLATE,
'options' => \App\Models\GruppiMerceologici::AVAILABLE_TEMPLATES,
])
@endif --}}


@if ($permalink ?? true)
    @formField('input', [
    'name' => 'slug',
    'label' => twillTrans('twill::lang.modal.permalink-field'),
    'translated' => true,
    'ref' => 'permalink',
    'prefix' => $permalinkPrefix ?? ''
    ])
@endif
