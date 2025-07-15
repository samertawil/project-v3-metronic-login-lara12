<div>

 
    
        <div class="form-group row align-items-center fv-plugins-icon-container has-danger">
            <label class="col-xl-3 col-lg-3 col-form-label"><?php echo e(__('customTrans.address_type')); ?></label>
            <div class="col-lg-9 col-xl-9">
                <div class="checkbox-inline ">
                    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $statuses->where('p_id_sub', config('myConstants.addressType')); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $address_type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <label class="radio" style="margin:0px 5px;">
                            <input name="address_type" wire:model='address_type' type="radio"  style="margin:0px 5px;"
                                value=" <?php echo e($address_type->id); ?>" class="is-invalid">
                            <span class="mx-2"></span>
                            <?php echo e($address_type->status_name); ?>

                        </label>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->


                </div>
                
            </div>
        </div>

        <div class=" form-group row fv-plugins-icon-container has-success">
            <label class="col-xl-3 col-lg-3 col-form-label"><?php echo e(__('customTrans.region_name')); ?></label>
            <div class="col-lg-9 col-xl-9">
                <select name="region_id" wire:model.live='region_id'
                    class="form-control form-control-lg form-control-solid">
                    <option value="" hidden><?php echo e(__('customTrans.choose')); ?></option>
                    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $regions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $region): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($region->region_id); ?>">
                            <?php echo e($region->region_name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                </select>
                <div class="fv-plugins-message-container"></div>
            </div>
        </div>


        <div class=" form-group row fv-plugins-icon-container has-success">
            <label class="col-xl-3 col-lg-3 col-form-label"><?php echo e(__('customTrans.city_name')); ?></label>
            <div class="col-lg-9 col-xl-9">
                <select name="city_id" wire:model.live='city_id'
                    class="form-control form-control-lg form-control-solid">
                    <option value="" hidden><?php echo e(__('customTrans.choose')); ?></option>
                    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $cities->where('region_id', $region_id); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $citiy): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($citiy->id); ?>">
                            <?php echo e($citiy->city_name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                </select>
                <div class="fv-plugins-message-container"></div>
            </div>
        </div>

        <div class=" form-group row fv-plugins-icon-container has-success">
            <label class="col-xl-3 col-lg-3 col-form-label"><?php echo e(__('customTrans.neighbourhood_name')); ?></label>
            <div class="col-lg-9 col-xl-9">
                <select name="neighbourhood_id" wire:model.live='neighbourhood_id'
                    class="form-control form-control-lg form-control-solid">
                    <option value="" hidden><?php echo e(__('customTrans.choose')); ?></option>
                    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $neighbourhoods->where('city_id', $city_id); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $neighbourhood): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($neighbourhood->id); ?>">
                            <?php echo e($neighbourhood->neighbourhood_name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                </select>
                <div class="fv-plugins-message-container"></div>
            </div>
        </div>

        <div class=" form-group row fv-plugins-icon-container has-success">
            <label class="col-xl-3 col-lg-3 col-form-label"><?php echo e(__('customTrans.location_name')); ?></label>
            <div class="col-lg-9 col-xl-9">
                <select name="location_id" wire:model='location_id'
                    class="form-control form-control-lg form-control-solid">
                    <option value="" hidden><?php echo e(__('customTrans.choose')); ?></option>
                    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $locations->where('neighbourhood_id', $neighbourhood_id); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $location): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($location->id); ?>">
                            <?php echo e($location->location_name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                </select>
                <div class="fv-plugins-message-container"></div>
            </div>
        </div>
 <button type="button" wire:click='consider'>consider</button>
</div>
<?php /**PATH C:\xampp\htdocs\project-v3-metronic login-lara12\resources\views/livewire/address2/create.blade.php ENDPATH**/ ?>