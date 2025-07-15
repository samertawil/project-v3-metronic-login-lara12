
<div>

    <?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
        'route' => '#',
        'label' => '',
        'divlclass'=>'',
        'name'=>'',
        'iclass'=>'',
         'text_dir'=>'text-right',
        'default_class'=>'btn btn-sm btn-info'
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
        'route' => '#',
        'label' => '',
        'divlclass'=>'',
        'name'=>'',
        'iclass'=>'',
         'text_dir'=>'text-right',
        'default_class'=>'btn btn-sm btn-info'
    ]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

         

<div class="<?php echo \Illuminate\Support\Arr::toCssClasses([' my-4 ', $divlclass,$text_dir]); ?>">

    <a  href=<?php echo e($route); ?>

        <?php echo e($attributes->class([$default_class,
             ])); ?>  ><?php echo e($name); ?>

             <?php if($iclass): ?>
              <i class="las la-trash"></i>
              <?php endif; ?>
    </a>

</div>
    
</div>


<?php /**PATH C:\xampp\htdocs\project-v3-metronic login-lara12\resources\views/components/tag-a.blade.php ENDPATH**/ ?>