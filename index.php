<!DOCTYPE html>
<lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Website</title>
    <link rel="stylesheet" href="assets/css/styles.css">
    
</head>
<body>
    <!-- Header -->
    <header>
        <div class="nav-container">
            <div class="logo">
                <h1><span style="color: darkorange;">Travellink.in</span></h1>
            </div>
            <nav>
                <ul>
                <li class="nav-item"><a class="nav-link" href="index.php" class="active">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="main/pemesanan.php">Pemesanan</a></li>
                <li class="nav-item"><a class="nav-link" href="destinasi.php">Destination</a></li>
                <li class="nav-item"><a class="nav-link" href="about.php">About Us</a></li>
            </nav>
        </div>
    </header>
  
    <!-- Home Section -->
    <section class="home">
        <h1><span style="color: darkorange;">Travel</span> the world <br> and make <span style="color: darkorange;">STORY</span></h1>
            <img src="assets/images/First.jpg.jpeg" alt="Travel Home">
    </section>
    
<!--Search Box Section-->
        <div class="search-box">
          <form>
            <div class="search-row">
              <div class="input-group">
                <label for="from">From</label>
                <input type="text" id="from" placeholder="Panyaweuyan, Majalengka">
              </div>
              <div class="input-group">
                <label for="to">To</label>
                <input type="text" id="to" placeholder="Panyaweuyan, Majalengka">
              </div>
              <div class="input-group">
                <label for="dates">Dates</label>
                <input type="text" id="dates" placeholder="Select a date range">
              </div>
              <div class="input-group">
                <label for="guests">Guests</label>
                <input type="number" id="guests" placeholder="Number of guests">
              </div>
              <button type="submit">Search</button>
            </div>
          </form>
        </div>
      </div>
    
      
    <!-- Suggested For You -->
    <section class="Suggest">
        <h2>Suggested For You, <span style="color: darkorange;">Situ Cipanten</span></h2>
        <div class="features">
            <div class="feature">
                <a href="details1.html">
                    <img src="assets/images/Second.jpg.jpeg" alt="Second Image">
                </a>
            </div>
            <div class="feature">
                <a href="details2.html">
                    <img src="assets/images/Third.jpg.jpeg" alt="Third Image">
                </a>
            </div>
            <div class="feature">
                <a href="details3.html">
                    <img src="assets/images/fourth.jpg.jpeg" alt="Fourth Image">
                </a>
            </div>
        </div>
    </section>
    

<!-- Popular Destination -->
<section class="Popular">
    <h2>Popular Destination</h2>
    <div class="Bests">
        <div class="Best">
            <a href="destination1.html">
                <img src="assets/images/fifth.jpg.jpeg" alt="Fifth Image">
            </a>
        </div>
        <div class="Best">
            <a href="destination2.html">
                <img src="assets/images/sixth.jpg.jpeg" alt="Sixth Image">
            </a>
        </div>
        <div class="Best">
            <a href="destination3.html">
                <img src="assets/images/seventh.jpg.jpeg" alt="Seventh Image">
            </a>
        </div>
    </div>
</section>


<!-- About Us Section -->
<section class="about-us">
    <div class="about-background">
        <div class="about-image">
            <img src="assets/images/Eighth.jpg.jpeg" alt="About Us Photo" />
        </div>
        <div class="about-text">
            <h3>About Us</h3>
            <h4><span class="highlight">Pelayanan</span> Terbaik <br>dan Terpercaya</h4>
            <p>We are the largest holiday service in the world with partners and places spread all over the world by prioritizing service and customers satisfaction.</p>
            <button class="learn-more">Learn More</button>
           
            <div class="stacked-text">
                <span>
                    <span class="highlight">200+</span><br>
                    Customers<br>
                    & Partners
                </span>
                <span>
                    <span class="highlight">500+</span><br>
                    Place In The World
                </span>
                <span>
                    <span class="highlight">1k+</span><br>
                    Success Journey
                </span>
            </div> 

        </div>
    </div>
</section>

<!--WHy Choose Us Section-->
<div class="stacked-text">
    <!-- Why Choose Us Section -->
    <span>
        <span class="highlight">
            Why <span class="choose-highlight">Choose</span> Us
        </span>
        <p class="description">
            We ensure that you'll embark on a<br>
            perfectly planned, safe vacation at<BR>
            a price you can afford.
        </p>
        <!-- Learn More Button -->
        <button class="learn-more-btn">Learn More</button>
    </span>

    <!-- Best Travel Agency Section -->
    <span>
        <img src="assets/images/medal.png" alt="Medal Icon" class="icon" />
        <span class="highlight">Best Travel Agency</span>
        <p class="description">
            Travel ogencies that provide<br>round trip, and multi trip<br>services.
        </p>
    </span>

    <!-- Competitive Price Section -->
    <span>
        <img src="assets/images/dollar.png" alt="Dollar Icon" class="icon" />
        <span class="highlight">Competitive Price</span>
        <p class="description">
            The price offered are affordable<br>starting from the ordinary to<br>the exclusive.
        </p>
    </span>

    <!-- Global Coverage Section -->
    <span>
        <img src="assets/images/global.png" alt="Global Icon" class="icon" />
        <span class="highlight">Global Coverage</span>
        <p class="description">
            There are many tourist<br>attractions, hotels and<br>interisting entertainment.
        </p>
    </span>
