<?php
require '../SMSAPI.php';
?>

<section class="container-fluid">
	<div class="row" style="min-height: 647px;">
		<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10" id="mainsection">

			<h2>Add New SMS API</h2>
			<div class="main-area">

				<form class="form" role="form" method="POST" action="modules/SMSAPI/Save.php" >
					<div class="form-group">
					<label>Enter your API details: </label>
					</div>
					<div class="form-group">
						 <input type="text" class="form-control" name="referenceID" placeholder="Reference ID*" value="" required/>
					</div>
					<div class="form-group">
						 <input type="text" class="form-control" name="gateway" placeholder="Gateway*" value="" required/>
					</div>
					<div class="form-group">
						 <input type="text" class="form-control" name="accountSID" placeholder="Account SID*" value="" required/>
					</div>
					<div class="form-group">
						 <input type="text" class="form-control" name="authToken" placeholder="Auth Token*" value="" required/>
					</div>
					<div class="form-group">
						 <input type="text" class="form-control" name="senderID" placeholder="Sender*" value="" required/>
					</div>
					<div class="form-group">
						 <label >Status* </label>
						 <select class="form-control" id="apistatus" name="apistatus" required>
								<option value="Active">Active</option>
								<option value="Inactive">Inactive</option>
						</select>
					</div>
					<div class="form-group">
						<input type="submit" class="btn btn-primary" name="addNewApiForm" value="Add SMS API" />
					</div>
				</form>
		</div>
	</div>
</section>

