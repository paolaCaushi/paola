<?php


if(!isset($_SESSION['admin_email'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {




?>

<nav class="navbar navbar-inverse navbar-fixed-top" ><!-- navbar navbar-inverse navbar-fixed-top Starts -->

<div class="navbar-header" ><!-- navbar-header Starts -->

<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse" ><!-- navbar-ex1-collapse Starts -->


<span class="sr-only" >Toggle Navigation</span>

<span class="icon-bar" ></span>

<span class="icon-bar" ></span>

<span class="icon-bar" ></span>


</button><!-- navbar-ex1-collapse Ends -->

<a class="navbar-brand" href="index.php?dashboard" >Paneli Admin</a>


</div><!-- navbar-header Ends -->

<ul class="nav navbar-right top-nav" ><!-- nav navbar-right top-nav Starts -->

<li class="dropdown" ><!-- dropdown Starts -->

<a href="#" class="dropdown-toggle" data-toggle="dropdown" ><!-- dropdown-toggle Starts -->

<i class="fa fa-user" ></i>

<?php echo $admin_name; ?> <b class="caret" ></b>


</a><!-- dropdown-toggle Ends -->

<ul class="dropdown-menu" ><!-- dropdown-menu Starts -->

<li><!-- li Starts -->

<a href="index.php?user_profile=<?php echo $admin_id; ?>" >

<i class="fa fa-fw fa-user" ></i> Profili


</a>

</li><!-- li Ends -->

<li><!-- li Starts -->

<a href="index.php?view_products" >

<i class="fa fa-fw fa-envelope" ></i> Produkte 

<span class="badge" ><?php echo $count_products; ?></span>


</a>

</li><!-- li Ends -->

<li><!-- li Starts -->

<a href="index.php?view_customers" >

<i class="fa fa-fw fa-gear" ></i> Klientë

<span class="badge" ><?php echo $count_customers; ?></span>


</a>

</li><!-- li Ends -->

<li><!-- li Starts -->

<a href="index.php?view_p_cats" >

<i class="fa fa-fw fa-gear" ></i> Kategoritë e Produkteve

<span class="badge" ><?php echo $count_p_categories; ?></span>


</a>

</li><!-- li Ends -->

<li class="divider"></li>

<li><!-- li Starts -->

<a href="logout.php">

<i class="fa fa-fw fa-power-off"> </i> Dil

</a>

</li><!-- li Ends -->

</ul><!-- dropdown-menu Ends -->




</li><!-- dropdown Ends -->


</ul><!-- nav navbar-right top-nav Ends -->

<div class="collapse navbar-collapse navbar-ex1-collapse"><!-- collapse navbar-collapse navbar-ex1-collapse Starts -->

<ul class="nav navbar-nav side-nav"><!-- nav navbar-nav side-nav Starts -->

<li><!-- li Starts -->

<a href="index.php?dashboard">

<i class="fa fa-fw fa-dashboard"></i> Dashboard

</a>

</li><!-- li Ends -->

<li><!-- Products li Starts -->

<a href="#" data-toggle="collapse" data-target="#products">

<i class="fa fa-fw fa-table"></i> Produkte

<i class="fa fa-fw fa-caret-down"></i>


</a>

<ul id="products" class="collapse">

<li>
<a href="index.php?insert_product"> Shto Produkt </a>
</li>

<li>
<a href="index.php?view_products"> Shiko Produktet </a>
</li>


</ul>

</li><!-- Products li Ends -->





<li><!-- manufacturer li Starts -->

<a href="#" data-toggle="collapse" data-target="#manufacturers"><!-- anchor Starts -->

<i class="fa fa-fw fa-briefcase"></i> Biznese

<i class="fa fa-fw fa-caret-down"></i>


</a><!-- anchor Ends -->

<ul id="manufacturers" class="collapse"><!-- ul collapse Starts -->

<li>
<a href="index.php?insert_manufacturer"> Shto Biznes </a>
</li>

<li>
<a href="index.php?view_manufacturers"> Shiko Bizneset </a>
</li>

</ul><!-- ul collapse Ends -->


</li><!-- manufacturer li Ends -->


<li><!-- li Starts -->

<a href="#" data-toggle="collapse" data-target="#p_cat">

<i class="fa fa-fw fa-pencil"></i> Kategoritë e Produkteve

<i class="fa fa-fw fa-caret-down"></i>


</a>

<ul id="p_cat" class="collapse">

<li>
<a href="index.php?insert_p_cat"> Shto Kategori </a>
</li>

<li>
<a href="index.php?view_p_cats"> Shiko Kategoritë </a>
</li>


</ul>

</li><!-- li Ends -->


<li><!-- li Starts -->

<a href="#" data-toggle="collapse" data-target="#cat">

<i class="fa fa-fw fa-arrows-v"></i> Kategoritë

<i class="fa fa-fw fa-caret-down"></i>

</a>

<ul id="cat" class="collapse">

<li>
<a href="index.php?insert_cat"> Shto Kategori </a>
</li>

<li>
<a href="index.php?view_cats"> Shiko Kategoritë </a>
</li>


</ul>

</li><!-- li Ends -->



<li><!-- store section li Starts -->

<a href="#" data-toggle="collapse" data-target="#store">

<i class="fa fa-fw fa-briefcase"></i> Dyqanet

<i class="fa fa-fw fa-caret-down"></i>

</a>

<ul id="store" class="collapse">

<li>
<a href="index.php?insert_store"> Shto dyqan </a>
</li>

<li>
<a href="index.php?view_store"> Shiko dyqanet </a>
</li>

</ul>

</li><!-- store section li Ends -->


<li><!-- contact us li Starts -->

<a href="#" data-toggle="collapse" data-target="#contact_us"><!-- anchor Starts -->

<i class="fa fa-fw fa-pencil"> </i> Seksioni Kontakt

<i class="fa fa-fw fa-caret-down"></i>

</a><!-- anchor Ends -->

<ul id="contact_us" class="collapse">

<li>

<a href="index.php?edit_contact_us"> Ndrysho faqen e Kontaktit </a>

</li>

<li>

<a href="index.php?insert_enquiry"> Faturat </a>

</li>

<li>

<a href="index.php?view_enquiry"> View Enquiry Types </a>

</li>

</ul>

</li><!-- contact us li Ends -->

<li><!-- about us li Starts -->

<a href="index.php?edit_about_us">

<i class="fa fa-fw fa-edit"></i> Ndrysho faqen Rreth Nesh

</a>

</li><!-- about us li Ends -->


<li><!-- Coupons Section li Starts -->

<a href="#" data-toggle="collapse" data-target="#coupons"><!-- anchor Starts -->

<i class="fa fa-fw fa-arrows-v"></i> Kuponat

<i class="fa fa-fw fa-caret-down"></i>

</a><!-- anchor Ends -->

<ul id="coupons" class="collapse"><!-- ul collapse Starts -->

<li>
<a href="index.php?insert_coupon"> Shto Kupona </a>
</li>

<li>
<a href="index.php?view_coupons"> Shiko Kuponat </a>
</li>

</ul><!-- ul collapse Ends -->

</li><!-- Coupons Section li Ends -->



<li><!-- terms li Starts -->

<a href="#" data-toggle="collapse" data-target="#terms" ><!-- anchor Starts -->

<i class="fa fa-fw fa-table"></i> Termat dhe Kushtet e Perdorimit

<i class="fa fa-fw fa-caret-down"></i>

</a><!-- anchor Ends -->

<ul id="terms" class="collapse"><!-- ul collapse Starts -->

<li>
<a href="index.php?insert_term"> Shto Termat </a> 
</li>

<li>
<a href="index.php?view_terms"> Shiko Termat </a> 
</li>

</ul><!-- ul collapse Ends -->


</li><!-- terms li Ends -->



<li>

<a href="index.php?view_customers">

<i class="fa fa-fw fa-edit"></i> Shiko Klientet

</a>

</li>

<li>

<a href="index.php?view_orders">

<i class="fa fa-fw fa-list"></i> Shiko Porosite

</a>

</li>

<li>

<a href="index.php?view_payments">

<i class="fa fa-fw fa-pencil"></i> Shiko Pagesat

</a>

</li>

<li><!-- li Starts -->

<a href="#" data-toggle="collapse" data-target="#users">

<i class="fa fa-fw fa-gear"></i> Perdoruesit

<i class="fa fa-fw fa-caret-down"></i>


</a>

<ul id="users" class="collapse">

<li>
<a href="index.php?insert_user"> Shto Perdorues </a>
</li>

<li>
<a href="index.php?view_users"> Shiko Perdorues </a>
</li>

<li>
<a href="index.php?user_profile=<?php echo $admin_id; ?>"> Ndrysho Profilin </a>
</li>

</ul>

</li><!-- li Ends -->

<li><!-- li Starts -->

<a href="logout.php">

<i class="fa fa-fw fa-power-off"></i> Dil

</a>

</li><!-- li Ends -->

</ul><!-- nav navbar-nav side-nav Ends -->

</div><!-- collapse navbar-collapse navbar-ex1-collapse Ends -->

</nav><!-- navbar navbar-inverse navbar-fixed-top Ends -->

<?php } ?>