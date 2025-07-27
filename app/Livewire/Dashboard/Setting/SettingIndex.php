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
    use WithPagination;
    protected string $paginationTheme = 'bootstrap';

    #[Url()]
    public string $sortBy = 'created_at';
    public mixed $editSettingId;
    #[Rule('required')]
    public mixed $value;
    public string $key;
    public string $description;
    public string $notes;
    public int $perPage = 10;

    public function edit(int $id): void
    {

        $this->editSettingId = $id;
        $data = Setting::findOrfail($id);

        $this->value = $data->value;
        $this->key = $data->key;
        $this->description = $data->description;
        $this->notes = $data->notes;
    }

    public function update(): void
    {

        $this->validate();

       Setting::where('id',$this->editSettingId) 

        ->update([
            'key' => $this->key,
            'value' => $this->value,
            'description' => $this->description,
            'notes' => $this->notes,
        ]);

        $this->cancelEdit();
    }



    public function destroy(int $id): void
    {
        Setting::destroy($id);
    }

    public function cancelEdit(): void
    {
        $this->reset('editSettingId');
    }

    //#[Layout('components.layouts.metronic7-simple-app')]
    public function render(): View
    {
        $pageTitle= __('customTrans.setting')  ; 

        $settings = Setting::orderBy($this->sortBy, $this->sortdir)->paginate($this->perPage);

        return view('livewire.dashboard.setting.setting-index', compact('settings'))->layoutData(['pageTitle'=>$pageTitle,'title'=>$pageTitle]);
    }
}
