<?php

namespace app\controllers;

use app\models\Mulut;
use app\models\MulutSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * MulutController implements the CRUD actions for Mulut model.
 */
class MulutController extends Controller
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
     * Lists all Mulut models.
     *
     * @return string
     */
    public function actionIndex($id)
    {
        $rows = (new \yii\db\Query())
        ->select(['id','kondisi','sapi_id','foto'])
        ->from('mulut')
        ->where(['sapi_id' => $id])
        ->limit(10)
        ->all();
        
        $searchModel = new MulutSearch();
        // $dataProvider = $searchModel->search($this->request->queryParams);
        $data=$rows;
        return $this->printTable_($data);
        // return $this->render('index', [
        //     'searchModel' => $searchModel,
        //     'dataProvider' => $dataProvider,
        // ]);
    }
    private function printTable_($data){
        $num = 0;
        $numa =0;
        $a='z';
        $content = "<h1 id='cek' style='text-align:center; margin-top:20px; color:black;'>Data kesehatan sapi anda (Kepala -> Mulut)</h1><div class='flex-container' style='height:70%; overflow-y: scroll;'><br><table class='table' style='margin-bottom:312px;  margin:auto;width:850px;'><tr>
        <th style='text-align:center'>ID</th>
        <th style='text-align:center'>Kondisi</th>
        <th style='display:none'>Sapi ID</th>
        <th style='text-align:center'>Foto</th>
      
      </tr>";
      foreach ($data as $datum) {
        $content .= "<tr>";
        $num++;
        foreach ($datum as $key => $value) {
            if($a=='z' OR $a=='aa' OR $a=='ab' OR $a=='ac'){
                $a++;
            }
            else if($a=='ad'){
                $a ='aa';
            }
            
            $content .= "<p style='display:none' id=$a$num value='$value'>$value</p>";
            if($key == 'id' || $key =='kondisi')
            $content .= "<td style='text-align:center' ><a href='#' id=$value onclick='tes_($value)'>$value</a></td>";
        }
        $numa++;
        $content .= "<td style='text-align:center' id='ar$numa' value='$value'><img id ='img$numa' src='../web/uploads/aweeee.jpg' alt='test' width='300' height='200'></td></tr>";
        $content .= "</tr>";
    }
    $content .= '</table>';
        return $this->renderContent($content);
    }
    /**
     * Displays a single Mulut model.
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
     * Creates a new Mulut model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Mulut();

        if ($this->request->isPost) {
           
            if ($model->load($this->request->post())) {
                
                $imageName_ = $model->sapi_id;
                $model->file = UploadedFile::getInstance($model,'file');
               
                $model->foto= '' .$model->file->extension;
                $model->save();
                $imageName = $model->id;
                $model->file->saveAs('uploads/mulut'.$imageName_. '-'.$imageName.'.'.$model->file->extension);
                return $this->redirect(['index', 'id' => $model->sapi_id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Mulut model.
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
     * Deletes an existing Mulut model.
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
     * Finds the Mulut model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Mulut the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Mulut::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
?>
<script src="https://code.jquery.com/jquery-3.5.0.js"></script>
<script>
      $(document).ready(function() {

        // $("#img" +1).attr("src", "../web/uploads/hidung"+$("#ac" +1).text()+'-'+$("#aa" +1).text()+".jpg");
        for (let i = 1; i < 100; i++) {
            $("#img" +i).attr("src", "../web/uploads/mulut"+$("#ac" +i).text()+'-'+$("#aa" +i).text()+"."+$("#ad" +i).text() +"");
        }
});
    </script>