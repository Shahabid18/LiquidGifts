<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.104.2">
  <title>Login Page</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/starter-template/">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="styles/starter-template.css">
  <style>
    /* Custom CSS for centering the form */
    .form-container {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh; /* Adjust as needed */
    }

    form {
      width: 300px; /* Adjust form width as needed */
    }
  </style>
</head>

<body>

  <nav class="navbar navbar-expand-md navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="HomePage.php">Liquid Gifts</a>

      <!-- Navbar links -->
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="HomePage.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Donations.php">Donations</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="charities.php">Charities</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="form-container">
    <form action="profile.php" method="post">
      <h2 class="mb-4">Login</h2>
      <div class="mb-3">
        <label for="email" class="form-label">Email:</label>
        <input type="email" class="form-control" id="email" name="email" required>
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password:</label>
        <input type="password" class="form-control" id="password" name="password" required>
      </div>
      <div class="mb-3">
        <input type="submit" class="btn btn-primary" value="Login">
        <a href="SignUp.php" class="btn btn-success">Sign Up</a>
      </div>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
