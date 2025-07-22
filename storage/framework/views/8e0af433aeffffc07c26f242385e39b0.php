<div>

    <?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
        'idName' => '',
        'title' => '',
        'width' => 'lg',
        'modalType' => null,
        'footer' => null,
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
        'idName' => '',
        'title' => '',
        'width' => 'lg',
        'modalType' => null,
        'footer' => null,
    ]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>


    <div wire:ignore.self class="modal fade" id="<?php echo e($idName); ?>">
        <div class="modal-dialog modal-<?php echo e($width); ?> <?php echo e($modalType); ?> " role="document">
            <div class="modal-content modal-content-demo  ">
                <div class="modal-header">
                    <h6 class="modal-title text-dark"><?php echo e($title); ?></h6>
                    <button aria-label="Close" class="close"
                        data-dismiss="modal" type="button">x</button>
                </div>

                <div class="modal-body">
                    <?php echo e($slot); ?>

                </div>

                <!--[if BLOCK]><![endif]--><?php if(!$footer): ?>
                <div class="modal-footer ">
                    <button class="btn ripple btn-secondary" data-dismiss="modal"
                        type="button"><?php echo e(__('customTrans.close')); ?></button>
                    <?php echo e($ModalButton ?? ''); ?>


                </div>
            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
            </div>
        </div>
    </div>


    <?php $__env->startPush('js'); ?>
        <script>
            var modalId = $('.modal').attr('id');
            
            window.addEventListener('closeModel', event => {
                $(`#${modalId}`).modal('hide');
            })
        </script>
    <?php $__env->stopPush(); ?>

</div>






<?php /**PATH C:\xampp\htdocs\project-v3-metronic login-lara12\resources\views/components/modal.blade.php ENDPATH**/ ?>