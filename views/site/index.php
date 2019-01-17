<?php

/* @var $this yii\web\View */

$this->title = 'Mama Fair';
use yii\web\AssetBundle;
use yii\helpers\Html;
?>
<div class="container">
<div class="jumbotron">
    <h1>MAMA FAIR</h1>

    <p class="lead">It's a Mom's Affair</p>
</div>
<hr>
<?php echo Html::img('@web/img/00004.jpg', ['width'=>'1100','height'=>'600']) ?>
<hr>

    <div class="row">
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">Pre & Post Natal Information</h3>
                    <p class="card-text">We provide credible and reliable information for all interested parties. Whether you are a young 
                    mother who has just given birth or are expecting a young one soon, we have you covered.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">Doctor Services</h3>
                    <p class="card-text">Do you have an enquiry? As a young or expectant mother, we can save you the 
                    hustle of having to go to the hospital by connecting you to a qualified doctor.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">Online Immunization Form</h3>
                    <p class="card-text">Are you a young mother? Are you tired of filling the manual immunization card. Worry no more! 
                    You can now fill our online immunization form that will help you follow the immunization schedule to the end.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    </div>
</div>       




       