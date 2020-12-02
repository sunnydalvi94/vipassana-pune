<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<p class="p2">Hello <?php echo isset($fullname)?$fullname:'' ?>, 
<p class="p3">
Your New Activation Code as below:
<br>
</p>
<p class="p4">Please click on the given link:<br>
<a href="<?php echo base_url()?>reset-password/<?php echo isset($activation_code)?$activation_code:'' ?>">
		<?php echo base_url()?>reset-password/<?php echo isset($activation_code)?$activation_code:'' ?>	
	</a>
</p>
<p class="p5" > Kind Regards,<br>
	<b>Vipassana Team.</b>
</p>
</body>
</html>