<?php
include('includes/header.php');
?>
<div class="page-wrapper">
  <div class="cart shopping">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="block">
            <div class="product-list">
              <form method="post">
                <table class="table">
                  <thead>
                    <tr>
                      <th class="">Item Name</th>
                      <th class="">Item Price</th>
					  <th class="">Quantity</th>
                      <th class="">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="">
                      <td class="">
                        <div class="product-info">
                          <img width="80" src="images/shop/cart/cart-1.jpg" alt="" />
                          <a href="product-single.php">Sunglass</a>
                        </div>
                      </td>
                      <td class="">$200.00</td>
					  <td class="">2</td>
                      <td class="">
                        <a class="product-remove" href="">Remove</a>
                      </td>
                    </tr>
                    
                
                  </tbody>
                </table>
                <a href="checkout.php" class="btn btn-main pull-right">Checkout</a>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
include('includes/footer.php');
?>
