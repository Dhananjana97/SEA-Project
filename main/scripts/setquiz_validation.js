$('document').ready(function(){
	
});
function validate_form(){
	var valid = true;
	
	var now = new Date();
	
	var starttime_input = $('#starttime').val();
	var endtime_input = $('#endtime').val();
	var starttime = new Date(starttime_input);
	var endtime = new Date(endtime_input);
	
	var duration = $('#duration').val();
	var participants = $('#participants').val();
	var quizname = $('#quizname').val();
	
	if(starttime_input==""||endtime_input==""||participants==""||duration==""||quizname==""){
		alert("All the fields are mandotary");
		valid = false;
	}
	
	if(now>starttime){
		$('#start_notice').html("Invalid Date");
		valid = false;
	}
	if(now>endtime){
		$('#end_notice').html("Invalid Date");
		valid = false;
	}
	if(starttime>endtime){
		$('#end_notice').html("Invalid Period");
		valid = false;
	}
	if(duration <= 0){
		$('#duration_notice').html("Invalid Duration");
		valid = false;
	}
	if(valid){
		$('#set_quiz').submit();
	}
	
}