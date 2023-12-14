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
    <style>


.footer {
    background-color: #fffae8;
    color: #767676;
    padding: 30px 0;
}

.container {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

.footer-content {
    display: flex;
    justify-content: space-between;
}

.footer-logo img {
    width: 100px;
    /* Adjust the width as needed */
}

.footer-nav-list,
.footer-social-list {
    list-style: none;
    padding: 0;
    margin: 0;
    display: flex;
}

.footer-nav-link,
.footer-social-list a {
    text-decoration: none;
    color: #767676;
    font-size: large;
    margin-right: 20px;
    
}

.footer-bottom {
    text-align: center;
    margin-top: 20px;
    color: #767676;
    
}


/* Social media icons */

.footer-social-list ion-icon {
    font-size: 24px;
    margin-right: 10px;
}


/* Responsive styles */

@media screen and (max-width: 768px) {
    .footer-content {
        flex-direction: column;
    }
    .footer-nav-list,
    .footer-social-list {
        margin-top: 20px;
    }
}
    </style>
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
                <li><a class="main-nav-link nav-cta" href="#cta">Sign Up</a></li>
            </ul>
        </nav>

        <button class="btn-mobile-nav">
        <ion-icon class="icon-mobile-nav" name="menu-outline"></ion-icon>
        <ion-icon class="icon-mobile-nav" name="close-outline"></ion-icon>
      </button>
    </header>


    <main>
        <section class="section-hero">
            <div class="hero">
                <div class="hero-text-box">
                    <h1 class="heading-primary head">
                        Empowering Progress Through Transparent Finance
                    </h1>
                    <p class="hero-description">
                        In the heart of South Sudan, where resilience meets opportunity, We envision a future where every citizen plays a pivotal role in shaping the destiny of their nation. To realize this dream, we've identified a critical need and stepping up to address it.
                    </p>
                    <a href="#cta" class="btn btn--full margin-right-sm">Track Expense</a
            >

            <a href="#how" class="btn btn--outline">Learn more &darr;</a>
                    <div class="expenses-done">
                        <div class="expenses-imgs">
                            <img src="img/viewers/customer-1.png" alt="Viewer photo" />
                            <img src="img/viewers/customer-2.png" alt="Viewer photo" />
                            <img src="img/viewers/customer-3.png" alt="Viewer photo" />
                            <img src="img/viewers/customer-4.png" alt="Viewer photo" />
                            <img src="img/viewers/customer-5.png" alt="Viewer photo" />
                        </div>
                        <p class="expenses-text">
                            <span>250,000+</span> transactions done last year!
                        </p>
                    </div>
                </div>
                <div class="hero-img-box">
                    <picture>
                        <source srcset="img/Hero.webp" type="image/webp" />
                        <source srcset="img/hero-mini.png" type="image/png" />

                        <img src="img/Hero.webp" class="hero-img" alt="Man counting money, tax design papers and roped money" />
                    </picture>
                </div>
            </div>
        </section>

        <section class="section-featured">
            <div class="container">
                <h2 class="heading-featured-in">As featured in</h2>
                <div class="logos">
                    <img src="img/logos/techcrunch.png" alt="Techcrunch logo" />
                    <img src="img/logos/business-insider.png" alt="Business Insider logo" />
                    <img src="img/logos/the-new-york-times.png" alt="The New York Times logo" />
                    <img src="img/logos/forbes.png" alt="Forbes logo" />
                    <img src="img/logos/tribune.png" alt="Sudan Tribune logo" />
                </div>
            </div>
        </section>

        <section class="section-how" id="how">
            <div class="container">
                <span class="subheading">How it works</span>
                <h2 class="heading-secondary">Why Budget Tracking System?</h2>
            </div>

            <div class="container grid grid--2-cols grid--center-v">
                <!-- STEP 01 -->
                <div class="step-text-box">
                    <p class="step-number">01</p>
                    <h3 class="heading-tertiary">Get real-time insight</h3>
                    <p class="step-description">
                        Experience the power of up-to-the-minute monitoring. Our system provides instantaneous updates on budget allocations and expenditures, giving you unparalleled insight into the financial heartbeat of South Sudan!
                    </p>
                </div>

                <div class="step-img-box">
                    <img src="img/app/app-screen-1.png" class="step-img" alt="iPhone app
            preferences selection screen" />
                </div>

                <!-- STEP 02 -->
                <div class="step-img-box">
                    <img src="img/app/app-screen-2.png" class="step-img" alt="iPhone app
            expense approving plan screen" />
                </div>
                <div class="step-text-box">
                    <p class="step-number">02</p>
                    <h3 class="heading-tertiary">Transparency Redefined</h3>
                    <p class="step-description">
                        We are committed to transparency like never before. Our platform demystifies financial processes, ensuring that every citizen can understand and engage with the allocation and utilization of public funds.
                    </p>
                </div>

                <!-- STEP 03 -->
                <div class="step-text-box">
                    <p class="step-number">03</p>
                    <h3 class="heading-tertiary">Accountability at Every Level</h3>
                    <p class="step-description">
                        From government officials to community leaders, our system fosters accountability across the board. It's not just about tracking numbers; it's about building a culture of responsibility and integrity!
                    </p>
                </div>
                <div class="step-img-box">
                    <img src="img/app/app-screen-3.png" class="step-img" alt="iPhone app
            transactions screen" />
                </div>
            </div>
        </section>

        <section class="section-objectives" id="objectives">
            <div class="container">
                <span class="subheading">Objectives</span>
                <h2 class="heading-secondary">
                    Our Mission, Vision, values and Goals.
                </h2>
            </div>

            <div class="container grid grid--4-cols">
                <div class="feature">
                    <ion-icon class="feature-icon" name="infinite-outline"></ion-icon>
                    <p class="feature-title">Mission</p>
                    <p class="feature-text">
                        To empower South Sudan through the implementation of a cutting-edge system, facilitating real-time monitoring and reporting of budget allocations.
                    </p>
                </div>
                <div class="feature">
                    <ion-icon class="feature-icon" name="nutrition-outline"></ion-icon>
                    <p class="feature-title">Vision</p>
                    <p class="feature-text">
                        To pioneer a transformative financial landscape in South Sudan, where our budget-tracking system becomes a catalyst for national progress.
                    </p>
                </div>
                <div class="feature">
                    <ion-icon class="feature-icon" name="person-add-outline"></ion-icon>
                    <p class="feature-title">Values</p>
                    <p class="feature-text">
                        To serve as the bedrock of our commitment to South Sudan's financial integrity and societal advancement. Transparency, valuing openness and honesty.
                    </p>
                </div>
                <div class="feature">
                    <ion-icon class="feature-icon" name="construct-outline"></ion-icon>
                    <p class="feature-title">Goals</p>
                    <p class="feature-text">
                        To enhance transparency and accountability in managing public finances. Reducing corruption and misappropriation of public funds.
                    </p>
                </div>
            </div>
        </section>

        <section class="section-transactions" id="transactions">
            <div class="container center-text">
                <span class="subheading">Transactions</span>
                <h2 class="heading-secondary">
                    Budget Tracker chooses from 5,000+ transactions
                </h2>
            </div>

            <div class="container grid grid--3-cols margin-bottom-md">
                <div class="expense">
                    <img src="img/transactions/ssp.png" class="expense-img" alt="income" />
                    <div class="expense-content">
                        <div class="expense-tags">
                            <span class="tag tag--sector">Government</span>
                        </div>
                        <p class="expense-title">Income</p>

                        <?php
        $con = mysqli_connect('localhost', 'root', '', 'bts');

        if (!$con) {
          die("Database connection failed: " . mysqli_connect_error());
        }
        $sumQuery = "SELECT SUM(amount) as totalSum FROM incomes";
        $result = mysqli_query($con, $sumQuery);
        
        // Fetch the result
        $row = mysqli_fetch_assoc($result);
        
        // Output the total sum
        $totalSum = $row['totalSum'];
        echo "Total sum of incomes $ : $totalSum";
        
       
        mysqli_close($con);
        ?>

            </div>
          </div>

          <div class="expense">
            <img
              src="img/transactions/expense-tracking.webp"
              class="expense-img"
              alt="Expenses"
            />
            <div class="expense-content">
              <div class="expense-tags">
                <span class="tag tag--gov">Sector</span>
                    </div>
                    <p class="expense-title">Expenses</p>
                   
                    <?php
        $con = mysqli_connect('localhost', 'root', '', 'bts');

        if (!$con) {
          die("Database connection failed: " . mysqli_connect_error());
        }
     
        $sumQueryex = "SELECT SUM(amount) as totalSum FROM expenses";
$resultex = mysqli_query($con, $sumQueryex);

// Fetch the result
$rowex = mysqli_fetch_assoc($resultex);

// Output the total sum
$totalSumex = $rowex['totalSum'];
echo "Total sum of expenses $ : $totalSumex"; 
        mysqli_close($con);
        ?>
            </div>
          </div>

          <div class="income">
            <h3 class="heading-tertiary">Works with any transaction:</h3>
            <ul class="list">
              <li class="list-item">
                <ion-icon class="list-icon" name="checkmark-outline"></ion-icon>
                <span>Social services</span>
                        </li>
                        <li class="list-item">
                            <ion-icon class="list-icon" name="checkmark-outline"></ion-icon>
                            <span>National Defense</span>
                        </li>
                        <li class="list-item">
                            <ion-icon class="list-icon" name="checkmark-outline"></ion-icon>
                            <span>Infrastructure Development</span>
                        </li>
                        <li class="list-item">
                            <ion-icon class="list-icon" name="checkmark-outline"></ion-icon>
                            <span>Investment</span>
                        </li>
                        <li class="list-item">
                            <ion-icon class="list-icon" name="checkmark-outline"></ion-icon>
                            <span>Grants and donations</span>
                        </li>
                        <li class="list-item">
                            <ion-icon class="list-icon" name="checkmark-outline"></ion-icon>
                            <span>Subsidies</span>
                        </li>
                        <li class="list-item">
                            <ion-icon class="list-icon" name="checkmark-outline"></ion-icon>
                            <span>Fees and Charges</span>
                        </li>
                        <li class="list-item">
                            <ion-icon class="list-icon" name="checkmark-outline"></ion-icon>
                            <span>Environmental Protection </span>
                        </li>
                        <li class="list-item">
                            <ion-icon class="list-icon" name="checkmark-outline"></ion-icon>
                            <span>Tax revenue</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="container all-transactions">
                <a href="#cta" class="link">See all transactions &rarr;</a>
            </div>
        </section>

        <section class="section-testimonials" id="testimonials">
            <div class="testimonials-container">
                <span class="subheading">Testimonials</span>
                <h2 class="heading-secondary">Financial Transformation stories!</h2>

                <div class="testimonials">
                    <figure class="testimonial">
                        <img class="testimonial-img" alt="Photo of Minister" src="img/viewers/Minister.png" />
                        <blockquote class="testimonial-text">
                            Implementing effective budget management at the governmental level is no small feat. This system has proven to be an invaluable tool for our country.
                        </blockquote>
                        <p class="testimonial-name">&mdash; Minister Michael L.</p>
                    </figure>

                    <figure class="testimonial">
                        <img class="testimonial-img" alt="Photo of Governor" src="img/viewers/Governer.jpg" />
                        <blockquote class="testimonial-text">
                            In my role overseeing the financial well-being of our state and citizens, this budget tracking system has become an essential companion for us all!
                        </blockquote>
                        <p class="testimonial-name">&mdash; Governor Sarah W.</p>
                    </figure>

                    <figure class="testimonial">
                        <img class="testimonial-img" alt="Photo of Viewer" src="img/viewers/Citizen.png" />
                        <blockquote class="testimonial-text">
                            Being a civil servant, understanding how our tax money is utilized is crucial to me. This budget tracking system has brought a new level of transparency!
                        </blockquote>
                        <p class="testimonial-name">&mdash; Daniel M.</p>
                    </figure>

                    <figure class="testimonial">
                        <img class="testimonial-img" alt="Photo of Businesswoman" src="img/viewers/Business woman.png" />
                        <blockquote class="testimonial-text">
                            I'm directly impacted by government policies and local economic conditions. This system helps both the government finances and businesses.
                        </blockquote>
                        <p class="testimonial-name">&mdash; Amina K.</p>
                    </figure>
                </div>
            </div>

            <div class="gallery">
                <figure class="gallery-item">
                    <img src="img/gallery/img1.jpg" alt="Photo of beautifully
            arranged expense" />
                    <!-- <figcaption>Caption</figcaption> -->
                </figure>
                <figure class="gallery-item">
                    <img src="img/gallery/img2.jpg" alt="Photo of beautifully
            arranged expense" />
                </figure>
                <figure class="gallery-item">
                    <img src="img/gallery/img3.jpg" alt="Photo of beautifully
            arranged expense" />
                </figure>
                <figure class="gallery-item">
                    <img src="img/gallery/img4.jpg" alt="Photo of beautifully
            arranged expense" />
                </figure>
                <figure class="gallery-item">
                    <img src="img/gallery/img5.jpg" alt="Photo of beautifully
            arranged expense" />
                </figure>
                <figure class="gallery-item">
                    <img src="img/gallery/img6.jpg" alt="Photo of beautifully
            arranged expense" />
                </figure>
                <figure class="gallery-item">
                    <img src="img/gallery/img7.jpg" alt="Photo of beautifully
            arranged expense" />
                </figure>
                <figure class="gallery-item">
                    <img src="img/gallery/img8.jpg" alt="Photo of beautifully
            arranged expense" />
                </figure>
                <figure class="gallery-item">
                    <img src="img/gallery/img9.jpg" alt="Photo of beautifully
            arranged expense" />
                </figure>
                <figure class="gallery-item">
                    <img src="img/gallery/img10.jpg" alt="Photo of beautifully
            arranged expense" />
                </figure>
                <figure class="gallery-item">
                    <img src="img/gallery/img11.jpg" alt="Photo of beautifully
            arranged expense" />
                </figure>
                <figure class="gallery-item">
                    <img src="img/gallery/img12.jpg" alt="Photo of beautifully
            arranged expense" />
                </figure>
            </div>
        </section>

        <section class="section-cta" id="cta">
            <div class="container">
                <div class="cta">
                    <div class="cta-text-box">
                        <h2 class="heading-secondary">Sign up for free!</h2>
                        <p class="cta-text">
                            Start your journey to financial empowerment in South Sudan by signing up for our free budget tracking system—taking control of your expenses has never been more accessible and rewarding!
                        </p>

                        <form class="cta-form" name="sign-up" action="server.php" method="POST">
                            <div>
                                <label for="fullname">Full Name</label>
                                <input id="fullname" type="text" placeholder="John Chol" name="fullname" required />
                            </div>

                            <div>
                                <label for="email">Email address</label>
                                <input id="email" type="email" placeholder="me@example.com" name="email" required />
                            </div>

                            <div>
                            <label for="select-where">Password</label>
                            <input id="password" type="password" placeholder="**************" name="password" required />
                            </div>

                            <button class="btn btn--form" name="signup">Sign up now</button>

                            <!-- <input type="checkbox" />
                <input type="number" /> -->

                <label for="select-where">Do you have account ? <a class="main-nav-link " style="color:white;" id="logi" href="login.php">Login</a></label>
                    </div></label> 

                        </form>
                       
                    <div class="cta-img-box" role="img" aria-label="Man busy on budgeting"></div>
                </div>
            </div>
        </section>
    </main>
    <footer class="footer">
    <div class="container">
        <div class="footer-content">
            <div class="footer-logo">
                <img class="logo" alt="Dreamers logo" src="img/Dreamers-Logo.png" />
            </div>
            <div class="footer-nav">
                <ul class="footer-nav-list">
                    <li><a class="footer-nav-link" href="#">Privacy Policy</a></li>
                    <li><a class="footer-nav-link" href="#">Terms of Service</a></li>
                    <li><a class="footer-nav-link" href="#">Contact Us</a></li>
                </ul>
            </div>
            <div class="footer-social">
                <p class="footer-social-text" style="font-size: 20px;">Follow Us:</p>
                <ul class="footer-social-list">
                    <li><a href="#" target="_blank"><ion-icon name="logo-facebook"></ion-icon></a></li>
                    <li><a href="#" target="_blank"><ion-icon name="logo-twitter"></ion-icon></a></li>
                    <li><a href="#" target="_blank"><ion-icon name="logo-instagram"></ion-icon></a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2023 Budget Tracking System. All rights reserved.</p>
        </div>
    </div>
</footer>

    <!-- Bootstrap JS (optional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-dpNb8+VFn7XpVLkTzU0Ism
</body>
</html>