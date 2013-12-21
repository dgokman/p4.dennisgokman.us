//Make sure all fields are completed
$('form')
.on( "submit", function()
{
var adj1=document.forms["madlibs"]["adj1"].value;
if (adj1==null || adj1=="")
  {
  alert("All spaces must be filled out");
  return false;
  }
{
var adj2=document.forms["madlibs"]["adj2"].value;
if (adj2==null || adj2=="")
  {
  alert("All spaces must be filled out");
  return false;
  }
}
{
var name1=document.forms["madlibs"]["name1"].value;
if (name1==null || name1=="")
  {
  alert("All spaces must be filled out");
  return false;
  }
}
{
var adverb1=document.forms["madlibs"]["adverb1"].value;
if (adverb1==null || adverb1=="")
  {
  alert("All spaces must be filled out");
  return false;
  }
}
{
var plnoun1=document.forms["madlibs"]["plnoun1"].value;
if (plnoun1==null || plnoun1=="")
  {
  alert("All spaces must be filled out");
  return false;
  }
}
{
var number1=document.forms["madlibs"]["number1"].value;
if (number1==null || number1=="")
  {
  alert("All spaces must be filled out");
  return false;
  }
}
{
var adj3=document.forms["madlibs"]["adj3"].value;
if (adj3==null || adj3=="")
  {
  alert("All spaces must be filled out");
  return false;
  }
}
{
var adverb2=document.forms["madlibs"]["adverb2"].value;
if (adverb2==null || adverb2=="")
  {
  alert("All spaces must be filled out");
  return false;
  }
}
{
var name2=document.forms["madlibs"]["name2"].value;
if (name2==null || name2=="")
  {
  alert("All spaces must be filled out");
  return false;
  }
}
{
var adj4=document.forms["madlibs"]["adj4"].value;
if (adj4==null || adj4=="")
  {
  alert("All spaces must be filled out");
  return false;
  }
}
{
var noun1=document.forms["madlibs"]["noun1"].value;
if (noun1==null || noun1=="")
  {
  alert("All spaces must be filled out");
  return false;
  }
}
{
var name3=document.forms["madlibs"]["name3"].value;
if (name3==null || name3=="")
  {
  alert("All spaces must be filled out");
  return false;
  }
}
{
var noun2=document.forms["madlibs"]["noun2"].value;
if (noun2==null || noun2=="")
  {
  alert("All spaces must be filled out");
  return false;
  }
}
{
var brand=document.forms["madlibs"]["brand"].value;
if (brand==null || brand=="")
  {
  alert("All spaces must be filled out");
  return false;
  }
}
{
var liquid=document.forms["madlibs"]["liquid"].value;
if (liquid==null || liquid=="")
  {
  alert("All spaces must be filled out");
  return false;
  }
}
{
var adj5=document.forms["madlibs"]["adj5"].value;
if (adj5==null || adj5=="")
  {
  alert("All spaces must be filled out");
  return false;
  }
}
{
var adj6=document.forms["madlibs"]["adj6"].value;
if (adj6==null || adj6=="")
  {
  alert("All spaces must be filled out");
  return false;
  }
}
});

// Set up the options for ajax
var options = { 
    type: 'POST',
    url: '/posts/p_add/',
    success: function(response) {   
        $('#results').html("<p id='linklist'>Now select a MAAD Lib from the below to read your story</p><a href='/posts/madlib1/'>A CLASSIC MADLIB FROM 1958</a><br><a href='/posts/madlib2/'>AT THE DOCTOR'S OFFICE</a><br><a href='/posts/madlib3/'>A MODERN FABLE</a>"); 
       
    } 
}; 


// Using the above options, ajax'ify the form
$('form').ajaxForm(options);


