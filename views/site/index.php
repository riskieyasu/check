<?php
use yii\helpers\Html;
/** @var yii\web\View $this */

$this->title = 'My Yii Application';
?>

<div class="site-index">
<div class="jumbotron text-center" style="margin-top:100px;">
        <h1 style="font-size:40px;">Selamat Datang Di Mata Sapi</h1>
    <br>
        <p id="login" class="lead">Catat data  sapi anda  <?= Html::a('Disini', "index.php?r=datasapi%2Fcreate") ?></p>
        <p id="guest" class="lead">Catat data  sapi anda  <?= Html::a('Disini', "index?r=site%2Flogin") ?></p>

      
    </div>

   
   
</div>
<?php
if(Yii::$app->user->isGuest){
    $script = <<< JS
    document.getElementById("login").style.display="none";
    
    
JS;
    $this->registerJs($script);
   }
   else{
    $script_1 = <<< JS
    document.getElementById("guest").style.display="none";
    
    
JS;
    $this->registerJs($script_1);
   }
?>