

 <div class="card card-custom gutter-b">

     <?php $__env->slot('crumb', null, []); ?> 

    <?php if (isset($component)) { $__componentOriginale19f62b34dfe0bfdf95075badcb45bc2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale19f62b34dfe0bfdf95075badcb45bc2 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.breadcrumb','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('breadcrumb'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale19f62b34dfe0bfdf95075badcb45bc2)): ?>
<?php $attributes = $__attributesOriginale19f62b34dfe0bfdf95075badcb45bc2; ?>
<?php unset($__attributesOriginale19f62b34dfe0bfdf95075badcb45bc2); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale19f62b34dfe0bfdf95075badcb45bc2)): ?>
<?php $component = $__componentOriginale19f62b34dfe0bfdf95075badcb45bc2; ?>
<?php unset($__componentOriginale19f62b34dfe0bfdf95075badcb45bc2); ?>
<?php endif; ?>

 <?php $__env->endSlot(); ?>


     <div class="card-body p-0">

         <div class="row justify-content-center my-10 px-8 my-lg-15 px-lg-10">
             <div class="col-xl-12 col-xxl-7">

                 <div class="pb-5">
                     <h3 class="mb-10 font-weight-bold text-dark"><?php echo e(__('customTrans.Personal Information')); ?>:
                     </h3>
                     <div class="row">
                         <div class="col-xl-12">
                             <div class="form-group row">
                                 <label class="col-xl-3 col-lg-3 col-form-label"><?php echo e(__('customTrans.Avatar')); ?></label>
                                 <div class="col-lg-9 col-xl-9">
                                     <div class="image-input image-input-outline" id="kt_contact_add_avatar">

                                         <!--[if BLOCK]><![endif]--><?php if($profile_image): ?>
                                             <img src="<?php echo e($profile_image->temporaryUrl()); ?>"
                                                 class="image-input-wrapper  <?php $__errorArgs = ['profile_image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> form-control
                                        is-invalid
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                             <?php echo $__env->make('layouts._show-error', [
                                                 'field_name' => 'profile_image',
                                             ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                                         <?php else: ?>
                                             <div class="image-input-wrapper"
                                                 style="background-image: url(template-assets/metronic7/media/users/blank.png)">
                                             </div>
                                         <?php endif; ?><!--[if ENDBLOCK]><![endif]-->


                                         <label
                                             class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                             data-action="change" data-toggle="tooltip" title=""
                                             data-original-title="Change avatar">
                                             <i class="fa fa-pen icon-sm text-muted"></i>
                                             <input type="file" name="profile_image" wire:model='profile_image'
                                                 accept=".png, .jpg, .jpeg">
                                             <input type="hidden" name="profile_avatar_remove">
                                         </label>

                                         <span
                                             class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                             data-action="cancel" data-toggle="tooltip" title=""
                                             data-original-title="Cancel avatar">
                                             <i class="ki ki-bold-close icon-xs text-muted"></i>
                                         </span>
                                     </div>
                                 </div>
                             </div>


                             <div class=" form-group row fv-plugins-icon-container has-success">
                                 <label
                                     class="col-xl-3 col-lg-3 col-form-label"><?php echo e(__('customTrans.contact_type')); ?><span
                                         class="text-danger"> &nbsp; *</span></label>
                                 <div class="col-lg-9 col-xl-9">
                                     <select name="contact_type" wire:model.live='contact_type'
                                         class="form-control form-control-lg form-control-solid" id="id1">
                                         <option value="" hidden><?php echo e(__('customTrans.choose')); ?></option>
                                         <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $statuses->where('p_id_sub', 16); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $status): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                             <option value="<?php echo e($status->id); ?>" <?php if($status->id == 17): echo 'selected'; endif; ?>>
                                                 <?php echo e($status->status_name); ?></option>
                                         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                                     </select>
                                     <div class="fv-plugins-message-container"></div>
                                 </div>
                             </div>


                             <div class=" form-group row fv-plugins-icon-container has-success">
                                 <label
                                     class="col-xl-3 col-lg-3 col-form-label"><?php echo e(__('customTrans.identity_number')); ?></label>
                                 <div class="col-lg-9 col-xl-9">
                                     <input class="form-control form-control-lg form-control-solid"
                                         name="identity_number" wire:model='identity_number' type="text">
                                     <div class="fv-plugins-message-container"></div>
                                 </div>
                             </div>
                             <!--[if BLOCK]><![endif]--><?php if($personalSide == true): ?>
                                 <div class="form-group row fv-plugins-icon-container has-success">
                                     <label
                                         class="col-xl-3 col-lg-3 col-form-label"><?php echo e(__('customTrans.first_name')); ?><span
                                             class="text-danger"> &nbsp; *</span></label>
                                     <div class="col-lg-9 col-xl-9">
                                         <input class="form-control form-control-lg form-control-solid" name="fname"
                                             wire:model='fname' type="text" id=fname>
                                         <div class="fv-plugins-message-container"></div>
                                     </div>
                                 </div>
                                 <div class="form-group row fv-plugins-icon-container has-success">
                                     <label
                                         class="col-xl-3 col-lg-3 col-form-label"><?php echo e(__('customTrans.sec_name')); ?></label>
                                     <div class="col-lg-9 col-xl-9">
                                         <input class="form-control form-control-lg form-control-solid" name="sname"
                                             wire:model='sname' type="text">
                                         <div class="fv-plugins-message-container"></div>
                                     </div>
                                 </div>
                                 <div class="form-group row fv-plugins-icon-container has-success">
                                     <label
                                         class="col-xl-3 col-lg-3 col-form-label"><?php echo e(__('customTrans.thr_name')); ?></label>
                                     <div class="col-lg-9 col-xl-9">
                                         <input class="form-control form-control-lg form-control-solid" name="tname"
                                             wire:model='tname' type="text">
                                         <div class="fv-plugins-message-container"></div>
                                     </div>
                                 </div>
                                 <div class="form-group row fv-plugins-icon-container has-success">
                                     <label
                                         class="col-xl-3 col-lg-3 col-form-label"><?php echo e(__('customTrans.family_name')); ?><span
                                             class="text-danger"> &nbsp; *</span></label>

                                     <div class="col-lg-9 col-xl-9">
                                         <input class="form-control form-control-lg form-control-solid" name="lname"
                                             wire:model='lname' type="text" id='lname'>
                                         <div class="fv-plugins-message-container"></div>
                                     </div>
                                 </div>
                             <?php else: ?>
                                 <div class=" form-group row fv-plugins-icon-container has-success">
                                     <label for="full_name"
                                         class="col-xl-3 col-lg-3 col-form-label"><?php echo e(__('customTrans.contact_full_name')); ?></label>
                                     <div class="col-lg-9 col-xl-9">
                                         <input class="form-control form-control-lg form-control-solid" id="full_name"
                                             name="full_name" wire:model='full_name' type="text">
                                         <div class="fv-plugins-message-container"></div>
                                     </div>
                                 </div>
                             <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

                             
                             <div class="form-group row fv-plugins-icon-container has-success">
                                 <label
                                     class="col-xl-3 col-lg-3 col-form-label"><?php echo e(__('customTrans.phone_primary')); ?><span
                                         class="text-danger"> &nbsp; *</span></label>
                                 <div class="col-lg-9 col-xl-9">
                                     <div class="input-group input-group-lg input-group-solid">
                                         <div class="input-group-prepend"><span class="input-group-text"><i
                                                     class="la la-phone"></i></span></div>
                                         <input type="text" class="form-control form-control-lg form-control-solid"
                                             name="phone1" wire:model="phone_primary"
                                             wire:change="chkExists($event.target.value,'phone_primary')"
                                             placeholder="<?php echo e(__('customTrans.phone')); ?>">
                                     </div>

                                     <div class="fv-plugins-message-container"></div>
                                 </div>
                             </div>
                             <div class="form-group row fv-plugins-icon-container has-success">
                                 <label
                                     class="col-xl-3 col-lg-3 col-form-label"><?php echo e(__('customTrans.phone_secondary')); ?></label>
                                 <div class="col-lg-9 col-xl-9">
                                     <div class="input-group input-group-lg input-group-solid">
                                         <div class="input-group-prepend"><span class="input-group-text"><i
                                                     class="la la-phone"></i></span></div>
                                         <input type="text" class="form-control form-control-lg form-control-solid"
                                             name="phone_secondary" wire:model='phone_secondary'
                                             placeholder="<?php echo e(__('customTrans.phone')); ?>">
                                     </div>

                                     <div class="fv-plugins-message-container"></div>
                                 </div>
                             </div>
                             <div class="form-group row fv-plugins-icon-container has-success">
                                 <label class="col-xl-3 col-lg-3 col-form-label"><?php echo e(__('customTrans.email')); ?></label>
                                 <div class="col-lg-9 col-xl-9">
                                     <div class="input-group input-group-lg input-group-solid">
                                         <div class="input-group-prepend"><span class="input-group-text"><i
                                                     class="la la-at"></i></span></div>
                                         <input type="text" class="form-control form-control-lg form-control-solid"
                                             name="email" wire:model='email'
                                             placeholder="<?php echo e(__('customTrans.email')); ?>">
                                     </div>
                                     <div class="fv-plugins-message-container"></div>
                                 </div>
                             </div>
                             <div class="form-group row fv-plugins-icon-container has-success">
                                 <label
                                     class="col-xl-3 col-lg-3 col-form-label"><?php echo e(__('customTrans.web site')); ?></label>
                                 <div class="col-lg-9 col-xl-9">
                                     <div class="input-group input-group-lg input-group-solid">
                                         <input type="text" wire:model='website'
                                             class="form-control form-control-lg form-control-solid"
                                             name="companywebsite" placeholder="<?php echo e(__('customTrans.web site')); ?>">
                                         <div class="input-group-append"><span class="input-group-text">.com</span>
                                         </div>
                                     </div>
                                     <div class="fv-plugins-message-container"></div>
                                 </div>
                             </div>
                             <div class="form-group row align-items-center fv-plugins-icon-container has-danger">
                                 <label
                                     class="col-xl-3 col-lg-3 col-form-label"><?php echo e(__('customTrans.connect_ways')); ?><span
                                         class="text-danger"> &nbsp; *</span></label>
                                 <div class="col-lg-9 col-xl-6">
                                     <div class="checkbox-inline">
                                         <label class="checkbox" for="checkemail">
                                             <input name="connect_ways" id="checkemail" wire:model='connect_ways'
                                                 type="checkbox" class="is-invalid" value="Email">
                                             <span></span>
                                             Email
                                         </label>
                                         <label class="checkbox" for="checksms">
                                             <input name="connect_ways" id="checksms" wire:model='connect_ways'
                                                 type="checkbox" value="SMS">
                                             <span></span>
                                             SMS
                                         </label>
                                         <label class="checkbox" for="checkphone">
                                             <input name="connect_ways" id="checkphone" wire:model='connect_ways'
                                                 type="checkbox" value="Phone">
                                             <span></span>
                                             Phone
                                         </label>
                                     </div>
                                     <div class="fv-plugins-message-container">
                                         <div data-field="communication" data-validator="choice" class="text-muted"
                                             style="font-size: 8px;">
                                             <?php echo e(__('customTrans.Please select at least 1 option')); ?></div>
                                     </div>
                                 </div>
                             </div>



                         </div>
                     </div>
                 </div>

                 <div class="pb-5">


                     <!--[if BLOCK]><![endif]--><?php if($settings['country'] == 'palestine'): ?>
                         


                         <div>



                             <div class="form-group row align-items-center fv-plugins-icon-container has-danger">
                                 <label
                                     class="col-xl-3 col-lg-3 col-form-label"><?php echo e(__('customTrans.addressType')); ?></label>
                                 <div class="col-lg-9 col-xl-9">
                                     <div class="checkbox-inline ">
                                         <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $statuses->where('p_id_sub', config('myConstants.addressType')); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $address_type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                             <label class="radio" style="margin:0px 5px;">
                                                 <input name="address_type" wire:model='address_type' type="radio"
                                                     style="margin:0px 5px;" value=" <?php echo e($address_type->id); ?>"
                                                     class="is-invalid">
                                                 <span class="mx-2"></span>
                                                 <?php echo e($address_type->status_name); ?>

                                             </label>
                                         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->


                                     </div>

                                 </div>
                             </div>

                             <div class=" form-group row fv-plugins-icon-container has-success">
                                 <label
                                     class="col-xl-3 col-lg-3 col-form-label"><?php echo e(__('customTrans.region_name')); ?></label>
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
                                 <label
                                     class="col-xl-3 col-lg-3 col-form-label"><?php echo e(__('customTrans.city_name')); ?></label>
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
                                 <label
                                     class="col-xl-3 col-lg-3 col-form-label"><?php echo e(__('customTrans.neighbourhood_name')); ?></label>
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
                                 <label
                                     class="col-xl-3 col-lg-3 col-form-label"><?php echo e(__('customTrans.location_name')); ?></label>
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

                         </div>
                     <?php else: ?>
                         <div>
                             <h3 class="mb-10 font-weight-bold text-dark">Setup Your Current Location</h3>
                             <div class="form-group fv-plugins-icon-container">
                                 <label>Address Line 1</label>
                                 <input type="text" class="form-control form-control-lg form-control-solid"
                                     name="address1" placeholder="Address Line 1" value="Address Line 1">
                                 <span class="form-text text-muted">Please enter your Address.</span>
                                 <div class="fv-plugins-message-container"></div>
                             </div>
                             <div class="form-group">
                                 <label>Address Line 2</label>
                                 <input type="text" class="form-control form-control-lg form-control-solid"
                                     name="address2" placeholder="Address Line 2" value="Address Line 2">
                                 <span class="form-text text-muted">Please enter your Address.</span>
                             </div>


                         </div>
                     <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                 </div>

                 <div class="d-flex justify-content-end border-top pt-10 ">

                     <button type="button" class="btn btn-success font-weight-bold text-uppercase px-9 py-4"
                         wire:click='store' wire:loading.remove>
                         حفظ
                     </button>
                     <div wire:loading>
                         <img src="<?php echo e(asset('template-assets/valex/img/loader.svg')); ?>" alt="Loader">
                     </div>

                 </div>
                 <?php echo $__env->make('layouts._show_errors_all', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>;
             </div>




         </div>

     </div>




     <?php $__env->startPush('js'); ?>
         <script>
             window.addEventListener('alert', (event) => {
                 let data = event.detail;

                 Swal.fire({
                     title: data.title,
                     text: data.text,
                     icon: data.type,
                     confirmButtonText: data.confirmButtonText
                 })
             });
         </script>
     <?php $__env->stopPush(); ?>
 </div>
<?php /**PATH C:\xampp\htdocs\project-v3-metronic-login-lara12\resources\views/livewire/my-app/contact/contact-create.blade.php ENDPATH**/ ?>