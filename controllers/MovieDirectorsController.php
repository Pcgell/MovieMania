<?php

namespace app\controllers;

use Yii;
use app\models\MovieDirectors;
use app\models\MovieDirectorsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * MovieDirectorsController implements the CRUD actions for MovieDirectors model.
 */
class MovieDirectorsController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all MovieDirectors models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new MovieDirectorsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single MovieDirectors model.
     * @param integer $Movies_id
     * @param integer $Directors_id
     * @return mixed
     */
    public function actionView($Movies_id, $Directors_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($Movies_id, $Directors_id),
        ]);
    }

    /**
     * Creates a new MovieDirectors model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new MovieDirectors();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'Movies_id' => $model->Movies_id, 'Directors_id' => $model->Directors_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing MovieDirectors model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $Movies_id
     * @param integer $Directors_id
     * @return mixed
     */
    public function actionUpdate($Movies_id, $Directors_id)
    {
        $model = $this->findModel($Movies_id, $Directors_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'Movies_id' => $model->Movies_id, 'Directors_id' => $model->Directors_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing MovieDirectors model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $Movies_id
     * @param integer $Directors_id
     * @return mixed
     */
    public function actionDelete($Movies_id, $Directors_id)
    {
        $this->findModel($Movies_id, $Directors_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the MovieDirectors model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $Movies_id
     * @param integer $Directors_id
     * @return MovieDirectors the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($Movies_id, $Directors_id)
    {
        if (($model = MovieDirectors::findOne(['Movies_id' => $Movies_id, 'Directors_id' => $Directors_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
