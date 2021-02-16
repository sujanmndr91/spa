@extends('layouts.app')

@section('content')
<div class="container">
       <form method="POST" action="/admin/banner/update/{{ $banner->id }}" class="form-control p-3">
              {{ @csrf_field() }}
              @method('PUT')
              <div class="form-group">
                     <input type="text" id="heading" class="" name="heading" placeholder="Heading" value={{ $banner->heading }}>
                     @error('heading')
                     <div class="text-red">
                            {{ $message }}
                     </div>
                     @enderror
              </div>
              <div class="form-group">
                     <input type="text" id="subheading" class="" name="subheading" placeholder="SubHeading" value={{ $banner->subheading }}>
                     @error('subheading')
                     <div class="text-red">
                            {{ $message }}
                     </div>
                     @enderror
              </div>
              <textarea type="text" name="body" id="body" class="form-control">{{ $banner->body }}</textarea>


              <input type="submit" class="" value="Update">
       </form>

</div>

@endsection