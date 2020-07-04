<?php
include('includes/header.php');


$id = $_GET['id'];
$title = $_GET['title'];
$cat = $_GET['cat'];
$price = $_GET['price'];
$img = $_GET['img'];
$det = $_GET['det'];

echo '

<section class="single-product">
	<div class="container">
			
		</div>
		<div class="row mt-20">
			<div class="col-md-5">
				
					<p style="text-align: center;">

					<img src="Admin/PHP/Uploads/'.$img.'" alt="single image" height="470px" />
				</p>

			</div>
			<div class="col-md-7">
				<div class="single-product-details">
					<h2>'.$title.'</h2>
					<br/>
					<p class="product-price" style="color:black;"><b>'.$price.'<span style="margin-left: 3px;">RS/-</span></b></p>
					
					<p class="product-description mt-20" style="text-align: justify;line-height:1.6em;">
				               	'.$det.'
					</p>
					
					
					<div class="product-quantity">
						<span>Quantity:</span>
						<div class="product-quantity-slider">
							<input id="product-quantity" type="text" value="0" name="product-quantity">
						</div>
					</div>
					<div class="product-category">
						<span>Categories:</span>
						<ul>
							
							<li>'.$cat.'</li>
						</ul>
					</div>
					<a href="cart.php" class="btn btn-main mt-20">Add To Cart</a>
				</div>
			</div>
		</div>
		
	</div>
</section>
';
?>

<?php
include('includes/footer.php');
?>