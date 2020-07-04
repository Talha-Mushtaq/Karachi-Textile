<?php
include('includes/header.php');
include('./Admin/PHP/DBConn.php');
?>



<div class="container-fluid ">

<div class="row mt-5 mb-5">
<h2 style="text-align:center;margin-bottom:80px;">Our Products</h2>
	<div class="col-md-2"></div>
	
	<div class="col-md-9">
	
	<div class="row"> 
	
	<?php
		$db = new dbconn();
		
		$data=$db->ProductShow();
		foreach($data as $d)
			{
	
	
				echo	'
					<div class="col-md-3" style="cursor:pointer;">
							
								<div class="product-item">
									<div class="product-thumb">
										<img class="img-responsive" style="width:300px; !important; height:300px; !important;" src="Admin/PHP/Uploads/'.$d['PRODUCTIMAGE'].'" alt="product-img" />
										<div class="preview-meta">
											<ul>
												<li>
													<a href="product-single.php?id='.$d['PRODUCTID'].'&title='.$d['PRODUCTTITLE'].'&cat='.$d['PRODUCTCATEGORY'].'&price='.$d['PRODUCTPRICE'].'&img='.$d['PRODUCTIMAGE'].'&det='.$d['PRODUCTDETAIL'].' "><i class="tf-ion-android-cart"></i></a>
												</li>
											</ul>
										</div>
									</div>
									<div class="product-content">
										<h4><a href="product-single.php">'.$d['PRODUCTTITLE'].'</a></h4>
										<p class="price">'.$d['PRODUCTPRICE'].' Rs/-</p>
									</div>
								</div>
							</div>		
							';
		    } 
	
	 ?>
	
			
	</div>
	
	
	
	</div>
	
	
	
	
		

			
		
		<div class="col-md-1"></div>
</div>
			
			
			
			
			

</div>
<?php
include('includes/footer.php');
?>