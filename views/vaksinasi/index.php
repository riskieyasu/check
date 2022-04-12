<style>
    .btn-success{
      margin-left:465px;
    }
    </style>

<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\VaksinasiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Vaksinasi';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vaksinasi-index">

    <h1 style="text-align:center"><?= Html::encode($this->title) ?></h1>

   

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        // 'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'datasapi_id',
            'namavaksin',
            'tanggalvaksin',
            // 'pemberivaksin',
            // 'keterangan',
            
            // [
            //     'class' => ActionColumn::className(),
            //     'urlCreator' => function ($action, $model, $key, $index, $column) {
            //         return Url::toRoute([$action, 'id' => $model->id]);
            //      }
            // ],
        ],
    ]); ?>
 <p>
        <?= Html::a('Create Vaksinasi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

</div>
<script>
    $("td")
    </script>