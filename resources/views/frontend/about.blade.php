@extends('include.layout')

@section('title', 'Home')

@section('content')

@include('include.nav')

<div class="container">
    <div class="row">
        <div class="col-lg-10 mt-3 mb-5 ms-5 p-2">
            <h4 class="text-center">About Us</h4>
            <p class="text-center p-2">Blood bank is a place where blood bag that is collected from blood
donation events is stored in one place. The term blood bank refers to a
division of a hospital laboratory where the storage of blood product
occurs and where proper testing is performed to reduce the risk of
transfusion related events . The process of managing the blood bag that
s received from the blood donation events needs a proper and
systematic management. The blood bag must be handled with care and
treated thoroughly as it is related to someone's life.</p>
        </div>
    </div>
</div>

@include('include.footer')
@endsection