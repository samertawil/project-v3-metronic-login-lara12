 @error($field_name)
     @foreach ($errors->get($field_name) as $error)
         <li class="invalid-feedback "><small>{{ $error }}</small></li>
     @endforeach
 @enderror
