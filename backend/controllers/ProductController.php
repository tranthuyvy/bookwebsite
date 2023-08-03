<?php

namespace backend\controllers;

use Yii;
use backend\models\Product;
use backend\models\Group;
use backend\models\Supplier;
use backend\models\Author;
use backend\models\ProductSearch;
use yii\helpers\ArrayHelper;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;


/**
 * ProductController implements the CRUD actions for Product model.
 */
class ProductController extends Controller
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
     * Lists all Product models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new ProductSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Product model.
     * @param int $product_id Product ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($product_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($product_id),
        ]);
    }

    /**
     * Creates a new Product model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Product();

        $time = time();
        $model->created_at = $time;
        $model->updated_at = $time;

        $model->user_id = Yii::$app->user->id;

        $urlImg = Yii::$app->request->post();


        //group - the loai
        $group = new Group();
        $dataGroup = ArrayHelper::map($group->getAllGroup(),"group_id","group_name");

        //supplier - NXB
        $supplier = new Supplier();
        $dataSupplier = ArrayHelper::map($supplier->getAllSupplier(), "supplier_id","supplier_name");

        //author - tac gia
        $author = new Author();
        $dataAuthor = ArrayHelper::map($author->getAllAuthor(), "author_id", "author_name");

        if ($this->request->isPost) {
            if ($model->load(Yii::$app->request->post())) {
                $link = $urlImg["Product"]["product_image"];
                $link = str_replace("http://localhost/bookwebsite/","", $link);
                $model->product_image = $link;
                if ($model->save())
                    return $this->redirect(['view', 'product_id' => $model->product_id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
            'dataGroup' => $dataGroup,
            'dataSupplier' =>$dataSupplier,
            'dataAuthor' =>$dataAuthor
        ]);
    }

    /**
     * Updates an existing Product model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $product_id Product ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($product_id)
    {
        $model = $this->findModel($product_id);
        $time = time();
        $model->updated_at = $time;

        //group - the loai
        $group = new Group();
        $dataGroup = ArrayHelper::map($group->getAllGroup(),"group_id","group_name");

        //supplier - NXB
        $supplier = new Supplier();
        $dataSupplier = ArrayHelper::map($supplier->getAllSupplier(), "supplier_id","supplier_name");

        //author - tac gia
        $author = new Author();
        $dataAuthor = ArrayHelper::map($author->getAllAuthor(), "author_id", "author_name");

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'product_id' => $model->product_id]);
        }

        return $this->render('update', [
            'model' => $model,
            'dataGroup' => $dataGroup,
            'dataSupplier' =>$dataSupplier,
            'dataAuthor' =>$dataAuthor
        ]);
    }

    /**
     * Deletes an existing Product model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $product_id Product ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($product_id)
    {
        $this->findModel($product_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Product model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $product_id Product ID
     * @return Product the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($product_id)
    {
        if (($model = Product::findOne(['product_id' => $product_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
