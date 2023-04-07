<!--Zuzu Homepage (Riza Incedal version)-->
<?php
//PHP code for this page
$dayPart = date('H');
if ($dayPart < 12) {
    $dpGreeting = "Good morning";
} elseif ($dayPart < 18) {
    $dpGreeting = "Good afternoon";
} elseif ($dayPart < 24) {
    $dpGreeting = "Good evening";
} else {
    $dpGreeting = "Good night";
}
$currentDate = date("l, F j, Y");
$currentClock = date("H"); date("i");
$deliveryTime = date("H:i", strtotime('+1 hour'));
if ($currentClock < 00) {
    $deliveryStatus = "Estimated time of delivery: $deliveryTime";
} else if ($currentClock > 9) {
    $deliveryStatus = "Estimated time of delivery: $deliveryTime";
} else {
    $deliveryStatus = "The restaurant is currently closed, we apologize for the inconvenience";
}
?>

<!DOCTYPE HTML>
  <head>
        <meta name= "viewport" content= "width=device-width, initial-scale= 1">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Kiwi+Maru&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <link rel= "stylesheet" href= "/Project%20Zuzu/CSS%20Documents/Zuzu%20Style%20(Riza%20Incedal%20version).css">
</head>
  <body>

  <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar">
        <div class="container-fluid">
            <a class= "navbar-brand text-white fw-bold logo">Zuzu</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="true" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse show" id="navbarColor01">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link text-white text1" aria-current="page" href="/Project%20Zuzu/PHP%20Files/Zuzu%20Homepage%20(Riza%20Incedal%20version).php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white text2" href="/Project%20Zuzu/PHP%20Files/Zuzu%20Sushi%20page%20(Riza%20Incedal%20version).php">Order</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

  <!--Main-->
        
      <img class="w-100 image-resize"   src= "/Project%20Zuzu/Images/Sushi%20banner%20image.jpg">
    
      <div class= "container container1 position-relative">
          <h2 class="fw-bold text-center position-relative"><?php echo "$dpGreeting"?> and welcome to Zuzu!</h2>
      <p class="text-secondary text-center position-relative">We're specialized in the Japanese cuisine <br>
      <i class= "text-center">The word sushi originates from the words "su" which means vinegar and "shi" which means rice</i></p>
      </p>

          <div class= "container container2">
      <p class= "text-secondary fw-bold text-center position-relative">Today is <?php echo $currentDate?> <br>
      <?php echo $deliveryStatus?></p>
      </div>

          <div class="card card1">
              <img src="/Project%20Zuzu/Images/Sushi1.jpg" class="card-img-top">
              <div class="card-body border rounded cb1">
               <p>Order your sushi at Zuzu</p>
              </div>
          </div>

          <div class="card card2">
              <img src="/Project%20Zuzu/Images/Sushi2.jpg" class="card-img-top">
              <div class="card-body border rounded">
              <p>Choice from different kinds of sushi</p>
              </div>
      </div>

          <!--Footer-->
          <footer class="bg-dark text-center text-white footer">
              <div class="container p-4">
                  <section class="">
                      <form action="">
                          <div class="row d-flex justify-content-center">
                          </div>
                      </form>
                  </section>
                  <section class="">
                      <div class="row">
                          <div class="col">
                              <p><b>Contact</b><br>
                                  Zuzu <br>
                                  Kalealtı Caddesi 63,<br>
                                  63420 <a class= "link1" href="https://en.wikipedia.org/wiki/Birecik">Birecik</a> <br>
                                  zuzu.birecik@gmail.com <br>
                                  +904141516151</p>
                          </div>

                          <div class= "col"><b>Opening hours</b> <br>
                              Monday: 09:00 - 00:00 <br>
                              Tuesday: 09:00 - 00:00 <br>
                              Wednesday: 09:00 - 00:00 <br>
                              Thursday: 09:00 - 00:00 <br>
                              Friday: 09:00 - 00:00 <br>
                              Saturday: 09:00 - 00:00 <br>
                              Sunday: 09:00 - 00:00 <br>
                          </div>
                      </div>
                  </section>
              </div>

              <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                  <p class="text-white" > Copyright © 2022  Riza Incedal</p>
              </div>
          </footer>

          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>


