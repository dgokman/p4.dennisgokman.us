// Set up the options for ajax
var options = { 
    type: 'POST',
    url: '/posts/p_add/',
    beforeSubmit: function() {
        $('#results').html("Adding...");
    },
    success: function(response) {   
        $('#results').html("Well said");
        
    } 
}; 

// Using the above options, ajax'ify the form
$('form').ajaxForm(options);