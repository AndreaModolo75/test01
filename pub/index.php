<?php

require('../vendor/autoload.php');


$basePub='/demo/bootstrap4';
$repository['bootstrap4']=$basePub.'/pub/dist/bootstrap4';
$repository['jquery']=$basePub.'/pub/dist/jquery';
$media['carousel']=$basePub.'/pub/media/carousel';
$repository['highlight']=$basePub.'/pub/dist/highlight';

$hl = new \Highlight\Highlighter();
//androidstudio
//ascetic
//atelier-cave-light
//atelier-dune-light
//atelier-estuary-light
//atelier-heath-light
//atelier-sulphurpool-light
//atom-one-dark-reasonable
//atom-one-light
//github
//vs
?>

<!DOCTYPE html>
<html lang=”en”>
    <head>
        <title>Demo Bootstrap 5</title>
        
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        
        <link href="<?=$repository['bootstrap4']; ?>/css/bootstrap.min.css" rel="stylesheet"/>
        <link href="<?=$repository['highlight']; ?>/css/github.css" rel="stylesheet"/>

        <script src="<?=$repository['jquery']; ?>/js/jquery.min.js" ></script>        
        <script src="<?=$repository['bootstrap4']; ?>/js/bootstrap.bundle.min.js" ></script>        
        
        <style>
        section{
            margin-top:50px;
            margin-bottom:50px;
        }
        
        code.hljs{
            position:relative;
        }
        code .btn-copy-to-dashborad{
            position:absolute;
            top:5px;
            right:5px;
        }
        
        .carousel-control-next-icon, .carousel-control-prev-icon{
            width:50px;
            height:50px;
        }
        
        .carousel-item div.img{
            height:600px;
            background-position:center center;
            background-repeat:no-repeat;
            background-size:cover;
            background-color:#eee;
        }
        
        </style>
    </head>
    
    <body>   
        <main>
            <!-- DEMO 1-->
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h1>1) Only slide</h1>
<?php                            
$code = <<<___HTML
<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="..." class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="..." class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="..." class="d-block w-100" alt="...">
        </div>
    </div>
</div>
___HTML
;

try {
    // Highlight some code.
    $highlighted = $hl->highlight('html', $code);

    echo "<pre><code class=\"hljs {$highlighted->language}\" translate=\"no\">";
    echo $highlighted->value;
    echo "</code></pre>";
}
catch (DomainException $e) {
    // This is thrown if the specified language does not exist

    echo "<pre><code>";
    echo htmlentities($code);
    echo "</code></pre>";
}
?>
                            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="<?=$media['carousel'];?>/1.png" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="<?=$media['carousel'];?>/2.png" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="<?=$media['carousel'];?>/3.png" class="d-block w-100" alt="...">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
            <!-- DEMO 2-->
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h1>2) with control</h1>
<?php                            
$code = <<<___HTML
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="..." class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="..." class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="..." class="d-block w-100" alt="...">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>                        
___HTML
;

try {
    // Highlight some code.
    $highlighted = $hl->highlight('html', $code);

    echo "<pre><code class=\"hljs {$highlighted->language}\" translate=\"no\">";
    echo $highlighted->value;
    echo "</code></pre>";
}
catch (DomainException $e) {
    // This is thrown if the specified language does not exist

    echo "<pre><code>";
    echo htmlentities($code);
    echo "</code></pre>";
}
?>
                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="<?=$media['carousel'];?>/1.png" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="<?=$media['carousel'];?>/2.png" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="<?=$media['carousel'];?>/3.png" class="d-block w-100" alt="...">
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>                        
                        </div>
                    </div>
                </div>
            </section>

            <!-- DEMO 3-->
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h1>3) With indicators</h1>
<?php                            
$code = <<<___HTML
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="..." class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="..." class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="..." class="d-block w-100" alt="...">
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
___HTML
;

try {
    // Highlight some code.
    $highlighted = $hl->highlight('html', $code);

    echo "<pre><code class=\"hljs {$highlighted->language}\" translate=\"no\">";
    echo $highlighted->value;
    echo "</code></pre>";
}
catch (DomainException $e) {
    // This is thrown if the specified language does not exist

    echo "<pre><code>";
    echo htmlentities($code);
    echo "</code></pre>";
}
?>
                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="<?=$media['carousel'];?>/1.png" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="<?=$media['carousel'];?>/2.png" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="<?=$media['carousel'];?>/3.png" class="d-block w-100" alt="...">
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
                        </div>
                    </div>
                </div>
            </section>
            
            <!-- DEMO 4-->
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h1>4) With captions</h1>
<?php                            
$code = <<<___HTML
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="..." class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>Some representative placeholder content for the first slide.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="..." class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Second slide label</h5>
                <p>Some representative placeholder content for the second slide.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="..." class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <p>Some representative placeholder content for the third slide.</p>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
