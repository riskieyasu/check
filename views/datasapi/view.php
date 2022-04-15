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
    <h1>Data Kesehatan Sapi</h1>
    <h1 id="id" style="display:none"><?= Html::encode($this->title) ?></h1>
    
    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
       
    </p>

    
    <div class="datasapi-create" style="background-color:white; width:70%; margin-left:100px; border-style: solid; border-color:black;">
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
    <?= Html::a('Catat data kesehatan sapi anda', 'index.php?r=site%2Fcatat' ,array('onclick'=>'js:setTop()','class' => 'btn btn-success')) ?>
</div>
</div>

</div>
<script>
    function setTop(){
        let id = document.getElementById('id').textContent;
        localStorage.setItem("id", id);
        
    }
    </script>