$(function () {

	// Search the document for Forms on Fire classed checkboxes, hide real checkboxes and insert HTML
	$("input[type=checkbox].FoF").each(function(){

		// Check the status of the checkbox and insert specific html with class for checked/unchecked
		if ($(this).prop('checked')) {

			$(this).hide().before('<div class="FoF-checkbox checked"></div>');

		} else {

			$(this).hide().before('<div class="FoF-checkbox"></div>');

		}

		// Check to see if 
		// if (($this).is([id]) {

		// }
		
	});

	// Handle click on HTML checkboxes, add 'checked' class and handle checkbox form element as well
	function FoFCheckBoxSwitch() {
		$(".FoF-checkbox").on("click", function() {

			if ($(this).hasClass('checked')) {

				$(this).removeClass('checked');
				$(this).next('input[type=checkbox]').removeAttr('checked');

			} else {

				$(this).addClass('checked');
				$(this).next('input[type=checkbox]').attr('checked', 'checked');

			}

			return false;
		});
	}

	// Run the default checkbox click behaviour
	FoFCheckBoxSwitch();

	 
});