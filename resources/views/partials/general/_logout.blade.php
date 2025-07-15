
<form action="{{ route('logout') }}" method="post">
    @csrf
    <button
        class="btn btn-sm btn-light-warning font-weight-bolder py-2 px-5">{{ __('customTrans.sign out') }}</button>
</form>