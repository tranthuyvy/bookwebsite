<?php

namespace frontend\widgets;

use frontend\models\Product;

use frontend\models\Review;
use yii\base\Widget;
use yii\helpers\Html;

class bestSellerProductWidget extends Widget
{
    public $message;

    public function init()
    {
        parent::init();
    }

    public function run()
    {
        $product = new Product();
        $dataBestSeller = $product->getBestSellerProduct();

        foreach ($dataBestSeller as &$product) {
            $productModel = new Product();
            $productModel->attributes = $product;

            $productReviews = Review::find()
                ->where(['product_id' => $product['product_id']])
                ->all();

            $averageRating = 0;
            if (!empty($productReviews)) {
                $totalRating = 0;
                foreach ($productReviews as $review) {
                    $totalRating += $review->rating;
                }
                $averageRating = $totalRating / count($productReviews);
            }

            $product['average_rating'] = $averageRating;
        }

        return $this->render('bestSellerProductWidget', [
            'dataBestSeller' => $dataBestSeller,
        ]);
    }

    function displayRatingStars($averageRating) {
        $averageRating = min($averageRating, 5);

        $fullStars = floor($averageRating);
        $remainingStars = round($averageRating - $fullStars);

        $starsHtml = '';

        for ($i = 1; $i <= 5; $i++) {
            if ($i <= $fullStars) {
                $starsHtml .= '<i class="fa fa-star mr-1"></i>';
            } elseif ($remainingStars > 0) {
                $starsHtml .= '<i class="fas fa-star-half-alt mr-1"></i>';
                $remainingStars = 0;
            } else {
                $starsHtml .= '<i class="far fa-star mr-1" style="color: black"></i>';
            }
        }

        return $starsHtml;
    }
}
?>