<?php

namespace backend\controllers;

use Yii;
use common\models\Brand;
use common\models\BrandSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * BrandController implements the CRUD actions for Brand model.
 */
class BrandController extends Controller {

        public function beforeAction($action) {
                if (!parent::beforeAction($action)) {
                        return false;
                }
                if (Yii::$app->user->isGuest) {
                        $this->redirect(['/site/index']);
                        return false;
                }
                return true;
        }

        /**
         * @inheritdoc
         */
        public function behaviors() {
                return [
                    'verbs' => [
                        'class' => VerbFilter::className(),
                        'actions' => [
                        //
                        //        'delete' => ['POST'],
                        ],
                    ],
                ];
        }

        /**
         * Lists all Brand models.
         * @return mixed
         */
        public function actionIndex($id = NULL) {
                if (!empty($id)) {
                        $model = $this->findModel($id);
                } else {
                        $model = new Brand();
                }
                if ($model->load(Yii::$app->request->post()) && Yii::$app->SetValues->Attributes($model) && $this->SetExtension($model, $id) && $model->validate() && $model->save() && $this->SaveUpload($model)) {
                        if (!empty($id)) {
                                Yii::$app->getSession()->setFlash('success', 'Updated Successfully');
                        } else {
                                Yii::$app->getSession()->setFlash('success', "Create Successfully");
                        }
                        return $this->redirect(['index']);
                }
                $searchModel = new BrandSearch();
                $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
                $dataProvider->pagination->pageSize = 5;

                return $this->render('index', [
                            'searchModel' => $searchModel,
                            'dataProvider' => $dataProvider,
                            'model' => $model,
                ]);
        }

        public function SetExtension($model, $id) {
                $image = UploadedFile::getInstance($model, 'banner_image');
                $collection_image = UploadedFile::getInstance($model, 'collection_image');
                if (!empty($id)) {
                        $update = Brand::findOne($id);
                        if (!empty($image)) {
                                $model->banner_image = $image->extension;
                        } else {
                                $model->banner_image = $update->banner_image;
                        }
                        if (!empty($collection_image)) {
                                $model->collection_image = $collection_image->extension;
                        } else {
                                $model->collection_image = $update->collection_image;
                        }
                } else {
                        if (!empty($image))
                                $model->banner_image = $image->extension;
                        if (!empty($collection_image))
                                $model->collection_image = $collection_image->extension;
                }

                return TRUE;
        }

        /**
         * Upload gender image based on id.
         * @return mixed
         */
        public function SaveUpload($model) {
                $image = UploadedFile::getInstance($model, 'banner_image');
                $collection_image = UploadedFile::getInstance($model, 'collection_image');
                $path = Yii::$app->basePath . '/../uploads/cms/brand';
                $path1 = Yii::$app->basePath . '/../uploads/cms/collections';
                $size = [
                        ['width' => 300, 'height' => 75, 'name' => 'small'],
                ];
                $size1 = [
                        ['width' => 100, 'height' => 100, 'name' => 'small'],
                ];

                if (!empty($image)) {
                        Yii::$app->UploadFile->UploadFile($model, $image, $path . '/' . $model->id, $size);
                }
                if (!empty($collection_image)) {
                        Yii::$app->UploadFile->UploadFile($model, $collection_image, $path1 . '/' . $model->id, $size1);
                }
                return TRUE;
        }

        /**
         * Displays a single Brand model.
         * @param integer $id
         * @return mixed
         */
        public function actionView($id) {
                return $this->render('view', [
                            'model' => $this->findModel($id),
                ]);
        }

        /**
         * Creates a new Brand model.
         * If creation is successful, the browser will be redirected to the 'view' page.
         * @return mixed
         */
        public function actionCreate() {
                $model = new Brand();

                //if ($model->load(Yii::$app->request->post()) && Yii::$app->SetValues->Attributes($model) && $model->save()) {
                if ($model->load(Yii::$app->request->post()) && Yii::$app->SetValues->Attributes($model) && $this->SetExtension($model, $id) && $model->validate() && $model->save() && $this->SaveUpload($model)) {
                        return $this->redirect(['index']);
                } else {
                        return $this->render('create', [
                                    'model' => $model,
                        ]);
                }
        }

        /**
         * Updates an existing Brand model.
         * If update is successful, the browser will be redirected to the 'view' page.
         * @param integer $id
         * @return mixed
         */
        public function actionUpdate($id) {
                $model = $this->findModel($id);

                if ($model->load(Yii::$app->request->post()) && Yii::$app->SetValues->Attributes($model) && $model->save()) {
                        return $this->redirect(['index']);
                } else {
                        return $this->render('update', [
                                    'model' => $model,
                        ]);
                }
        }

        /**
         * Deletes an existing Brand model.
         * If deletion is successful, the browser will be redirected to the 'index' page.
         * @param integer $id
         * @return mixed
         */
        public function actionDelete($id) {
                $model1 = \common\models\Product::find()->where(['brand' => $id])->all();
                if (empty($model1)) {
                        $this->findModel($id)->delete();
                } else {
                        Yii::$app->getSession()->setFlash('error', "Can't delete the Item, Error Code : PRO1");
                }
                return $this->redirect(['index']);
        }

        /*         * *********** */

        public function actionAjaxaddbrand() {
                if (yii::$app->request->isAjax) {
                        $brand = Yii::$app->request->post()['brand'];
                        $model = new Brand();
                        $model->brand = $brand;
                        $model->status = '1';
                        if (Yii::$app->SetValues->Attributes($model)) {
                                if ($model->save()) {
                                        echo json_encode(array("con" => "1", 'id' => $model->id, 'brand' => $brand)); //Success
                                        exit;
//            array('id' => $model->id, 'category' => $category);
                                } else {
                                        echo json_encode(array("con" => "0", 'error' => 'Cannot added')); //Error
                                        exit;
                                }
                        }
                }
        }

        /**
         * Finds the Brand model based on its primary key value.
         * If the model is not found, a 404 HTTP exception will be thrown.
         * @param integer $id
         * @return Brand the loaded model
         * @throws NotFoundHttpException if the model cannot be found
         */
        protected function findModel($id) {
                if (($model = Brand::findOne($id)) !== null) {
                        return $model;
                } else {
                        throw new NotFoundHttpException('The requested page does not exist.');
                }
        }

}
