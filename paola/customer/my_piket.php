<center>
<!-- center Starts -->

<h1>Pikët e mia</h1>

<p class="lead"> Pikët tuaja në një vend.</p>

<p class="text-muted" >

Nëse keni ndonjë pyetje, ju lutem mos ngurroni <a href="../contact.php" > na kontaktoni,</a> Qendra jonë e shërbimit ndaj klientit po punon për ju 24/7.


</p>

</center>
<!-- center Ends -->

<hr>

<H3>Piket: 

<?php

$customer_session = $_SESSION['customer_email'];

$sql="select piket from customers where customer_email='$customer_session'";

$result = mysqli_query($con, $sql);
while($row = mysqli_fetch_array($result)) {
    echo $row['piket']; 
 }

?>

</h3>


<hr>

<p class="text-muted" >

*Nëse keni me pak se 30000 pike, nuk mund t'i perdorni.


</p>




<?php ?>



</div>



