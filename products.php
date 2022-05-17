<?php 
session_start();
include 'header.php';
include 'config.php';








?>
	<div id="main">
		<div id="products">
	<?php		foreach ($products as $key => $val) {  ?>
			<div id="<?php echo($val['id']) ?>" class="product">
				<img src="<?php echo($val['image']) ?>">
				<h3 class="title"><a href="#"><?php echo($val['name']) ?></a></h3>
				<span>Price: $<?php echo($val['price']) ?>.00</span>
				<a class="add-to-cart" href="?name=<?php echo($val['id']) ?>">Add To Cart</a>
			</div>
	<?php	}                                           ?>		
			
		</div>
	</div>
    <div >
		
		     <table id="cart">
			 
			 	 
		  
			 

			  </table>
	</div>

	
	<?php  
	
	include 'footer.php';  ?>