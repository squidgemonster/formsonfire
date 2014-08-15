<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
<script>document.documentElement.className = document.documentElement.className.replace(/\bno-js\b/,'js');</script>
<meta charset="utf-8">

<title>Forms on Fire</title>
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="">
<meta name="robots" content="follow, index">

<link rel="stylesheet" href="style.css?v=1.1">

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
</head>

<body>


<form>

	<fieldset>

		<legend>Form legend goes here...</legend>

		<p class="FoF-Dotted"><span class="req">*</span> Required field</p>

		<div style="display:inline-block; vertical-align:top; width:40%; text-align:left;">
			<div class="FoF-Dotted">
				<label for="size_1"><span class="req">*</span> Name</label>
				<input type="text" name="size" id="size_1" placeholder="Your name..." />
			</div>

			<div class="FoF-Dotted">
				<label for="size_1"><span class="req">*</span> Email address</label>
				<input type="text" name="size" id="size_1" placeholder="Your email address..." />
			</div>

			<div class="FoF-Dotted">
				<label for="size_1">Phone number</label>
				<input type="text" name="size" id="size_1" placeholder="Your phone number..." />
			</div>

			<div class="FoF-Dotted">
				<label for="size_1">Address</label>
				<input type="text" name="size" id="size_1" placeholder="Your address..." />
			</div>
		</div>

		<div style="display:inline-block; vertical-align:top; width:40%; text-align:left;">
			<div class="FoF-Dotted textarea">
				<label for="size_1">Message</label>
				<textarea name="something" placeholder="Your message..."></textarea>
			</div>
		</div>

	</fieldset>

</form>


<form>

	<fieldset>
		<legend>Form legend goes here...</legend>

		<label for="male">Male</label>
			<input type="checkbox" name="sex" value="male" id="male" class="FoF" checked />

		<label>Female</label>
			<input type="checkbox" name="sex" value="female" id="female" class="FoF" checked />


		<!-- <div class="FoF on">
			<div class="FoF-label checkbox">
				<div class="FoF-checkbox">
					<div class="FoF-checkbox-selector"></div>
				</div>
				Label goes here
			</div>
		    <input type="checkbox" name="size" id="size_1" value="small" />
		    <label for="size_1">Small</label>
	    </div>

	    <div class="FoF off">
			<div class="FoF-label checkbox">
				<div class="FoF-checkbox">
					<div class="FoF-checkbox-selector"></div>
				</div>
				Label goes here
			</div>
		    <input type="checkbox" name="size" id="size_1" value="small" />
		    <label for="size_1">Small</label>
	    </div>

	    <div class="FoF disabled on">
			<div class="FoF-label checkbox">
				<div class="FoF-checkbox">
					<div class="FoF-checkbox-selector"></div>
				</div>
				Label goes here
			</div>
		    <input type="checkbox" name="size" id="size_1" value="small" />
		    <label for="size_1">Small</label>
	    </div>

	    <div class="FoF disabled off">
			<div class="FoF-label checkbox">
				<div class="FoF-checkbox">
					<div class="FoF-checkbox-selector"></div>
				</div>
				Label goes here
			</div>
		    <input type="checkbox" name="size" id="size_1" value="small" />
		    <label for="size_1">Small</label>
	    </div>

		<div class="FoF on">
			<div class="FoF-label radio">
				<div class="FoF-radio">
					<div class="FoF-radio-selector"></div>
				</div>
				Label goes here
			</div>
		    <input type="radio" name="size" id="size_1" value="small" />
		    <label for="size_1">Small</label>
	    </div>

	    <div class="FoF off">
			<div class="FoF-label radio">
				<div class="FoF-radio">
					<div class="FoF-radio-selector"></div>
				</div>
				Label goes here...
			</div>
		    <input type="radio" name="size" id="size_1" value="small" />
		    <label for="size_1">Small</label>
	    </div>

	    <div class="FoF disabled on">
			<div class="FoF-label radio">
				<div class="FoF-radio">
					<div class="FoF-radio-selector"></div>
				</div>
				Label goes here...
			</div>
		    <input type="radio" name="size" id="size_1" value="small" />
		    <label for="size_1">Small</label>
	    </div>

	     <div class="FoF disabled off">
			<div class="FoF-label radio">
				<div class="FoF-radio">
					<div class="FoF-radio-selector"></div>
				</div>
				Label goes here...
			</div>
		    <input type="radio" name="size" id="size_1" value="small" />
		    <label for="size_1">Small</label>
	    </div>

	    <div class="FoF required">
	    	<div class="FoF-label text">Label goes here...</div>
	    		<span class="FoF-text-border">
		    		<input type="text" name="size" id="size_1" placeholder="Label goes here..." />
		    	</span>
		    <label for="size_1">Small</label>
	    </div>

	    <div class="FoF focus">
	    	<div class="FoF-label text">Label goes here...</div>
	    		<span class="FoF-text-border">
		    		<input type="text" name="size" id="size_1" placeholder="Label goes here..." />
		    	</span>
		    <label for="size_1">Small</label>
	    </div>

	    <div class="FoF disabled">
	    	<div class="FoF-label text">Label goes here...</div>
	    		<span class="FoF-text-border">
		    		<input type="text" name="size" id="size_1" placeholder="Label goes here..." />
		    	</span>
		    <label for="size_1">Small</label>
	    </div> -->

	</fieldset>

</form>

<script src="forms-on-fire.js" />
<script>
$(document).ready(function () { 

	// $('.toggler').live("click", function(){

	// 	if($(this).hasClass('on')) {
	// 		$('.slider').animate({"left": "-40px"}, "slow");
	// 	} else {
	// 		$('.slider').animate({"left": "40px"}, "slow");
	// 	}

	// });

	$(document).on("click", ".toggler", function(){ 

		if($(this).hasClass('on')) {
			$(this).find('.slider').animate({"left": "-40px"}, "fast");
			$(this).addClass('off');
			$(this).removeClass('on');
		} else {
			$(this).find('.slider').animate({"left": "0"}, "fast");
			$(this).addClass('on');
			$(this).removeClass('off');
		}

	});

	$('.FoF-Dotted input').focus(function(){

		$(this).attr('placeholder', '');
		$(this).prev('label').fadeIn('slow');
		$(this).addClass('on');

	});

	$('.notification-trigger').click(function(){
		$('#notification').show();
		$('#notification').animate({'opacity': 0}, 0);
		$('#notification').animate({'opacity': 1,  'bottom': '50%'}, 450).delay(2250).animate({'opacity':0, 'bottom':'100%'}, 800, function() {
  			$('#notification').removeAttr('style');});
		// $('#notification').attr('style','');
		return false;
	});

});
</script>
</body>
</html>