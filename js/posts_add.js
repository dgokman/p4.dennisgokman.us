// Set up the options for ajax
var value1 = $('#submitval' ).val();
var options = { 
    type: 'POST',
    url: '/posts/p_add/',
    beforeSubmit: function() {
        
    },
    success: function(response) {   
        $('#name').append( $( "input" ).val('#chat')); 
    	
    	//$ ('#chat').append( $(value1));
    } 
}; 

// Using the above options, ajax'ify the form
$('form').ajaxForm(options);