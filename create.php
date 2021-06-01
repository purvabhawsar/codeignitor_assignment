<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>

<style type="text/css">
	.container{
		height: 500px;
		width: 600px;
		text-align: center;
	}
</style>
</head>
<body>
<div class="container">
<h2 class="m-5 p-3 bg-dark text-light">Crud Application create user</h2>
<form name="createUser" action="<?php echo base_url().'index.php/User/create';?>" method="post">
	<div class="form-group">
	 <textarea name="name" id="editor" ></textarea>
		<script type="text/javascript">

CKEDITOR.replace( "editor") ;//{


</script>

		        
		   
		<h6 class="text-left text-danger p-3"><?php echo form_error('name');?></h6>
		</div>
	
	<div class="form-group">
		<input type="text"  class="form-control p-3" value="<?php echo set_value("email");?>" placeholder="Enter your email" name="email">
		<h6 class="text-left text-danger p-3"><?php echo form_error('email');?></h6>
	</div>
		<div class="form-group"><center><button class="btn btn-primary btn-center m-3">Submit</button>
		<a href="<?php echo base_url()."index.php/User/index";?>" role="button" class="btn btn-secondary">Cancel</a></center></div>
</div>
</form>
	
</body>
</html>