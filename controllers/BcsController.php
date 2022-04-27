<?php

namespace app\controllers;

use app\models\Bcs;
use app\models\BcsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * BcsController implements the CRUD actions for Bcs model.
 */
class BcsController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Bcs models.
     *
     * @return string
     */
    public function actionIndex($id)
    {
        $rows = (new \yii\db\Query())
        ->select(['tulangbelakang','tulangiga','lemakdada','lemakekor','penyusutanotot','fisiksapi','id'])
        ->from('bcs')
        ->where(['sapi_id' => $id])
        ->limit(10)
        ->all();
        
        // $searchModel = new RiwayatpenyakitSearch();
        // $dataProvider = $searchModel->search($this->request->queryParams);

      
        $searchModel = new BcsSearch();
        // $dataProvider = $searchModel->search($this->request->queryParams);

        $data=$rows;
        return $this->printTable_($data);
    }
    private function printTable_($data)
    {   $num = 0;
        $numa =0;
        $a='h';
        $content = "<h1  style='text-align:center; margin-top:20px; color:black;'>Data kesehatan sapi anda</h1><div class='flex-container' style='height:70%; overflow-y: scroll;'><br><table class='table' style='margin-bottom:312px;'><tr>
        <th>Tulang Belakang</th>
        <th>Tulang Iga</th>
        <th>Lemak Dada</th>
        <th>Lemak Ekor</th>
        <th>Penyusutan Otot</th>
        <th>Fisik Sapi</th>
        <th>View (ID)</th>
        <th>status</th>
      
      </tr>";
        foreach ($data as $datum) {
            $num++;
            $a++;
            $content .= "<tr>";
            foreach ($datum as $key => $value) {
               
                $content .= "<p id=$a$num value='$value'>$value</p>";
                $content .= "<td><a href='#' id =$value onclick='tes_($value)'>$value</a></td>";
            }
            $numa++;
            $content .= "'<td id='ar$numa' value='$value'>BCS</td></tr>";
        }
        $content .= '</table>';
        return $this->renderContent($content);
    }
    /**
     * Displays a single Bcs model.
     * @param int $id ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Bcs model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Bcs();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id' => $model->id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Bcs model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Bcs model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Bcs model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Bcs the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Bcs::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
?>
<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
 <script>
     function tes_(a){
         if (a>0 && a<100){
        //  alert(a);
            location.href='index.php?r=bcs%2Fview&id='+a+''
    }
     }
     $(document).ready(function() {
         for (let i = 0; i < 100; i++) {
          $("#" + i).empty().append("<p style='color:blue;text'>Lihat</p>");
            }
   
    });
    var cekkk= $("#ar1").val();
    console.log(cekkk);
     </script>
    