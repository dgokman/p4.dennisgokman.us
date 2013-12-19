// Set up the options for ajax
var options = { 
    type: 'POST',
    url: '/posts/p_add/',
    success: function(response) {   
        $('#results').html( "you're done!"); 
       
    	
    	//$ ('#chat').append( $(value1));
    } 
}; 



// Using the above options, ajax'ify the form
$('form').ajaxForm(options);
