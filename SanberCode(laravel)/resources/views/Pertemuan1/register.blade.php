<!DOCTYPE html>
<html>
<head>
	<title>Form New Account</title>
</head>
<body>
	<div class="container">
		<h1>Buat Akun Baru !</h1>
	<h3>Sign Up Form</h3>

	<form  method="post" action="{{action('AuthController@welcome')}}" >
		@csrf

		<div>
			<label>First name :</label>
			<div>
				<br>
				<input type="text" name="FristName" required>
			</div>
		</div>
		<br>
		<div>
			<label>Last name :</label>
			<div>
				<br>
				<input type="text" name="LastName" required>
			</div>
		</div>
		<br>
		<div>
			<label>Gender :</label>
			<div>
				<br>
				<input type="radio" name="JenisKelamin" required>Male
				<br>
				<input type="radio" name="JenisKelamin">Famale
				<br>
				<input type="radio" name="JenisKelamin">Other
				<br>
			</div>
		</div>
<br>
		<div>
			<label>Nationality :</label>
			<div>
				<br>
				<select>
					<option>Indonesian</option>
					<option>English</option>
					<option>Other</option>
				</select>
			</div>

		</div>
		<br>
		<div>
			<label>Languange Spoken :</label>
			<div>
				<br>
				<input type="checkbox" name="BahasaIndonesia">Bahasa Indonesia
				<br>
				<input type="checkbox" name="English">English
				<br>
				<input type="checkbox" name="Other">Other
				<br>
			</div>
		</div>
		<div>
			<br>
			<label>Bio  :</label>
			<div>
				<br>
				<textarea cols="30" rows="10"></textarea>
			</div>
		</div>
		<button>Sing Up</button>
	</form>
	</div>
</body>
</html>