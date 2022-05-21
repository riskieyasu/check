<style>
     .control-label{
        color:black;
        font-size:12px;
        margin-left:40px;
        margin-top:20px;
        
        /* margin-bottom:10px; */
       
    }
    label[for=mulut-sapi_id]{
        display:none;

    }
    label[for=mulut-file]{
        display:none;

    }
    
    #mulut-kondisi{
        color:black;
        margin-left:50px;
     
        border-color:black;
        width:60%;
    }
    #mulut-foto{
        margin-top:-30px;
        margin-left:150px;
        margin-bottom:20px;
        border-color:black;
        width:60%;
    }
    #mulut-sapi_id{
        margin-top:-30px;
        margin-left:150px;
        margin-bottom:20px;
        border-color:black;
        width:60%;
    }
    .btn-success{
        margin-top:10px;
        margin-left:700px;
    }
  #mulut-file::before {
  content: 'Unggah';
  display: inline-block;
  background: blue;
  border: 1px solid #999;
  border-radius: 3px;
  padding: 5px 8px;
  outline: none;
  color:white;
  white-space: nowrap;
  -webkit-user-select: none;
  cursor: pointer;
  font-weight: 700;
  font-size: 10pt;
  margin-right:10px;
  margin-left:30px;
}
#mulut-file::-webkit-file-upload-button {
  display:none;
}
hr{
    border-top: 3px dotted #8c8b8b
}
</style>


<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Mulut */

$this->title = 'Kondisi Visual - Mulut';
$this->params['breadcrumbs'][] = ['label' => 'Hidungs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<h1><?= Html::encode($this->title) ?></h1>
<p>Pencatatan kesehatan tentang kondisi visual sapi bagian kepala</p>
<br><br>
<div class="bcs-create" style="background-color:white; width:45%; margin:auto; border-style: solid; border-color:black;">
<div class="hidung-create">


    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
 
   <?= $form->field($model, 'kondisi')->radioList( ['Tidak menggangu berlebihan, tertutup'=>'Tidak menggangu berlebihan, tertutup', 'Berlendir' => 'Berlendir'] ); ?>
 <hr>
   <?= $form->field($model,'file')->fileInput(); ?>

   <?= $form->field($model, 'sapi_id')->textInput() ?>

 
 
   

</div>

</div>
<div class="form-group">
       <?= Html::submitButton($model->isNewRecord ? 'Submit' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
   </div>
   <?php ActiveForm::end(); ?>
<script>
     var id_ = localStorage.getItem("id");
    // document.getElementById("vaksinasi-tanggalvaksin").placeholder = "yyyy/mm/dd"; 
    document.getElementById("mulut-sapi_id").value= id_; 
    document.getElementById("mulut-sapi_id").style.display= 'none'; 
    </script>