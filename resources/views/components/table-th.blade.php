<div>

@props([
'labelname'=>null,
'name'=>'',
'sortBy'=>'',
'sortdir'=>'',
])
 


<th  {{$attributes}} scope="col" ><span>{{$labelname?? __("customTrans.$name") }}</span>
   
    @if ($this->sortBy !==     $name   )
        <button class="btn text-primary "><i class="ti-exchange-vertical text-primary"></i>
        </button>
    @elseif ($this->sortdir == 'ASC')
        <button class="btn text-primary "><i class="ti-arrow-up text-primary" style="font-size: 12px !important;"></i>
        </button>
         @else($this->sortdir == 'DESC')
         <button class="btn text-primary "><i class="ti-arrow-down text-primary " style="font-size: 12px !important;"></i>
         </button>
    @endif
    

</th>



</div>
 