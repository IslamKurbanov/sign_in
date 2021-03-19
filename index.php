<!DOCTYPE html>
<html>
<head>
	<title>Forms</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="container">
		<div class="forms">
			<form action="https://islamcv.herokuapp.com">
				<div class="title">
					<div class="sign_in_block">
						<a href="#"><p class="sign_in">Sign in</p></a>
					</div>
					<div class="sign_up_block">
						<a href="#"><p class="sign_up">Sign up</p></a>
					</div>
				</div>
				<div class="first_name">
					<label for="fname">First name</label>
					<input type="text" id="fname" name="fname"><br>
				</div>
				<div class="last_name">
					<label for="password">Password</label>
					<input type="password" id="password" name="password"><br>
				</div>
				<div class="form_button">
					<button type="reset" class="clear_button" value="clear">Clear</button>
					<button type="submit" class="submit_button" value="button">Submit</button>
				</div>	
			</form>
		</div>
	</div>
	<?php
 	echo '<p>Hello World</p>';



	?>
</body>
</html>