<style>
    #w0{
        color:black;
      width :50%;
      
      margin-left:300px;
      margin-top:-190px;
    }
    #img{
        padding-top:60px;
        margin-left:50px;
    }
  .username{
      color:black;
      margin-left:-10px;
     
  }
  .update{
      color:black;
      margin-left:480px;

     
  }
    </style>
<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Datasapi */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Datasapis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="datasapi-view">
    <h1 style="text-align:center">Data Kesehatan Sapi</h1>
    <h1 id="id" style="display:none"><?= Html::encode($this->title) ?></h1>
    
    <p style="text-align:center">
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
       
    </p>

    
    <div class="datasapi-create" style="background-color:white; width:70%; margin-left:150px; border-style: solid; border-color:black;">
    <?= Html::label('terakhir diupdate :' , 'username', ['class' => 'label update']) ?>
        <?= Html::label($model->date , 'username', ['class' => 'label username']) ?><br><img id ="img" src="/../coww.jpg" alt="Girl in a jacket" width="200" height="200"> <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'namasapi',
            'rassapi',
            'jeniskelamin',
            'tanggallahir',
            'beratbadan',
            'lingkarbadan',
            
        ]
    ]) ?>
    <div style="width:50%; margin:auto; margin-left:420px; padding-bottom:10px;">
    
</div>
</div>

</div>
<div class="vaksinasi-create"  style="background-color:white; width:20%; margin-left:80px; margin-top:60px; border-style: solid; border-color:black;">
<div><span><i class='fas fa-cow'  style='color:black; margin-left:45px; margin-top:10px; font-size:82px;'></i></span><br><a href='#' id = '$num' style="margin-left:62px;">Kondisi Visual</a></div>
<br>
</div>
<div class="vaksinasi-create"  style="background-color:white; width:20%; margin-top:-136px; margin-left:320px; border-style: solid; border-color:black;">
<div><span><i class="fas fa-gauge" style='color:black; margin-left:55px; margin-top:10px; font-size:82px;'></i></span><br><a href='#' id = '$num' style="margin-left:94px;">BCS</a></div>
<br>
</div>
<div class="vaksinasi-create"  style="background-color:white; width:20%; margin-top:-136px; margin-left:560px; border-style: solid; border-color:black;">
<div><span><i class='fas fa-briefcase-medical'  style='color:black; margin-left:55px; margin-top:10px; font-size:82px;'></i></span><br><a href='index.php?r=riwayatpenyakit%2Fcreate' id = '$num' style="margin-left:45px;">Riwayat Kesehatan</a></div>
<br>
</div>
<div class="vaksinasi-create"  style="background-color:white; width:20%; margin-top:-136px; margin-left:800px; border-style: solid; border-color:black;">
<div><span><i class='fas fa-syringe'  style='color:black; margin-left:55px; margin-top:10px; font-size:82px;'></i></span><br><a href='index.php?r=vaksinasi%2Fcreate' onclick="setTop()" id = '$num' style="margin-left:50px;">Riwayat Vaksinasi</a></div>
<br>
</div>



<script>
    function setTop(){
        let id = document.getElementById('id').textContent;
        localStorage.setItem("id", id);
        
    }
    </script>