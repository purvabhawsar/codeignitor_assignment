<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<style type="text/css">
	.container{
		min-height: 600px;
		width: 800px;
		text-align: center;
	}

</style>
</head>
<body>
<div class="container">
<h2 class="m-5 p-3 bg-dark text-light">Crud Application update user</h2>

<form name="updateUser" action="<?php echo base_url().'index.php/User/edit/'.$user["id"];?>" method="post">
	<div class="form-group">
		<input type="text" class="form-control p-3"value="<?php echo set_value("name",$user["name"]);?>" name="name">
		<h6 class="text-left text-danger p-3"><?php echo form_error('name');?></h6>
		
	</div>
	<div class="form-group">
		<input type="text"  class="form-control p-3" value="<?php echo set_value("email",$user["email"]);?>" name="email">
		<h6 class="text-left text-danger p-3"><?php echo form_error('email');?></h6>
	</div>
	<div class="form-group"><center><button class="btn btn-primary btn-center">Update</button></center></div>
</div>
</form>

	


</div>
	
</body>
</html>