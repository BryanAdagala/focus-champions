<div class="row">
	<div class="col-md-6">
	<h2><i class='fa fa-lock'></i> Admin Login</h2>
	<?php

		echo validation_errors('<div class="alert alert-danger" role="alert">','</div>');

		echo form_open("home/alogin/submit","class='form'");
		echo form_input("email",set_value("email"));
		echo form_label("Email","email");
		echo form_password("password","");
		echo form_label("Password","password");
		echo form_submit("login","Login","class='btn btn-lg btn-success'");

	?>
	</div>
</div>