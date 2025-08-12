<div id="kt_quick_user" class="offcanvas offcanvas-right p-10">

    <div class="offcanvas-header d-flex align-items-center justify-content-between pb-5">
        <h3 class="font-weight-bold m-0">
            User Profile
            <small class="text-muted font-size-sm ml-2">12 messages </small>
        </h3>
        <a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary" id="kt_quick_user_close">
            <i class="ki ki-close icon-xs text-muted"></i>
        </a>
    </div>

    <div class="offcanvas-content pr-5 mr-n5">

        <div class="d-flex align-items-center mt-5">
            <div class="symbol symbol-100">
                <div class="col-lg-9 col-xl-9">
                    <div class="image-input image-input-outline" id="kt_contact_add_avatar">

                        <!--[if BLOCK]><![endif]--><?php if($this->userData): ?>
                        <img src="<?php echo e(asset('storage/' . $userData->profile_image)); ?>" width="100">

                        <?php else: ?>
                            <div class="image-input-wrapper"
                                style="background-image: url(template-assets/metronic7/media/users/blank.png)">
                            </div>
                        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

                                          
                        <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                            data-action="change" data-toggle="tooltip" title=""
                            data-original-title="Change avatar">
                            <i class="fa fa-pen icon-sm text-muted"></i>

                            <input type="file" wire:model="profile_image" accept="image/*">
                            
                        </label>

                        <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['profile_image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="error text-danger"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->


                        <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                            data-action="cancel" data-toggle="tooltip" title=""
                            data-original-title="Cancel avatar">
                            <i class="ki ki-bold-close icon-xs text-muted"></i>
                        </span>

                        
                    </div>
                </div>

            </div>

            <div class="d-flex flex-column">
                <a href="#" class="font-weight-bold font-size-h5 text-dark-75 text-hover-primary">
                    <?php echo e(Auth::user()->name ?? 'not login'); ?>

                </a>
                <div class="text-muted mt-1">
                    Application Developer
                </div>
                <div class="navi mt-2">
                    <a href="#" class="navi-item">
                        <span class="navi-link p-0 pb-2">
                            <span class="navi-icon mr-1">
                                <span
                                    class="svg-icon svg-icon-lg svg-icon-primary"><!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Mail-notification.svg--><svg
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path
                                                d="M21,12.0829584 C20.6747915,12.0283988 20.3407122,12 20,12 C16.6862915,12 14,14.6862915 14,18 C14,18.3407122 14.0283988,18.6747915 14.0829584,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,8 C3,6.8954305 3.8954305,6 5,6 L19,6 C20.1045695,6 21,6.8954305 21,8 L21,12.0829584 Z M18.1444251,7.83964668 L12,11.1481833 L5.85557487,7.83964668 C5.4908718,7.6432681 5.03602525,7.77972206 4.83964668,8.14442513 C4.6432681,8.5091282 4.77972206,8.96397475 5.14442513,9.16035332 L11.6444251,12.6603533 C11.8664074,12.7798822 12.1335926,12.7798822 12.3555749,12.6603533 L18.8555749,9.16035332 C19.2202779,8.96397475 19.3567319,8.5091282 19.1603533,8.14442513 C18.9639747,7.77972206 18.5091282,7.6432681 18.1444251,7.83964668 Z"
                                                fill="#000000" />
                                            <circle fill="#000000" opacity="0.3" cx="19.5" cy="17.5"
                                                r="2.5" />
                                        </g>
                                    </svg><!--end::Svg Icon--></span> </span>
                            <span
                                class="navi-text text-muted text-hover-primary  "><?php echo e(Auth::user()->email ?? 'mail.com'); ?></span>
                        </span>
                    </a>
                    <?php echo $__env->make('partials.general._logout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                </div>
            </div>
        </div>



        <div class="separator separator-dashed mt-8 mb-5"></div>


        <?php echo $__env->make('partials.metronic7._user-profile-tools', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>


    </div>

</div>
<?php /**PATH C:\xampp\htdocs\project-v3-metronic-login-lara12\resources\views/partials/metronic7/_user-profile.blade.php ENDPATH**/ ?>