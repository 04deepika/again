

@extends('backend.admin.layout')

@section('title', 'index')

@section('content')
    <div class="py-12">
    <div class="row ms-5">
                @foreach ($allposts as $post)

        <div class="col-lg-3 m-2 card p-2">
       <h5> <a href="view">{{ $post->Name}}</a></h5>
        <p>{{ $post->Group}}</p>
        <br>
      <a href="{{route('donor.show', $post->id)}}" class="btn btn-dark ms-5 mb-2 me-5 btn-info mt-1">View Donor Detail</a>
        </div>
    @endforeach
                </div>
                </div>
     @endsection



