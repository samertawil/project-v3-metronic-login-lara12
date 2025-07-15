<div>
   
    
    @if ($errors->any())
    <script>
        toastr.options = {
            "progressBar": true,
            "closeButton": true,
        }

        @foreach ($errors->all() as $error)
            toastr.error("{{ $error }}")
            @endforeach
    </script>
@endif


</div>