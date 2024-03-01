<!DOCTYPE html>
<html>
<?php include("plantilla/header.php"); ?>

<body>
    <?php include("plantilla/head.php"); ?>
    <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img class="d-block w-100" src="./img/langui.png" alt="primero slide" style="object-fit: contain;">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="./img/baloncesto.png" alt="segundo slide" style="object-fit: contain;">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="./img/futbol.png" alt="tercero slide" style="object-fit: contain;">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="./img/corriendo.png" alt="cuarto slide" style="object-fit: contain;">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="./img/nadando.png" alt="quinto slide" style="object-fit: contain;">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="./img/logo.png" alt="sexto slide" style="object-fit: contain;">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">ANTERIOR</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">SIGUIENTE</span>
        </button>
        </div>

    <?php include("plantilla/footer.php"); ?>
</body>

</html>
