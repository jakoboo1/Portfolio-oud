<!DOCTYPE html>
<html lang="en">
<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="cssbpgoeie.css">
    <meta charset="UTF-8">
    <title>Portfolio</title>

</head>

<body>


<!-- Navigatiebalk -->
<div class="navbar">
    <p class="logo">Jakub Kinzler</p>
    <ul class="nav">
    <!-- button dark mode --!>
        <li><button type="button" class="btn btn-light" onclick="myFunction()"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-moon-stars" viewBox="0 0 16 16">
            <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278zM4.858 1.311A7.269 7.269 0 0 0 1.025 7.71c0 4.02 3.279 7.276 7.319 7.276a7.316 7.316 0 0 0 5.205-2.162c-.337.042-.68.063-1.029.063-4.61 0-8.343-3.714-8.343-8.29 0-1.167.242-2.278.681-3.286z"/>
            <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"/>
        </svg></button></li>
        <li><a href="#Home">Home</a></li>
        <li><a href="#Over mij">Over mij</a></li>
        <li><a href="#Werk">projecten</a></li>
        <li><a href="#Contact">Contact</a></li>

    </ul>
</div>


<div class="banner-area" id="Home">

</div>

<br/>
<br/>
<br/>

<div class="overmij-area" id="Over mij">
    <div class="text-part">
        <h1>over mij</h1>
        <p>
        Student informatica associate degree academie <br/>
             Toekomstige softwaredeveloper

         </p>
    </div>
</div>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<div class="werk-area" id="Werk">
    <div class="text-part">
        <h1>projecten</h1>
        <p>
            Hieronder zijn de gemaakte projecten zichtbaar.
            Klik op een project om er meer over te leren.
        </p>
    </div>
</div>
<br/>
<br/>
<br/>
<!-- De tegeltjes -->
<div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col">
        <div class="card">
            <img src="afbeeldingen/blauw.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Persoonlijke portfolio</h5>
                <p class="card-text">Hierin vindt u het verloop van de persoonlijke ontwikkeling</p>
                <a href="tweedepagina.php" class="btn btn-primary">Lees meer</a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card">
            <img src="afbeeldingen/portfolio.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Coming soon</h5>
                <p class="card-text"></p>

            </div>
        </div>
    </div>
    <div class="col">
        <div class="card">
            <img src="afbeeldingen/portfolio.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Coming soon</h5>
                <p class="card-text"></p>

            </div>
        </div>
    </div>
</div>

    <br/>
    <br/>
    <br/>
    <br/>
    <br/>

    <div class="contact-area" id="Contact">


        <h1>Contact</h1>


    </div>
<br/>
<br/>



<div class="container py-4">



    <!-- Contactformulier -->
    <form id="contactForm" method="post">

        <!-- Naam -->
        <div class="mb-3">
            <label class="form-label" for="name">Naam</label>
            <input class="form-control"  name="txtnaam" id="name" type="text" placeholder="Naam" data-sb-validations="required" />
            <div class="invalid-feedback" data-sb-feedback="name:required">Name is required.</div>
        </div>

        <!-- Email  -->
        <div class="mb-3">
            <label class="form-label" for="emailAddress">Email adres</label>
            <input class="form-control" name="txtemail" id="emailAddress" type="email" placeholder="Email Adres" data-sb-validations="required, email" />

        </div>

        <!-- bericht -->
        <div class="mb-3">
            <label class="form-label" for="message">Bericht</label>
            <textarea class="form-control" name="txtbericht" id="message" type="text" placeholder="Uw bericht" style="height: 10rem;" data-sb-validations="required"></textarea>

        </div>





        <!-- Form submit button -->
        <div class="d-grid">
            <button class="btn btn-primary btn-lg" name="btnverstuur" type="submit" >Verstuur</button>
        </div>

    </form>


</div>





<script>
    function myFunction() {
        var element = document.body;
        element.classList.toggle("dark-mode");
    }




</script>

</body>
</html>

<?php

error_reporting(0);

include("db.php");

$naam = $_POST["txtnaam"];
$email = $_POST["txtemail"];
$bericht= $_POST["txtbericht"];
$btnverstuur = $_POST["btnverstuur"];


if (isset($_POST["btnverstuur"])){

    //qurey schrjven
    $query = "INSERT INTO contact (Naam,Email,Bericht) VALUES (:anaam,:bemail,:cbericht)";
    //query inlezen
    $stm = $conn->prepare($query);

    //alliassen koppelen
    $stm->bindparam(":anaam", $naam);
    $stm->bindparam(":bemail", $email);
    $stm->bindparam(":cbericht", $bericht);

    //uitvoeren
    ($stm->execute());


}

?>

