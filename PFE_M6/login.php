<?php
session_start();

// Check if the login form is submitted
if (isset($_POST['submit'])) {
    // Get the submitted email and password
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Check if the email and password are correct
    // You would need to implement your own logic here to validate the login credentials
    if ($email === 'example@example.com' && $password === 'password') {
        // Login successful
        $_SESSION['email'] = $email;
        header('Location: dashboard.php'); // Redirect to the welcome page
        exit();
    } else {
        // Login failed
        $error = 'Invalid email or password';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
     <!-- Favicon-->
     <link rel="icon" type="image/x-icon" href="fav png.png" />
    <!-- Bootstrap Icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
    <!-- SimpleLightbox plugin CSS-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="./css/styles.css" rel="stylesheet" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<section class="page-section" id="login">
  <div class="container px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5 justify-content-center">
      
      <div class="col-lg-8 col-xl-6 text-center">
        <h4 class="alert alert-danger text-center">Cette page pour les admins</h4>
        <h2 class="mt-0">Login</h2>
        <hr class="divider" />
      </div>
    </div>
    <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
      <div class="col-lg-6">
        <form id="loginForm" method="POST" action="">
          <!-- Email input-->
          <div class="form-floating mb-3">
            <input class="form-control" id="email" name="email" type="email" placeholder="name@example.com" required />
            <label for="email">Email address</label>
          </div>
          <!-- Password input-->
          <div class="form-floating mb-3">
            <input class="form-control" id="password" name="password" type="password" placeholder="Password" required />
            <label for="password">Password</label>
          </div>
          <!-- Submit Button-->
          <div class="d-grid"><button class="btn btn-primary btn-xl" name="submit" type="submit">Login</button></div>
        </form>
      </div>
    </div>
  </div>
</section>
<!-- Footer-->
<?php include './footer.php'; ?>
</body>
</html>
