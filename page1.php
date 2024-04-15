<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comforter&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sarina&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="page1.css">
    <title>RoyalHotel</title>
</head>
<body>
    <section class="pare">
      <div class="yll1"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
       <div class="upara">
        <ul>
           <li class="titull">Royal Hotel</li>
           <!-- <li><button class="kuti">Contact us</button></li> -->
           <i class="fa-solid fa-bars" onclick="showMenu()"></i>
        </ul>
       </div>
      <nav class="epara" id="navLinks">
        <i class="fa-solid fa-xmark" onclick="hideMenu()"></i>
        <ul>
            <li><a href="services.php">Services</a></li>
            <li><a href="rooms.php">Rooms</a></li>
            <li><a href="galerry.php">Galerry</a></li>
            <li class="titull">Royal Hotel</li>
            <li><a href="location.php">Location</a></li>
            <li><a href="booking.php">Booking</a></li>
            <li><button class="kuti" id="kuti">Contact us</button></li>
        </ul>
         
        <!-- Përmbajtja e kontaktit -->
        <div id="permbajtjaKontakt" class="permbajtje-kontakti">
          <button id="mbyllja">&times;</button>
          <h3>Kontaktet</h3>
          <div class="ikona-telefoni"><i class="fa fa-phone"></i>The phone number:<a href="tel:+34 678 56 34">+34 678 56 34</a></div>
          <div class="ikona-email"><i class="fa fa-envelope"></i> Email:<a href="mailto:royal.hotel@gmail.com">royal.hotel@gmail.com</a></div>
        </div>

       </nav>
       <h1 class="hpare">Welcome to<br><span id="fontmodel">ROYAL Hotel</span></h1>
       <p class="ppare">Choose Royal Hotel for a truly royal experience and feel like a king or queen during your next vacation.</p>
       <br>
       <div class="content">
       <span id="numberbook"><a href="booking.php">Book number</a></span>
       </div>
       
       <br><br>
       <div class="ipare">
        <a href="https://www.instagram.com/theroyaliow/" target="_blank"><i class="fa-brands fa-instagram"></i></a><br>
        <a href="https://uk.linkedin.com/company/the-royal-hotel-iowv" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a><br>
        <a href="#"><i class="fa-brands fa-twitter"></i></a><br>
        <a href="https://www.facebook.com/TheRoyalIOW/" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
       </div>
    </section>

    <section class="dyte">
     <div class="grid-container">
        <div class="ppare">
          <h2>Grand Rotal Hotel Villa Spa Resort</h2>
          <p id="tema">Royal  All  Inclusive</p><br>
          <p>Qëndrimi juaj i plotë pëfshin:<br>
          ✨ Luxurious accommodation in our splendidly designed rooms, equipped with all the comforts.<br>
          ✨ All delightful meals included in our numerous restaurants, from breakfast to late dinner. Enjoy our high-quality international and local cuisine.<br>
          ✨ Unlimited drinks in our elegant bars, including carefully selected alcoholic and non-alcoholic beverages.<br>
          ✨ Unlimited access to our water parks and children's clubs with entertaining activities for all.<br>
          ✨ Lively entertainment programs and musical performances to keep the enjoyment alive throughout the day and night.</p>
              <br>
          <a href="booking.php" class="book">Book number</a>

        </div>
        <div class="gdyte">
            <img src="image/foto1.jpeg" alt="" class="foto1">
            <img src="image/foto2.jpeg" alt="" class="foto2">
            <img src="image/foto3.jpeg" alt="" class="foto3">
        </div>
    </div>

    </section>

    <section class="trete">
        <div class="grid-container">
          <div class="grid-item">
            <i class="fa-solid fa-stopwatch"></i><h3>2345m</h3><p><span style="font-weight: bold; text-align: center;">Check-in:</span>  
24 hours<br><span style="font-weight: bold; text-align: center;">Restorant:</span><br>Breakfast: 7:00 - 11:00 <br> Lunch: 12:30 - 15:00 <br> Dinner: 19:00 - 22:30 <br><span style="font-weight: bold; text-align: center;">Bars:</span><br> 
Pool bar: 10:00 - 18:00 <br> Lounge bar: 18:00 - 24:00 <br>
Cocktail bar: 20:00 - 01:00 </p>
            </div>
          <div class="grid-item">
            <i class="fa-solid fa-anchor"></i><h3>1041m</h3><p>
