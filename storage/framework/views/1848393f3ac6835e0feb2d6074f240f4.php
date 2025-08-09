<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'type' => 'text',
    'name',
    'value' => '',
    'value1' => '',
    'value2' => '',
    'dataUrl' => '',
    'dir' => '',
    'label' => '',
    'placeholder' => '',
    'title' => '',
    'labelclass' => '',
    'value_title1' => '',
    'value_title2' => '',
    'divWidth' => 3,
    'labelname' => null,
    'divclass' => null,
    'style1'=>null,
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
    'type' => 'text',
    'name',
    'value' => '',
    'value1' => '',
    'value2' => '',
    'dataUrl' => '',
    'dir' => '',
    'label' => '',
    'placeholder' => '',
    'title' => '',
    'labelclass' => '',
    'value_title1' => '',
    'value_title2' => '',
    'divWidth' => 3,
    'labelname' => null,
    'divclass' => null,
    'style1'=>null,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>



<div class="<?php echo \Illuminate\Support\Arr::toCssClasses(["form-group mb-3 col-md-4 col-lg-$divWidth", $divclass]); ?>">

    <!--[if BLOCK]><![endif]--><?php if($label): ?>
        <label class="<?php echo \Illuminate\Support\Arr::toCssClasses(["col-form-label  $labelclass "]); ?>"><?php echo e($labelname ?? __("customTrans.$name")); ?></label>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->


    <div class="d-flex justify-content-center" style="<?php echo e($style1); ?>">

        <div>
            <input type="radio" id=<?php echo e($value1); ?> name="<?php echo e($name); ?>" value="<?php echo e($value1); ?>"
                <?php if(old($name) ? old($name) == $value1 : ''): echo 'checked'; endif; ?>
                <?php echo e($attributes->class(['form-check-input', 'is-invalid' => $errors->has($name)])); ?>>


            <label for=<?php echo e($value1); ?>

                class="form-label fw-normal mr-4"><?php echo e(__("customTrans.$value_title1")); ?></label>
            <?php echo $__env->make('partials.general._show-error', ['field_name' => $name], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        </div>
        <div class="mx-4 ">

            <input type="radio" id="id2" name="<?php echo e($name); ?>" value="<?php echo e($value2); ?>"
                <?php if($name ? old($name) == $value2 : ''): echo 'checked'; endif; ?>
                <?php echo e($attributes->class(['form-check-input  ', 'is-invalid' => $errors->has($name)])); ?>>
            <label for="id2" class="form-label fw-normal "><?php echo e(__("customTrans.$value_title2")); ?></label>
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\project-v3-metronic-login-lara12\resources\views/components/radio.blade.php ENDPATH**/ ?>