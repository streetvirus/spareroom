<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>The Spare Room</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="assets/css/bootstrap.css">
        <link rel="stylesheet" href="assets/css/bootstrap-formhelpers.css">
        <link rel="stylesheet" href="assets/css/main.css">

        <link rel="stylesheet" href="assets/js/vendor/datepicker/css/datepicker.css">

        <script src="assets/js/vendor/modernizr.min.js"></script>
	<!--


		 .d8888b.                 888        8888888888        .d8888b.
		d88P  Y88b                888          888  888       d88888888b
		Y88b.                     888          888  888      d888888888P
		 "Y888b.  888  888 .d8888b888  888     888  888888  l888888888"
		    "Y88b.888  888d88P"   888 .88P     888  888     Db888888888b.
		      "888888  888888     888888K      888  888      Y8888888888.
		Y88b  d88PY88b 888Y88b.   888 "88b     888  Y88b.     Y88888888P
		 "Y8888P"  "Y88888 "Y8888P888  888   8888888 "Y888     "Y8888P"


	-->
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

		<div id="wrapper">

			<div id="wrap" class="reservations">
				<div class="container-fluid">

					<div class="row-fluid" id="header">
						<div class="span10 offset1 align-center">
							<h1>Reservations</h1>
						</div>
					</div><!-- #header -->

					<div id="rules" class="form-visible">
						<div class="row-fluid">
							<div class="span10 offset1 align-center">
								<p>On-line Reservation Request Form. Please read before proceeding.</p>
							</div>
						</div>
						<div class="row-fluid">
							<div class="span6 offset1">
								<h4>Lounge or Bowling Alley?</h4>
								<p><strong>Sed posuere</strong> - <strong>$100</strong> - consectetur est at lobortis. Fusce dapibus, tellus ac cursus commodo.</p>
								<p><strong>Pellentesque</strong> - ornare sem lacinia quam venenatis vestibulum. Aenean eu leo quam.</p>

								<h4>Rules:</h4>
								<ul>
									<li>Fermentum Vestibulum Parturient</li>
									<li>Vestibulum Purus Lorem</li>
									<li>Inceptos Malesuada Consectetur</li>
									<li>Etiam Pellentesque Malesuada</li>
								</ul>
							</div>
							<div class="span4">
								<h4>FAQ:</h4>
								<dl>
									<dt>Ullamcorper Euismod Dolor?</dt>
									<dd>Aenean lacinia bibendum nulla sed consectetur. Sed posuere consectetur est at lobortis.</dd>
									<dt>Justo Ligula Vehicula Bibendum?</dt>
									<dd>Maecenas sed diam eget risus varius blandit sit amet non magna.</dd>
									<dt>Nullam id dolor id nibh ultricies?</dt>
									<dd>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</dd>
								</dl>
							</div>
						</div>
						<div class="row-fluid">
							<div class="span12">
								<button type="submit" class="btn btn-inverse align-center request-reservation">Request a Reservation</button>
							</div>
						</div>
					</div><!-- #rules -->

					<div id="form-body" class="row-fluid form-hidden">
						<p class="align-center">We will notify you by email when we've confirmed your reservation date, time and placement.</p>
						<form id="reservation-book-form" class="form-horizontal offset2 span8" method="POST" action="https://www.sevenrooms.com/api/1_0/venue/thespareroom/custom-request/create/">
							<input type="hidden" readonly id="secret_key" name="secret_key" value="a24asf25hjkjh35fgw" required>
							<input type="hidden" readonly id="request_class" name="request_class" value="table" required>

							<h4>Contact Information</h4>
							<div class="control-group indent-warning resetable">
								<label class="control-label" for="first_name">First Name</label>
								<div class="controls">
									<select id="client_title" name="client_title" class="input-small">
										<option value=""></option>
										<option value="Mr">Mr</option>
										<option value="Mrs">Mrs</option>
										<option value="Ms">Ms</option>
									</select>
									<input type="text" id="first_name" name="first_name" value="" placeholder="First" required>
								</div>
							</div><!-- .control-group -->

							<div class="control-group resetable">
								<label class="control-label" for="last_name">Last Name</label>
								<div class="controls">
									<input type="text" id="last_name" name="last_name" value="" placeholder="Last" required>
								</div>
							</div><!-- .control-group -->

							<div class="control-group resetable">
								<label class="control-label" for="phone">Phone Number</label>
								<div class="controls">
									<input type="text" class="bfh-phone" data-country="US" id="phone_number" name="phone_number" value="" placeholder="000-000-000" required>
								</div>
							</div><!-- .control-group -->

							<div class="control-group resetable">
								<label class="control-label" for="email">Email Address</label>
								<div class="controls">
									<input type="email" id="email" name="email" value="" placeholder="email@address.com" required>
								</div>
							</div><!-- .control-group -->

							<h4>Reservation Details</h4>

							<div class="control-group">
								<label class="control-label" for="seating_area">Seating Area</label>
								<div class="controls">
									<label class="radio">
										<input type="radio" name="seating_area" id="seating_area_lounge" value="LOUNGE" checked>
										Lounge Area
									</label>
									<label class="radio">
										<input type="radio" name="seating_area" id="seating_area_lane" value="LANE">
										Bowling Lane
									</label>
								</div>
							</div><!-- .control-group -->

							<div class="control-group">
								<label class="control-label" for="party_size">Party Size</label>
								<div class="controls">
										<input min="1" type="number" id="party_size" name="party_size" value="1" required />
								</div>
							</div><!-- .control-group -->

							<div class="control-group">
								<label class="control-label" for="est_arrival_time">Estimated Arrival</label>
								<div class="controls">
									<select id="est_arrival_time" name="est_arrival_time" required>
										<option value="7:00 PM">7:00 PM</option>
										<option value="7:15 PM">7:15 PM</option>
										<option value="7:30 PM">7:30 PM</option>
										<option value="7:45 PM">7:45 PM</option>
										<option value="8:00 PM">8:00 PM</option>
										<option value="8:15 PM">8:15 PM</option>
										<option value="8:30 PM">8:30 PM</option>
										<option value="8:45 PM">8:45 PM</option>
										<option value="9:00 PM">9:00 PM</option>
										<option value="9:15 PM">9:15 PM</option>
										<option value="9:30 PM">9:30 PM</option>
										<option value="9:45 PM">9:45 PM</option>
										<option value="10:00 PM">10:00 PM</option>
										<option value="10:15 PM">10:15 PM</option>
										<option value="10:30 PM">10:30 PM</option>
										<option value="10:45 PM">10:45 PM</option>
										<option value="11:00 PM">11:00 PM</option>
										<option value="11:15 PM">11:15 PM</option>
										<option value="11:30 PM">11:30 PM</option>
										<option value="11:45 PM">11:45 PM</option>
										<option value="12:00 AM">12:00 AM</option>
										<option value="12:15 AM">12:15 AM</option>
										<option value="12:30 AM">12:30 AM</option>
										<option value="12:45 AM">12:45 AM</option>
										<option value="1:00 AM">1:00 AM</option>
										<option value="1:15 AM">1:15 AM</option>
										<option value="1:30 AM">1:30 AM</option>
									</select>
								</div>
							</div><!-- .control-group -->

							<div class="control-group">
								<label class="control-label" for="dp3">Reservation Date</label>
								<div class="controls">
									<div class="input-append date">
										<input type="text" class="span2" required id="date" name="date" readonly value="<?php
										// Checks if the Day of the week (31 days from current date) is either Sunday or Tuesday. If so, it pushes the day forward by 1.
										$date = date("w", strtotime("+31 days"));
										if ($date == 0 || $date == 2){
											echo date("Y-m-d", strtotime("+32 days"));
										} else {
											echo date("Y-m-d", strtotime("+31 days"));
										}
										 ?>"><span class="add-on"><i class="icon-th"></i></span>
									</div>
								</div>
							</div><!-- .control-group -->

							<div class="control-group resetable">
								<label class="control-label" for="client_request">Additional Information</label>
								<div class="controls">
									<textarea id="client_request" name="client_request" maxlength="300"></textarea>
								</div>
							</div><!-- .control-group -->

							<div class="form-actions">
								<button type="submit" class="btn btn-inverse submit-button">Submit Request</button>
								<button type="button" class="btn reset-form">Reset Form</button>
							</div>
						</form><!-- #reservation-book-form -->
					</div><!-- #form-body -->

					<div id="confirmation" class="row-fluid biography">
						<div class="span10 offset1 align-center address well">
							<h4>Thank You</h4>
							<p>Your reservation request has been submitted.</p>
							<p>Please allow up to 48 hours for us to verify and book your reseration. You will be notified by email.</p>
						</div>
					</div><!-- #confirmation -->

				</div><!-- .container -->
				<div id="push" class="push"></div>
			</div><!-- #wrap -->
