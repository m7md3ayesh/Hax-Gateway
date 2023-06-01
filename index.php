<?php
include "config.php";

// Check user login or not
if(!isset($_SESSION['uname'])){
    header('Location: login.php');
}

// logout
if(isset($_POST['but_logout'])){
    session_destroy();
    header('Location: login.php');
}
?>


    
        

<?php 
/* 
-------------------------------------------------------------------------------- 
| @author Haxi india
| Last Upate: 03-OCT-2021
| 


 -------------------------------------------------------------------------------- 
 */
 
 

// Include configuration file 
include_once 'include/config.php';

$title = TITLE;

include("include/header.php"); 
?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 <!-- container --> 
  <section class="showcase">
    <div class="container">
      <div class="pb-2 mt-4 mb-2 border-bottom">
        <h2><?php echo TITLE;?> - Store</h2>
      </div>
      
      <div class="row">
		<!-- --------------------------------------------------------------------------- -->
		<?php 
			//Fetch products from the database
			$results = $db->query("SELECT * FROM product"); 
			$i = 0; 
		?>
		<!-- --------------------------------------------------------------------------- -->
		
		
		<!-- --------------------------------------------------------------------------- -->
		<?php while($row = $results->fetch_array()):?>
		<div class="col-lg-3 col-md-3 mb-3">
			<div class="card h-100">
				<a href="#"><img src="<?php echo $row['image'];?>" alt="product 10" title="product 10" class="card-img-top"></a>
				<div class="card-body">
					<h4 class="card-title"><a href="#"><?php echo $row['name'];?></a></h4>
					<h5><?php echo $row['price'];?> USD</h5>
					<p class="card-text"><?php echo $row['description'];?></p>
				</div>
				<div class="card-footer text-right">
					<center>
					<a href="<?php echo 'checkout.php?product_id='.$row['product_id'];?>" class="add-to-cart btn-success btn btn-sm" title="Add to Cart"><i class="fa fa-shopping-cart fa-fw"></i> Buy Now</a>
					</center>
				</div>
			</div>
		</div>
		<?php endwhile; ?>
		<!-- --------------------------------------------------------------------------- -->

    </div>
    </div>
  </section>

<?php include("include/footer.php"); ?>