___HTML
;

try {
    // Highlight some code.
    $highlighted = $hl->highlight('html', $code);

    echo "<pre><code class=\"hljs {$highlighted->language}\" translate=\"no\">";
    echo $highlighted->value;
    echo "</code></pre>";
}
catch (DomainException $e) {
    // This is thrown if the specified language does not exist

    echo "<pre><code>";
    echo htmlentities($code);
    echo "</code></pre>";
}
?>
                            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="<?=$media['carousel'];?>/1.png" class="d-block w-100" alt="...">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>First slide label</h5>
                                            <p>Some representative placeholder content for the first slide.</p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="<?=$media['carousel'];?>/2.png" class="d-block w-100" alt="...">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>Second slide label</h5>
                                            <p>Some representative placeholder content for the second slide.</p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="<?=$media['carousel'];?>/3.png" class="d-block w-100" alt="...">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>Third slide label</h5>
                                            <p>Some representative placeholder content for the third slide.</p>
                                        </div>
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            
            <!-- DEMO 5-->
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h1>5) Crossfade</h1>
<?php                            
$code = <<<___HTML
<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="..." class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
___HTML
;

try {
    // Highlight some code.
    $highlighted = $hl->highlight('html', $code);

    echo "<pre><code class=\"hljs {$highlighted->language}\" translate=\"no\">";
    echo $highlighted->value;
    echo "</code></pre>";
}
catch (DomainException $e) {
    // This is thrown if the specified language does not exist

    echo "<pre><code>";
    echo htmlentities($code);
    echo "</code></pre>";
}
?>
                            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="<?=$media['carousel'];?>/1.png" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="<?=$media['carousel'];?>/2.png" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="<?=$media['carousel'];?>/3.png" class="d-block w-100" alt="...">
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
            <!-- DEMO 6-->
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h1>6) Disable touch swiping</h1>
<?php                            
$code = <<<___HTML
<div id="carouselExampleControlsNoTouching" class="carousel slide" data-touch="false" data-interval="false">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="..." class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControlsNoTouching" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControlsNoTouching" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
___HTML
;

try {
    // Highlight some code.
    $highlighted = $hl->highlight('html', $code);

    echo "<pre><code class=\"hljs {$highlighted->language}\" translate=\"no\">";
    echo $highlighted->value;
    echo "</code></pre>";
}
catch (DomainException $e) {
    // This is thrown if the specified language does not exist

    echo "<pre><code>";
    echo htmlentities($code);
    echo "</code></pre>";
}
?>
                            <div id="carouselExampleControlsNoTouching" class="carousel slide" data-touch="false" data-interval="false">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="<?=$media['carousel'];?>/1.png" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="<?=$media['carousel'];?>/2.png" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="<?=$media['carousel'];?>/3.png" class="d-block w-100" alt="...">
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleControlsNoTouching" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleControlsNoTouching" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- DEMO 7-->
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h1>7) With images with different dimensions</h1>
<?php                            
$code = <<<___HTML
<div id="carouselExampleCaptionsWithDifferentImagesSize" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptionsWithDifferentImagesSize" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptionsWithDifferentImagesSize" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptionsWithDifferentImagesSize" data-slide-to="2"></li>
        <li data-target="#carouselExampleCaptionsWithDifferentImagesSize" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="img d-block w-100" style="background-image:url('...');" alt="...">&nbsp;</div>
            <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>Some representative placeholder content for the first slide.</p>
            </div>
        </div>
        <div class="carousel-item">
            <div class="img d-block w-100" style="background-image:url('...');" alt="...">&nbsp;</div>
            <div class="carousel-caption d-none d-md-block">
                <h5>Second slide label</h5>
                <p>Some representative placeholder content for the second slide.</p>
            </div>
        </div>
        <div class="carousel-item">
            <div class="img d-block w-100" style="background-image:url('...');" alt="...">&nbsp;</div>
            <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <p>Some representative placeholder content for the third slide.</p>
            </div>
        </div>
        <div class="carousel-item">
            <div class="img d-block w-100" style="background-image:url('...');" alt="...">&nbsp;</div>
            <div class="carousel-caption d-none d-md-block">
                <h5>Fourth slide label</h5>
                <p>Some representative placeholder content for the fourth slide.</p>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptionsWithDifferentImagesSize" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptionsWithDifferentImagesSize" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
