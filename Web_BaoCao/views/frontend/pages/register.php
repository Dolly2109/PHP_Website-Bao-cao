<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="<?= URL ?>asset/frontend/login/components.css">

</head>
<body>

<section class="form-container">

   <form action="<?= URL ?>index.php/frontend/doRegister" enctype="multipart/form-data" method="POST">
      <h3>register now</h3>
      <input type="text" name="name" class="box" placeholder="Enter your name" required>
      <input type="email" name="email" class="box" placeholder="Enter your email" required>
      <input type="text" name="phone" class="box" placeholder="Enter your phone" required>
      <input type="text" name="address" class="box" placeholder="Enter your address" required>
      <input type="password" name="pass" class="box" placeholder="Enter your password" required>
      <input type="password" name="cpass" class="box" placeholder="Confirm your password" required>
      <input type="submit" value="register now" class="btn" name="submit">
      <p>Already have an account? <a href="<?=URL;?>index.php/frontend/login">login now</a></p>
   </form>

</section>


</body>
</html>