<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use app\models\Section;
use app\models\SectionSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\ForbiddenHttpException;
use yii\data\ActiveDataProvider;
use app\models\Users;
/**
 * SectionAdminController implements the CRUD actions for Section model.
 */
class SectionAdminController extends Controller
{
    public function behaviors()
    {
         return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['adminka'],
                        'allow' => true,
                        'roles' => ['admin'],
                    ],
                ],
            ],
        ];
    }


       /* return [
            'access'=>[
                'class'=>AccessControl::className(),
                'only'=>['index'],
                'rules'=>[
                    [
                        'actions'=>['index'],
                        'allow'=>true,
                        'roles'=>['@'],
                        'matchCallback' => 
                            function ($rule, $action) {
                                return Users::isUserAdmin(Yii::$app->user->identity->username);
                            }
                    ],
                    [
                        'actions'=>['index'],
                        'allow'=>true,
                        'roles'=>['@'],
                        'matchCallback' => 
                        function ($rule, $action) {
                            return Users::isGroupAdmin(Yii::$app->user->identity->username);
                        }
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
        */
    


    /**
     * Lists all Section models.
     * @return mixed
     */
    public function actionIndex($id=Null)
    {
        if(\Yii::$app->user->can('createPost'))
        {
            $searchModel = new SectionSearch();
            if($id==Null)
            {
                $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
            }else
            {
                $dataProvider= new ActiveDataProvider([
                    'query'=>Section::find()->where(['id'=>$id])]);
            }
            return $this->render('index', [
                'searchModel' => $searchModel,
                'dataProvider' => $dataProvider,
            ]);
        }else
        {
            throw new ForbiddenHttpException('У вас недостаточно прав для выполнения указанного действия');
        }
    }



    /**
     * Displays a single Section model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Section model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Section();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }
    

    /**
     * Updates an existing Section model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
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
     * Deletes an existing Section model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Section model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Section the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Section::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
