@extends('layouts.app')

@section('content')


<div class="container">
{{-- <div class="card">  --}}
	
 <div class="col-ls-12">
   <style>
body{

	/* font-family: Roboto,RobotoDraft,Helvetica,Arial,sans-serif;
    color: #202124;
    word-wrap: break-word;
    -webkit-user-select: none;
    -webkit-tap-highlight-color: transparent;
    display: flex;
    -webkit-box-flex: 1;
    flex-grow: 1;
    flex-shrink: 1;
    min-width: 0%; */
	/* background-color: #626262; */
	font-family:Roboto,Arial,sans-serif;
	font-size: 14px;
	font-weight: 400;
	letter-spacing: .2px;
	line-height: 20px;
	color:  #202124;
    min-width: 1px;
	
}

.form{
	height: 1100px;
	width: 600px;
	margin: auto;
	
}
.required{
font-size: 13px;
color: red;
}
.title-div{
	height: 150px;
	width: 600px;
	background-color: #FDFEFE;
	margin: 15px;
	border-radius: 8px;
	border-top: 8px solid #6703c4;
	padding: 25px;
}

.name-div, .college-div, .gmail-div, .mobile-div{
	height: 150px;
	width: 650px;
	background-color: #626262;
	margin: 15px;
	border-radius: 8px;
	cursor: pointer;
}
.name{
	padding-top: 20px;
	padding-left: 25px;
	padding-bottom: 25px;
	font-size: 25px;
}
.input-div{
	padding-top: 15px;
	padding-left: 15px;
}
.input-div {
	width: 300px;
	border: 0;
	outline: 0;
	/* border-bottom: 1.5px solid #DCD7D7; */
	font-size: 15px;
}

.input-div label{
color: #00d4ff;
	font-size: 20px;
}
.btn{
	height: 36px;
	width: 100px;
	background-color: #6703c4;
	border-radius: 5px;
	font-size: 14px;
	letter-spacing: .5px;
	font-weight: 540;
	border: none;
	padding: 10px;
	position: absolute;
	margin: 15px;
	color: white;
}
.last-div h2{
	text-align: center;
	padding-top: 50px;
	color: #090a0a;
	font-weight: 200;
}
.term{
	font-size: 12px;
	padding-left: 65px;
	padding-top: 5px;
	position: absolute;
}
.never{
	padding-left: 15px;
	font-size: 12px;
	padding-top: 70px;
	font-weight: 400;
}
   </style>
  <div class="last-div">
	{{-- <p class="never">Never submit passwords through this form.</p> --}}
	<h2>Reporting/Logging miWay sales & support calls</h2>
</div>
    <div class="form">
		
		{{-- <div class="title-div">
			<h4>TELESALES REPORT LOGGING</h4>
			<p>This form is created to log sale.</p>
			<p class="required">*Required</p>
		</div> --}}
        <form method="POST" action="{{ route('report.store')}}">
			@csrf
			
		{{-- <div class="college-div">
			<div class="name">Enter customer contact.</div>
			<div class="input-div"><input type="input" name="contact" placeholder="contact number"></div>
		</div> --}}
      
		<div class="input-div">
			<label for="example-text-input"  class="form-control-label">customer contact *</label>
			<input class="form-control" type="text" value="" name="contact"  placeholder="+233" id="example-text-input">
		</div>
		<div>
			@error('contact')
				<span class="text-danger">{{$message}}</span>
			@enderror
		</div>
		<br>
          
		{{-- <p>Select Disposition:</p> --}}

    {{-- <div>
  <input type="radio" id="Successful Sale" name="unreach" value="Successful Sale">
  <label for="Successful Sale">Successful Sale</label>
   </div> --}}

   <div class="card">
	{{-- <div class="card-header">
		<p>Select Disposition:</p>
	</div> --}}
	<div class="card-body">

		{{-- <div class="card-header">
			<p>Select Disposition:</p>
		</div> --}}
		<h4 class="card-title text-info text-gradient">Disposition *</h3>

		<blockquote class="blockquote text-white mb-0">
	  {{-- <blockquote class="blockquote mb-0"> --}}
		<div class="form-check">
			<input class="form-check-input" type="radio" name="disposition" id="Successful Sale">
			<label class="custom-control-label" for="customRadio1">Successful Sale</label>
		  </div>
		

		  <div class="form-check">
			<input class="form-check-input" type="radio" name="disposition" id="customRadio2">
			<label class="custom-control-label" for="customRadio">Unreachable</label>
		  </div>

		  <div class="form-check">
			<input class="form-check-input" type="radio" name="disposition" value="Deferred" id="Deferred">
			<label class="custom-control-label" for="custom">Deferred</label>
		  </div>

		  <div class="form-check">
			<input class="form-check-input" type="radio" name="disposition" value="Call" id="Selected">
			<label class="custom-control-label" for="Selected">Selected Family Member Details Update Call</label>
		  </div>
		  <div class="form-check">
			<input class="form-check-input" type="radio" name="disposition" value=" Billing" id=" Billing">
			<label class="custom-control-label" for="Billing">Cancellation Request During Billing</label>
		  </div>
		
		  <div class="form-check">
			<input class="form-check-input" type="radio" name="disposition" value="failed"   id="failed">
			<label class="custom-control-label" for=" Failed">Failed Mandate/Approval Failed</label>
		  </div>
