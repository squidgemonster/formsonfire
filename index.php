<!doctype html>
<!--[if lt IE 10]>    <html class="no-js oldie" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
<script>document.documentElement.className = document.documentElement.className.replace(/\bno-js\b/,'js');</script>
<meta charset="utf-8">

<title>Forms on Fire</title>
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="">
<meta name="robots" content="follow, index">
<meta name="viewport" content="user-scalable=no,initial-scale=1.0,maximum-scale=1.0">

<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="style.css?v=1">

</head>

<body>

<section>

	<form>

		<fieldset>

			<legend>Form Legend: Forms on Fire</legend>

				<div class="fof-element">
					<label for="fof_name">Name</label>
					<input type="text" name="fof_name" id="fof_name" placeholder="Full name" />
				</div>

				<div class="fof-element">
					<label for="fof_email">Email address</label>
					<input type="email" name="fof_email" id="fof_email" placeholder="Email address" />
				</div>

				<div class="fof-element">
					<label for="fof_tel">Contact number</label>
					<input type="tel" name="fof_tel" id="fof_tel" placeholder="Contact phone number" />
				</div>

				<div class="fof-element">
					<label for="fof_date">Pick a date</label>
					<input type="date" name="fof_date" id="fof_date" placeholder="Pick a date" value="<?php echo date('Y-m-d'); ?>" />
				</div>

				<div class="fof-element">
					<label for="fof_zip">Zip / Postal code</label>
					<input type="text" name="fof_zip" id="fof_zip" placeholder="Zip / Postal Code" />
				</div>

				<div class="fof-element">
					<label for="fof-select" class="label">Select an option</label>
						<div class="fof-select">
							<select id="fof-select">
								<option value="" disabled selected>Please select one</option>
								<option>Select this option 01</option>
								<option>Select this option 02</option>
								<option>Select this option 03</option>
								<option>Select this option 04</option>
							</select>
						</div>
				</div>

				<div class="fof-element">
					<label for="fof_checkbox01">
						Please select this option
						<input type="checkbox" id="fof_checkbox01" />
						<i></i>
					</label>
				</div>

				<div class="fof-element">
					<label for="fof_checkboxSwitch01">
						Would you like to turn this on?
						<input type="checkbox" id="fof_checkboxSwitch01" />
						<i class="switch"></i>
					</label>
				</div>

				<div class="fof-element">
					<label for="fof_checkboxSwitch02">
						Would you like to turn this on?
						<input type="checkbox" id="fof_checkboxSwitch02" checked />
						<i class="switch"></i>
					</label>
				</div>

				<div class="fof-element">
					<label for="fof_checkboxSwitch03">
						Would you like to turn this on?
						<input type="checkbox" id="fof_checkboxSwitch03" checked disabled />
						<i class="switch"></i>
					</label>
				</div>

				<div class="fof-element list">
					<span class="label">Please select all that apply</span>
					<label for="fof_checkbox02">
						<input type="checkbox" id="fof_checkbox02" />
						<i></i>
						Option 01
					</label>
					<label for="fof_checkbox03">
						<input type="checkbox" id="fof_checkbox03" />
						<i></i>
						Option 02
					</label>
					<label for="fof_checkbox04">
						<input type="checkbox" id="fof_checkbox04" />
						<i></i>
						Option 03
					</label>
					<label for="fof_checkbox05">
						<input type="checkbox" id="fof_checkbox05" />
						<i></i>
						Option 05
					</label>
				</div>

				<div class="fof-element">
					<span class="label">Would you agree?</span>
					<label>
						Yes
						<input type="radio" name="fof_radio01" value="yes" />
						<i></i>
					</label>
					<label>
						No
						<input type="radio" name="fof_radio01" value="no" />
						<i></i>
					</label>
					<label>
						Don't know
						<input type="radio" name="fof_radio01" value="no" />
						<i></i>
					</label>
				</div>

				<div class="fof-element list">
					<span class="label">Please select one option</span>
					<label>
						<input type="radio" name="fof_radio02" value="1" />
						<i></i>
						Select one option
					</label>
					<label>
						<input type="radio" name="fof_radio02" value="2" />
						<i></i>
						Select one option
					</label>
					<label>
						<input type="radio" name="fof_radio02" value="3" />
						<i></i>
						Select one option
					</label>
				</div>

				<button>Go go go!</button>

		</fieldset>

	</form>

</section>

</body>
</html>