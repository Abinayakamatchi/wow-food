<?php include('partials-front/menu.php');?>
<head>
    <link rel="stylesheet" href="bootstrap.css">
    <title>Form</title>
    <link rel="stylesheet" href="style.css">
   
    </head>
    <body class="fill">
       <h1 class="up">Contact Us</h1><br>
    <section class="con">
       
        <div class="contact">
             <form action="https://formspree.io/f/xpzkzbej" method="POST" id="form-my">
            <div class="form-group">
            <label for="Name" class="form-label" > Name</label>
            <input type="text" id="Name" name="Name" class="form-control" placeholder="Enter your Name">
            </div>
            <div class="form-group">
            <label for="phonenumber" class="form-label">Phone No. </label>
            <input type="number" id="phonenumber" name="phonenumber"  class="form-control" placeholder="Enter your Number"> 
            </div>
            <div class="form-group">
            <label for="email" class="form-label">Email</label>
            <input type="text" id="email" name="email"  class="form-control" placeholder="Enter your Email">
            </div>
            <div class="form-group">
            <label for="message" class="form-label">Message</label>
         <textarea name="message" id="message" cols="30" rows="5"  class="form-control" ></textarea>
            </div>
            <button type="Submit">submit</button>
             </form>
            </div>
             
            <div id="status"></div>
            </section>
            <script src="./main.js"></script>
    </body>
<?php include('partials-front/footer.php');?>