<?php

session_start();

include("includes/db.php");
include("includes/header.php");
include("functions/functions.php");
include("includes/main.php");

?>

  <main>
    <!-- HERO -->
    <div class="nero">
      <div class="nero__heading">
        <span class="nero__bold">Harruat</span> Fjalëkalimin
      <p class="nero__text">
      </p>
    </div>
  </main>

<div id="content" ><!-- content Starts -->
<div class="container" ><!-- container Starts -->

<div class="col-md-12" ><!--- col-md-12 Starts -->

<ul class="breadcrumb" ><!-- breadcrumb Starts -->

<li>
<a href="index.php">Faqja Kryesore</a>
</li>

<li>Regjistrohu</li>

</ul><!-- breadcrumb Ends -->



</div><!--- col-md-12 Ends -->


<div class="col-md-12" ><!-- col-md-12 Starts -->

<div class="box"><!-- box Starts -->

<div class="box-header"><!-- box-header Starts -->

<center>

<h3> Shkruani email dhe do ju dërgojmë fjalëkalimin</h3>

</center>

</div><!-- box-header Ends -->

<div align="center"><!-- center div Starts -->

<form action="" method="post"><!-- form Starts -->

<input type="text" class="form-control" name="c_email" placeholder=" Email">

<br>

<input type="submit" name="forgot_pass" class="btn btn-primary" value="Më dërgo fjalëkalimin">

</form><!-- form Ends -->

</div><!-- center div Ends -->

</div><!-- box Ends -->

</div><!-- col-md-12 Ends -->


</div><!-- container Ends -->
</div><!-- content Ends -->



<?php

include("includes/footer.php");

?>

<script src="js/jquery.min.js"> </script>

<script src="js/bootstrap.min.js"></script>

</body>
</html>

<?php

if(isset($_POST['forgot_pass'])){

$c_email = $_POST['c_email'];

$sel_c = "select * from customers where customer_email='$c_email'";

$run_c = mysqli_query($con,$sel_c);

$count_c = mysqli_num_rows($run_c);

$row_c = mysqli_fetch_array($run_c);

$c_name = $row_c['customer_name'];

$c_pass = $row_c['customer_pass'];

if($count_c == 0){

echo "<script> alert('Email juaj nuk ndodhet në databazën tonë!') </script>";

exit();

}
else{

$message = "

<h1 align='center'> Fjalëkalimi u dërgua tek ju! </h1>

<h2 align='center'> Z/Znj $c_name </h2>

<h3 align='center'>

Fjalëkalimi i ri : <span> <b>$c_pass</b> </span>

</h3>

<h3 align='center'>

<a href='localhost/ecom_store/checkout.php'>

Kliko për t'u drejtuar tek llogaria

</a>

</h3>

";

$from = "paolacaushi2022@gmail.com;

$subject = "Fjalëkalimi";

$headers = "Nga: $from\r\n";

$headers .= "Content-type: text/html\r\n";

mail($c_email,$subject,$message,$headers);

echo "<script> alert('Kontrollloni email për të marr fjalëkalimin e ri! ') </script>";

echo "<script>window.open('checkout.php','_self')</script>";

}

}

?>