</blockquote>
	</div>
  </div>
  <br>


   {{-- <div class="form-check mb-3">
	<input class="form-check-input" type="radio" name="unreach" id="Successful Sale">
	<label class="custom-control-label" for="customRadio1">Successful Sale</label>
  </div> --}}


  {{-- <div class="form-check">
	<input class="form-check-input" type="radio" name="unreach" id="customRadio2">
	<label class="custom-control-label" for="customRadio2">Unreachable</label>
  </div> --}}
   {{-- <div>
  <input type="radio" id="Unreachable" name="unreach" value="Unreachable">
  <label for="Unreachable">Unreachable</label>
</div> --}}

{{-- <div class="form-check">
	<input class="form-check-input" type="radio" name="unreach" value="Deferred" id="Deferred">
	<label class="custom-control-label" for="customRadio2">Deferred</label>
  </div> --}}
{{-- 
  <div class="form-check">
	<input class="form-check-input" type="radio" name="unreach" value="Selected Family Member Details Update Call" id="Selected Family Member Details Update Call">
	<label class="custom-control-label" for="Selected Family Member Details Update Call">Selected Family Member Details Update Call</label>
  </div>
  <div class="form-check">
	<input class="form-check-input" type="radio" name="unreach" value="Cancellation Request During Billing" id="Cancellation Request During Billing">
	<label class="custom-control-label" for="Cancellation Request During Billing">Cancellation Request During Billing</label>
  </div>

  <div class="form-check">
	<input class="form-check-input" type="radio" name="fm" value="fm"   id="fm">
	<label class="custom-control-label" for="Failed Mandate/Approval Failed">Failed Mandate/Approval Failed</label>
  </div> --}}

{{-- <div>
  <input type="radio" id="Deferred" name="unreach" value="Deferred">
  <label for="Deferred">Deferred</label>
</div> --}}

{{-- <div>
  <input type="radio" id="fm" name="fm" value="fm">
  <label for="Failed Mandate/Approval Failed">Failed Mandate/Approval Failed</label>
</div> --}}

{{-- <div>
  <input type="radio" id="D/M" name="fm" value="D/M">
  <label for="Deactivation/Terminated">Deactivation/Terminated</label>
</div> --}}


