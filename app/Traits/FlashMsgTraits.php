<?php

namespace App\Traits;


trait FlashMsgTraits
{
 
    public static function created(string $msgType = 'success',string $msg = 'create' ): object
    {
        
      
        if ($msg == 'create') {
          
            return toastr()->progressBar(false)->timeOut(1000) 
            ->$msgType(__('customTrans.data_created_success'));
        }

         else if  ($msg == 'update') {
             
            return toastr()->progressBar(false)->timeOut(1000) 
            ->$msgType(__('customTrans.data_edited_success'));
        }

        else if ($msg == 'destroy') {
            return toastr()->progressBar(false)->timeOut(1000) 
            ->$msgType(__('customTrans.data_deleted_success'));
        }

       else {
            return toastr()->$msgType($msg);
        }
  
       
    }

}
