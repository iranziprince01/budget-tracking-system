<?php
$con = mysqli_connect('localhost', 'root', '', 'bts');

if (!$con) {
    die("Database connection failed: " . mysqli_connect_error());
}

if (isset($_POST['signup'])) {
    $FullName = $_POST['fullname'];
    $Email = $_POST['email'];
    $Password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    $sql = "INSERT INTO users (FullName, Email, Pwd) VALUES (?, ?, ?)";
    $stmt = mysqli_prepare($con, $sql);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "sss", $FullName, $Email, $Password);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);

        echo "<script>alert('Account created,Wait for approval'); 
        window.location.href='login.php';</script>";
        exit();
    } else {
        die("Error: " . mysqli_error($con));
    }
}

if (isset($_POST['login'])) {
    $Email = $_POST['email'];
    $Password = $_POST['password'];
    $role="admin";

    $selectSql = "SELECT * FROM users WHERE Email=? AND role='$role'";


    $stmt = mysqli_prepare($con, $selectSql);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "s", $Email);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $row = mysqli_fetch_assoc($result);

        if ($row && password_verify($Password, $row['Pwd'])) {
            header("Location: dashboard.php");
            exit();
        } else {
            echo "<script>alert('Invalid login email or password!'); 
                  window.location.href='login.php';</script>";
        }

        mysqli_stmt_close($stmt);
    } else {
        die("Error: " . mysqli_error($con));
    }
}

if (isset($_POST["expense"])) {
    $description = $_POST["desc"];
    $amount = $_POST["amount"];
    $date = $_POST["dte"];

   
    $insertQuery = "INSERT INTO expenses (description, amount, date) VALUES ('$description', $amount, '$date')";

    if (mysqli_query($con, $insertQuery)) {
        echo "<script>alert('Expense recorded'); 
                  window.location.href='expense.php';</script>";
    } else {
        echo "Error: " . $insertQuery . "<br>" . mysqli_error($con);
    }
}

if (isset($_POST["income"])) {
    $description = $_POST["desc"];
    $amount = $_POST["amount"];
    $date = $_POST["dte"];

    $insertQuery = "INSERT INTO incomes (description, amount, date) VALUES ('$description', $amount, '$date')";

    if (mysqli_query($con, $insertQuery)) {
        echo "<script>alert('Income recorded'); 
                  window.location.href='income.php';</script>";
    } else {
        echo "Error: " . $insertQuery . "<br>" . mysqli_error($con);
    }
}


mysqli_close($con);
?>
