<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'CurrentPageTitle' => '',
    'button' => '',
    'type' => '',
    'label' => __('customTrans.save'),
    'divlclass' => '',
    'route' => null,
    'iclass' => '',
    'crumb'=>null,
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
    'CurrentPageTitle' => '',
    'button' => '',
    'type' => '',
    'label' => __('customTrans.save'),
    'divlclass' => '',
    'route' => null,
    'iclass' => '',
    'crumb'=>null,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>



<div class="w-100 d-flex d-block align-items-center justify-content-between my-2 page-header-breadcrumb">
    
    
  
    <ul class="breadcrumb breadcrumb-transparent breadcrumb-dash font-weight-bold p-0 my-2 font-size-sm">
        <li class="breadcrumb-item"><a href="<?php echo e(route('dashboard.home')); ?>" class="text-muted"><?php echo e(__('customTrans.home page')); ?> </a></li>
        <?php echo e($slot ?? ''); ?>

    </ul>
       


    <!--[if BLOCK]><![endif]--><?php if($button): ?>
        <div class="<?php echo \Illuminate\Support\Arr::toCssClasses(['text-left ml-1 pointer px-4', $divlclass , ]); ?>">

            <a <?php if($route): ?> href=<?php echo e($route); ?> <?php endif; ?>
                <?php echo e($attributes->class(['btn btn-md btn-primary text-light px-5 '])); ?>><?php echo e($label); ?>


            </a>

        </div>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

</div>


<?php /**PATH C:\xampp\htdocs\project-v3-metronic login-lara12\resources\views/components/breadcrumb.blade.php ENDPATH**/ ?>