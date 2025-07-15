<div>

    @if (session('message'))
        <div class="alert alert-{{ session('type') }} alert-dismissible fade show w-75 mx-auto  " id="test1">
            {{ session('message') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                {{-- <span aria-hidden="true">&times;</span> --}}
            </button>
        </div>
    @endif


    <script>
        setTimeout(() => {
            $('.alert').fadeOut()
        }, 30000);
    </script>

</div>

