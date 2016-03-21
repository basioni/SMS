<?php
require '../../contacts/contacts.php';
require '../../SMSAPI/SMSAPI.php';
require '../../SMSTemplate/SMSTemplate.php';
require '../../contactGroups/contactGroups.php';
require '../../DatePick/DatePick.php';

$contacts_options = new Contacts();
$API_options = new SMSAPI();
$Template_options = new SMSTemplate();
$Groups_options = new contactGroups();
$Calender = new DatePick();
$Calender->Get_Calender_lists();


?>


<section class="container-fluid">
	<div class="row" style="min-height: 647px;">
		<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10" id="mainsection">

			<h2>Send SMS</h2>
			<div class="main-area">

				<form class="form" role="form" method="POST" action="modules/SMS/Save.php" >
					
					<div class="form-group">
						<label class="label label-primary">Send To*: </label>
						<label class="radio-inline">
							<input type="radio" name="sendtoradio" id="Groupoptradio" checked onClick='document.getElementById("AddRecipientsPanel").style.display="none"; document.getElementById("AddGroupPanel").style.display="block";' value="Group" /> Group
						</label>
						<label class="radio-inline">
							<input type="radio" name="sendtoradio" id="Recipientsoptradio" onClick='document.getElementById("AddGroupPanel").style.display="none"; document.getElementById("AddRecipientsPanel").style.display="block";' value="Recipients"  /> Contacts (OR/AND) Numbers
						</label>
					</div>
					
					<div class="form-group" id="AddGroupPanel">
						<label for="asapi" class="label label-info">Select Contacts Group: </label>
						<select class="form-control" class="form-control" id="groups" name="ConGroupID" >
								<? echo $Groups_options->get_short_options(); ?>
						</select>
					</div>
					
					<div id="AddRecipientsPanel" style="display : none;">
							<div class="form-group">
								<div class="col-sm-6 col-md-6 col-lg-6">
									<label class="label label-info"> Add Contacts > </label>
									<select multiple class="form-control" id="contactsDRList" onClick="addContactToList();" >
										<? echo $contacts_options->get_short_options(); ?>
									</select>
									
									<label class="label label-info"> Add Numbers > </label>
									<input type="text" class="form-control" id="Number" >
									<label class="btn btn-info" onClick="addNumberToList();">ADD TO RECIPIENTS</label>
								</div>
							
								<div class="col-sm-6 col-md-6 col-lg-6">
									<label class="label label-success">Selected Recipients: </label>   
									<select multiple class="form-control" id="recipients" name="recipients[]" size="10"> </select>
								</div>
							</div>
					</div>
					
					<div class="form-group">
						<label for="asapi" class="label label-primary">Send As* (select your SMS API)</label>
						<select class="form-control" id="asapi" name="asapi">
								<? echo $API_options->get_short_options(); ?>
						</select>
						<label for="tmple" class="label label-primary">SMS Template*:</label>
						<select class="form-control" id="tmple"  onClick="updateTemplateOptions();">
								<option value="">I want to write new message</option>
								<? echo $Template_options->get_short_options(); ?>
						</select>
					</div>
					
					<div class="form-group">
					<label class="label label-primary" >Message *</label>
						<textarea class="form-control" rows="3" id="smsMessage" name="messageBody" required> </textarea>
					</div>
					
					<div class="form-group">
						<div class="checkbox">
						  <label ><input type="checkbox" value="" id="scheduleSmsSending" onchange="checkScheduling();"> Schedule Sending ?</label>
						  
						</div>
					</div>
					<div class="form-group" id="schedulingpane" style="display: none;">
					<?php
					echo $Calender->years_selects ." ". $Calender->month_selects . " " . $Calender->day_selects;
					?>
					</div>
				   <input type="submit" class="btn btn-primary" name="sendSmsButton" id="sendSmsButton" value="SEND SMS" />
				   <input type="submit" class="btn btn-primary" name="scheduleSmsButton" id="scheduleSmsButton" value="SCHEDULE SMS"  style="display: none;" />
				   
					
				</form>
	</div>
	</div>
</section>

