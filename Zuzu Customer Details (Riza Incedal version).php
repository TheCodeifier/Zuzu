<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
$firstName = "";
$lastName = "";
$emailAdress = "";
$deliveryAdress = "";
$postalCode = "";
$residencePlace = "";
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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href= "/Project%20Zuzu/CSS%20Documents/Zuzu%20Style%20(Riza%20Incedal%20version)%20(Customer%20Details%20version).css">
    <link rel= "stylesheet" href= "/Project%20Zuzu/CSS%20Documents/Zuzu%20Style%20(Riza%20Incedal%20version).css">
</head>
<body>

<!--Header-->
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
                    <a class="nav-link text-white" href="/Project%20Zuzu/PHP%20Files/Zuzu%20Customer&20Details%20(Riza%20Incedal%20version).php">Order</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<img class="w-100 image-resize" src= "/Project%20Zuzu/Images/Sushi%20banner%20image.jpg">

<!--Main-->
<div class= "container">
    <h2 class="fw-bold position-relative heading1">Customer details</h2>

    <div class="mb-3">
        <form class= "submissionForm position-relative" action="Zuzu%20Customer%20overview%20(Riza%20Incedal%20version).php" method= "POST">
            <div class="col-md-4 w-100 position-relative input7">
                <label for="firstName" class="form-label">First name</label>
                <input type="text" class="form-control"  value="" required name="firstName" id= "firstName">
            </div>

            <div class="col-md-4 w-100 position-relative input8">
                <label for="lastName" class="form-label">Last name</label>
                <input type="text" class="form-control" value="" required name="lastName" id= "lastName">
            </div>

            <div class="col-md-6 w-100 position-relative input9">
                <label for="emailAdress" class="form-label">Email</label>
                <input type="text" class="form-control" required name= "emailAdress" id= "emailAdress">
            </div>
    </div>

    <div class="col-md-6 w-100 position-relative input10">
        <label for="deliveryAdress" class="form-label">Adress</label>
        <input type="text" class="form-control" required name= "deliveryAdress" id= "deliveryAdress">
    </div>

    <div class="col-md-3 w-100 position-relative input11">
        <label for="postalCode" class="form-label">Postal code</label>
        <input type="text" class="form-control"  required name= "postalCode" id= "postalCode">
    </div>

    <div class="col-md-3 w-100 position-relative input12">
        <label for="residencePlace" class="form-label">Place of residence</label>
        <input type="text" class="form-control" required name= "residencePlace" id= "residencePlace">
    </div>

    <div class="col-12 w-100">
        <button type="submit" class="btn btn-dark button1" name="subButton" value= "Submit">Submit</button>
    </div>
</div>
</form>

<!--Footer-->
<footer class="bg-dark text-center text-white footer">
    <div class="container p-4">
        <div class="row d-flex justify-content-center">
        </div>
        </form>
        </section>
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

    <div class="text-center p-3">
        <p class="text-white" > Copyright © 2022  Riza Incedal</p>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>
