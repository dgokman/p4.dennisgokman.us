// Set up the options for ajax
var value1 = $('#submitval' ).val();
var options = { 
    type: 'POST',
    url: '/posts/p_add/',
    beforeSubmit: function() {
        
    },
    success: function(response) {   
        $('#name').innerHTML = '<b>' + $('#name').append( $( content ).val()) + '</b>'; 
       
    	
    	//$ ('#chat').append( $(value1));
    } 
}; 

// Using the above options, ajax'ify the form
$('form').ajaxForm(options);