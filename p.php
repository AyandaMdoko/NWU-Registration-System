
<form action="./charge.php" method="post">
  
<?php
require('stripe-php-master/init.php');
?>

<div class="container col-1">
        <div class="row justify-content-center">
  <script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
          data-key="<?php echo $stripe['publishable_key']; ?>"
          data-name="Registration"
          data-description="Online Payment"
          data-amount="<?php echo ($total)?>>"
          data-email="<?php echo $row['email']; ?>"
          data-label="Pay Now"
          data-allow-remember-me=false
          
          data-locale="auto"></script>
          </div>
          </div>
          
</form>