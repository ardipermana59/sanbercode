<!DOCTYPE html>
<html>
<head>
	<title>Form Pendaftaran</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<main>
		<h1>Buat Account Baru</h1>
		<h3>Sign Up Form</h3>
		<form action="/welcome" method="post">
			<input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
			<div class="item">
				<label for="firstname">First name:</label><br>
				<input type="text" name="firstname" id="firstname">
			</div>
			<div class="item">
				<label for="lastname">Last name:</label><br>
				<input type="text" name="lastname" id="lastname">
			</div>
			<div class="item">
				<label>Gender:</label><br>
				<input type="radio" name="gender" value="male">
				<label>Male</label><br>
				<input type="radio" name="gender" value="female">
				<label>Female</label><br>
				<input type="radio" name="gender" value="other">
				<label>Other</label>
			</div>
			<div class="item">
				<label>Nationality:</label><br>
				<select name="nationality">
					<option value="indonesia">Indonesia</option>
					<option value="singapura">Singapura</option>
					<option value="malaysia">Malaysia</option>
					<option value="thailand">Thailand</option>
				</select>
			</div>
			<div class="item">
				<label>Language Spoken:</label><br>
				<input type="checkbox" name="bahasa-1" value="bahasa indonesia">
				<label>Bahasa Indonesia</label><br>
				<input type="checkbox" name="bahasa-2" value="english">
				<label>English</label><br>
				<input type="checkbox" name="bahasa-3" value="other">
				<label>Other</label><br>
			</div>
			<div class="item">
				<label>Bio:</label><br>
				<textarea rows="15" cols="40" name="bio"></textarea>
			</div>
			<div class="button">
				<button type="submit" name="signup">Sign Up</button>
			</div>
		</form>
	</main>
</body>
</html>