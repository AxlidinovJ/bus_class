<?php

namespace app\modules\admin\controllers;

use app\modules\admin\models\Stat;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * StatController implements the CRUD actions for Stat model.
 */
class StatController extends Controller
{
    
    // public function behaviors()
    // {
    //     return array_merge(
    //         parent::behaviors(),
    //         [
    //             'verbs' => [
    //                 'class' => VerbFilter::className(),
    //                 'actions' => [
    //                     'delete' => ['POST'],
    //                 ],
    //             ],
    //         ]
    //     );
    // }

    /**
     * Lists all Stat models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Stat::find(),
            /*
            'pagination' => [
                'pageSize' => 50
            ],
            'sort' => [
                'defaultOrder' => [
                    'id' => SORT_DESC,
                ]
            ],
            */
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Stat model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Stat model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    // public function actionCreate()
    // {
    //     $model = new Stat();

    //     if ($this->request->isPost) {
    //         if ($model->load($this->request->post()) && $model->save()) {
    //             return $this->redirect(['view', 'id' => $model->id]);
    //         }
    //     } else {
    //         $model->loadDefaultValues();
    //     }

    //     return $this->render('create', [
    //         'model' => $model,
    //     ]);
    // }

    /**
     * Updates an existing Stat model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
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
     * Deletes an existing Stat model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    // public function actionDelete($id)
    // {
    //     $this->findModel($id)->delete();

    //     return $this->redirect(['index']);
    // }

    /**
     * Finds the Stat model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Stat the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Stat::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
