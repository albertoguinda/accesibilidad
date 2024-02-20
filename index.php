<!DOCTYPE html>
<html>
<?php include("plantilla/header.php"); ?>

<body>
    <?php include("plantilla/head.php"); ?>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="./img/langui.png" alt="primero slide" style="width: 500px; height: 500px;">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="./img/baloncesto.png" alt="segundo slide" style="width: 500px; height: 500px;">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="./img/futbol.png" alt="tercero slide" style="width: 500px; height: 500px;">
        </div>
        <div class="carousel-item active">
            <img class="d-block w-100" src="./img/corriendo.png" alt="cuarto slide" style="width: 500px; height: 500px;">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="./img/nadando.png" alt="quinto slide" style="width: 500px; height: 500px;">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="./img/logo.png" alt="sexto slide" style="width: 500px; height: 500px;">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    </div>
    <?php include("plantilla/footer.php"); ?>
</body>

</html>
