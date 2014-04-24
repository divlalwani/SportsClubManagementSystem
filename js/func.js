
$(document).ready(function() {
	$('.slider').jcarousel( {
		initCallback: slider_initCallback,
		itemFirstInCallback: slider_firstInCallback,
		scroll: 1,
		auto: 5,
		wrap: 'both',
		// This tells jCarousel NOT to autobuild prev/next buttons
		buttonNextHTML: null,
		buttonPrevHTML: null
	});
});

function slider_initCallback (carousel) {
	
	$('.slider-nav a').bind('click', function() {
		carousel.scroll($.jcarousel.intval($(this).text()));
		return false;
	});
}



function slider_firstInCallback(carousel, item, idx, state) {
	$('.slider-nav a').removeClass('active');
	$('.slider-nav a').eq(idx-1).addClass('active');
}
function bookslot(thisform)
{
		myOption = -1;
						for (i=thisform.group1.length-1; i > -1; i--) {
						if (thisform.group1[i].checked) {
						myOption = i; i = -1;
							}
							}
						if (myOption == -1) {
						alert("You must select a radio button");
						return false;
						}
						alert("You selected movie number is " + myOption
						+ " which has a value of "
						+ thisform.group1[myOption].value);
						var val = thisform.group1[myOption].value;
					
						document.getElementById("slot").value = val;
						
						thisform.action = "books_submit.php";
					
						thisform.submit(); 
}
 $(function() {
    var fromDate = $("#dt").datepicker({
        defaultDate: "+1d",
        changeMonth: false,
        numberOfMonths: 1,
        minDate: new Date(),
		maxDate: "+15D",
         dateFormat: "yy-mm-dd" ,
        onSelect: function(selectedDate) {
            var instance = $(this).data("datepicker");
            var date = $.datepicker.parseDate(instance.settings.dateFormat || $.datepicker._defaults.dateFormat, selectedDate, instance.settings);
            date.setDate(date.getDate()+1);
            toDate.datepicker("option", "minDate", date);
        }
    });
    
   
});
 
  $(function() {
    $( "#datepicker" ).datepicker({
      changeMonth: true,
      changeYear: true,
	  yearRange: "-50:+0", 
    showOn: "both", 
    buttonImage: "images/Calendar.gif", 
    buttonImageOnly: true,
	dateFormat: "yy-mm-dd"
    });
  });