{{-- <p>Select Call Category:</p> --}}
<div class="card">
	{{-- <div class="card-header">
		<p>Select Call Category:</p>
	</div> --}}
	<div class="card-body">
	  {{-- <blockquote class="blockquote mb-0"> --}}
		{{-- <div class="card-header">
			<p>Select Call Category:</p>
		</div> --}}
		<h4 class="card-title text-info text-gradient">Call Category *</h3>
		<blockquote class="blockquote text-white mb-0">

			<div class="form-check">
				<input class="form-check-input" type="radio" name="callcat" value="Deactivation" id="sfm">
				<label class="custom-control-label" for="sfm">Deactivation/Terminated</label>
			  </div>

			  <div class="form-check">
				<input class="form-check-input" type="radio" name="callcat" value="sInbound" id="Inbound">
				<label class="custom-control-label" for="Inbound">Inbound</label>
			  </div>

		<div class="form-check">
			<input class="form-check-input" type="radio" name="callcat" value="welcome Call" id="modi">
			<label class="custom-control-label" for="welcome Call">Welcome Call</label>
		  </div>
		
		<div class="form-check">
			<input class="form-check-input" type="radio" name="callcat" value="Unpleasant" id="Unpleasant">
			<label class="custom-control-label" for="unpleasant">Extremely Unpleasant Sales Call</label>
		  </div>
		

		  <div class="form-check">
			<input class="form-check-input" type="radio" name="callcat" value="Insurance" id="Insurance">
			<label class="custom-control-label" for="Insurance">Mobile Delivered Insurance (MoDi Sales Call)</label>
		  </div>

		  <div class="form-check">
			<input class="form-check-input" type="radio" name="callcat" value="Details" id="Details">
			<label class="custom-control-label" for="Details">Selected Family Member Details Update</label>
		  </div>
		  <div class="form-check">
			<input class="form-check-input" type="radio" name="callcat" value="Sales" id="Sales">
			<label class="custom-control-label" for="Sales">Sales</label>
		  </div>
		</blockquote>
	</div>
  </div>
{{-- <div class="form-check">
	<input class="form-check-input" type="radio" name="sale" value="Deactivation/Terminated" id="Deactivation/Terminated">
	<label class="custom-control-label" for="Deactivation/Terminated">Deactivation/Terminated</label>
  </div> --}}


  {{-- <div class="form-check">
	<input class="form-check-input" type="radio" name="sale" value="mobile" id="modi">
	<label class="custom-control-label" for="mobile">Mobile Delivered Insurance (MoDi Sales Call)</label>
  </div> --}}


  {{-- <div class="form-check">
	<input class="form-check-input" type="radio" name="sfm" value="sfm" id="sfm">
	<label class="custom-control-label" for="sfm">Selected Family Member Details Update</label>
  </div> --}}


    {{-- <div>
  <input type="radio" id="Successful Sale" name="sale" value="Successful Sale">
  <label for="Successful Sale">Successful Sale</label>
   </div>Deactivation/Terminated --}}

   {{-- <div>
  <input type="radio" id="Unreachable" name="sale" value="Unreachable">
  <label for="Unreachable">Unreachable</label>
</div>Selected Family Member Details Update --}}

{{-- <div>
  <input type="radio" id="Deferred" name="sale" value="Deferred">
  <label for="Deferred">Deferred</label>
</div>

<div> --}}
  {{-- <input type="radio" id="fm" name="failed" value="fm">
  <label for="Failed Mandate/Approval Failed">Failed Mandate/Approval Failed</label>
</div> --}}

{{-- <div>
  <input type="radio" id="D/M" name="failed" value="D/M">
  <label for="Deactivation/Terminated">Deactivation/Terminated</label>
</div> --}}

<br>
<div class="card">
	<div class="card-header">
	 
	</div>
	<div class="card-body">
		<h4 class="card-title text-info text-gradient">How did you find out about this policy *</h3>
		<blockquote class="blockquote text-white mb-0">
	  {{-- <blockquote class="blockquote mb-0"> --}}
		<div class="form-check">
			<input class="form-check-input" type="radio" name="about_policy" value="mobile" id="modi">
			<label class="custom-control-label" for="mobile">TV Advert</label>
		  </div>

		   <div class="form-check">
			<input class="form-check-input" type="radio" name="about_policy" value="advert" id="advert">
			<label class="custom-control-label" for="advert">Radio Advert</label>
		    </div>

			<div class="form-check">
				<input class="form-check-input" type="radio" name="about_policy" value="media" id="media">
				<label class="custom-control-label" for="media">Social Media</label>
				</div>

				
			<div class="form-check">
				<input class="form-check-input" type="radio" name="about_policy" value="friend" id="friend">
				<label class="custom-control-label" for="friend">From A Friend/Relative</label>
				</div>

				<div class="form-check">
					<input class="form-check-input" type="radio" name="about_policy" value="relative" id="relative">
					<label class="custom-control-label" for="relative">From A Friend/Relative</label>
					</div>

					<div class="form-check">
						<input class="form-check-input" type="radio" name="about_policy" value="remember" id="sfm">
						<label class="custom-control-label" for="remember">I Don't Remember</label>
					</div>
						<div class="form-check">
						<input class="form-check-input" type="radio" name="about_policy" value="show" id="sfm">
						<label class="custom-control-label" for="show">Road Show</label>
						</div>

	</div>
  </div>
  
  
<div>
	<input class="btn" type="submit" name="Submit">
</div> 


		{{-- <div class="last-div">
			{{-- <p class="never">Never submit passwords through this form.</p> --}}
			{{-- <h2>Only TeleSales Agent </h2>
		</div>
		 --}} 

	</div>

 {{-- </div> --}}
{{-- </div>  --}}


</div>


@endsection