___HTML
;

try {
    // Highlight some code.
    $highlighted = $hl->highlight('html', $code);

    echo "<pre><code class=\"hljs {$highlighted->language}\" translate=\"no\">";
    echo $highlighted->value;
    echo "</code></pre>";
}
catch (DomainException $e) {
    // This is thrown if the specified language does not exist

    echo "<pre><code>";
    echo htmlentities($code);
    echo "</code></pre>";
}
?>
                            <div id="carouselExampleCaptionsWithDifferentImagesSize" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleCaptionsWithDifferentImagesSize" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExampleCaptionsWithDifferentImagesSize" data-slide-to="1"></li>
                                    <li data-target="#carouselExampleCaptionsWithDifferentImagesSize" data-slide-to="2"></li>
                                    <li data-target="#carouselExampleCaptionsWithDifferentImagesSize" data-slide-to="3"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="img d-block w-100" style="background-image:url('<?=$media['carousel'];?>/1.png');" alt="...">&nbsp;</div>
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>First slide label</h5>
                                            <p>Some representative placeholder content for the first slide.</p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="img d-block w-100" style="background-image:url('<?=$media['carousel'];?>/3.png');" alt="...">&nbsp;</div>
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>Second slide label</h5>
                                            <p>Some representative placeholder content for the second slide.</p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="img d-block w-100" style="background-image:url('<?=$media['carousel'];?>/3.png');" alt="...">&nbsp;</div>
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>Third slide label</h5>
                                            <p>Some representative placeholder content for the third slide.</p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="img d-block w-100" style="background-image:url('<?=$media['carousel'];?>/4.png');" alt="...">&nbsp;</div>
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>Fourth slide label</h5>
                                            <p>Some representative placeholder content for the fourth slide.</p>
                                        </div>
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleCaptionsWithDifferentImagesSize" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleCaptionsWithDifferentImagesSize" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
            <!-- FOOTER -->
            <footer class="container">
                <p class="float-end"><a href="#">Back to top</a></p>
                <p>&copy; 2021 - Test Bootstrap4 Carousel</p>
            </footer>
        </main>
        <script>
        "use strict";

        $(function(){
            //demo 1
            $('#carouselExampleSlidesOnly').carousel();        
            //demo 2 with control
            $('#carouselExampleControls').carousel();        
            //demo 3 With indicators
            $('#carouselExampleIndicators').carousel();        
            //demo 4 With captions
            $('#carouselExampleCaptions').carousel();        
            //demo 5 Crossfade
            $('#carouselExampleFade').carousel();        
            //demo 6 Disable touch swiping
            $('#carouselExampleControlsNoTouching').carousel();        
            //demo 7 With captions with images with different size
            $('carouselExampleCaptionsWithDifferentImagesSize').carousel();                    
            
            //add copy button in every code.hljs
            var $txt_copy_button='copy';
            var $txt_tooltip_copy='Copy to clipboard';
            var $txt_tooltip_copied='Copied!';
            $('code.hljs').each(
                function(){
                    let $elementCopyToDashboard='<div class="btn btn-outline-secondary btn-sm btn-copy-to-dashborad">'+$txt_copy_button+'</div>';
                    $(this).append($elementCopyToDashboard);
                    $(this).children('.btn-copy-to-dashborad').tooltip({
                        'title' : $txt_tooltip_copy
                    });
                }
            );
            
            //ad event click to copy button
            $('code .btn-copy-to-dashborad').on(
                'click',
                function(){
                    //get text
                    let $copyText=$(this).parent().text();
                    //delete copy button
                    $copyText = $copyText.substr(0, $copyText.length-$txt_copy_button.length);
                    // Copy the text inside the clipboard
                    navigator.clipboard.writeText($copyText);
                    $(this).tooltip('dispose');
                    $(this).tooltip({
                        'title':    $txt_tooltip_copied
                        }
                    );
                    $(this).tooltip('show');
                    $(this).on(
                        'mouseleave'
                        ,function(){
                            $(this).tooltip('dispose');
                            $(this).tooltip({
                                'title':    $txt_tooltip_copy
                                }
                            );                        
                        }
                    )
                }
            );
            
        });
        </script>
    </body>
</html>
