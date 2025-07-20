<?php

namespace App\Livewire\Dashboard\StatusModule;


use App\Models\Status;
use Livewire\Component;
use App\Models\SettingSystem;
 use Livewire\Attributes\Validate;
use App\Traits\FlashMsgTraits;
use Livewire\Attributes\Computed;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use App\Services\CacheSystemSettingServices;

class SystemClass extends Component
{
 
    public $description='';
    #[Validate(['required','unique:setting_systems,system_name'])]
    public $system_name;

    public $editId=null;
    public $data;

    public function systemStore()
    {

        $this->validate();

        SettingSystem::create([
            'system_name' => $this->system_name,
            'description' => $this->description,
        ]);


        FlashMsgTraits::created(); 
        $this->dispatch('refresh-system');
        $this->reset();
    }

    public function edit($id) {
       $this->editId=$id;
       $this->data=SettingSystem::findOrfail($id);

        $this->system_name=  $this->data->system_name ;
        $this->description=  $this->data->description ;
    }

    public function update() {
        
        $this->data->update([
            'system_name'=>  $this->system_name,
            'description'=>  $this->description ,
        ]);
        
        $this->cancelEdit();

        $this->dispatch('refresh-system');
        
     }

     public function destroy($id){

        DB::beginTransaction();

        try {
            $data=  Status::where('used_in_system_id',$id)->get();

        foreach ( $data as  $value) {
            $value->update([
                'used_in_system_id'=>null,
            ]);
        }
    
         SettingSystem::destroy($id);

         $this->dispatch('refresh-system');

         DB::commit();

        } catch (\Throwable $th) {
            
        }

      

     }
 

    #[Computed()]
    public  function systems() {
      return CacheSystemSettingServices::getData() ;
    }

    public function cancelEdit()
    {

        $this->reset('editId');
    }


    public function render()
    {
        $title='ثوابت النظام';
        if (Gate::denies('status_view')) {
            abort(403,'ليس لديك الصلاحية اللازمة');;
        }
        return view('livewire.dashboard.status.system')->layoutData(['title'=>$title,'pageTitle'=>$title]);
    }



    
}


