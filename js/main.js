// global
var limerickObj = {};


// pubstore testing
function sendLimerick(){

	// grab inputs from form
	var limerick_input = $("#limerick_input").val();
	var name_input = $("#name_input").val();
	var email_input = $("#email_input").val();

	var limerickArray = [];
	limerickObj = {
		"id":email_input,
		"name_s":name_input,
		"email_s":email_input,
		"limerick_txt":limerick_input
	}	

	limerickArray.push(limerickObj);
	var limerickJSON = JSON.stringify(limerickArray);
	console.log(limerickObj);
	
	var dataObj = {
		"functions[]" : "pubStore",		
		"urlsuff" : "update/json?commit=true",
		"json" : limerickJSON
	}

	$.ajax({
		url: "http://digital.library.wayne.edu/WSUAPI-dev",
		data:dataObj,
		context: document.body
	}).done(function(response) {
		console.log(response);		
		displaySubmittedLimerick(limerickObj);
	}).fail(function(response){
		console.log(response);
		alert("There was an error.");
	});
}


function displaySubmittedLimerick(limerickObj){
	$("#input_section").hide();
	// prepare carriage returns
	var text = limerickObj.limerick_txt.replace(/(\r\n|\n|\r)/g,"<br />");
	$("#limerick_text_display").html(text);	
	$("#display_section").fadeIn();
}


function viewSubmission(){

}