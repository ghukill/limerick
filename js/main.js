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


function viewSubmission(limerick_id){	

	searchObj = {		
		"q":"id:*",		
		"rows":1000,
		"wt":"json",
		"fq":"limerick_txt:*" // ensures limerick_txt exists
	}	
	
	var searchJSON = JSON.stringify(searchObj);
	console.log(searchJSON);
	
	var dataObj = {
		"functions[]" : "pubStore",		
		"urlsuff" : "select",
		"json" : searchJSON		
	}

	$.ajax({
		url: "http://digital.library.wayne.edu/WSUAPI-dev",
		data:dataObj,
		context: document.body
	}).done(function(response) {
		console.log(response);		
		limeHand = response.pubStore.response.docs;
		// display limerick as tiles
		$("#display_section").fadeIn();		
		for (var i=0; i<limeHand.length; i = i+3){
			console.log(limeHand[i].email_s);			
			// prepare carriage returns
			var text = limeHand[i].limerick_txt[0].replace(/(\r\n|\n|\r)/g,"<br />");
			var text1 = limeHand[i+1].limerick_txt[0].replace(/(\r\n|\n|\r)/g,"<br />");
			var text2 = limeHand[i+2].limerick_txt[0].replace(/(\r\n|\n|\r)/g,"<br />");
			var html_string = '<div id="row"><div class="col-md-4"><h3 id="limerick_text_display">'+text+'</h3></div><div class="col-md-4"><h3 id="limerick_text_display">'+text1+'</h3></div><div class="col-md-4"><h3 id="limerick_text_display">'+text2+'</h3></div></div>'
			console.log(html_string);
			$("#limerick_results").append(html_string);
		}			
	}).fail(function(response){
		console.log(response);
		alert("There was an error.");
	});

}