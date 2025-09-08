<?php
$isCustomPlaceholder = isset($placeholder);
?>

<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'multiple' => false,
    'required' => false,
    'disabled' => false,
    'placeholder' => __('Drag & Drop your files or <span class="filepond--label-action"> Browse </span>'),
]));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter(([
    'multiple' => false,
    'required' => false,
    'disabled' => false,
    'placeholder' => __('Drag & Drop your files or <span class="filepond--label-action"> Browse </span>'),
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<?php
if (! $wireModelAttribute = $attributes->whereStartsWith('wire:model')->first()) {
    throw new Exception("You must wire:model to the filepond input.");
}

$pondProperties = $attributes->except([
    'class',
    'placeholder',
    'required',
    'disabled',
    'multiple',
    'wire:model',
]);

// convert keys from kebab-case to camelCase
$pondProperties = collect($pondProperties)
    ->mapWithKeys(fn ($value, $key) => [Illuminate\Support\Str::camel($key) => $value])
    ->toArray();

$pondLocalizations = __('livewire-filepond::filepond');
?>

<div
    class="<?php echo e($attributes->get('class')); ?>"
    wire:ignore
    x-cloak
    x-data="{
        model: <?php if ((object) ($wireModelAttribute) instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e($wireModelAttribute->value()); ?>')<?php echo e($wireModelAttribute->hasModifier('live') ? '.live' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e($wireModelAttribute); ?>')<?php endif; ?>,
        isMultiple: <?php echo \Illuminate\Support\Js::from($multiple)->toHtml() ?>,
        current: undefined,
        files: [],
        async loadModel() {
            if (! this.model) {
              return;
            }

            if (this.isMultiple) {
              await Promise.all(Object.values(this.model).map(async (picture) => this.files.push(await URLtoFile(picture))))
              return;
            }

            this.files.push(await URLtoFile(this.model))
        }
    }"
    x-init="async () => {
      await loadModel();

      const pond = LivewireFilePond.create($refs.input);

      pond.setOptions({
          allowMultiple: isMultiple,
          server: {
              process: async (fieldName, file, metadata, load, error, progress) => {
                  $dispatch('filepond-upload-started', '<?php echo e($wireModelAttribute); ?>');
                  await window.Livewire.find('<?php echo e($_instance->getId()); ?>').upload('<?php echo e($wireModelAttribute); ?>', file, async (response) => {
                    let validationResult  = await window.Livewire.find('<?php echo e($_instance->getId()); ?>').call('validateUploadedFile', response);
                        // Check server validation result
                        if (validationResult === true) {
                            // File is valid, dispatch the upload-finished event
                            load(response);
                            $dispatch('filepond-upload-finished', { '<?php echo e($wireModelAttribute); ?>': response });
                        } else {
                            // Throw error after validating server side
                            error('Filepond Api Ignores This Message');
                            $dispatch('filepond-upload-reset', '<?php echo e($wireModelAttribute); ?>');
                        }
                  }, error, progress);
              },
              revert: async (filename, load) => {
                  await window.Livewire.find('<?php echo e($_instance->getId()); ?>').revert('<?php echo e($wireModelAttribute); ?>', filename, load);
                  $dispatch('filepond-upload-reverted', {'attribute' : '<?php echo e($wireModelAttribute); ?>'});
              },
              remove: async (file, load) => {
                  await window.Livewire.find('<?php echo e($_instance->getId()); ?>').remove('<?php echo e($wireModelAttribute); ?>', file.name);
                  load();
                  $dispatch('filepond-upload-file-removed', {'attribute' : '<?php echo e($wireModelAttribute); ?>'});
              },
          },
          required: <?php echo \Illuminate\Support\Js::from($required)->toHtml() ?>,
          disabled: <?php echo \Illuminate\Support\Js::from($disabled)->toHtml() ?>,
      });

      pond.setOptions(<?php echo \Illuminate\Support\Js::from($pondLocalizations)->toHtml() ?>);

      pond.setOptions(<?php echo \Illuminate\Support\Js::from($pondProperties)->toHtml() ?>);

      <?php if($isCustomPlaceholder): ?>
      pond.setOptions({ labelIdle: <?php echo \Illuminate\Support\Js::from($placeholder)->toHtml() ?> });
      <?php endif; ?>

      pond.addFiles(files)
      pond.on('addfile', (error, file) => {
          if (error) console.log(error);
      });

      $wire.on('filepond-reset-<?php echo e($wireModelAttribute); ?>', () => {
          pond.removeFiles();
      });
    }"
>
    <input type="file" x-ref="input">
</div>
<?php /**PATH C:\xampp\htdocs\project-v3-metronic-login-lara12\resources\views/vendor/livewire-filepond/upload.blade.php ENDPATH**/ ?>