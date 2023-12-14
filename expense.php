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
      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4" style="font-size: 20px;">
        

        <!-- Button to Add Expense -->
        <button class="btn btn-primary" data-toggle="modal" data-target="#addExpenseModal" style="font-size: 20px;">
          Add Expense
        </button>

        <!-- Table of Expenses -->
        <table class="table mt-3">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Expense Description</th>
              <th scope="col">Amount</th>
              <th scope="col">Expense Date</th>
            </tr>
          </thead>
          <tbody>
                        <?php
                        $con = mysqli_connect('localhost', 'root', '', 'bts');

                        if (!$con) {
                            die("Database connection failed: " . mysqli_connect_error());
                        }
                        $selectQuery = "SELECT * FROM expenses";
                        $result = mysqli_query($con, $selectQuery);
                        
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>";
                            echo "<td>" . $row['id'] . "</td>";
                            echo "<td>" . $row['description'] . "</td>";
                            echo "<td> $ " . $row['amount'] . "</td>";
                            echo "<td>" . $row['date'] . "</td>";
                            echo "</tr>";
                        }
                        
                       
                        mysqli_close($con);
                        ?>
                    </tbody>
        </table>

        <!-- Bootstrap JS (optional) -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

        <!-- Add Expense Modal -->
        <div class="modal fade" id="addExpenseModal" tabindex="-1" role="dialog" aria-labelledby="addExpenseModalLabel" aria-hidden="true" style="font-size: 20px;">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="addExpenseModalLabel">Add Expense</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body" style="font-size: 20px;">
                <!-- Add your form for adding expenses here -->
                <form action="server.php" method="POST"> 
                  <div class="form-group">
                    <label for="expenseDescription">Expense Description</label>
                    <input type="text" class="form-control" id="expenseDescription" name="desc" placeholder="Enter expense description">
                  </div>
                  <div class="form-group">
                    <label for="expenseAmount">Amount</label>
                    <input type="number" class="form-control" id="expenseAmount" name="amount" placeholder="Enter expense amount">
                  </div>             
                  <div class="form-group">
                    <label for="expenseAmount">Date</label>
                    <input type="date" class="form-control" id="expenseAmount" name="dte" placeholder="Enter expense amount">
                  </div>   
                  <button type="submit" class="btn btn-primary" name="expense">Save Expense</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </main>
    </div>
  </div>
</body>
</html>
