 @error($field_name)
     @foreach ($errors->get($field_name) as $error)
         <li class="invalid-feedback {{$class1??''}}"><small  >{{ $error }}</small></li>
     @endforeach
 @enderror
