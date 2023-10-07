<?php include("header/header.php"); ?>
<?php
   if($_SESSION["sellerid"] == ""  ||  $_SESSION["sellerid"]==NULL)
   {
   header('Location:../index.php?page=seller_login');
   }
   else{
   	$a=$_SESSION["sellerid"];
   	?>
<!-- Banner -->
<section class="banner full">
   <article>
      <img src="../img/admin/abc.jpg" alt="" />
      <div class="inner">
         <header>
            <h2>
                Seller Panel  
            </h2>
            <p><?php echo "<div class='text-center wel-div'>Welcome "." " .$_SESSION["seller"]. "</div>"; ?> </p>
         </header>
      </div>
   </article>
</section>

<?php
   }
   mysqli_close($con);
   ?>
<?php include("../footer/footer.php"); ?>
