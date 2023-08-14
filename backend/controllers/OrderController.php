<?php

namespace backend\controllers;

use backend\models\Order;
use backend\models\OrderSearch;
use backend\models\Product;
use backend\models\User;
use frontend\models\OrderDetail;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * OrderController implements the CRUD actions for Order model.
 */
class OrderController extends Controller
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
     * Lists all Order models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $statuses = [
            1 => 'Chờ Xác Nhận',
            2 => 'Đã Xác Nhận',
            3 => 'Đang Xử Lý',
            4 => 'Đang Giao Hàng',
            5 => 'Thành Công',
            6 => 'Yêu Cầu Hủy Đơn',
            7 => 'Hủy Đơn Hàng'
        ];
        $searchModel = new OrderSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'statuses' => $statuses,
        ]);
    }

    /**
     * Displays a single Order model.
     * @param int $order_id Order ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($order_id)
    {
        $orderDetails = OrderDetail::find()
            ->where(['order_id' => $order_id])
            ->all();

        $orderDetailsWithProduct = [];

        foreach ($orderDetails as &$detail){
            $product = Product::findOne($detail->product_id);
            if ($product){
                $detailData = $detail->attributes;
                $detailData['product_name'] = $product->product_name;
                $detailData['product_image'] = $product->product_image;
                $orderDetailsWithProduct[] = $detailData;
            }
        }

        return $this->render('view', [
            'model' => $this->findModel($order_id),
            'orderDetails' => $orderDetailsWithProduct,
        ]);
    }

    /**
     * Creates a new Order model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Order();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'order_id' => $model->order_id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Order model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $order_id Order ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($order_id)
    {
        $model = $this->findModel($order_id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'order_id' => $model->order_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Order model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $order_id Order ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($order_id)
    {
        $order = $this->findModel($order_id);

        $order->status = 7;
        $order->save();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Order model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $order_id Order ID
     * @return Order the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($order_id)
    {
        if (($model = Order::findOne(['order_id' => $order_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function actionChart()
    {
        $totalBooks = Product::find()
            ->asArray()
            ->where(['status'=>'1'])
            ->count();

        $totalUsers = User::find()
            ->asArray()
            ->where(['status'=>'10'])
            ->count();

        $totalOrders = Order::find()
            ->where(['status' => 1])
            ->count();

        $totalOrdersSuccess = Order::find()
            ->where(['status' => 5])
            ->count();

        $data_total = Order::find()
            ->select(['SUM(totalMoney) AS totalIncome'])
            ->where(['status' => 5])
            ->asArray()
            ->one();

        $totalIncome = (float) $data_total['totalIncome'];

        return $this->render('chart', [
            'totalBooks' => $totalBooks,
            'totalUsers' => $totalUsers,
            'totalOrders' => $totalOrders,
            'totalOrdersSuccess' => $totalOrdersSuccess,
            'totalIncome' => $totalIncome,
        ]);
    }
}
