function search_recipients(selectvalue)
{
var listlength = document.getElementById("recipients").length ;
for (i = 0; i < listlength; i++) 
{ 
    if(document.getElementById("recipients").options[i].value == selectvalue )
	return true;
}
return false;
}

 function addContactToList() {
 var selectedindex = document.getElementById("contactsDRList").selectedIndex ; 
 if (search_recipients(document.getElementById("contactsDRList").options[selectedindex].value)== false)
 document.getElementById("recipients").innerHTML +=  "<option selected>" + document.getElementById("contactsDRList").options[selectedindex].value +"</option>";
 }
 
function addNumberToList() {
  
	if (search_recipients(document.getElementById("Number").value)== false && document.getElementById("Number").value != "")
	document.getElementById("recipients").innerHTML +=  "<option selected>" + document.getElementById("Number").value +"</option>";
 
 document.getElementById("Number").value= "";
 
}

function updateTemplateOptions()
{
var selectedindex = document.getElementById("tmple").selectedIndex ; 
document.getElementById("smsMessage").innerHTML = document.getElementById("tmple").options[selectedindex].value ;

}

// check sending SMS - check if scheduling input changed
function checkScheduling()
{
if(document.getElementById("scheduleSmsSending").checked)
{
document.getElementById("scheduleSmsButton").style.display="block" ;
document.getElementById("schedulingpane").style.display="block" ;
document.getElementById("sendSmsButton").style.display = "none" ;
}
else
{
document.getElementById("scheduleSmsButton").style.display="none" ;
document.getElementById("sendSmsButton").style.display = "block" ;
document.getElementById("schedulingpane").style.display="none" ;
}

}