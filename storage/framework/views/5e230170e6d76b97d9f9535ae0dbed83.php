<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'type' => '',
    'name' => '',
    'value' => '',
    'dataUrl' => '',
    'dir' => '',
    'label' => '',
    'placeholder' => '',
    'title' => '',
    'labelclass' => '',
    'options' => [],
    'labelname' => '',
    'req' => '',
    'id' => '',
    'divWidth' => '3',
    'divlclass' => '',
    'ChoseTitle' => 'choose',
    'divId' => null,
    'jsSelect2' => null,
    'wireIgone' => null,
    'marginBottom' => '3',
    'description_field' => null,
    'NoOptions' => null,
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
    'type' => '',
    'name' => '',
    'value' => '',
    'dataUrl' => '',
    'dir' => '',
    'label' => '',
    'placeholder' => '',
    'title' => '',
    'labelclass' => '',
    'options' => [],
    'labelname' => '',
    'req' => '',
    'id' => '',
    'divWidth' => '3',
    'divlclass' => '',
    'ChoseTitle' => 'choose',
    'divId' => null,
    'jsSelect2' => null,
    'wireIgone' => null,
    'marginBottom' => '3',
    'description_field' => null,
    'NoOptions' => null,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>


<div class="<?php echo \Illuminate\Support\Arr::toCssClasses([
    "form-group  mb-$marginBottom col-md-4 col-lg-$divWidth",
    $divlclass,
]); ?>" data-url=<?php echo e($dataUrl); ?> id=<?php echo e($divId); ?>>




    <!--[if BLOCK]><![endif]--><?php if($label): ?>
        <label for="<?php echo e($id); ?>"
            class="<?php echo \Illuminate\Support\Arr::toCssClasses(["col-form-label   $labelclass "]); ?>"><?php echo e($labelname ? $labelname : __("customTrans.$name")); ?>

            <!--[if BLOCK]><![endif]--><?php if($req): ?>
                <span class="text-danger">*</span>
            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
        </label>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
    <div <?php if($wireIgone): ?> wire:ignore <?php endif; ?>>
        <select id="<?php echo e($id); ?>" name="<?php echo e($name); ?>" dir=<?php echo e($dir); ?> title="<?php echo e($title); ?>"
            <?php echo e($attributes->class(['form-control ', 'is-invalid px-8' => $errors->has($name)])); ?>>
            <!--[if BLOCK]><![endif]--><?php if(!$NoOptions): ?>
                <option value=""><?php echo e(__("customTrans.$ChoseTitle")); ?> </option>
            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->


            <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $options; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option  value="<?php echo e($key); ?>" <?php if(old($name) ? old($name) == $key : ''): echo 'selected'; endif; ?>
                    id="<?php echo e($name); ?><?php echo e($key); ?>">
                    <?php echo e($value); ?> </option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
        </select>
        <small class="text-muted"><?php echo e($description_field); ?></small>
        <?php echo $__env->make('partials.general._show-error', ['field_name' => $name], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    </div>

</div>


<!--[if BLOCK]><![endif]--><?php if($jsSelect2): ?>
    <?php $__env->startPush('js'); ?>
        <script>
            $('.js-select2').select2({
                 placeholder: "اختر",
                allowClear: true,

            });

            $('.js-select2').on('change', function(event) {
                let modelName = $(this).attr('name');
                window.Livewire.find('<?php echo e($_instance->getId()); ?>').set(modelName, event.target.value);
            })
        </script>
    <?php $__env->stopPush(); ?>
<?php endif; ?><!--[if ENDBLOCK]><![endif]-->
<?php /**PATH C:\xampp\htdocs\project-v3-metronic-login-lara12\resources\views/components/select.blade.php ENDPATH**/ ?>