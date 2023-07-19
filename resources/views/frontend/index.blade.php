@extends('include.layout')

@section('title', 'Home')

@section('content')


                  
<div class="container-fluid mb-3 background">
<!-- @if(isset($distance)) -->
    <p>Distance: {{ $distance }} km</p>
<!-- @endif -->
    <div class="row mt-1 ">
    <div class="col-md-12 col-sm-12 mt-5 text-center">
                        <div class="banner-content ">
                            <h2 class="slidemargin text-white" >
                                Donate blood and get real blessings.
                            </h2>		
                            			
                            <h3 class="mt-4 text-white">Blood is the most precious gift that anyone can give to another person.<br>
                                Donating blood not only saves the life of a receivers but also save donor's lives.
                            </h3>

                            <a href="donor" class="btn btn-danger btn-slider mb-5  mt-4">GET APPOINTMENT</a>   
                           
                            <a href="receivers" class="btn btn-danger btn-slider mb-5 ms-2 mt-4">REQUEST BLOOD</a>  
                            
                        </div>
                        <br><br>
                        <br><br>
                        <br><br>
                        <br><br>
                        <br><br>
                        <br><br>
                    </div>
                    
        </div>
    </div>
</div>

@endsection