<style>
#footer,
#push {
	height: 50px;
}

#wrap {
	margin-bottom: -70px;
}
</style>
			<div id="footer">
				<div class="container-fluid">
					<div class="row-fluid">
						<div class="span12 align-center">
							Copyright &copy; 2013 The Spare Room
						</div>
					</div>
				</div><!-- .container -->
			</div><!-- #footer -->

		</div><!-- #wrapper -->

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
        <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery.js"><\/script>')</script>

        <script src="assets/js/vendor/bootstrap.min.js"></script>
        <script src="assets/js/vendor/datepicker/js/bootstrap-datepicker.js"></script>
        <script src="assets/js/vendor/validation/jquery.validate.js"></script>
        <script src="assets/js/vendor/validation/additional-methods.js"></script>
        <script src="assets/js/vendor/date.js"></script>
        <script src="assets/js/vendor/bootstrap/bootstrap-formhelpers-phone.js"></script>
        <script src="assets/js/vendor/bootstrap/bootstrap-formhelpers-phone.format.js"></script>

        <script type="text/javascript">
			$(function(){
				function reservationSubmit(){
					$.ajax({
						type: 'POST',
						dataType: 'json',
						url: 'https://www.sevenrooms.com/api/1_0/venue/thespareroom/custom-request/create/',
						data: $('#reservation-book-form').serialize(),
						success: function(response){
						//	console.log(response['is_success']);
						//	console.log(response['error_message']);
							var $success = response['is_success'];
							var $error = response['error_message'];

							if($success == true && $error == null){
								// Successful Form Submission
								$('#reservation-book-form').fadeOut();

							} else if ($success == false && $error != null){
								alert('Error: ' + $error + '. Please contact reservations@spareroomhollywood.com');
							} else {
								alert('We\'ve encountered an error, please contact reservations@spareroomhollywood.com');
							}
				        },
				        error: function(response){
								alert('We\'ve encountered an error, please contact reservations@spareroomhollywood.com');
				        }
					});
				}

				var $validation = $('#reservation-book-form').validate({
					messages: {
						email: {
							required: "We need your email address to contact you",
							email: "Your email address must be in the format of name@domain.com"
						}
					},
					submitHandler: function(){
						reservationSubmit();
					}
				});

				$('#reservation-book-form').submit(function(){
					$('#reservation-book-form').fadeOut();
					return false;
				});

				$('.reset-form').click(function(){
				  	$(".resetable input, .resetable textarea").val('');
				    $validation.resetForm();
				    return false;
				});

				$('.request-reservation').click(function(){
					$('.form-visible').slideUp();
					$('.form-hidden').fadeIn();
				});

				$('#est_arrival_time').change(function(){
					var $timeValue = $(this).val();
					var $dateValue = $('.input-append.date input').val();
					var $dayValue = new Date($dateValue).getDay();

			    	if($timeValue.indexOf("AM") !== -1){
			        	update_datepicker();
			    	} else {
			        	if ($dayValue == 6 || $dayValue == 1){
			        		$('.input-append.date input').val(Date.parse($dateValue,'yyyy-MM-dd').addDays(1).toString('yyyy-MM-dd'));
			        	}
			        	update_datepicker('0,2');
			    	}

				});

				function update_datepicker(date_restricted){
					$('.input-append.date').datepicker('remove');
					$('.input-append.date').datepicker({
					    format: "yyyy-mm-dd",
					    startDate: "<?php echo date("Y/m/d", strtotime("+31 days")); ?>",
					    endDate: "<?php echo date("Y/m/d", strtotime("+60 days")); ?>",
					    daysOfWeekDisabled: date_restricted
					});
				}

				update_datepicker('0,2');
			});
        </script>
        <script>
            var _gaq=[['_setAccount','UA-40403562-1'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
    </body>
</html>

