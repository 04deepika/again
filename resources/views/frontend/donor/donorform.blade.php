@extends('include.layout')
@section('title', 'form')


@section('content')



<div class="container">
  <div class="row">
    <div class="col-lg-4 offset-4 card mb-3 mt-3 p-4 offwhite">

    
<main class="form-signin">
<form class="forms-sample " method="POST" action="{{route('donor.store')}}" enctype="multipart/form-data" class="form-horizontal">
@csrf

<img class="margin" src="{{asset ('images/bloodlogo.png')}}"  alt="" width="150" height="150">

    
                    <div class="form-group">
                        <input type="text" class="form-control mt-2 mb-2" name="Name" placeholder="Username" value="{{old('Name')}}"/>
                        @error('Name')
    <div class="error">
        {{ $message }}
    </div>
    @enderror
                    </div>
                      <div class="form-group">
                        <input type="Email" class="form-control mt-2 mb-2" name="Email" placeholder="Email" value="{{old('Email')}}"/ >
                        @error('Email')
    <div class="error">
        {{ $message }}
    </div>
    @enderror
    
                    </div>
                      <div class="form-group">  
                        <input type="number" class="form-control mt-2 mb-2" name="Age" placeholder="Age" value="{{old('Age')}}"/>
                        @error('Age')
    <div class="error">
        {{ $message }}
    </div>
    @enderror
                    </div>
                      <div class="form-group">
                        <input type="text" class="form-control mt-2 mb-2" name="Address" placeholder="Your Current Address" value="{{old('Address')}}"/>
                        @error('Address')
    <div class="error">
        {{ $message }}
    </div>
    @enderror
    <div class="form-group">
                      
      <select name="Group" class="form-control mt-2 mb-2 form-control-sm" id="exampleFormControlSelect3">
      <option >A+</option>
      <option >AB+</option>
      <option >B+</option>
      <option >O+</option>
      <option >A-</option>
      <option >AB-</option>
      <option >B-</option>
      <option >O-</option>
      </select>
     @error('Group')
    <div class="error">
        {{ $message }}
    </div>
    @enderror
        </div>
    <button class="btn btn-lg btn-danger mt-4  mb-2 submitmargin text-centre" type="submit">Submit</button>
                    
                    </form>
                  </div>
                </div>
              </div>
              </div>
</div>
@endsection