As a top-tier resort, Royal Hotel offers a unique way to explore the mesmerizing depths of the sea. All our submarines are equipped with the latest technology and operated by professionally trained crews to ensure your safety and enjoyment.</p>
          </div>
          <div class="grid-item">
            <i class="fa-solid fa-sailboat"></i><h3>500+</h3><p>
For a complete luxurious experience at Royal Hotel, we also offer the Royal Yacht service for transfers or water expeditions. A modern and elegant yacht, suitable for short water expeditions or transfers to nearby islands.</p>
          </div>
        </div>
    </section>
<br>
    <section class="katert">
    <h1>Our Living Rooms</h1>
    <nav>
        <ul>
            <li id="emer">For Best Hotel</li>
            <li><a href="rooms.php">All</a></li>
            <li><a href="room.php?dhoma_id=1">Double</a></li>
            <li><a href="room.php?dhoma_id=2">Triple</a></li>
            <li><a href="room.php?dhoma_id=3">Quadruple</a></li>
            <li><a href="room.php?dhoma_id=4">Family</a></li>
        </ul>
    </nav>
    <div class="rreth-container">
        <i class="fa-regular fa-circle-dot"></i>
        <i class="fa-regular fa-circle"></i>
        <i class="fa-regular fa-circle"></i>
    </div>

    <div class="grid-container" id="kartat">
        <div class="item3">
            <div class="card">
                <img src="image/room1.jpeg" alt="">
                <div class="card-body">
                    <h3 class="card-title">Double Room</h3>
                    <p class="card-text">The Double Room at Royal Hotel offers a comfortable ambiance with a double bed, sturdy furniture, and a perfect bathroom for a pleasant and relaxing stay.</p>
                    <i class="fa-solid fa-wifi"></i><i class="fa-solid fa-video"></i><i class="fa-solid fa-bath"></i><i class="fa-solid fa-cloud-showers-heavy"></i>
                    <h5>Starting from: $100 /night</h5>
                    <button><a href="booking.php?room=Double Room">Book Now</a></button>
                </div>
            </div>
        </div>
        <div class="item3">
            <div class="card">
                <img src="image/room2.jpeg" alt="">
                <div class="card-body">
                    <h3 class="card-title">Triple Room</h3>
                    <p class="card-text">The Triple Room at Royal Hotel offers a spacious and comfortable ambiance with three suitable beds for a family or group of friends, providing a pleasant experience for everyone.</p>
                    <i class="fa-solid fa-wifi"></i><i class="fa-solid fa-video"></i><i class="fa-solid fa-bath"></i><i class="fa-solid fa-cloud-showers-heavy"></i>
                    <h5>Starting from: $150 /night</h5>
                    <button><a href="booking.php?room=Triple Room">Book Now</a></button>
                </div>
            </div>
        </div>
        <div class="item3">
            <div class="card">
                <img src="image/room3.jpeg" alt="">
                <div class="card-body">
                    <h3 class="card-title">Quadruple Room</h3>
                    <p class="card-text">The Quadruple Room at Royal Hotel offers a suitable ambiance for a large group, providing comfortable accommodations for four people with appropriate beds and a large bathroom.</p>
                    <i class="fa-solid fa-wifi"></i><i class="fa-solid fa-video"></i><i class="fa-solid fa-bath"></i><i class="fa-solid fa-cloud-showers-heavy"></i>
                    <h5>Starting from: $200 /night</h5>
                    <button><a href="booking.php?room=Quadruple Room">Book Now</a></button>
                </div>
            </div>
        </div>
    </div>

    <br><br>
    <p id="ndrysho"><button id="spinner"><i class="fa-solid fa-spinner"></i> Load more</button></p>
