<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<style type="text/css">
	.container{
		min-height: 600px;
		width: 800px;
		text-align: center;
	}
	#btn1{
		margin-left: 10px;
	}
</style>
</head>
<body>
<div class="container">
<h2 class="m-5 p-3 bg-dark text-light">Crud Application view user</h2>
<a href="<?php echo base_url().'index.php/User/create';?>" role="button" class="btn btn-success m-3" id="btn1">ADD NEW</a>
<form>
	<div class="form-group">
	<table class="table table-striped text-center">
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Email</th>
		<th>Edit</th>
		<th>Delete</th>

	</tr>
	
	 <?php
        if (isset($users)){
            foreach ($users as $user) {
                ?>
 
	 <tr>

	 	<td><?php echo $user['id']; ?></td>
	 	<td><?php echo $user["name"]; ?></td>
	 	<td><?php echo $user["email"]; ?></td>
	 	<td><a href="<?php echo base_url().'index.php/User/edit/'.$user['id'];?>" role="button" class="btn btn-primary">Edit</a></td>
	 	<td><a href="<?php echo base_url().'index.php/User/delete/'.$user['id'];?>"role="button" class="btn btn-danger">Delete</a></td>
	 </tr>
	<?php
	}}?>
	 
	 	
 
		
	</table>
		</div>
	

</form>
</div>
	
</body>
</html>