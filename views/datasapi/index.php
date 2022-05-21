<?php

use app\models\Datasapi;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DatasapiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Datasapis';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="datasapi-index">

    
    <?php
$query=new \yii\db\Query(); 
$id =$_GET['id'];

$rows=$query ->select(['id', 'namasapi'])
            ->from('datasapi')
            ->where(['id_user' => $id])
            ->limit(50)
            ->all();

            

             $num = 0;
                echo"<h1  style='text-align:center; margin-top:20px; color:black;'>Data kesehatan sapi anda</h1><div class='flex-container' style='height:70%; overflow-y: scroll;'>";
                foreach ($rows as $datum) {
                    $num += 1;
                    echo"<div><span><i class='fas fa-cow'  style='color:white;  font-size:82px;'></i></span><br><a href='#' id = '$num' onclick=viewdata(this.id);>";
                    foreach ($datum as $key => $value) {
                            
                            // echo $detail['value1'] . " " . $detail['value2'];
                            echo" {$value}";
                          
                        
                    }
                    echo "</a></div>";
                }
              echo'</div>';
                
              
            
            
        ?>
    <h2 style="text-align:center" id="h2">Tidak Diizinkan!</h2>

  
    </div>



<?php



if(Yii::$app->user->isGuest){
    $script = <<< JS
    document.getElementById("data").style.display="none";
    
    
JS;
    $this->registerJs($script);
   }
   else if(Yii::$app->user->identity->username=='Admin'){
    // if(Yii::$app->user->isGuest){
        $script = <<< JS
        
        document.getElementById("h2").style.display="none";
        $(".artikel").css("display","block");
        $(".sapianda").css("display","block");
        
    JS;
        $this->registerJs($script);
       }
   else{
    $script_1 = <<< JS
    document.getElementById("h2").style.display="none";
    $(".sapianda").css("display","block");
    // $(".flex-container_").css("display","none");
    
    
JS;
    $this->registerJs($script_1);
   }
?>

