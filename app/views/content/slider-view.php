<?php
    require_once "./app/views/inc/head.php";
    require_once "./config/server.php";
    use app\controllers\sliderController;

    $sliderController = new sliderController();
    $imagenesSliderAct = $sliderController->seleccionarImgSliderACT();
    $imagenesSlider = $sliderController->seleccionarImgSlider();
?>

<div id="myCarousel" class="carousel slide mb-3" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>



    <div class="carousel-inner">
        <div class="carousel-item active">
            <?php foreach ($imagenesSliderAct as $imagen): {?>
                <img src="<?php echo $imagen['slider_url']?>" width="100%" height="400px"  aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
            <?php } endforeach ?>    
        </div> 
        <?php foreach ($imagenesSlider as $imagen): {?>
        <div class="carousel-item">
                <img src="<?php echo $imagen['slider_url']?>" width="100%" height="400px"  aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"> 
        </div>
        <?php } endforeach ?>
        
    </div>


    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>