</div>

<!-- Contact Us Section -->
<div class="contact-us">
    <span class="contact-us-title">
        Contact us to review<br><span class="highlight-orange">your experience</span> with us
    </span> <br><br>
    <p class="contact-us-description">
        Give us feedback and let us know what experiences<br>
        you had while on vacation with us.
    </p>
</div>


<!-- Testimonial Section -->
<div class="testimonial-section">
    <div class="testimonial">
        <p class="testimonial-text">
            "Wah ini sangat membantu. Banyak tempat wisata yang belum kudatangi. Keren!"
        </p>
        <div class="testimonial-footer">
            <img src="assets/images/profile1.webp" alt="Profile 1" class="profile-img">
            <div class="testimonial-details">
                <span class="testimonial-name">Yudi Haris</span>
                <div class="stars">
                    <span class="star-filled">★</span>
                    <span class="star-filled">★</span>
                    <span class="star-filled">★</span>
                    <span class="star-filled">★</span>
                    <span class="star-empty">★</span>
                </div>
            </div>
        </div>
    </div>

    <div class="testimonial">
        <p class="testimonial-text">
            "Sungguh pengalaman yang luarbiasa bisa berlibur ke tempat baru. Terimakasih..."
        </p>
        <div class="testimonial-footer">
            <img src="assets/images/profile2.jpg" alt="Profile 2" class="profile-img">
            <div class="testimonial-details">
                <span class="testimonial-name">Sukarso</span>
                <div class="stars">
                    <span class="star-filled">★</span>
                    <span class="star-filled">★</span>
                    <span class="star-filled">★</span>
                    <span class="star-filled">★</span>
                    <span class="star-empty">★</span>
                </div>
            </div>
        </div>
    </div>

    <div class="testimonial">
        <p class="testimonial-text">
            "Awalnya aku malas, tapi setelah melihat ini aku kembali bersemangat untuk menikmati liburanku!"
        </p>
        <div class="testimonial-footer">
            <img src="assets/images/profile3.webp" alt="Profile 3" class="profile-img">
            <div class="testimonial-details">
                <span class="testimonial-name">Mulyadi</span>
                <div class="stars">
                    <span class="star-filled">★</span>
                    <span class="star-filled">★</span>
                    <span class="star-filled">★</span>
                    <span class="star-filled">★</span>
                    <span class="star-empty">★</span>
                </div>
            </div>
        </div>
    </div>

    <div class="testimonial">
        <p class="testimonial-text">
            "Cerita baru dalam hidupku! Sungguh Luarbiasa!!!"
        </p>
        <div class="testimonial-footer">
            <img src="assets/images/profile4.avif" alt="Profile 4" class="profile-img">
            <div class="testimonial-details">
                <span class="testimonial-name">Retno Santoso</span>
                <div class="stars">
                    <span class="star-filled">★</span>
                    <span class="star-filled">★</span>
                    <span class="star-filled">★</span>
                    <span class="star-filled">★</span>
                    <span class="star-filled">★</span>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Footer Section -->
<footer class="footer">
    <div class="footer-container">
      <!-- Logo and Description -->
      <div class="footer-logo">
        <h2 class="logo-text">Travellink.in</h2>
        <p class="footer-description">
          We believe brand interaction is key in communication. Real innovations and a positive.
        </p>
        <div class="footer-socials">
          <a href="#"><i class="fa fa-twitter"></i></a>
          <a href="#"><i class="fa fa-instagram"></i></a>
          <a href="#"><i class="fa fa-youtube"></i></a>
        </div>
      </div>
  
      <!-- Navigation Links -->
      <div class="footer-links">
        <div class="footer-column">
          <h4>About us</h4>
          <ul>
            <li><a href="#">Features</a></li>
            <li><a href="#">FAQ's</a></li>
            <li><a href="#">News</a></li>
            <li><a href="#">Pricing</a></li>
          </ul>
        </div>
        <div class="footer-column">
          <h4>Company</h4>
          <ul>
            <li><a href="#">Core values</a></li>
            <li><a href="#">Partner w/ us</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </div>
        <div class="footer-column">
          <h4>Support</h4>
          <ul>
            <li><a href="#">Support center</a></li>
            <li><a href="#">Feedback</a></li>
            <li><a href="#">Accessibility</a></li>
          </ul>
        </div>
      </div>
  
      <!-- Get in Touch Form -->
      <div class="footer-contact">
        <h4>Get in touch</h4>
        <form>
          <input type="email" placeholder="Your email here..." class="footer-input" />
          <button type="submit" class="footer-button">Get Access</button>
        </form>
      </div>
    </div>
  
    <!-- Footer Bottom -->
    <div class="footer-bottom">
      <p>Travellink© 2024 All Right Reserved</p>
      <div class="footer-bottom-links">
        <a href="#">Terms of Service</a>
        <span>|</span>
        <a href="#">Privacy Policy</a>
      </div>
    </div>
  </footer>
  