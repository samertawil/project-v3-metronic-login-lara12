<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'name' => '',
    'type' => 'checkbox',
    'id' =>$name,
    'labelclass' => '',
    'description_field'=>'',
    'label'=>'',
    'labelname'=>'',
    'divMargin'=>'5',
    'divclass'=>'',
    
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
    'name' => '',
    'type' => 'checkbox',
    'id' =>$name,
    'labelclass' => '',
    'description_field'=>'',
    'label'=>'',
    'labelname'=>'',
    'divMargin'=>'5',
    'divclass'=>'',
    
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>
 
 
 
<div class="row mb-1  ">

    <div class="<?php echo \Illuminate\Support\Arr::toCssClasses(['col-md-6',"m-$divMargin",$divclass]); ?>">
 
        <div class="form-check d-flex align-items-center ">
            
            <input   name="<?php echo e($name); ?>" type="checkbox" id="<?php echo e($id); ?>" <?php echo e(old($name) ? 'checked' : ''); ?>

                <?php echo e($attributes->class(['form-check-input ' , 'is-invalid' => $errors->has('$name')]  )); ?> style=' 
              
                height: 18px;
                width: 18px; '>
            <small class="text-muted"><?php echo e($description_field); ?></small>

            


            <!--[if BLOCK]><![endif]--><?php if($label): ?>
                <label for="<?php echo e($id); ?>"
                    class="<?php echo \Illuminate\Support\Arr::toCssClasses(["form-check-label  mx-2" , $labelclass ]); ?>"><?php echo e($labelname ? $labelname : __("customTrans.$name")); ?></label>
            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->



        </div>
    </div>
</div>


 <?php /**PATH C:\xampp\htdocs\project-v3-metronic login-lara12\resources\views/components/checkbox.blade.php ENDPATH**/ ?>