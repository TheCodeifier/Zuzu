<!--Zuzu sushi page (Riza Incedal version)-->
<?php
session_start();
$servername = "localhost";
$username = "root";
$dbname = "zuzu";
$mc = "";
$ma = "";
$ns = "";
$pr = "";
$str = "";
$cr = "";
$error = "";

try {
    $database = new PDO("mysql:host=$servername;dbname=$dbname", $username);
    $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $makiCucumber = $database->prepare("SELECT * FROM sushi WHERE `ID` = 1;");
    $makiCucumber->execute();

    $mcResult = $makiCucumber->fetchAll(PDO::FETCH_ASSOC);
    $makiAvocado = $database->prepare("SELECT * FROM sushi WHERE `ID` = 2;");
    $makiAvocado->execute();

    $maResult = $makiAvocado->fetchAll(PDO::FETCH_ASSOC);
    $nigiriSalmon = $database->prepare("SELECT * FROM sushi WHERE `ID` = 3;");
    $nigiriSalmon->execute();

    $nsResult = $nigiriSalmon->fetchAll(PDO::FETCH_ASSOC);
    $philadelphiaRoll = $database->prepare("SELECT * FROM sushi WHERE `ID` = 4;");
    $philadelphiaRoll->execute();

    $prResult = $philadelphiaRoll->fetchAll(PDO::FETCH_ASSOC);
    $spicyTunaRoll = $database->prepare("SELECT * FROM sushi WHERE `ID` = 5;");
    $spicyTunaRoll->execute();

    $strResult = $spicyTunaRoll->fetchAll(PDO::FETCH_ASSOC);
    $californiaRoll = $database->prepare("SELECT * FROM sushi WHERE `ID` = 6;");
    $californiaRoll->execute();

    $crResult = $californiaRoll->fetchAll(PDO::FETCH_ASSOC);
} catch(PDOException $error) {
    die("Error". $error->getMessage());
}
try {
    if (isset($_POST['makiCucumber'])) {
        $mc = $_POST['makiCucumber'];
    }
    if (isset($_POST['makiAvocado'])) {
        $ma = $_POST['makiAvocado'];
    }
    if (isset($_POST['nigiriSalmon'])) {
        $ns = $_POST['nigiriSalmon'];

    }
    if (isset($_POST['philadelphiaRoll'])) {
        $pr = $_POST['philadelphiaRoll'];
    }
    if (isset($_POST['spicyTunaRoll'])) {
        $str = $_POST['spicyTunaRoll'];
    }
    if (isset($_POST['californiaRoll'])) {
        $cr = $_POST['californiaRoll'];
    }
    $st = $database->prepare("INSERT into order_data (dish_name, price, amount) VALUES ('Maki Avocado', '2.50', :makiCucumber)");
    $st->bindParam(':makiCucumber', $mc);
    $st->execute();

    $st = $database->prepare("INSERT into order_data (dish_name, price, amount) VALUES ('Maki Avocado', '2.50', :makiAvocado)");
    $st->bindParam(':makiAvocado', $ma);
    $st->execute();

    $st = $database->prepare("INSERT into order_data (dish_name, price, amount) VALUES ('Nigiri Salmon', '2.50', :nigiriSalmon)");
    $st->bindParam(':nigiriSalmon', $ns);
    $st->execute();

    $st = $database->prepare("INSERT into order_data (dish_name, price, amount) VALUES ('Philadephia Roll', '2.50', :philadelphiaRoll)");
    $st->bindParam(':philadelphiaRoll', $pr);
    $st->execute();

    $st = $database->prepare("INSERT into order_data (dish_name, price, amount) VALUES ('Spicy Tuna Roll', '2.50', :spicyTunaRoll)");
    $st->bindParam(':spicyTunaRoll', $str);
    $st->execute();

    $st = $database->prepare("INSERT into order_data (dish_name, price, amount) VALUES ('California Roll', '2.50', :californiaRoll)");
    $st->bindParam(':californiaRoll', $cr);
    $st->execute();

} catch (PDOException  $error) {
    echo "Error: " . $error->getMessage();
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

    <img class="w-100 image-resize"   src= "/Project%20Zuzu/Images/Sushi%20banner%20image.jpg">

    <h2 class= "position-relative heading2">Order sushi</h2>

    <form class="row g-3 needs-validation sushiForm"  action= "Zuzu%20Customer%20Details%20(Riza%20Incedal%20version).php" method= "POST">

        <?php
        foreach($mcResult as $column1) {
        ?>

        <img src= "/Images/MakiCucumber.jpg" class= "position-relative formImage1">
        <div class="col-md-4 position-relative input1">
            <label for="validationCustom01" class="form-label"><?php echo $column1['Name']; ?>&nbsp;<i>(20 pieces)</i></label>
            <input type="text" class="form-control" id="validationCustom01" required name= "makiCucumber" value= "0">
        </div>

            <?php } ?>

        <?php foreach($maResult as $column2) { ?>

        <img src= "/Images/MakiAvocado.jpg" class= "position-relative formImage2">
        <div class="col-md-4 position-relative input2">
            <label for="validationCustom02" class="form-label"><?php echo $column2['Name']; ?>&nbsp;<i>(20 pieces)</i></label>
            <input type="text" class="form-control" id="validationCustom02" required name= "makiAvocado" value= "0">
        </div>

            <?php } ?>

        <?php foreach($nsResult as $column3) { ?>

        <img src= "/Images/NigiriSalmon.jpg" class= "position-relative formImage3">
        <div class="col-md-6 position-relative input3">
            <label for="validationCustom04" class="form-label"><?php echo $column3['Name']; ?>&nbsp;<i>(20 pieces)</i></label>
            <input type="text" class="form-control" id="validationCustom03" required name="nigiriSalmon" value= "0">
        </div>

            <?php } ?>

            <?php foreach($prResult as $column4) { ?>

        <img src= "/Images/PhiladelphiaRoll.jpg" class= "position-relative formImage4">
        <div class="col-md-6 position-relative input4">
            <label for="validationCustom04" class="form-label"><?php echo $column4['Name']; ?>&nbsp;<i>(20 pieces)</i></label>
            <input type="text" class="form-control" id="validationCustom03" required name= "philadelphiaRoll" value= "0">
        </div>

        <?php } ?>

        <?php foreach ($strResult as $column5) { ?>

        <img src= "/Images/SpicyTunaRoll.jpg" class= "position-relative formImage5">
        <div class="col-md-3 position-relative input5">
            <label for="validationCustom05" class="form-label"><?php echo $column5['Name']; ?>&nbsp;<i>(20 pieces)</i></label>
            <input type="text" class="form-control" id="validationCustom03" required name="spicyTunaRoll" value= "0">
        </div>

            <?php } ?>

        <?php foreach($crResult as $column6) { ?>



        <img src= "/Images/CaliforniaRoll.jpg" class= "position-relative formImage6">
        <div class="col-md-3 position-relative input6">
            <label for="validationCustom06" class="form-label"><?php echo $column6['Name']; ?>&nbsp;<i>(20 pieces)</i></label>
            <input type="text" class="form-control" id="validationCustom05" required name= "californiaRoll" value= "0">
        </div>


            <div class="col-12 w-100">
            <button type="submit" class="btn btn-dark button button2 position-relative" name="subButton1">Continue</button>
        </div>

        <?php } ?>

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
