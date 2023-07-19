
@extends('backend.admin.layout')


<div class="container">
  <div class="row">
    <div class="col-lg-8 mt-3">
<table class="table">
  <thead>
    <tr>
      <th scope="col">S.N</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Address</th>
      <th scope="col">view</th>
      <th scope="col">delete</th>

    </tr>
  </thead>
  <tbody>
    @foreach ($requests as $post)
    <tr>
      <th scope="row"> {{ $loop->index + 1}}</th>
      <td>{{ $post->Name }}</td>
      <td>{{ $post->Email }}</td>
      <td>{{ $post->Address }}</td>
      <td><a href="{{route('receivers.show', $post->id)}}" class="btn btn-dark btn-info">View</a></td>
      <td>
        <form class="delete" action="{{route('receivers.destroy', $post->id)}}" method="post">
                                    @csrf
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="btn btn-dark">Delete</button>
                                </form>
                                </td>
    </tr>
    
    </div>
  </div>
</div>
  
@endforeach


