
<?php
 echo "<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' integrity='sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T' crossorigin='anonymous'>";
 echo "<link rel='stylesheet' type='text/css' href='styles/style.css'>";
 echo "<link rel='stylesheet' type='text/css' href='styles/subscribestyle.css'>";
?>
<?php require_once 'body/header.php' ?>
<main id="subscribe_section"> 
    <div><img src="images/subscribe.jpg" alt="subscribe icon"/></div>
   <div id="subscribe">
   <fieldset>
    <legend>Please subscribe</legend>
	<form action="" method="post">
     <label>Enter Your EmailID.</label><br/>
     <input type="email" name="email" id="emailid"><br/>
     <button type="submit" value="SUBMIT" name="submit_btn" id="submit">SUBSCRRIBE</button>
	</form>
    </fieldset>
   </div>
</main>
<footer>
	<?php require_once 'body/footer.php' ?>
</footer>