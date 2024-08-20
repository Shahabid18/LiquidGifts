<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.104.2">
  <title>Starter Template · Bootstrap v5.2</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/starter-template/">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="styles/starter-template.css">
</head>
<body>
  <nav class="navbar navbar-expand-md navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="HomePage.php">Liquid Gifts</a>
      
      
      <!-- Navbar links -->
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
      
          <!-- Navbar brand and toggler -->
          <li class="nav-item">
    <a class="nav-link" href="HomePage.php">Home</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="Donations.php">Donations</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="charities.php">Charities</a>
</li>
<form action="LoginPage.php" method="POST">
  <button class="btn btn-primary float:right" type="submit">Login</button>
</form>

        </ul>
      </div>
    </div>
  </nav>

  <div class="col-lg-8 mx-auto p-4 py-md-5">
    <header class="d-flex align-items-center pb-3 mb-5 border-bottom">
    </header>

    <main>
      <div class="intro">
        <div class="text">
          <h1>Liquid Gifts</h1>
          <p>"Quenching the world's thirst for change. Join us in a wave of impact as we unite water-focused charities to create a ripple effect of hope and transformation."</p>
        </div>
        <div class="image">
          <img src="images/intropic.jpg" alt="Your Image">
        </div>
      </div>
  
      
      <div class="container">
    <form>
      <label for="charity">Choose a Charity:</label>
      <br>
      <select name="charity" id="charity" onchange="window.location.href=this.value;">
        <option value="#" selected>Select a Charity</option>
        <option value="Water.php">water.org</option>
        <option value="CharityWater.php">Charity: Water</option>
        <option value="WaterAid.php">WaterAid</option>
        <option value="WorldVision.php">World Vision</option>
        <option value="UNICEF.php">UNICEF (WASH)</option>
        <option value="WaterForPeople.php">Water for People</option>
        <option value="GlobalWaterChallenge.php">Global Water Challenge</option>
        <option value="TheWaterProject.php">The Water Project</option>
        <option value="WaterIsLife.php">Water is Life</option>
        <option value="PencilsOfPromise.php">Pencils of Promise</option>
        <option value="ProjectWETFoundation.php">Project WET Foundation</option>
        <option value="SPLASH.php">SPLASH</option>
      </select>
    </form>
  </div>



      <hr class="col-3 col-md-2 mb-5">

      <div class="container1">
        <div class="text-box">
            <h2>"Pouring Possibilities, Nurturing Futures"</h2>
            <p>"Empowering Lives, One Drop at a Time: Short Liquid Gifts, Endless Streams of Change"</p>
        </div>
        <div class="image-container">
            <img src="images/WaterAid1.jpg" alt="Eyecatching image">
        </div>
    </div>

    <div class="signup-container text-center mt-4">
        <a href="signup.php" class="btn btn-primary btn-lg">Sign Up</a>
      </div>
      

      <div class="container mt-4">
  <h2>Donations</h2>
  <div class="row">
    <div class="col-md-4">
      <div class="card mb-3">
        <img src="images/icon.jpg" class="card-img-top" alt="Donation Image 1">
        <div class="card-body">
          
          <h5 class="card-title">Donation Title 1</h5>
          <p class="card-text">Details about the donation 1.</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card mb-3">
        <img src="images/download.png" class="card-img-top" alt="Donation Image 2">
        <div class="card-body">
          <!-- Donation Information -->
          <h5 class="card-title">Donation Title 2</h5>
          <p class="card-text">Details about the donation 2.</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card mb-3">
        <img src="images/images.png" class="card-img-top" alt="Donation Image 3">
        <div class="card-body">
          <!-- Donation Information -->
          <h5 class="card-title">Donation Title 3</h5>
          <p class="card-text">Details about the donation 3.</p>
        </div>
      </div>
    </div>
    </main>
    <footer class="pt-5 my-5 text-muted border-top">
      shah abid shahriyar &middot; &copy; 2023
    </footer>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
