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
    <link rel="stylesheet" href="booking.css">
    <title>Booking</title>
</head>
<body>
    
    <section class="pare" id="navLinks">
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
        <h1>Booking</h1>
    </section>

    <section class="trupi">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
        <h1>Book a Room</h1>
        <label for="room">SELECT ROOM</label><br>
        <?php
         $selectedRoom = $_GET['room'] ?? 'Double Room'; // Marrë vlerën e dhomës nga URL ose vendos 'Double Room' si vlerë parazgjedhje
        ?>
        <select name="selectroom">
             <option value="Double Room" <?php echo ($selectedRoom == 'Double Room') ? 'selected' : ''; ?>>Double Room</option>
             <option value="Triple Room" <?php echo ($selectedRoom == 'Triple Room') ? 'selected' : ''; ?>>Triple Room</option>
             <option value="Quadruple Room" <?php echo ($selectedRoom == 'Quadruple Room') ? 'selected' : ''; ?>>Quadruple Room</option>
             <option value="Family Room" <?php echo ($selectedRoom == 'Family Room') ? 'selected' : ''; ?>>Family Room</option>
        </select><br>
        <label for="arrival">ARRIVAL</label><br>
        <input type="date" name="arrival"><br>
        <label for="departure">DEPARTURE</label><br>
        <input type="date" name="departure"><br>
        <div class="people">
            <div class="item">
                <label for="adult">ADULTS</label><br>
                <select name="adult" id="people">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                </select>
            </div>
            <div class="item">
                <label for="children">CHILDREN</label><br>
                <select name="children" id="people">
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                </select>
            </div>
        </div><br>
        <input type="submit" value="Submit" id="butoni">
    </form>

    <?php

$message = ""; // Inicializo variablën $message
 
    require_once "config.php";

   // Kontrollo nëse forma është dërguar
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $room = $_POST["selectroom"];
    $arrival = $_POST["arrival"];
    $departure = $_POST["departure"];
    $adults = $_POST["adult"];
    $children = $_POST["children"];

// Kontrollo nëse datat janë zgjedhur
if (!empty($arrival) && !empty($departure)) {

    // Kontrollo nëse data e largimit është më e vonshme se data e ardhjes
    if (strtotime($departure) <= strtotime($arrival)) {
        $message = "Departure date must be later than arrival date.";
        $message_class = "error";
    } else {
        // Nëse datat janë të sakta, dërgo në bazën e të dhënave
        $sql = "INSERT INTO reservations(selectroom, arrival, departure, adults, children) 
                VALUES ('$room', '$arrival', '$departure', '$adults', '$children')";

        if ($conn->query($sql) === TRUE) {
            $message = "Data sent to the database successfully!";
            $message_class = "success";
        } else {
            $message = "An error occurred, the data was not saved to the database: " . $conn->error;
            $message_class = "error";
        }
    }
} else {
    $message = "Please select the arrival and departure dates.";
    $message_class = "error";
}

}

$conn->close();
?>

    <?php if (isset($message)) { ?>
        <p class="message <?php echo $message_class; ?>"><?php echo $message; ?></p>
    <?php } ?>

    <script>
        // Kontrollo nëse datat janë zgjedhur
        const arrivalInput = document.querySelector('input[name="arrival"]');
        const departureInput = document.querySelector('input[name="departure"]');
        const submitButton = document.querySelector('input[type="submit"]');

        arrivalInput.addEventListener('change', validateDates);
        departureInput.addEventListener('change', validateDates);

        function validateDates() {
            const arrivalDate = arrivalInput.value;
            const departureDate = departureInput.value;

            if (arrivalDate && departureDate) {
                submitButton.disabled = false;
            } else {
                submitButton.disabled = true;
            }
        }
    </script>
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