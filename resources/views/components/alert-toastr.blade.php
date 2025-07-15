

  <div>
    @if (session('message'))
    <script>
        toastr.options = {
            "progressBar": true,
            "closeButton": true,
        }
     
         toastr.{{session('type')}}("{{session('message')}}" , {
         timeOut: 3000 
    
    });
    </script>
    @endif
    

  </div>

