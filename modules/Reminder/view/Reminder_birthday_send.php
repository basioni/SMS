<?php
require '../Reminder.php';
require '../../contacts/contacts.php';
require '../../SMSAPI/SMSAPI.php';
require '../../SMSTemplate/SMSTemplate.php';

$reminder = new Reminder();
$reminder->load_birthday($_GET["id"]);
$contact = new Contacts();
$contact->load_contact($reminder->rmnd_to);
?>

<section class="container-fluid">
	<div class="row" style="min-height: 647px;">
		<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10" id="mainsection">

			<h2>Send Birthday Wishes</h2>
			<div class="main-area">

				<form class="form" role="form" method="POST" action="modules/Reminder/SendBirthday.php" >
					
					<div class="form-group">
					<input type="hidden" name="BirthdayID" value="<?php echo $_GET["id"]; ?> " />
					 <input type="hidden" name="mobile" value="<?php echo $contact->mobile ; ?>" />
					
					<label for="mobile">Birthday Wish to : <? echo $contact->first_name ." ".  $contact->last_name;?></label>
					</div>
					
					<div class="form-group">
					<label for="reminderDate">Birthday Expected Date:</label>
					 <input type="text" class="form-control" name="reminderDate" value="<? echo $reminder->rmnd_date ;?>" disabled/>
					</div>
					
					<div class="form-group">
						<label for="asapi" class="label label-primary">Send As* (select your SMS API)</label>
						<select class="form-control" id="asapi" name="asapi">
								<? echo SMSAPI::get_short_options(); ?>
						</select>
						<label for="tmple" class="label label-primary">SMS Template*:</label>
						<select class="form-control" id="tmple"  onClick="updateTemplateOptions();">
								<option value="">I want to write new message</option>
								<? echo SMSTemplate::get_short_options(); ?>
						</select>
					</div>
					
					<div class="form-group">
					<label class="label label-primary" >Message *</label>
						<textarea class="form-control" rows="3" id="smsMessage" name="messageBody" > </textarea>
					</div>
					
				   <input type="submit" class="btn btn-primary" name="sendBirthdaywishButton" id="sendBirthdaywishButton" value="EDIT & SEND Birthday Wishes" />
				   
				</form>
		</div>
	</div>
</section>

