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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="room.css">
    <title>Room</title>
</head>
<body>
    <section class="pare">
        <div class="yll1"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
         <nav class="epara">
          <ul>
              <li><a href="services.php">Services</a></li>
              <li><a href="rooms.php">Rooms</a></li>
              <li><a href="galerry.php">Galerry</a></li>
              <li id="titull">Royal Hotel</li>
              <li><a href="location.php">Location</a></li>
              <li><a href="booking.php">Booking</a></li>
          </ul>
         </nav>
    </section>
    
    <section class="foto">
        <h1>Rooms</h1>
    </section>


    <section class="dhoma">
    <?php 
    // Merr parametrin 'dhoma_id' nga URL-ja
    $dhoma_id = $_GET['dhoma_id'];

    require "config.php";

    // Kërkesa SQL për të zgjedhur të dhënat e dhomës specifike nga baza e të dhënave
    $sql = "SELECT * FROM rooms WHERE dhoma_id = $dhoma_id";
    $result = $conn->query($sql);



    // Kontrolloni nëse ka rezultate
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc()

?>             
 <div class="dhoma-container">
    <div class="dhoma-content">
        <h2 class="dhoma-title"><?php echo $row['title']; ?></h2>
        <p><?php echo $row['description']; ?></p>
        <p class="cmimi">Price: <?php echo $row['price']; ?></p>
    </div>
    <div class="dhoma-image">
        <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="image/<?php echo $row['img1']; ?>.jpeg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block"></div>
                </div>
                <div class="carousel-item">
                    <img src="image/<?php echo $row['img2']; ?>.jpeg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block"></div>
                </div>
                <div class="carousel-item">
                    <img src="image/<?php echo $row['img3']; ?>.jpeg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block"></div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</div>

<?php  
    } else {
        echo "No rooms found with this ID.";
    }
$conn->close();
?>

</section>
    <section class="foter">
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
                    <p>+34 678 56 34 <br>
                        royal.hotel@gmail.com <br>
                        Social Media <br>
                        <div class="social">
                        <a href="https://www.instagram.com/theroyaliow/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                        <a href="https://uk.linkedin.com/company/the-royal-hotel-iowv" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
                        <a href=""><i class="fa-brands fa-twitter"></i></a>
                        <a href="https://www.facebook.com/TheRoyalIOW/" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                        </div>
                    </p>
                </div>
            </div>
            <br>
         </section>
     
</body>
</html>