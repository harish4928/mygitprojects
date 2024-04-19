@extends('Frontend/layouts.default')
@section('content')
<div class="hmhighlighttxts">
	<div class="container">
		<?php echo $commonRecords->common_text; ?>
	</div>
</div>
<div class="magetrue_pgbnr">
<?php echo $record['top_content'];?>
	<div class="pgbreadcrmb">
		<div class="container">
			<div class="breadcrumain">
				<ul>
					<li><a href="{{}}">Home</a></li>
					<li><?php echo $record['breadcumb']; ?></li>
				</ul>
			</div>
		</div>
	</div>
</div>




<div class="maindivcommon">
<div class="container">
<div class="row g-5">
<div class="col-lg-6 wow fadeInUp enquirefrm animatedp" data-wow-delay="0.1s">
	<h3 class="mb-4">Get Enquire Now</h3>
	
	 {!! Form::open(['route' => 'contactenquery', 'files'=>'true', 'id'=>'popup-form' , 'class'=>'']) !!}
		<div class="row g-3">
			<div class="col-md-6">
				<div class="form-floating">
					<label for="name">Your Name</label>
					<input type="text" class="form-control" id="name" placeholder="Your Name" name="con_name" required>
					
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-floating">
					<label for="email">Your Email</label>
					<input type="email" class="form-control" id="con_email" placeholder="Your Email" name="con_email" required>
					
				</div>
			</div>
			<div class="col-12">
				<div class="form-floating">
					<label for="subject">Mobile No</label>
					<input type="text" class="form-control" id="con_mobile" placeholder="Mobile No" name="con_mobile" required>
					
				</div>
			</div>
			<div class="col-12">
				<div class="form-floating">
					<label for="message">Message</label>
					<textarea class="form-control" placeholder="Leave a message here" id="message" name="con_message" style="height: 200px"></textarea>
					
				</div>
			</div>
			<div class="col-12">
				<button class="btn btn sendmesage" type="submit">Send Message</button>
			</div>
		</div>
	</form>
</div>
<div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
	<h3 class="mb-4">Contact Details</h3>
	<div class="d-flex border-bottom pb-3 mb-3">
		<div class="flex-shrink-0 btn-square bg-primary rounded-circle">
			<i class="fa fa-map-marker-alt text-white"></i>
		</div>
		<div class="ms-3">
			<h6>Our head office address:</h6>
			<span>NEHRU INTERNATIONAL PUBLIC SCHOOL, U – 1, Sector 11, Noida 201301</span>
		</div>
	</div>
	<div class="d-flex border-bottom pb-3 mb-3">
		<div class="flex-shrink-0 btn-square bg-primary rounded-circle">
			<i class="fa fa-phone-alt text-white"></i>
		</div>
		<div class="ms-3">
			<h6>Call for help:</h6>
			<span>+91-93113-37153, 0120 311 3125</span>
		</div>
	</div>
	<div class="d-flex border-bottom-0 pb-3 mb-3">
		<div class="flex-shrink-0 btn-square bg-primary rounded-circle">
			<i class="fa fa-envelope text-white"></i>
		</div>
		<div class="ms-3">
			<h6>Mail us for information:</h6>
			<span>admission@nipsnoida.com</span>
		</div>
	</div>

	
</div>

<div class="col-lg-12 wow fadeInUp py-3" data-wow-delay="0.5s">
	
	
	<iframe class="w-100 rounded"
	src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14011.941093956782!2d77.340532!3d28.6002186!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce5188dfde3a1%3A0xa8e66021af79117!2sNehru%20international%20Public%20School!5e0!3m2!1sen!2sin!4v1712416499806!5m2!1sen!2sin"
	frameborder="0" style="width:100%; min-height: 300px; border:0;" allowfullscreen="" aria-hidden="false"
	tabindex="0"></iframe>
   </div> 
</div>
</div>
</div>
<?php //echo $record['description2'];?>  	
			
@stop