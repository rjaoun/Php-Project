<?php
 echo "<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' integrity='sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T' crossorigin='anonymous'>";
 echo "<link rel='stylesheet' type='text/css' href='styles/style.css'>";
 echo "<link rel='stylesheet' type='text/css' href='styles/registrationstyle.css'>";
?>

<?php require_once 'body/header.php' ?>
<main id="signup_section"> 
     <h1>Sign Up</h1>
	<form action="" method="post">
     <label>Frist name</label>
     <input type="text" name="fname" id="first_name"/><br/>
     <label>Last name</label>
     <input type="text" name="lname" id="last_name"/><br/>
     <label>User name</label>
     <input type="text" name="uname" id="user_name"/><br/>
     <label>Password</label>
     <input type="password" name="password" id="password"/><br/>
     <label>EmailID</label>
     <input type="email" name="email" id="emailid"/><br/>
     <label>Phone number</label>
     <input type="text" name="phonenumber" id="phone_number"/><br/>
     <label>Street name</label>
     <input type="text" name="streetname" id="street_name"/><br/>
     <label>City</label>
     <input type="text" name="city" id="city"/><br/>
     <label>Postal code</label>
     <input type="text" name="postalcode" id="postal_code"/><br/>
     <button type="submit" value="SUBMIT" name="submitbtn" id="submit_btn">REGISTER</button>
	</form>
</main>
<footer>
	<?php require_once 'body/footer.php' ?>
</footer>