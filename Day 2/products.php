<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Best Selling Products</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
         background-color: #f5f5f5; 
        }
  </style>
</head>
<body>
<div class="container my-4 text-center w-50">
  <img src="banner.png" alt="Banner" class="img-fluid">
</div>
<nav class="navbar navbar-expand-lg bg-danger w-50 mx-auto mb-4">
  <div class="container">
    <a class="navbar-brand text-white" href="#">Home</a>
    <div class="collapse navbar-collapse">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link text-white" href="#">Technology</a></li>
        <li class="nav-item"><a class="nav-link text-white" href="#">Life & Society</a></li>
        <li class="nav-item"><a class="nav-link text-white" href="#">Sports</a></li>
        <li class="nav-item"><a class="nav-link text-white" href="#">Road to Hometown</a></li>
        <li class="nav-item"><a class="nav-link text-white" href="#">Auto Talk</a></li>
        <li class="nav-item"><a class="nav-link text-white" href="#">Podcast</a></li>
        <li class="nav-item"><a class="nav-link text-white" href="#">Deals</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container my-4">
  <div class="row">
  <div class="col-md-4">
      <div class="card mb-3">
        <img src="product1.png" class="card-img-top" alt="Product 1">
        <div class="card-body">
          <p class="card-text text-center">Open Account Woori Bank</p>
        </div>
      </div>
      <div class="card">
        <img src="product2.png" class="card-img-top" alt="Product 2">
        <div class="card-body">
          <p class="card-text text-lg-center">Chance To Win </p>
        </div>
      </div>
    </div>
    <div class="col-md-8">
      <div class="card">
        <div class="card-body">
          <h4 class="mb-3">Best Selling Products</h4>
          <div class="table-responsive">
            <table class="table table-bordered table-hover">
              <thead class="table-light">
                <tr>
                  <th>Product Name</th>
                  <th>Inventory</th>
                  <th>Unit Price</th>
                  <th>Quantity Sold</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Coconut</td>
                  <td>240</td>
                  <td>$9.64</td>
                  <td>1594</td>
                </tr>
                <tr>
                  <td>Kiwi</td>
                  <td>600</td>
                  <td>$8.51</td>
                  <td>987</td>
                </tr>
                <tr>
                  <td>Apple</td>
                  <td>547</td>
                  <td>$17.40</td>
                  <td>153</td>
                </tr>
                <tr>
                  <td>Orange</td>
                  <td>112</td>
                  <td>$11.28</td>
                  <td>103</td>
                </tr>
                <tr>
                  <td>Banana</td>
                  <td>277</td>
                  <td>$3.97</td>
                  <td>87</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>

<footer class="bg-dark text-white text-center py-3">
  © 2025 Best Products Dashboard
</footer>
</body>
</html>
