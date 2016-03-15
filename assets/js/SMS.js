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
 document.getElementById("recipients").innerHTML +=  "<option>" + document.getElementById("contactsDRList").options[selectedindex].value +"</option>";
 }
 
function addNumberToList() {
  
	if (search_recipients(document.getElementById("Number").value)== false && document.getElementById("Number").value != "")
	document.getElementById("recipients").innerHTML +=  "<option>" + document.getElementById("Number").value +"</option>";
 
 document.getElementById("Number").value= "";
 
}

function updateTemplateOptions()
{
var selectedindex = document.getElementById("tmple").selectedIndex ; 
document.getElementById("smsMessage").innerHTML = document.getElementById("tmple").options[selectedindex].value ;

}

