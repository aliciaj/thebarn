/* Author: alicia brooks

*/

//removes or adds text on focus or blur of input fields
	autoFill = function(id, v){
				
		$(id).attr({ value: v, 'class': 'normal' }).focus(function(){
		if($(this).val()==v){
			$(this).val("").attr({'class':'focus'});
			
		}
		}).blur(function(){
			$(this).attr({'class':'normal'});
			if($(this).val()==""){
				$(this).val(v);
			}
		});
	};
	
	//calling autofill on fields that need it.
	autoFill($("#fullname"), "Full Name");
	autoFill($("#email"), "Email");
	autoFill($("#message"), "Message");


//######################################################################################
// Author: ricocheting.com
// Version: v2.0
// Date: 2011-03-31
// Description: displays the amount of time until the "dateFuture" entered below.

// NOTE: the month entered must be one less than current month. ie; 0=January, 11=December
// NOTE: the hour is in 24 hour format. 0=12am, 15=3pm etc
// format: dateFuture1 = new Date(year,month-1,day,hour,min,sec)
// example: dateFuture1 = new Date(2003,03,26,14,15,00) = April 26, 2003 - 2:15:00 pm

dateFuture1 = new Date(2011,8,16,19,0,0);

// TESTING: comment out the line below to print out the "dateFuture" for testing purposes
//document.write(dateFuture +"<br />");


//###################################
//nothing beyond this point
function GetCount(ddate,iid){

	dateNow = new Date();	//grab current date
	amount = ddate.getTime() - dateNow.getTime();	//calc milliseconds between dates
	delete dateNow;

	// if time is already past
	if(amount < 0){
		document.getElementById(iid).innerHTML="Now!";
	}
	// else date is still good
	else{
		days=0;hours=0;mins=0;out="";

		amount = Math.floor(amount/1000);//kill the "milliseconds" so just secs

		days=Math.floor(amount/86400);//days
		amount=amount%86400;

		hours=Math.floor(amount/3600);//hours
		amount=amount%3600;

		mins=Math.floor(amount/60);//minutes
		amount=amount%60;

		if(days != 0){out += days +" "+((days==1)?"day":"days")+", ";}
		if(hours != 0){out += hours +" "+((hours==1)?"hour":"hours")+", ";}
		out += mins +" "+((mins==1)?"min":"mins")+", ";
		out = out.substr(0,out.length-2);
		document.getElementById(iid).innerHTML=out;

		setTimeout(function(){GetCount(ddate,iid)}, 1000);
	}
}

window.onload=function(){
	GetCount(dateFuture1, 'countbox1');
	//you can add additional countdowns here (just make sure you create dateFuture2 and countbox2 etc for each)
};