@extends('backend.admin.layout')
@section('title', 'index')

@section('content')
<div class="container">
    <div class="row mt-4 ">
        <div class="col-lg-3 offset-4 text-center card">

        
<h6>{{ $post->Name }}<h6>
<p>{{ $post->Email }}<p>
<p>{{ $post->Address }}<p>
<p>{{ $post->Age }}<p>
<p>{{ $post->Group }}<p>
 
        </div>
    </div>
</div>
@endsection