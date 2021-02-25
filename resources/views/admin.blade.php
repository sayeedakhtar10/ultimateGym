@extends('adminlte::page')

@section('title', 'Dashboard:: Ultimate Fitness Gym')

@section('content_header')
<div class="pen-title">
    <!--<h1><b>ULTIMATE FITNESS GYM</b></h1>-->
</div>
@stop

@section('content')
<div class="row">
    <div class="col-lg-offset-2 col-md-8">
        @if (session('status_success'))
        <script>
            bootbox.alert({
                message: "<h3>{!! session('status_success') !!}</h3>",
                size: 'medium'
            }).find('.modal-content').css({
                'background-color': '#FFF',
                'font-weight': 'bold',
                color: '#000000',
                'font-size': '1em',
                'font-weight': 'bold'
            });
        </script>
        @endif
        <!-- form start --></br>
        <span class="alert-info"><b>NOTE:</b> Fields with asterik mark (<span class="text-danger">*</span>) is mandatory. </span>
        <form method="post" action="{{url('save_project')}}" name="create_project" id="create_project" enctype="multipart/form-data">
            {!!csrf_field()!!}
            <fieldset class="form-border">
                <legend class="form-border"><span class="label label-info">APPLICANT DETAILS</span></legend>
                <div class="form-group row">
                    <label class="col-sm-4 control-label" for="applicant_name">Applicant Name <span class="text-danger">*</span> :</label>
                    <div class="col-sm-6">
                        <input id="applicant_name" type="text" Placeholder="Enter applicant name" class="form-control" name="applicant_name" value="{{ old('applicant_name') }}" required>
                        @if ($errors->has('applicant_name'))
                        <span class="text-danger">
                            <strong>{{ $errors->first('applicant_name') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-4 control-label" for="mobile_no">Mobile No. <span class="text-danger">*</span> :</label>
                    <div class="col-sm-6">
                        <input id="mobile_no" type="text" max="10" Placeholder="Enter 10 digit mobile no" class="form-control" name="mobile_no" value="{{ old('mobile_no') }}" required>
                        @if ($errors->has('mobile_no'))
                        <span class="text-danger">
                            <strong>{{ $errors->first('mobile_no') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-4 control-label" for="alt_mobile_no">Alternate Mobile No. (if any) <span class="text-danger">*</span> :</label>
                    <div class="col-sm-6">
                        <input id="alt_mobile_no" type="text" max="10" Placeholder="Enter 10 digit mobile no" class="form-control" name="alt_mobile_no" value="{{ old('alt_mobile_no') }}" required>
                        @if ($errors->has('alt_mobile_no'))
                        <span class="text-danger">
                            <strong>{{ $errors->first('alt_mobile_no') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-4 control-label" for="gender">Applicant Gender <span class="text-danger">*</span> :</label>
                    <div class="col-sm-6">
                        <div class="radio">
                            <label for="radios-4">
                                <input type="radio" name="gender" id="radios-1" value="Male">
                                Male
                            </label>&nbsp;&nbsp;
                            <label for="radios-5">
                                <input type="radio" name="gender" id="radios-2" value="Female">
                                Female
                            </label>&nbsp;&nbsp;
                            <label for="radios-5">
                                <input type="radio" name="gender" id="radios-3" value="Transgender">
                                Transgender
                            </label>
                        </div>
                        @if ($errors->has('gender'))
                        <span class="text-danger">
                            <strong>{{ $errors->first('gender') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-4 control-label" for="date_of_birth">Date of Birth<span class="text-danger">*</span> :</label>
                    <div class="col-sm-6">
                        <input id="date_of_birth" type="text" Placeholder="Enter date of birth" class="form-control" name="date_of_birth" value="{{ old('date_of_birth') }}" required>
                        @if ($errors->has('date_of_birth'))
                        <span class="text-danger">
                            <strong>{{ $errors->first('date_of_birth') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-4 control-label" for="address">Address <span class="text-danger">*</span> :</label>
                    <div class="col-md-6">
                        <textarea class="form-control" id="address" name="address" placeholder="Enter address" data-parsley-required="true">{{ old('address') }}</textarea>
                        @if ($errors->has('address'))
                        <span class="help-block" style="color:red">
                            <strong>{{ $errors->first('address') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-4 control-label" for="date_of_admission">Date of Admission<span class="text-danger">*</span> :</label>
                    <div class="col-sm-6">
                        <input id="date_of_admission" type="text" Placeholder="Enter date of admission" class="form-control" name="date_of_admission" value="{{ old('date_of_admission') }}" required>
                        @if ($errors->has('date_of_admission'))
                        <span class="text-danger">
                            <strong>{{ $errors->first('date_of_admission') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
            </fieldset>
            <fieldset class="form-border">
                <legend class="form-border"><span class="label label-info">MEDICAL QUESTIONAIRES</span></legend>
                <!-- Multiple Checkboxes -->
                <div class="form-group row">
                    <label class="col-sm-4 control-label" for="checkboxes">Do you have any one of the following?</label>
                    <div class="col-sm-2">
                        <div class="checkbox">
                            <label for="checkboxes-0">
                                <input type="checkbox" name="checkboxes" id="checkboxes-0" value="Heart Disease">
                                Heart Disease
                            </label>
                        </div>
                        <div class="checkbox">
                            <label for="checkboxes-1">
                                <input type="checkbox" name="checkboxes" id="checkboxes-1" value="Diabetes">
                                Diabetes
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="checkbox">
                            <label for="checkboxes-2">
                                <input type="checkbox" name="checkboxes" id="checkboxes-2" value="Dizziness">
                                High/Low Blood Pressure
                            </label>
                        </div>
                        <div class="checkbox">
                            <label for="checkboxes-3">
                                <input type="checkbox" name="checkboxes" id="checkboxes-3" value="High/Low Blood Pressure">
                                Dizziness
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="checkbox">
                            <label for="checkboxes-4">
                                <input type="checkbox" name="checkboxes" id="checkboxes-4" value="Asthma">
                                Asthma
                            </label>
                        </div>
                        <div class="checkbox">
                            <label for="checkboxes-5">
                                <input type="checkbox" name="checkboxes" id="checkboxes-5" value="Arthritis">
                                Arthritis
                            </label>
                        </div>
                    </div>
                </div>
                <!-- Multiple Checkboxes -->
                <div class="form-group row">
                    <label class="col-sm-4 control-label" for="checkboxes">Do you have any problems/ injuries in the following body parts?</label>
                    <div class="col-sm-4">
                        <div class="checkbox">
                            <label for="checkboxes-6">
                                <input type="checkbox" name="checkboxes" id="checkboxes-6" value="Lower Back">
                                Lower Back
                            </label>
                        </div>
                        <div class="checkbox">
                            <label for="checkboxes-7">
                                <input type="checkbox" name="checkboxes" id="checkboxes-7" value="Neck">
                                Neck
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="checkbox">
                            <label for="checkboxes-8">
                                <input type="checkbox" name="checkboxes" id="checkboxes-8" value="Shoulders">
                                Shoulders
                            </label>
                        </div>
                        <div class="checkbox">
                            <label for="checkboxes-9">
                                <input type="checkbox" name="checkboxes" id="checkboxes-9" value="Hips/Pelvis">
                                Hips/Pelvis
                            </label>
                        </div>
                    </div>
                </div>
            </fieldset>
            
            <div class="form-group row">
                <label class="col-sm-3 control-label" for="Save">&nbsp;</label>
                <div class="col-sm-6">
                    <input type="submit" id="Save" name="Save" value="Click Here To Save" class="btn btn-primary btn-md btn-block">
                </div>
            </div>
        </form>
    </div>
</div>


<div id="my_photo_booth">
		<div id="my_camera"></div>
		
		<!-- First, include the Webcam.js JavaScript Library -->
        <script src="{{ asset('js/webCam/webcam.min.js') }}"></script>		

		<!-- Configure a few settings and attach camera -->
		<script language="JavaScript">
			Webcam.set({
				// live preview size
				width: 320,
				height: 240,
				
				// device capture size
				dest_width: 640,
				dest_height: 480,
				
				// final cropped size
				crop_width: 480,
				crop_height: 480,
				
				// format and quality
				image_format: 'jpeg',
				jpeg_quality: 90,
				
				// flip horizontal (mirror mode)
				flip_horiz: true
			});
			Webcam.attach( '#my_camera' );
		</script>
		
		<!-- A button for taking snaps -->
		<form>
			<div id="pre_take_buttons">
				<!-- This button is shown before the user takes a snapshot -->
				<input type=button value="Take Snapshot" onClick="preview_snapshot()">
			</div>
			<div id="post_take_buttons" style="display:none">
				<!-- These buttons are shown after a snapshot is taken -->
				<input type=button value="&lt; Take Another" onClick="cancel_preview()">
				<input type=button value="Save Photo &gt;" onClick="save_photo()" style="font-weight:bold;">
			</div>
		</form>
	</div>
	
	<div id="results" style="display:none">
		<!-- Your captured image will appear here... -->
	</div>
	
	<!-- Code to handle taking the snapshot and displaying it locally -->
	<script language="JavaScript">
		// preload shutter audio clip
		var shutter = new Audio();
		shutter.autoplay = false;
		shutter.src = navigator.userAgent.match(/Firefox/) ? 'shutter.ogg' : 'shutter.mp3';
		
		function preview_snapshot() {
			// play sound effect
			try { shutter.currentTime = 0; } catch(e) {;} // fails in IE
			shutter.play();
			
			// freeze camera so user can preview current frame
			Webcam.freeze();
			
			// swap button sets
			document.getElementById('pre_take_buttons').style.display = 'none';
			document.getElementById('post_take_buttons').style.display = '';
		}
		
		function cancel_preview() {
			// cancel preview freeze and return to live camera view
			Webcam.unfreeze();
			
			// swap buttons back to first set
			document.getElementById('pre_take_buttons').style.display = '';
			document.getElementById('post_take_buttons').style.display = 'none';
		}
		
		function save_photo() {
			// actually snap photo (from preview freeze) and display it
			Webcam.snap( function(data_uri) {
				// display results in page
				document.getElementById('results').innerHTML = 
					'<h2>Here is your large, cropped image:</h2>' + 
					'<img src="'+data_uri+'"/><br/></br>' + 
					'<a href="'+data_uri+'" target="_blank">Open image in new window...</a>';
				
				// shut down camera, stop capturing
				Webcam.reset();
				
				// show results, hide photo booth
				document.getElementById('results').style.display = '';
				document.getElementById('my_photo_booth').style.display = 'none';
			} );
		}
	</script>
@stop