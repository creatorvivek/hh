<?php phpinfo(); 
die;?>
<!DOCTYPE html>
<html>
<head>
	<title>Dynamic add with ajax and jquery</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

							

</head>
<body>
			<div class="container">	

					<h1 align="center">Dynamic Add Function</h1>
						<div class="form_group">
							<form name="add_name" id="add_name">
								<table class="table table-bordered" id="dynamic_field">
									<tr>								
										<td><input type="text" name="name[]" placeholder=" Enter  name"  class="form-control name_list" ></td>
										<td><button type="button" name="add" id="add" class="btn btn-success">Add</button></td>
									</tr>
								</table>
								<input type="button" name="submit" value="submit" id="submit" class="btn btn-info">
							</form>
						</div>
			</div>		

</body>
</html>
<script type="text/javascript">
	
$(document).ready(function(){
var i=1;
$('#add').click(function(){
	i++;
	
	$('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="name[]" placeholder="Enter your Name" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>'); 
						});
		$(document).on('click','.btn_remove',function(){
			var button_id=$(this).attr("id");
			$('#row'+button_id+'').remove(); 
		});
		$("#submit").click(function(){
			$.ajax({
				url:"name.php",
				method:"POST",
				data:$("#add_name").serialize(),
				success:function(data)
				{
					alert(data);
					$('#add_name')[0].reset(); 
				}
			});
		});


});






</script>