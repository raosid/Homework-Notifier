<?php
include("common.php");
?>
		<div id="page_message">
			<p>
				Never miss a homework assignment again. 
				Just sign up for a class and forget all about your deadlines. 
				We remember them for you!
			</p>
		</div>

		<div id="form_controls">
			<h2>Sign up here!</h2>
			<form action="signup.php" method="post">
				<label class="labels">First name</label> 
				<input type="text" class="form_input" name="first_name"></br>
				<label class="labels">Last name</label>
				<input type="text" class="form_input" name="last_name"></br>
				<label class="labels">Email</label>
				<input type="text" class="form_input" name="email" size="20">
				<label class="labels">Password</label>
				<input type="password" class="form_input" name="password" size="20"></br>
				I am a:
				<input type="radio" name="type" value="student" />Student
				<input type="radio" name="type" value="professor"/>Professor
				<button id="submit_form" type="submit" class="button_green">Create New Account</button>
			</form>
		</div>
		
		

		<div id="login">
			<label class="labels">Email</label> 
			<input type="text" class="form_input" id="email"></br>
			<label class="labels">Password</label> 
			<input type="password" class="form_input" id="password"></br>
			<button id="user_login" type="submit" class="button_green">Sign in</button>
		</div>
		<div id="sign_up">
				<span>New User? <a href="signup.php">Sign up here</a></span>
		</div>
	</body>
</html>