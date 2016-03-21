<?php
require '../contacts.php';
?>
<section class="container-fluid">
	<div class="row" >
		<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9" id="mainsection">
		
			<h2>Contact Details</h2>
			<div class="main-area">
			<a class="btn btn-default" href="#contactslist">Back to Contacts</a>
<?php
$contact_table = new Contacts();
$contact_table->contact_id = $_GET["contact"];
$Tablerows = $contact_table->get_contact();
echo 	'		<table class="table table-bordered">
					<tbody>
					'.$Tablerows.'
					<tbody>
				</table>
		';			
?>
			</div>
		</div>
	</div>
</section>

