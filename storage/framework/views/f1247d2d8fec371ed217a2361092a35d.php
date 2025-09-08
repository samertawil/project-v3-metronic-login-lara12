<div>

<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
'labelname'=>null,
'name'=>'',
'sortBy'=>'',
'sortdir'=>'',
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
'labelname'=>null,
'name'=>'',
'sortBy'=>'',
'sortdir'=>'',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>
 


<th  <?php echo e($attributes); ?> scope="col" ><span><?php echo e($labelname?? __("customTrans.$name")); ?></span>
   
    <!--[if BLOCK]><![endif]--><?php if($this->sortBy !==     $name   ): ?>
        <button class="btn text-primary "><i class="ti-exchange-vertical text-primary"></i>
        </button>
    <?php elseif($this->sortdir == 'ASC'): ?>
        <button class="btn text-primary "><i class="ti-arrow-up text-primary" style="font-size: 12px !important;"></i>
        </button>
         <?php else: ?>
         <button class="btn text-primary "><i class="ti-arrow-down text-primary " style="font-size: 12px !important;"></i>
         </button>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
    

</th>



</div>
 <?php /**PATH C:\xampp\htdocs\project-v3-metronic-login-lara12\resources\views/components/table-th.blade.php ENDPATH**/ ?>