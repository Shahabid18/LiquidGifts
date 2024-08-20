<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.104.2">
  <title>Charities</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/starter-template/">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="styles/starter-template.css">
  <style>
    body {
      background-color: #f0f0f0;
    }

    .tile {
      padding: 20px;
      margin: 10px;
      background-color: #ffffff;
      border-radius: 15px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      text-align: center;
      height: 85%; /* Set a fixed height for the tiles */
      display: flex;
      flex-direction: column;
      justify-content: center;
    }

    .tile img {
      max-width: 100%;
      max-height: 50%; /* Adjusted height for the images */
      border-radius: 50%;
      object-fit: contain;
      margin-bottom: 10px;
    }

    .tile h3 {
      margin-top: 10px;
    }
  </style>
</head>
<body>
  <nav class="navbar navbar-expand-md navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="HomePage.html">Liquid Gifts</a>

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
          <form action="LoginPage.php" method="POST">
            <button class="btn btn-primary" type="submit">Login</button>
          </form>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container mt-4">
  <div class="row">
    <div class="col-md-4">
      <div class="tile">
        <a href="water.php" target="_blank">
          <img src="images/waterorg2.jpeg" alt="water.org">
          <h3>Water.org</h3>
        </a>
      </div>
    </div>

    <div class="col-md-4">
      <div class="tile">
        <a href="charitywater.php" target="_blank">
          <img src="images/charitywater2.jpeg" alt="Charity Water">
          <h3>Charity Water's</h3>
        </a>
      </div>
    </div>

    <div class="col-md-4">
      <div class="tile">
        <a href="wateraid.php" target="_blank">
          <img src="images/WaterAid1.jpeg" alt="wateraid">
          <h3>Water Aid</h3>
        </a>
      </div>
    </div>

    <div class="col-md-4">
      <div class="tile">
        <a href="worldvision.php" target="_blank">
          <img src="images/worldvision1.jpeg" alt="worldvision">
          <h3>World Vision</h3>
        </a>
      </div>
    </div>

    <div class="col-md-4">
      <div class="tile">
        <a href="unicef.php" target="_blank">
          <img src="images/unicef1.jpeg" alt="Unicef">
          <h3>UNICEF (wash)</h3>
        </a>
      </div>
    </div>

    <div class="col-md-4">
      <div class="tile">
        <a href="waterforpeople.php" target="_blank">
          <img src="images/waterforpeople1.jpeg" alt="waterforpeople">
          <h3>Water for People</h3>
        </a>
      </div>
    </div>

    <div class="col-md-4">
      <div class="tile">
        <a href="globalwaterchallenge.php" target="_blank">
          <img src="images/globalwaterchallenge1.jpeg" alt="global water Challenge">
          <h3>Global Water Challenge</h3>
        </a>
      </div>
    </div>

    <div class="col-md-4">
      <div class="tile">
        <a href="thewaterproject.php" target="_blank">
          <img src="images/thewaterproject1.jpeg" alt="the water project">
          <h3>The Water Project</h3>
        </a>
      </div>
    </div>

    <div class="col-md-4">
      <div class="tile">
        <a href="waterislife.php" target="_blank">
          <img src="images/waterislife1.jpeg" alt="Water is life">
          <h3>Water Is Life</h3>
        </a>
      </div>
    </div>

    <div class="col-md-4">
      <div class="tile">
        <a href="pencilsofpromise.php" target="_blank">
          <img src="images/pencilofpromise1.jpeg" alt="Pencils Of Promise">
          <h3>Pencils Of Promise</h3>
        </a>
      </div>
    </div>

    <div class="col-md-4">
      <div class="tile">
        <a href="projectwet.php" target="_blank">
          <img src="images/wet.png" alt="wet">
          <h3>Project WET Foundation</h3>
        </a>
      </div>
    </div>

    <div class="col-md-4">
      <div class="tile">
        <a href="splash.php" target="_blank">
          <img src="images/splash1.jpeg" alt="splash">
          <h3>SPLASH</h3>
        </a>
      </div>
    </div>
  </div>
</div>

    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
