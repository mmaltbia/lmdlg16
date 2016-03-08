jQuery(document).ready(function($){

	var mykey = 'AIzaSyCYM720IY7igMXCd7zx-_dglCbIrluR50A'; // typically like Gtg-rtZdsreUr_fLfhgPfgff
	var calendarid = 'm5kl3tpktomvo7b2446j0mg4v0@group.calendar.google.com'; // will look somewhat like 3ruy234vodf6hf4sdf5sd84f@group.calendar.google.com

	var calendar;
	$.ajax({
	    type: 'GET',
	    url: encodeURI('https://www.googleapis.com/calendar/v3/calendars/'+ calendarid +'/events?key='+ mykey),
	    dataType: 'json',
	    success: function (data) {
	    var today = new Date();
	    var month = today.getMonth()+1;
	    var day = today.getDate();
	    var year = today.getFullYear();
	    var today = year + '-' + month + '-' + day;
	    var calendar = data;
	    var upcoming = [];
	    	for (i=211; i<calendar.items.length; i++){
	    		if(calendar.items[i].end.date > today){
	    			var newEvent = calendar.items[i];
	    			console.log(newEvent);
	    			upcoming.push(newEvent);
	    		}
	    	}
	    	for(i=0; i<upcoming.length; i++){
	    		jQuery('#events-upcoming').append(
	    			'<li><h4>'+ upcoming[i].summary +'</h4><p>' + upcoming[i].start.date + '</p></li>'
    			);
	    	}
	    },
	    error: function (response) {
	        //tell that an error has occurred
	        console.log('error has occured.');
	    }
	});




});