<?php include('partials-front/menu.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link  rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css"  integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Pay page</title>
</head>
<body>
<div class="container">
<h2 class="my-4 text-center">Payment</h2>
 
  <form action="./charge.php" method="post" id="payment-form">
    <div class="form-row">
        <input type="text"  name="first_name" class="form-control mb-3 stripeElement stripeElement--empty" placeholder="First Name">
      
      <input type="text"  name="last_name" class="form-control mb-3 stripeElement stripeElement--empty" placeholder="Last Name">
    
      <input type="email"  name="email" class="form-control mb-3 stripeElement stripeElement--empty" placeholder="Email Address">
      <div id="card-element" class="form-control">
      <!-- A Stripe Element will be inserted here. -->
      </div>

    <!-- Used to display Element errors. -->
           <div id="card-errors" role="alert"></div>
       </div>

      <button>Submit Payment</button>
    </form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script src="https://js.stripe.com/v3/"></script>
<script src="./js/charge.js"></script>
</body>
</html>
<?php include('partials-front/footer.php');?>