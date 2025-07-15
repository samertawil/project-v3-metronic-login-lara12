<?php

namespace App\Traits;

use Livewire\Attributes\Url;


 
trait SortTrait  {

       
    // #[Url()]
    // public $sortBy='created_at';
 
    #[Url()]
    public $sortdir='DESC';

 
    public $editId;

 
    public function setSortBy($sortByCol) {
        
        if($this->sortBy===$sortByCol) {
           
            $this->sortdir =($this->sortdir == "ASC") ? "DESC" : "ASC";
            return;
        }
     
        $this->sortBy=$sortByCol;
        $this->sortdir='DESC';

    }

    public function updated($prop) {

        $this->resetPage();

    }




 
}

 