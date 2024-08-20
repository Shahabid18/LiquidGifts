<!DOCTYPE html>
<html>
<head>
  <title>User Details</title>
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
          <<li class="nav-item">
    <a class="nav-link" href="HomePage.php">Home</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="Donations.php">Donations</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="charities.php">Charities</a>
</li>
          <button class="btn btn-primary float:right">Login</button>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"></button>
            <span class="navbar-toggler-icon"></span>
          </button>
        </ul>
      </div>
    </div>
  </nav>


  <div class="panel">
  <h1>Enter In Your Bank Details</h1>
  <div class="panel-body">
    <form action="bankdetails.php" method="post">
    <div class="form-group">
        <label for="CardNumber">Donation Amount</label>
        <input type="text" class="form-control" id="Donation Amount" name="DonationAmount" required/>
      </div>

      <div class="form-group">
        <label for="CardNumber">Card Number</label>
        <input type="text" class="form-control" id="CardNumber" name="CardNumber" required/>
      </div>
      <div class="form-group">
      <label for="ExpiryDate">Expiration Date:</label>
    <input type="text" id="ExpiryDate" name="ExpiryDate" required>
      </div>
      <div class="form-group">
        <label for="CVV">CVV</label>
        <input type="tel" class="form-control" id="CVV" name="CVV" required/>
      </div>
      <div class="form-group">
        <label for="BankingCorporation">Banking Corporation</label>
        <input type="tel" class="form-control" id="BankingCorporation" name="BankingCorporation" required/>
      </div>


      <input type="submit" class="btn btn-primary" value="Submit" />
    </form>
  </div>
</div>



            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
