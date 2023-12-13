<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Welcome to our Budget Tracking System, your go-to solution for effortless financial management. Take control of your finances with our user-friendly platform designed to simplify budgeting and empower you on your journey to financial success."
    />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="icon" href="img/favicon.png" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="css/general.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/queries.css" />

    <script type="module" src="https://unpkg.com/ionicons@5.4.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule="" src="https://unpkg.com/ionicons@5.4.0/dist/ionicons/ionicons.js"></script>

    <script defer src="https://unpkg.com/smoothscroll-polyfill@0.4.4/dist/smoothscroll.min.js"></script>
    <script defer src="js/script.js"></script>

    <title>Budget Tracking System &mdash; real transactions!</title>
</head>

<body>
    <header class="header">
        <a href="#cta">
            <img class="logo" alt="Dreamers logo" src="img/Dreamers-Logo.png" />
        </a>

        <nav class="main-nav">
            <ul class="main-nav-list">
                <li>
                    <a class="main-nav-link" href="#how">How it works</a>
                </li>
                <li>
                    <a class="main-nav-link" href="#objectives">Objectives</a>
                </li>
                <li>
                    <a class="main-nav-link" href="#transactions">Transactions</a>
                </li>
                <li>
                    <a class="main-nav-link" href="#testimonials">Testimonials</a>
                </li>
                <li><a class="main-nav-link nav-cta" href="index.php">Sign Up</a></li>
            </ul>
        </nav>

        <button class="btn-mobile-nav">
        <ion-icon class="icon-mobile-nav" name="menu-outline"></ion-icon>
        <ion-icon class="icon-mobile-nav" name="close-outline"></ion-icon>
      </button>
    </header>
  

    <section class="section-cta" id="cta">
            <div class="container">
                <div class="cta">
                    <div class="cta-text-box">
                        <h2 class="heading-secondary">Login Here</h2>

                        <form class="cta-form" name="sign-up" action="server.php" method="post">
                    
                            <div>
                                <label for="email">Email address</label>
                                <input id="email" type="email" placeholder="me@example.com" name="email" required />
                            </div>

                            <div>
                            <label for="select-where">Password</label>
                            <input id="password" type="password" placeholder="**************" name="password" required />
                            </div>

                            <button class="btn btn--form" name="login">Login</button>



                            <label for="select-where">Have  not Account ? <a class="main-nav-link " style="color:white;" id="logi" href="index.php#cta">Sign up</a></label>
                        </form>
                        
                    </div>
                    <div class="cta-img-box" role="img" aria-label="Man busy on budgeting"></div>
                </div>
            </div>
        </section>
       

</body>

</html>