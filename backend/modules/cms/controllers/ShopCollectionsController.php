<?php

namespace backend\modules\cms\controllers;

use Yii;
use common\models\ShopCollections;
use common\models\ShopCollectionsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * ShopCollectionsController implements the CRUD actions for ShopCollections model.
 */
class ShopCollectionsController extends Controller {

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
     * Lists all ShopCollections models.
     * @return mixed
     */
    public function actionIndex($id = NULL) {
        if (empty($id)) {
            $id = 1;
        }
        $model = $this->findModel($id);
        if ($model->load(Yii::$app->request->post()) && Yii::$app->SetValues->Attributes($model) && $this->SetExtension($model, $id) && $model->validate() && $model->save() && $this->SaveUpload($model)) {
            if (!empty($id)) {
                Yii::$app->getSession()->setFlash('success', 'Updated Successfully');
            } else {
                Yii::$app->getSession()->setFlash('success', "Create Successfully");
            }
            return $this->redirect(['index']);
        }
        $searchModel = new ShopCollectionsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->pagination->pageSize = 5;

        return $this->render('index', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
                    'model' => $model,
        ]);
    }

    /*
     * This function get model and set image extensions
     * return model
     */

    public function SetExtension($model, $id) {
        $image = UploadedFile::getInstance($model, 'image');
        if (!empty($id)) {
            $update = ShopCollections::findOne($id);
            if (!empty($image))
                $model->image = $image->extension;
            else
                $model->image = $update->image;
        } else {
            $model->image = $image->extension;
        }
        return $model;
    }

    /**
     * Upload gender image based on id.
     * @return mixed
     */
    public function SaveUpload($model) {
        $image = UploadedFile::getInstance($model, 'image');
        $path = Yii::$app->basePath . '/../uploads/cms/shop_collections';
        $size = [
            ['width' => 300, 'height' => 75, 'name' => 'small'],
        ];

        if (!empty($image)) {
            Yii::$app->UploadFile->UploadFile($model, $image, $path . '/' . $model->id, $size);
        }
        return TRUE;
    }

    /**
     * Displays a single ShopCollections model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id) {
        return $this->render('view', [
                    'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new ShopCollections model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
        $model = new ShopCollections();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                        'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing ShopCollections model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id) {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                        'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing ShopCollections model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id) {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the ShopCollections model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return ShopCollections the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = ShopCollections::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
