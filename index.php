<!DOCTYPE html>
<html>
<head>
	<title>Forms</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="container">
		<div class="forms">
			<form action="https://islamcv.herokuapp.com/">
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
					<input type="text" placeholder="name" class="fname" id="fname" name="fname"><br>
				</div>
				<div class="pass_wrap">
					<label for="password" class="pass_title">Password</label>
					<input type="password" placeholder="password" class="fpass" id="fpass" name="password"><br>
				</div>
				<div class="form_button">
					<button type="reset" class="clear_button" value="clear">Clear</button>
					<button type="submit" class="submit_button" id="submit_button" value="button">Submit</button>
				</div>	
			</form>
		</div>
	</div>
	

	<script>
	
	    document.forms[0].onsubmit = function(e){
        let login = document.getElementById('fname').value;
        let password = document.getElementById('fpass').value;
 
        if ( login === "Islam" && password === "qwerty123") 
            alert("Welcome");
        else {
            e.preventDefault();
            alert("Invalid password or login");
        }
    };
    
	</script>
</body>
</html>