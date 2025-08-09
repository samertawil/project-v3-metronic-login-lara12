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
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\View;

class SystemClass extends Component
{
 
    public string|null $description='';
    #[Validate(['required','unique:setting_systems,system_name'])]
    public string $system_name;

    public mixed $editId=null;
    public mixed $data;

    public function systemStore(): void
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

    public function edit(int $id): void {
       $this->editId=$id;
       $this->data=SettingSystem::findOrfail($id);

        $this->system_name=  $this->data->system_name ;
        $this->description=  $this->data->description ;
    }

    public function update(): void {
        
        $this->data->update([
            'system_name'=>  $this->system_name,
            'description'=>  $this->description ,
        ]);
        
        $this->cancelEdit();

        $this->dispatch('refresh-system');
        
     }

     public function destroy(int $id): void 
     {

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
    public  function systems(): Collection {
      return CacheSystemSettingServices::getData() ;
    }

    public function cancelEdit(): void
    {

        $this->reset('editId');
    }


    public function render(): View
    {
        $title='ثوابت النظام';
        if (Gate::denies('status_view')) {
            abort(403,'ليس لديك الصلاحية اللازمة');;
        }
        return view('livewire.dashboard.status.system')->layoutData(['title'=>$title,'pageTitle'=>$title]);
    }



    
}