</section>

    <section class="peste">
      <div class="grid-container">
        <div class="item">
         <h1>Our Services Hotel</h1>
         <p id="em">Choose The Best</p>
         <p>Choose the finest hotel that offers an extraordinary experience, where you can enjoy a comfortable stay with all modern amenities, including a stunning pool, a comprehensive health care center, diverse restaurants, and fast internet connection.</p>
       </div>
       <div class="item" id="container2">
        <div class="item2"><i class="fa-solid fa-house-signal"></i><p>Free wifi</p></div>
        <div class="item2"><i class="fa-brands fa-playstation"></i><p>Entertainment</p></div>
        <div class="item2"><i class="fa-solid fa-utensils"></i><p>Breakfast</p></div>
        <div class="item2"><i class="fa-solid fa-dumbbell"></i><p>Gym Center</p></div>
        <div class="item2"><i class="fa-solid fa-umbrella-beach"></i><p>Lux Beach</p></div>
       </div>
       </div>
    </section>
    <section class="gjashte">
      <div class="grid-container">
          <div class="grid-item"><img id="main-image" src="image/beach.jpeg" alt="" class="image"></div>
          <div class="grid-item">
              <p><i class="fa-solid fa-quote-left" id="quote-icon"></i><br>Royal Hotel's beach is a true paradise. The pristine white sand and crystal-clear waters shimmering in an array of blended colors invite for a wonderful beach experience.</p>
              <div class="container">
                <div class="row">
                  <div class="col-2">
                    <img id="person-img" src="image/person1.jpeg" alt="">
                  </div>
                  <div class="col-6">
                    <h6 id="person-name">Adam Sendler</h6>
                    <p id="person-date">August 2021</p>
                  </div>
                </div> 
              </div>
                  <br>
                  <button id="prevButton"><i class="fas fa-chevron-left"></i></button>
                  <button id="nextButton"><i class="fas fa-chevron-right"></i></button>
         </div>
      </div>
   </section>
  
          
     <section class="shtate">
        <h1>Our Services Hotel</h1>
        <p id="emi">Choose The Best</p>

        <div class="container">
            <div class="row">
              <div class="col-12 col-md-3">
                    <img src="image/place1.jpeg" alt="">
                    <div class="body">
                      <h4 class="card-title">Chef master class</h4>
                      <p class="card-text">
In the luxurious surroundings of the hotel, you will delight in live demonstrations and learn hidden secrets of advanced culinary art, exploring all the nuances of gourmet cuisine.</p>
                      <h6>August 25, 2023</h6>
                    </div>
                  </div>
            <div class="col-12 col-md-6">
                    <img src="image/place2.jpeg" alt="">
                    <div class="body">
                      <h4 class="card-title">New super cool beach</h4>
                      <p class="card-text">
The new "Super Cool" beach at Royal Hotel is a true paradise. With its pristine white sand, crystal-clear waters, and breathtaking views, this exclusive beach offers an exceptional setting for relaxation and entertainment. With differentiated service and modern amenities, you will experience a wonderful beach experience that will leave you with unforgettable memories.
                      </p>
                      <h6>August 25, 2023</h6>
                    </div>
            </div>
            <div class="col-12 col-md-3">
                    <img src="image/place3.jpeg" alt="">
                    <div class="body">
                      <h4 class="card-title">Night like at hotel</h4>
                      <p class="card-text">A night at Royal Hotel is truly a magical experience. The beautifully lit spaces create an intimate and cozy atmosphere.</p>
                      <h6>August 25, 2023</h6>
                    </div>
            </div>
        </div>
      </div>
     </section>

     <section class="tete">
        <div class="grid-container">
            <div class="grid-item">
              <div class="yll"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
                <h1 id="royal">Royal  Hotel</h1>
                <p>Bologna,Italy Avangu Street <br>345,4567 code foo</p>

            </div>
            <div class="grid-item">
                <h2>Our Services</h2>
                <p>
                    Rooms <br>
                    Entertainment <br>
                    Room services
                </p>
            </div>
            <div class="grid-item">
                <h2>Support</h2>
                <p>
                    Contacts <br>
                    Privacy policy <br>
                    Help
                </p>
            </div>
            <div class="grid-item">
                <h2>Contacts</h2>
                <p><a href="tel:+34 678 56 34">+34 678 56 34</a><br>
                <a href="mailto:royal.hotel@gmail.com">royal.hotel@gmail.com</a><br>
                    Social Media <br>
                    <div class="social">
                    <a href="https://www.instagram.com/theroyaliow/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                    <a href="https://uk.linkedin.com/company/the-royal-hotel-iowv" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                    <a href="https://www.facebook.com/TheRoyalIOW/" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                    </div>
                </p>
            </div>
        </div>
        <br>
     </section>
     <script src="script.js"></script>
    <script src="script2.js"></script>
     <script>
      var navLinks = document.querySelector("#navLinks");

      function showMenu() {
      navLinks.style.right = "0";
      }

      function hideMenu() {
      navLinks.style.right = "-200px";
      }
     </script>
     <script src="script3.js"></script>
    
</body>
</html>