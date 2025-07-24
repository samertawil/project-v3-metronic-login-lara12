<?php

namespace App\Traits;

use Livewire\Attributes\Url;

trait SortTrait  {

    #[Url()]
    public string $sortdir='DESC';
 
 
    public function setSortBy(string $sortByCol): string 
    {
        
          if($this->sortBy===$sortByCol) {
           
            $this->sortdir =($this->sortdir == "ASC") ? "DESC" : "ASC";
            
            return $this->sortdir;
        }
           
            $this->sortBy=$sortByCol;
            $this->sortdir='DESC';

            return $this->sortdir;
       
    }

    public function updated(string $prop): mixed {

       return $this->resetPage();

    }
 
}

 