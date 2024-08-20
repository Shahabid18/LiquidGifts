<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.104.2">
  <title>User Profile - Liquid Gifts</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/starter-template/">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
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
          <li class="nav-item">
            <form action="HomePage.php" method="POST">
              <button class="btn btn-outline-primary" type="submit">Logout</button>
            </form>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <main>
    <div class="container mt-5">
      <h2>User Profile</h2>
      <div class="row">
        <div class="col-md-6">
          <form action="updateprofile.php" method="post">
            <div class="mb-3">
              <label for="FirstName" class="form-label">First Name:</label>
              <input type="text" class="form-control" id="FirstName" name="FirstName" required>
            </div>
            <div class="mb-3">
              <label for="Surname" class="form-label">Surname:</label>
              <input type="text" class="form-control" id="Surname" name="Surname" required>
            </div>
            <div class="mb-3">
              <label for="Email" class="form-label">Email:</label>
              <input type="Email" class="form-control" id="Email" name="Email" required>
            </div>
            <div class="mb-3">
              <label for="PhoneNumber" class="form-label">Phone Number:</label>
              <input type="tel" class="form-control" id="PhoneNumber" name="PhoneNumber" required>
            </div>
            <button type="submit" class="btn btn-primary">Update Profile</button>
          </form>
        </div>
      </div>
    </div>
  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
