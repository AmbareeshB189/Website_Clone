<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hyderabad City Replica</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="https://hyderabad-city.com/images/logo11A.png" class="vr"/></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#PR">Price</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#twoRowCarousel">Amenities</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Gallery</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Location</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Virtual Visit</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Download Brochure</a>
        </li>
            </ul>
        </div>
    </div>
</nav>
    <!-- Hero Section with Carousel -->
    <div>
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators ">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></button>
      </div>
      <div class="carousel-inner">
          <div class="carousel-item active">
              <img src="https://hyderabad-city.com/images/b2.jpg" class="d-block w-100" alt="Image 1">
          </div>
          <div class="carousel-item">
              <img src="https://hyderabad-city.com/images/b3.jpg" class="d-block w-100" alt="Image 2">
          </div>
          <div class="carousel-item">
              <img src="https://hyderabad-city.com/images/b1.jpg" class="d-block w-100" alt="Image 3">
          </div>
      </div>
      </div>
      <div>
        <h1 class="Carousel_info">Limited Units Available</h1>
      </div>  
      <div class="info_site">
        <h1 style="font-weight: bold;">THE PRESTIGE CITY HYDERABAD</h1>
        <p>At Rajendra Nagar, Hyderabad By MAXXCO</p>
      </div>
      <div class="container mt-5">
        <div class="row property-details p-4">
            <div class="col-md-6 left">
                <p>Land Parcel</p>
                <p>Apartments</p>
                <p>Bellagio Villas</p>
            </div>
            <div class="col-md-6 right">
                <p>64 Acres</p>
                <p>4647 Units</p>
                <p>119 Units</p>
            </div>
        </div>
    </div>

    <!-- Announcement Section -->
    <div class="announcement-section mt-4">
        <div class="bordered-box">
            <p>MOST AWAITED LAUNCH OF HYDERABAD</p>
            <p>PROJECT SITUATED ADJACENT TO</p>
            <p>2000 ACRES OF LUSH GREENERY</p>
        </div>
    </div>
    <div style="text-align: center;">
      <p>Luxurious 
        <span style="font-weight: bold;">
          Launching Apartments - 2.5,3,3.5,4 BHK 
        </span> Starts At</p>
      <p>
        <span style="font-weight: bold; font-size: 30px;">₹ 1.20 Cr*</span>Onwards
      </p>
      <button class="brochure-btn">Download Brochure</button>
    </div>
    <div class="container">
      <div class="form-section">
          <h2>Get The Best Quote</h2>
          <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
              <input type="text" name="name" placeholder="Name" required>
              <input type="email" name="email" placeholder="Email Address" required>
              <input type="tel" name="phone" placeholder="Mobile No*" required>
              <button type="submit" class="submit-btn">Get Instant Call Back</button>
          </form>
          <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $name = htmlspecialchars($_POST['name']);
                $email = htmlspecialchars($_POST['email']);
                $phone = htmlspecialchars($_POST['phone']);
                echo "<p>Thank you, {$name}. We will contact you at {$phone} or via {$email} soon!</p>";
            }
          ?>
      </div>
  </div>
  <img src="https://hyderabad-city.com/images/b1.jpg" class="w-100 "/>
  <div class="dsec">
    <h1 style="color: #a57a40;">THE PRESTIGE CITY HYDERABAD</h1>
    <h1 style="color: #a57a40;">At Rajendra Nagar, Hyderabad</h1>
    <p>Prestige City Hyderabad Apartments is the new premium high-rise lakefront residential Apartment project launched in Gaganpahad, Shamshabad, South Hyderabad. The massive-scale residential enclave Prestige City Hyderabad is spread across over 64 acres of prime land with apartments overlooking a pristine lake. The project features the best in Prestige Group’s premium living segment. The project offers spacious 2,2.5,3,4 BHK Apartments with luxurious features.</p>
    <button style="background-color: #a57a40; color: white; border: none; padding: 12px; font-size: 16px; border-radius: 5px; width: 250px; ">Download Brochure</button>
  </div>
  
  <!-- Price Section -->
  <div class="price" id="PR">
    <h1 style="color: #a57a40;">Price</h1>
    <div class="price_blockx">
        <h1>2.5 BHK</h1>
        <p>1534 - 1548 SQ.FT.</p>
        <h1>₹ 1.20 Cr* Onwards</h1>
        <button style=" background-color: #a57a40; color: white; border: none; padding: 12px; font-size: 16px; border-radius: 5px; width: 150px; " >Price Breakup</button>
    </div>
    <div class="price_block">
      <h1>3 BHK Smart</h1>
      <p>1631 - 1687 SQ.FT.</p>
      <h1>₹ 1.25 Cr* Onwards</h1>
      <button style=" background-color: #a57a40; color: white; border: none; padding: 12px; font-size: 16px; border-radius: 5px; width: 150px; " >Price Breakup</button>
    </div>
    <div class="price_blockx">
      <h1>3 BHK Large</h1>
      <p>1898 - 2136 SQ.FT.</p>
      <h1>₹ 1.50 Cr* Onwards</h1>
      <button style=" background-color: #a57a40; color: white; border: none; padding: 12px; font-size: 16px; border-radius: 5px; width: 150px; " >Price Breakup</button>
    </div>
    <!-- Additional price sections omitted for brevity -->
  </div>
  
  <!-- Amenities Carousel Section -->
  <div class="container mt-5" style="background-color: white;">
    <div id="twoRowCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row">
                    <div class="col-sm-3">
                        <img src="https://hyderabad-city.com/images/amenities/amenities7.png" class="d-block w-100" alt="Image 1">
                    </div>
                    <div class="col-sm-3">
                        <img src="https://hyderabad-city.com/images/amenities/amenities6.png" class="d-block w-100" alt="Image 2">
                    </div>
                    <div class="col-sm-3">
                        <img src="https://hyderabad-city.com/images/amenities/amenities4.png" class="d-block w-100" alt="Image 3">
                    </div>
                    <div class="col-sm-3">
                        <img src="https://hyderabad-city.com/images/amenities/amenities3.png" class="d-block w-100" alt="Image 4">
                    </div>
                </div>
            </div>
            <!-- Additional carousel items omitted for brevity -->
        </div>
    </div>
  </div>
</body>
</html>
