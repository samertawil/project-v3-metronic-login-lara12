<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'warning' => null,
    'edit' => null,
    'del' => null,
    'x1' => null,
    'cancel' => null,
    'make' => null,
    'preview' => null,
    'route' => '#',
    'plus' => null,
    'mins' => null,
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
    'warning' => null,
    'edit' => null,
    'del' => null,
    'x1' => null,
    'cancel' => null,
    'make' => null,
    'preview' => null,
    'route' => '#',
    'plus' => null,
    'mins' => null,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<div wire:loading.class="disabledTagA">

    <!--[if BLOCK]><![endif]--><?php if($warning): ?>
    
        <a href="#" class="btn btn-sm btn-warning " <?php echo e($attributes); ?>>

            <i class="fa fa-key o btn-warning" aria-hidden="true"></i>

        </a>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

    <!--[if BLOCK]><![endif]--><?php if($edit): ?>
        <a href=<?php echo e($route); ?> class="<?php echo \Illuminate\Support\Arr::toCssClasses(['btn btn-lg text-info']); ?>" <?php echo e($attributes); ?> title="<?php echo e(__('customTrans.edit')); ?>">

            <i class="ti-pencil-alt text-primary"></i>

        </a>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

    <!--[if BLOCK]><![endif]--><?php if($del): ?>
        <a href=<?php echo e($route); ?> class="btn btn-lg text-danger " title="<?php echo e(__('customTrans.delete')); ?>"
                wire:confirm= "<?php echo e(__("customTrans.are you sure")); ?>"
            <?php echo e($attributes); ?>>

            <i class="ti-trash text-danger"></i>

        </a>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->



    <!--[if BLOCK]><![endif]--><?php if($cancel): ?>
    
        <a href="#" class="btn btn-lg text-warning" <?php echo e($attributes); ?>>
            <i class="ti-back-right text-warning"></i>

        </a>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

    <!--[if BLOCK]><![endif]--><?php if($make): ?>
        <a href="#" class="btn btn-lg text-success" style="vertical-align:middle  !impoartant;"
            <?php echo e($attributes); ?>>

            <i class="ti-save text-success"></i>
        </a>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->



    <!--[if BLOCK]><![endif]--><?php if($preview): ?>
        <a href="#" class="btn btn-lg text-primary "<?php echo e($attributes); ?> title="<?php echo e(__('customTrans.preview')); ?>">

            <i class="ti-eye text-primary"></i>

        </a>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

    
    <!--[if BLOCK]><![endif]--><?php if($plus): ?>
        <a href="#" class="<?php echo \Illuminate\Support\Arr::toCssClasses(['btn btn-lg text-primary  px-1 ']); ?>" <?php echo e($attributes); ?>>

            <i class=" icon-xl fas fa-plus-square text-primary"></i>

        </a>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->


    <!--[if BLOCK]><![endif]--><?php if($mins): ?>
        <a href="#" class="btn btn-lg text-danger " <?php echo e($attributes); ?>>

            <i class="icon-xl far fa-minus-square text-danger  "></i>

        </a>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

</div>



<?php /**PATH C:\xampp\htdocs\project-v3-metronic-login-lara12\resources\views/components/actions.blade.php ENDPATH**/ ?>