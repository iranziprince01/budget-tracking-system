<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BTS Dashboard</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/general.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/queries.css" />

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <style>
    html, body {
      height: 100%;
    }
    .sidebar {
      height: 100%;
    }
  </style>


</head>
<body>
<header class="header">
        <a href="#cta">
            <img class="logo" alt="Dreamers logo" src="img/Dreamers-Logo.png" />
        </a>

        <nav class="main-nav">
          
                <li><a class="main-nav-link nav-cta" href="index.php">Logout</a></li>
            </ul>
        </nav>

    
    </header>

    <div class="container-fluid">
    <div class="row">
      
      <!-- Sidebar -->
      <nav class="col-md-2 d-none d-md-block bg-light sidebar" style="font-size:20px;height: 600px;">
        <div class="sidebar-sticky">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link" href="expense.php">
                Expenses
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="income.php">
                Income
              </a>
            </li>
          </ul>
        </div>
      </nav>

      <!-- Main Content -->
      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <!-- Your main content goes here -->
        <h1 class="mt-2">Welcome to BTS Dashboard</h1>
        <!-- Add more content as needed -->
      </main>

    </div>
  </div>

  <!-- Bootstrap JS (optional) -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>