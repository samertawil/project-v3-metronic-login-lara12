<?php

namespace App\Livewire\Dashboard\Setting;

use App\Models\Setting;
use Livewire\Component;
use App\Traits\SortTrait;
use Illuminate\View\View;
use Livewire\Attributes\Url;
use Livewire\WithPagination;
use Livewire\Attributes\Rule;


class SettingIndex extends Component
{
    use SortTrait;

    #[Url()]
    public $sortBy = 'created_at';

    use WithPagination;
    protected string $paginationTheme = 'bootstrap';


    public $editSettingId;

    #[Rule('required')]
    public $value;

    public $key;
    public $description;
    public $notes;
    public $perPage = 10;

    public function edit($id)
    {

        $this->editSettingId = $id;
        $data = Setting::findOrfail($id);

        $this->value = $data->value;
        $this->key = $data->key;
        $this->description = $data->description;
        $this->notes = $data->notes;
    }

    public function update()
    {

        $this->validate();

        $data = Setting::findOrfail($this->editSettingId);

        $data->update([
            'key' => $this->key,
            'value' => $this->value,
            'description' => $this->description,
            'notes' => $this->notes,
        ]);

        $this->cancelEdit();
    }



    public function destroy($id)
    {
        Setting::destroy($id);
    }

    public function cancelEdit()
    {
        $this->reset('editSettingId');
    }

    //#[Layout('components.layouts.metronic7-simple-app')]
    public function render(): View
    {
        $pageTitle= __('customTrans.setting')  ; 

        $settings = Setting::orderBy($this->sortBy, $this->sortdir)->paginate($this->perPage);

        return view('livewire.dashboard.setting.setting-index', compact('settings'))->layoutData(['pageTitle'=>$pageTitle,'Title'=>$pageTitle]);
    }
}
