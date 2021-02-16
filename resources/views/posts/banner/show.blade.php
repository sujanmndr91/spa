@extends('layouts.app')

@section('content')
<div class="container">
       <h3>Banner edit</h3>
       
       <h4>Banner Title</h4>
       <div>
              {{ $banner->heading }}
       </div>

       <h4>Banner Subheading</h4>
       <div>
       {{ $banner->subheading }}
       </div>

       <h4>Banner body</h4>
       <div>
       {{ $banner->body }}
       </div>

       <a href="/admin/banner/update/{{ $banner->id }}" class="mr-2">Edit</a>

</div>

@endsection