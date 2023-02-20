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
			<input class="form-control" type="text" value="{{$report->customer_contact}}" name="contact"  placeholder="+233" id="example-text-input">
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
			<input class="form-check-input" type="radio" value="Successful Sale" <?php if($report->disposition =='Successful Sale'){ echo "checked=checked";}  ?> name="disposition" id="Successful Sale">
			<label class="custom-control-label" for="customRadio1">Successful Sale</label>
		  </div>
		

		  <div class="form-check">
			<input class="form-check-input" type="radio" name="disposition" <?php if($report->disposition =='Unreachable'){ echo "checked=checked";}  ?> value="Unreachable" id="customRadio2">
			<label class="custom-control-label" for="customRadio">Unreachable</label>
		  </div>

		  <div class="form-check">
			<input class="form-check-input" type="radio" name="disposition" <?php if($report->disposition =='Deferred'){ echo "checked=checked";}  ?> value="Deferred" id="Deferred">
			<label class="custom-control-label" for="custom">Deferred</label>
		  </div>

		  <div class="form-check">
			<input class="form-check-input" type="radio" name="disposition" <?php if($report->disposition =='Call'){ echo "checked=checked";}  ?> value="Call" id="Selected">
			<label class="custom-control-label" for="Selected">Selected Family Member Details Update Call</label>
		  </div>
		  <div class="form-check">
			<input class="form-check-input" type="radio" name="unreach" value=" <?php if($report->disposition =='Billing'){ echo "checked=checked";}  ?> Billing" id=" Billing">
			<label class="custom-control-label" for="Billing">Cancellation Request During Billing</label>
		  </div>
		
		  <div class="form-check">
			<input class="form-check-input" type="radio" name="disposition" <?php if($report->disposition =='failed'){ echo "checked=checked";}  ?> value="failed"   id="failed">
			<label class="custom-control-label" for=" Failed">Failed Mandate/Approval Failed</label>
		  </div>
</blockquote>
	</div>
  </div>
  <br>


<div class="card">

	<div class="card-body">
		<h4 class="card-title text-info text-gradient">Call Category *</h3>
		<blockquote class="blockquote text-white mb-0">

			<div class="form-check">
				<input class="form-check-input" type="radio" name="Deactivation" <?php if($report->failedMandate =='Deactivation'){ echo "checked=checked";}  ?> value="Deactivation" id="sfm">
				<label class="custom-control-label" for="sfm">Deactivation/Terminated</label>
			  </div>

			  <div class="form-check">
				<input class="form-check-input" type="radio" name="Deactivation" value="sInbound" <?php if($report->failedMandate =='sInbound'){ echo "checked=checked";}  ?>  id="Inbound">
				<label class="custom-control-label" for="Inbound">Inbound</label>
			  </div>

		<div class="form-check">
			<input class="form-check-input" type="radio" name="Deactivationl" <?php if($report->failedMandate =='welcome Call'){ echo "checked=checked";}  ?> value="welcome Call" id="modi">
			<label class="custom-control-label" for="welcome Call">Welcome Call</label>
		  </div>
		
		<div class="form-check">
			<input class="form-check-input" type="radio" name="Deactivation" value="Unpleasant" <?php if($report->failedMandate =='Unpleasant'){ echo "checked=checked";}  ?> id="Unpleasant">
			<label class="custom-control-label" for="unpleasant">Extremely Unpleasant Sales Call</label>
		  </div>
		

		  <div class="form-check">
			<input class="form-check-input" type="radio" name="Deactivation" <?php if($report->failedMandate =='Insurance'){ echo "checked=checked";}  ?> value="Insurance" id="Insurance">
			<label class="custom-control-label" for="Insurance">Mobile Delivered Insurance (MoDi Sales Call)</label>
		  </div>

		  <div class="form-check">
			<input class="form-check-input" type="radio" name="Deactivation" value="Details" id="Details">
			<label class="custom-control-label" for="Details">Selected Family Member Details Update</label>
		  </div>
		  <div class="form-check">
			<input class="form-check-input" type="radio" name="Deactivation" value="Sales" id="Sales">
			<label class="custom-control-label" for="Sales">Sales</label>
		  </div>
		</blockquote>
	</div>
  </div>

<br>
<div class="card">
	<div class="card-header">
	 
	</div>
	<div class="card-body">
		<h4 class="card-title text-info text-gradient">How did you find out about this policy *</h3>
		<blockquote class="blockquote text-white mb-0">
	  {{-- <blockquote class="blockquote mb-0"> --}}
		<div class="form-check">
			<input class="form-check-input" <?php if($report->failedMandate =='Insurance'){ echo "checked=checked";}  ?>  type="radio" name="mobile" value="mobile" id="modi">
			<label class="custom-control-label" for="mobile">TV Advert</label>
		  </div>

		   <div class="form-check">
			<input class="form-check-input" type="radio" name="mobile" value="advert" id="advert">
			<label class="custom-control-label" for="advert">Radio Advert</label>
		    </div>

			<div class="form-check">
				<input class="form-check-input" type="radio" name="mobile" value="media" id="media">
				<label class="custom-control-label" for="media">Social Media</label>
				</div>

				
			<div class="form-check">
				<input class="form-check-input" type="radio" name="mobile" value="friend" id="friend">
				<label class="custom-control-label" for="friend">From A Friend/Relative</label>
				</div>

				<div class="form-check">
					<input class="form-check-input" type="radio" name="mobile" value="relative" id="relative">
					<label class="custom-control-label" for="relative">From A Friend/Relative</label>
					</div>

					<div class="form-check">
						<input class="form-check-input" type="radio" name="mobile" value="remember" id="sfm">
						<label class="custom-control-label" for="remember">I Don't Remember</label>
					</div>
						<div class="form-check">
						<input class="form-check-input" type="radio" name="mobile" value="show" id="sfm">
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