<div>

    <div class="tns tns-default">
        <!--begin::Slider-->
        <div data-tns="true" data-tns-loop="true" data-tns-swipe-angle="false" data-tns-speed="2000" data-tns-autoplay="true"
            data-tns-autoplay-timeout="18000" data-tns-controls="true" data-tns-nav="false" data-tns-items="1"
            data-tns-center="false" data-tns-dots="false" data-tns-prev-button="#kt_team_slider_prev1"
            data-tns-next-button="#kt_team_slider_next1">
            <!--begin::Item-->
            <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $this->cards; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $gallary_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="text-center px-5 pt-5 pt-lg-10 px-lg-10">
                <img src="<?php echo e(asset('website/' . $gallary_data->card_img)); ?>" class="card-rounded shadow mw-100"
                    alt="" />
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
            

        </div>
      
        <button class="btn btn-icon btn-active-color-primary" id="kt_team_slider_prev1">
            <!--begin::Svg Icon | path: icons/duotune/arrows/arr074.svg-->
            <span class="svg-icon svg-icon-3x">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                    fill="none">
                    <path
                        d="M11.2657 11.4343L15.45 7.25C15.8642 6.83579 15.8642 6.16421 15.45 5.75C15.0358 5.33579 14.3642 5.33579 13.95 5.75L8.40712 11.2929C8.01659 11.6834 8.01659 12.3166 8.40712 12.7071L13.95 18.25C14.3642 18.6642 15.0358 18.6642 15.45 18.25C15.8642 17.8358 15.8642 17.1642 15.45 16.75L11.2657 12.5657C10.9533 12.2533 10.9533 11.7467 11.2657 11.4343Z"
                        fill="black" />
                </svg>
            </span>
            
        </button>
        
        <button class="btn btn-icon btn-active-color-primary" id="kt_team_slider_next1">
            <!--begin::Svg Icon | path: icons/duotune/arrows/arr071.svg-->
            <span class="svg-icon svg-icon-3x">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                    fill="none">
                    <path
                        d="M12.6343 12.5657L8.45001 16.75C8.0358 17.1642 8.0358 17.8358 8.45001 18.25C8.86423 18.6642 9.5358 18.6642 9.95001 18.25L15.4929 12.7071C15.8834 12.3166 15.8834 11.6834 15.4929 11.2929L9.95001 5.75C9.5358 5.33579 8.86423 5.33579 8.45001 5.75C8.0358 6.16421 8.0358 6.83579 8.45001 7.25L12.6343 11.4343C12.9467 11.7467 12.9467 12.2533 12.6343 12.5657Z"
                        fill="black" />
                </svg>
            </span>
           
        </button>
      
    </div>


   
</div>
<?php /**PATH C:\xampp\htdocs\project-v3-metronic-login-lara12\resources\views/livewire/website/website-home-sections/cards.blade.php ENDPATH**/ ?>