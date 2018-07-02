<!DOCTYPE html>
<html>
<head>
	<title>curd</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script type="text/javascript">
	$(document).ready(function(){
		$("#submit").click(function(){
			var user_name = $("#names").val();
			var user_email = $("#email").val();
			var user_password = $("#password").val();
			$.post("test.php",{uname:user_name,uemail:user_email,upw:user_password},function(data){
				$("#result").html(data);
			});

		});

	});
</script>
							

</head>
<body>
			<div class="container">	
				<div class="row">
					<h1 align="center">curd</h1>
						<div class="col-md-6">	
							<div class="form_group">
								
									<table class="table table-bordered" id="dynamic_field">
										<tr>								
											<td><input type="text" name="name" id="names" placeholder=" Enter  name"  class="form-control" ></td><br>
											<td><input type="text" name="email" id="email" placeholder=" Enter  email"  class="form-control" ></td><br>
											<td><input type="password" name="password" id="password" placeholder=" Enter  name"  class="form-control" ></td><br>
											
										</tr>
									</table>
									<input type="submit"  value="submit" id="submit" class="btn btn-info">
								
							</div>
						</div>
						<div class="col-md-6" id="result"></div>
				</div>
			</div>		

</body>
</html>