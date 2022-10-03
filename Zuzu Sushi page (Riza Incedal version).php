<!--Zuzu sushi page (Riza Incedal version)-->

<!DOCTYPE HTML>
  <head>
    <meta name= "viewport" content= "width=device-width, initial-scale= 1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kiwi+Maru&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel= "stylesheet" href= "/Project%20Zuzu/CSS%20Documents/Zuzu%20Style%20(Riza%20Incedal%20version)%20(Customer%20Details%20version).css">
    </head>
  <body>

    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class= "navbar-brand text-white fw-bold logo">Zuzu</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="true" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse show" id="navbarColor01">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link text-white" aria-current="page" href="/Project%20Zuzu/PHP%20Files/Zuzu%20Homepage%20(Riza%20Incedal%20version).php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="/Project%20Zuzu/PHP%20Files/Zuzu%20Sushi%20page.php">Order</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
      <!--Main-->
      <img class="w-100 image-resize"   src= "/Project%20Zuzu/Images/Sushi%20banner%20image.jpg">

      <div class= "container">
        <h2 class="fw-bold heading2">Order sushi</h2>

          <form class="row g-3 needs-validation" novalidate>
              <div class="col-md-4 w-100 input1">
                  <label for="validationCustom01" class="form-label">Maki cucumber <i>(Max = 5)</i></label>
                  <input type="text" class="form-control" id="validationCustom01" required name= "makiCucumber">
                  <div class="valid-feedback">
                      Looks good!
                  </div>
                  <div class="invalid-feedback">
                      Please submit a amount.
                  </div>
              </div>

              <div class="col-md-4 w-100 input2">
                  <label for="validationCustom02" class="form-label">Maki avocado <i>(Max = 10)</i></label>
                  <input type="text" class="form-control" id="validationCustom02" required name= "makiAvocado">
                  <div class="valid-feedback">
                      Looks good!
                  </div>
                  <div class="invalid-feedback">
                      Please submit a amount.
                  </div>
              </div>

              <div class="col-md-6 w-100 input3">
                  <label for="validationCustom04" class="form-label">Nigiri salmon <i>(Max = 10)</i></label>
                  <input type="text" class="form-control" id="validationCustom03" required name="nigiriSalmon">
                  <div class="valid-feedback">
                      Looks good!
                  </div>
                  <div class="invalid-feedback">
                      Please submit a amount.
                  </div>
              </div>
      </div>

    <div class="col-md-6 input4">
        <label for="validationCustom04" class="form-label">Philadelphia Roll <i>(Max = 5)</i></label>
        <input type="text" class="form-control" id="validationCustom03" required name= "phillyRoll">
        <div class="valid-feedback">
            Looks good!
        </div>
        <div class="invalid-feedback">
            Please submit a amount.
        </div>
    </div>

    <div class="col-md-3 position-relative input5">
                <label for="validationCustom05" class="form-label">Spicy Tuna Roll <i>(Max = 5)</i></label>
    <input type="text" class="form-control" id="validationCustom03" required name="spicyTunaRoll">
        <div class="valid-feedback">
            Looks good!
        </div>
        <div class="invalid-feedback">
        Please submit a amount.
    </div>
    </div>

    <div class="col-md-3 position-relative input6">
        <label for="validationCustom06" class="form-label">California Roll <i>(Max = 8)</i></label>
        <input type="text" class="form-control" id="validationCustom05" required name= "californiaRoll">
        <div class="valid-feedback">
            Looks good!
        </div>
        <div class="invalid-feedback">
            Please submit a amount.
        </div>
    </div>

    <div class="col-12 w-100">
                <button type="submit" class="btn btn-dark button button2 position-relative" href= "/Project%20Zuzu/PHP%20Files/Zuzu%20Customer%20Details%20(Riza%20Incedal%20version).php">Continue</button>
            </div>
                </form>
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
    