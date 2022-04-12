<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'Pencatatan Kesehatan Sapi';
$this->params['breadcrumbs'][] = $this->title;
?>
<h1 style="text-align:center;"><?= Html::encode($this->title) ?></h1>
<div class="vaksinasi-create"  style="background-color:white; width:20%; margin-left:80px; margin-top:140px; border-style: solid; border-color:black;">
<div><span><i class='fas fa-cow'  style='color:black; margin-left:45px; margin-top:10px; font-size:82px;'></i></span><br><a href='#' id = '$num' style="margin-left:62px;">Kondisi Visual</a></div>
<br>
</div>
<div class="vaksinasi-create"  style="background-color:white; width:20%; margin-top:-136px; margin-left:320px; border-style: solid; border-color:black;">
<div><span><i class="fas fa-gauge" style='color:black; margin-left:55px; margin-top:10px; font-size:82px;'></i></span><br><a href='#' id = '$num' style="margin-left:94px;">BCS</a></div>
<br>
</div>
<div class="vaksinasi-create"  style="background-color:white; width:20%; margin-top:-136px; margin-left:560px; border-style: solid; border-color:black;">
<div><span><i class='fas fa-briefcase-medical'  style='color:black; margin-left:55px; margin-top:10px; font-size:82px;'></i></span><br><a href='#' id = '$num' style="margin-left:45px;">Riwayat Kesehatan</a></div>
<br>
</div>
<div class="vaksinasi-create"  style="background-color:white; width:20%; margin-top:-136px; margin-left:800px; border-style: solid; border-color:black;">
<div><span><i class='fas fa-syringe'  style='color:black; margin-left:55px; margin-top:10px; font-size:82px;'></i></span><br><a href='index.php?r=vaksinasi%2Fcreate' id = '$num' style="margin-left:50px;">Riwayat Vaksinasi</a></div>
<br>
</div>