        <div class="d-flex flex-column flex-root">

            <div class="login login-4 login-signin-on d-flex flex-row-fluid" id="kt_login">
                <div class="d-flex flex-center flex-row-fluid bgi-size-cover bgi-position-top bgi-no-repeat"
                    style="background-image: url('<?php echo e(asset('template-assets/metronic7/media/bg/bg-3.jpg')); ?>');">

                    <div class="login-form text-center p-7 position-relative overflow-hidden">

                        <div class="d-flex flex-center mb-10">
                            <a>

                                <img src="<?php echo e(asset('Users_icon.png')); ?>" class="max-h-150px" alt="" />
                            </a>
                        </div>

                        <div class="login-signin ">
                            <div class="mb-10">
                                <h1><?php echo e(__('customTrans.login_system')); ?></h1>
                                <div class="text-muted font-weight-bold">
                                    <?php echo e(__('customTrans.Enter your details to login to your account')); ?></div>
                            </div>
                            <form wire:submit="authenticate" class="form">
                                <div class="form-group mb-5 ">
                                    <input
                                        class="form-control h-auto form-control-solid py-4 m-auto  w-75 w-lg-100 text-center <?php $__errorArgs = ['user_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid
                                        
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                        type="text" placeholder="<?php echo e(__('customTrans.user_name')); ?>"
                                        wire:model="user_name" id="user_name" name="user_name" dir="ltr"
                                        autofocus />
                                    <?php echo $__env->make('layouts._show-error', ['field_name' => 'user_name'], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                                </div>
                                <div class="form-group mb-5"
                                    style="position: relative; max-width: 600px; margin: auto;">
                                    <input wire:model.live="password" name="password" dir="ltr" id="password"
                                        class="form-control h-auto form-control-solid py-4 w-75 w-lg-100 text-center <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                        type="password" placeholder="<?php echo e(__('customTrans.password')); ?>"
                                        autocomplete="new-password" />

                                    <span toggle="#password" class="fa fa-fw fa-eye field-icon toggle-password"
                                        style="position: absolute; top: 50%; right: 15px; transform: translateY(-50%); cursor: pointer;"></span>
                                    <?php echo $__env->make('layouts._show-error', ['field_name' => 'password'], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                                </div>
                                <div
                                    class="form-group d-flex flex-wrap justify-content-between align-items-center m-auto w-75 w-lg-100">
                                    <div class="checkbox-inline">
                                        <label class="checkbox m-0 text-muted">
                                            <input wire:model='remember' name="remember" type="checkbox" />
                                            <span></span>
                                            <?php echo e(__('customTrans.remember')); ?>

                                        </label>
                                    </div>
                                    <a href="<?php echo e(route('login.forgetpassword')); ?>"
                                        class="text-muted text-hover-primary"><?php echo e(__('customTrans.Forgot Your Password')); ?></a>
                                </div>


                                <button class="btn btn-primary font-weight-bold  my-5  w-75"
                                    <?php if($password == ''): echo 'disabled'; endif; ?> wire:loading.remove
                                    wire:target='authenticate'><?php echo e(__('customTrans.Login')); ?></button>



                            </form>
                            <div class="mt-3">
                                <span class="opacity-70 mr-4">
                                    <?php echo e(__('customTrans.dont have account')); ?>

                                </span>
                                <a href="<?php echo e(route('register')); ?>" id="kt_login_signup"
                                    class="text-muted text-hover-primary font-weight-bold"><?php echo e(__('customTrans.register_new_account')); ?></a>
                            </div>

                            <div wire:loading wire:target='authenticate'>

                                <i class="fa fa-spinner fa-spin fa-3x fa-fw"></i>
                                <span class="sr-only">Loading...</span>
                            </div>

                            <div class="mt-5">
                                <a href="<?php echo e(route('appsetting.support.create')); ?>"
                                    class="text-muted text-hover-primary"><?php echo e(__('customTrans.technical support')); ?></a>
                            </div>

                        </div>
                        <div class="mt-20">
                            <?php echo $__env->make('partials.general._lang', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                        </div>

                    </div>

                </div>

            </div>

        </div>


        <script>
            var KTAppSettings = {
                "breakpoints": {
                    "sm": 576,
                    "md": 768,
                    "lg": 992,
                    "xl": 1200,
                    "xxl": 1200
                },
                "colors": {
                    "theme": {
                        "base": {
                            "white": "#ffffff",
                            "primary": "#6993FF",
                            "secondary": "#E5EAEE",
                            "success": "#1BC5BD",
                            "info": "#8950FC",
                            "warning": "#FFA800",
                            "danger": "#F64E60",
                            "light": "#F3F6F9",
                            "dark": "#212121"
                        },
                        "light": {
                            "white": "#ffffff",
                            "primary": "#E1E9FF",
                            "secondary": "#ECF0F3",
                            "success": "#C9F7F5",
                            "info": "#EEE5FF",
                            "warning": "#FFF4DE",
                            "danger": "#FFE2E5",
                            "light": "#F3F6F9",
                            "dark": "#D6D6E0"
                        },
                        "inverse": {
                            "white": "#ffffff",
                            "primary": "#ffffff",
                            "secondary": "#212121",
                            "success": "#ffffff",
                            "info": "#ffffff",
                            "warning": "#ffffff",
                            "danger": "#ffffff",
                            "light": "#464E5F",
                            "dark": "#ffffff"
                        }
                    },
                    "gray": {
                        "gray-100": "#F3F6F9",
                        "gray-200": "#ECF0F3",
                        "gray-300": "#E5EAEE",
                        "gray-400": "#D6D6E0",
                        "gray-500": "#B5B5C3",
                        "gray-600": "#80808F",
                        "gray-700": "#464E5F",
                        "gray-800": "#1B283F",
                        "gray-900": "#212121"
                    }
                },
                "font-family": "Poppins"
            };
        </script>
<?php /**PATH C:\xampp\htdocs\project-v3-metronic-login-lara12\resources\views/livewire/login/login.blade.php ENDPATH**/ ?>