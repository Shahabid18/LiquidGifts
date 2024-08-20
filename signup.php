<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sign Up Page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <nav class="navbar navbar-expand-md navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="HomePage.php">Liquid Gifts</a>
      
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="HomePage.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Donations.php">Donations</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Charities.php">Charities</a>
          </li>
          <a href="loginpage.php" class="btn btn-primary">Login</a>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-lg-6">
        <div class="card p-4">
          <h2 class="text-center mb-4">Sign Up</h2>
          <form action="php/signupuser.php" method="post">
            <div class="mb-3">
              <input type="text" class="form-control" placeholder="First Name" name="FirstName" required>
            </div>
            <div class="mb-3">
              <input type="text" class="form-control" placeholder="Surname" name="Surname" required>
            </div>
            <div class="mb-3">
              <input type="tel" class="form-control" placeholder="Phone Number" name="PhoneNumber" required>
            </div>
            <div class="mb-3">
              <input type="email" class="form-control" placeholder="Email" name="Email" required>
            </div>
            <div class="mb-3">
              <button class="btn btn-primary w-100" type="submit">Sign Up</button>
            </div>
          </form>
          <div class="mb-3">
              <form action="LoginPage.php">
              <button class="btn btn-primary w-100" type="submit">Login To Your Account</button>
              </form>
            </div>
        </div>
      </div>
    </div>
  </div>
  

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

