<?php
    namespace frontend\widgets;

    use frontend\models\Group;
    use frontend\models\Author;
    use frontend\models\Supplier;

    use yii\base\Widget;
    use yii\helpers\Html;

    class leftMenuWidget extends Widget
    {
        public $message;

        public function init()
        {
            parent::init();
        }

        public function run()
        {
            $group = new Group();
            $dataGroup = $group->getGroupByParent();

            $author = new Author();
            $dataAuthor = $author->getAuthorByParent();

            $supplier = new Supplier();
            $dataSupplier = $supplier->getSupplierByParent();

            return $this->render('leftMenuWidget', [
                'dataGroup'=>$dataGroup,
                'dataAuthor'=>$dataAuthor,
                'dataSupplier'=>$dataSupplier,
            ]);
        }
    }
?>