@extends('layouts.app')
@section('content')

		<section class="ftco-appointment">
			<div class="overlay"></div>
    	<div class="container-wrap">
    		<div class="row no-gutters d-md-flex align-items-center">
	    		<div class="col-md-6 appointment ftco-animate" style="margin-left: 30%">
              @include('inc.messages')
            <h3 class="mb-3">Appointments</h3>
	    			<!--<form action="" method="POST" enctype="text/plain" class="appointment-form">
                
	    				<div class="d-md-flex">
		    				<div class="form-group">
		    					<input type="text" id="FirstName" class="form-control" placeholder="First Name">
		    				</div>
		    				<div class="form-group ml-md-4">
		    					<input type="text" id="LastName" class="form-control" placeholder="Last Name">
		    				</div>
	    				</div>
	    				<div class="d-md-flex">
		    				<div class="form-group">
		    					<div class="input-wrap">
		            		<div class="icon"><span class="ion-md-calendar"></span></div>
		            		<input type="text" id="appointment_date" class="form-control" placeholder="Date">
	            		</div>
		    				</div>
		    				<div class="form-group ml-md-4">
		    					<div class="input-wrap">
		            		<div class="icon"><span class="ion-ios-clock"></span></div>
		            		<input type="text" id="appointment_time" class="form-control" placeholder="Time">
	            		</div>
		    				</div>
		    				<div class="form-group ml-md-4">
		    					<input type="text" id="Phone" class="form-control" placeholder="Phone">
		    				</div>
	    				</div>
	    				<div class="form-group">
	              <textarea name="" id="Message" cols="30" rows="3" class="form-control" placeholder="Message"></textarea>
	            </div>
	            <div class="form-group">
	              <input type="submit" value="Appointment" class="btn btn-primary py-3 px-4" onclick="">
	            </div>
            </form>
          -->

          {!! Form::open(['action' => 'BookingController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
          @csrf
          <div class="form-group">
              {{Form::label('FirstName', 'FirstName')}}
              {{Form::text('FirstName', '', ['class'=> 'form-control', 'placeholder'=> 'FirstName'])}}
          </div>
          <div class="form-group">
              {{Form::label('LastName', 'LastName')}}
              {{Form::text('LastName', '', ['class'=> 'form-control', 'placeholder'=> 'LastName'])}}
          </div>
          <div class="form-group">
              {{Form::label('Date', 'Date')}}
              {{Form::Date('Date', '', ['class'=> 'form-control', 'placeholder'=> 'Date'])}}
          </div>
          <div class="form-group">
              {{Form::label('Time', 'Time')}}
              {{Form::text('Time', '', ['class'=> 'form-control', 'placeholder'=> 'Time'])}}
          </div>
          <div class="form-group">
              {{Form::label('Phone', 'Phone')}}
              {{Form::text('Phone', '', ['class'=> 'form-control', 'placeholder'=> 'Phone'])}}
          </div>
          <div class="form-group">
               {{Form::label('Message', 'Message')}}
               {{Form::textarea('Message', '', ['class'=> 'form-control', 'placeholder'=> 'Message'])}}
           </div>
           {{Form::submit('Submit', ['class' =>'btn btn-success'])}}
       {!! Form::close() !!}



	    		</div>    			
    		</div>
    	</div>
    </section>


    <footer class="ftco-footer ftco-section img">
    	<div class="overlay"></div>
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-3">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">About Us</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Recent Blog</h2>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_1.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> Sept 15, 2018</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_2.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> Sept 15, 2018</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-2">
             <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Services</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Haircut</a></li>
                <li><a href="#" class="py-2 d-block">Hairstyle</a></li>
                <li><a href="#" class="py-2 d-block">Trimming</a></li>
                <li><a href="#" class="py-2 d-block">Shaving</a></li>
                <li><a href="#" class="py-2 d-block">Skin Care</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-3">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
                  <li><span class="icon icon-map-marker"></span><span class="text">174 Clarkin Road	Fairfield, Hamilton 3791</span></li>
                  <li><a href="#"><span class="icon icon-phone"></span><span class="text">07-855 6874</span></a></li>
                  <li><a href="#"><span class="icon icon-envelope"></span><span class="text"> bosscutshamilton@gmail.com</span></a></li>
                </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  
@endsection