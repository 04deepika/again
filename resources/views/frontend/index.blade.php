@extends('include.layout')

@section('title', 'Home')

@section('content')



<div class="container mb-3">
<!-- @if(isset($distance)) -->
    <p>Distance: {{ $distance }} km</p>
<!-- @endif -->
    <div class="row mt-5">
    <div class="col-md-12 col-sm-12 text-center">
                        <div class="banner-content">
                            <h2 >
                                Donate blood and get real blessings.
                            </h2>		
                            			
                            <h3>Blood is the most precious gift that anyone can give to another person.<br>
                                Donating blood not only saves the life also save donor's lives.
                            </h3>

                            <a href="#" class="btn btn-danger btn-slider mt-3">GET APPOINTMENT</a>   
                           
                            <a href="#" class="btn btn-danger btn-slider ms-2 mt-3">REQUEST BLOOD</a>   
                        </div>
                    </div>
        </div>
    </div>
</div>

<div class="container-fluid ">
    <div class="row ">
        <div class="col-lg-12  text-center">
            
            <h2 class="section-heading">Donation Process</h2>
            <div class="break "></div>
            <h5 class="mt-2 mb-4">The donation process from the time you arrive center until the time you leave</h5>
        
        </div>
        <div class="row mt-4 mb-5 p-0">
        <div class="col-lg-3 ms-1 col-md-6 p-0 card offwhite">
        <img src="images/process1.jpg" >
        <h2 class="p-2">REGISTRATION</h2>   
        <p class="ps-2">You need to complete a very simple registration form. Which contains all required contact information to enter in the donation process.</p>
</div>

        <div class="col-lg-3 ms-1 col-md-6 p-0 card offwhite">
        <img src="images/process2.jpg" >
        <h2 class="p-2">SCREENING</h2>   
        <p class="ps-2">A drop of blood from your finger will take for simple test to ensure that your blood iron levels are proper enough for donation process</p>
</div>
        <div class="col-lg-3 ms-1 col-md-6 p-0 card offwhite">
        <img src="images/bd1.jpeg"  height="252" width="334" >
        <h2 class="p-2"> DONATION</h2>   
        <p class="ps-2">After ensuring and passed screening test successfully you will be directed to a donor bed for donation. It will take only 6-10 minutes.
</div>
       
        <div class="col-lg-3 ms-0 col-md-6 p-0 card offwhite">
        <img src="images/process4.jpg" >
        <h2 class="p-2">REFRESHMENT</h2>   
        <p class="ps-2">You can also stay in sitting room until you feel strong enough to leave our center. You will receive awesome drink from us in donation zone</p>
</div>
    </div>
</div>

<p>Click the button to get your coordinates.</p>

<button onclick="getLocation()">Try It</button>

<p id="demo"></p>

<script>
var x = document.getElementById("demo");

function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else { 
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}

function showPosition(position) {
  x.innerHTML = "Latitude: " + position.coords.latitude + 
  "<br>Longitude: " + position.coords.longitude;
}
</script>


@endsection