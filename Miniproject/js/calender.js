$('#menu2').click(function(){
	$('#main_body').html('');
	$('#main_body').append('<div id="datepicker"></div>');
	var eventDates = {};
   	var collegeDates={};
   	collegeDates[0]=0;
    var dateget;
     var eventDates = {};
     $.ajax({
		url:"calendar.php",
		type:"post",
		dataType:"json",
		success:function(data){
			for(var i=1;i<=data.collegerows;i++){
				collegeDates[i]=data.college[i]["date"];
				console.log(collegeDates[i]);
			
			}
			}
		
		
	});
   	$('#datepicker').datepicker({

   		dateFormat:'yy-mm-dd',
        beforeShowDay: function( date ) {
           
           var d = leftPad(date.getDate(), 2).toString(), m = leftPad(date.getMonth() + 1, 2).toString(), y = date.getFullYear().toString();
	console.log(yyyymmdd=y+'-'+m+'-'+d);
	console.log($.inArray(collegeDates,yyyymmdd));
	 console.log(collegeDates);
	 var d=$.grep(collegeDates, function(n) { return n == yyyymmdd;});
		if(d!=-1)
		{
                 return [true, "eventshow", 'Tooltip text'];
            } else {
                 return [true, '', ''];
            }
        }
    });
	
});
function leftPad(num, length) {
  var result = '' + num;
  while (result.length < length) {
    result = '0' + result;
  }
  return result;
}