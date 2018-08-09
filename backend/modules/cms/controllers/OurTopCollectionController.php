<?php

namespace backend\modules\cms\controllers;

use Yii;
use common\models\OurTopCollection;
use common\models\OurTopCollectionSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * OurTopCollectionController implements the CRUD actions for OurTopCollection model.
 */
class OurTopCollectionController extends Controller {

    /**
     * @inheritdoc
     */
    public function behaviors() {
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
     * Lists all OurTopCollection models.
     * @return mixed
     */
    public function actionIndex() {
        $searchModel = new OurTopCollectionSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single OurTopCollection model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id) {
        return $this->render('view', [
                    'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new OurTopCollection model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
        $model = new OurTopCollection();
        $model->setScenario('create');

        if ($model->load(Yii::$app->request->post()) && Yii::$app->SetValues->Attributes($model)) {
            $image = UploadedFile::getInstance($model, 'image');
            $model->image = $image->extension;
            if ($model->validate() && $model->save()) {
                $this->Upload($model, $image);
                Yii::$app->session->setFlash('success', "New Collection added Successfully");
                $model = new OurTopCollection();
            }
        } return $this->render('create', [
                    'model' => $model,
        ]);
    }

    /*
     * Upload images
     */

    public function Upload($model, $image) {
        $path = Yii::$app->basePath . '/../uploads/cms/our_top_collection';
        $size = [
            ['width' => 100, 'height' => 75, 'name' => 'small'],
        ];

        if (!empty($image)) {
            Yii::$app->UploadFile->UploadFile($model, $image, $path . '/' . $model->id, $size);
        }
        return TRUE;
    }

    /**
     * Updates an existing OurTopCollection model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id) {
        $model = $this->findModel($id);
        $image_ = $model->image;

        if ($model->load(Yii::$app->request->post()) && Yii::$app->SetValues->Attributes($model)) {
            $image = UploadedFile::getInstance($model, 'image');
            if (!empty($image))
                $model->image = $image->extension;
            else
                $model->image = $image_;
            if ($model->validate() && $model->save()) {
                $this->Upload($model, $image);
                Yii::$app->session->setFlash('success', "Our Collection Updated Successfully");
            }
            return $this->redirect(['update', 'id' => $model->id]);
        }

        return $this->render('update', [
                    'model' => $model,
        ]);
    }

    /**
     * Deletes an existing OurTopCollection model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id) {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the OurTopCollection model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return OurTopCollection the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = OurTopCollection::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
