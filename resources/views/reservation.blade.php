<!-- ****** Reservation Area Start ****** -->
   <!-- Booking Section-->
    @extends('layouts.apps')
    @section('were')
   
  




    <section id="booking" class="booking">
      <div class="container text-center">
        <header>
          <h2>Order your table</h2>
          <h3>Enjoy your meal at our restaurant</h3>
        </header>
        <div class="row">
          <div class="form-holder col-lg-10 mx-auto text-center">
            <div class="ribbon"><i class="fa fa-star"></i></div>
            <h2 class="h2">Make a reservation</h2>
            <h3>Book your table now</h3>
            <form id="booking-form" method="POST" action="/reservation">
              @csrf
              <div class="row">
                <div class="col-lg-10 mx-auto">
                  <div class="row">
                    <label for="name" class="col-md-6 unique">Name
                      <input id="name" name="name" type="text" required="">
                    </label>
                    <label for="email" class="col-md-6 unique">Email
                      <input id="email" name="email" type="email" required="">
                    </label>
                    <label for="number" class="col-md-6 unique">Number
                      <input id="number" name="number" type="text" required="">
                    </label>
                    <label for="people" class="col-md-6 unique">How Many People
                      <input id="people" name="people" type="number" min="1" required="">
                    </label>
                    <label for="date" class="col-md-6 unique">Date
                      <input id="date" name="date" type="date" data-language="en" required="" class="datepicker-here">
                    </label>
                    <label for="time" class="col-md-6 unique">Time
                      <input id="time" name="time" type="time" required="" class="timepicker">
                    </label>
                    <label for="request" class="col-md-12 unique">Special Request
                      <textarea id="request" name="body" required=""></textarea>
                    </label>
                    <div class="col-md-12">
                      <button type="submit" class="btn-unique">Book Now</button>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- End Booking Section-->
    <!-- ****** Reservation Area End ****** -->

    @endsection