// Can also be used with $(document).ready()
//Flexslider created by WooCommerce
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
	touch: true,
	slideshow: false
  });
});

document.addEventListener('copy', function(e) {
  var text_only = document.getSelection().toString();
  var clipdata = e.clipboardData || window.clipboardData;  
  clipdata.setData('text/plain', text_only);
  e.preventDefault();
});

//For showing different projects
function getParameterByName(name, url) {
    if (!url) url = window.location.href;
    name = name.replace(/[\[\]]/g, "\\$&");
    var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
        results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, " "));
}
// Give the parameter a variable name
var dynamicContent = getParameterByName('project');

 $(document).ready(function() {
	// Check if the URL parameter is apples
	if (dynamicContent == 'eng') {
		$('#eng').show();
	} 
	// Check if the URL parameter is oranges
	else if (dynamicContent == 'web') {
		$('#web').show();
	} 
	// Check if the URL parameter is bananas
	else if (dynamicContent == 'listen') {
		$('#listen').show();
	}
	else if (dynamicContent == 'saas') {
		$('#saas').show();
    }
	// Check if the URL parmeter is empty or not defined, display default content
	else {
		$('#web').show();
	}
});

$(document).ready(function(){
  $(".accordion").click(function(){
    $(this).parent().next().slideToggle("slow");
  });
});

