<?php

class SiteController extends Controller
{

    /**
     * Declares class-based actions.
     */
//    public function actions()
//    {
//        return array(
//            // captcha action renders the CAPTCHA image displayed on the contact page
//            'captcha' => array(
//                'class' => 'CCaptchaAction',
//                'backColor' => 0xFFFFFF,
//                'foreColor'=> 0x000000,
//
//            ),
//            // page action renders "static" pages stored under 'protected/views/site/pages'
//            // They can be accessed via: index.php?r=site/page&view=FileName
//            			'page'=>array(
//				        'class'=>'CViewAction',
//			),
//        );
//    }

//    public function actions(){
//        return array(
//            'captcha'=>array(
//                'class'=>'CaptchaExtendedAction',
//                // if needed, modify settings
//                'mode'=>CaptchaExtendedAction::MODE_MATH,
//            ),
//        );
//    }


    /*   public function accessRules()
       {
           return array(
               array('allow',  //действия которые запрещены
                   'users'=>array('*'),//все остальные действия
               ),
           );
       }*/

    /**
     * This is the default 'index' action that is invoked
     * when an action is not explicitly requested by users.
     */
    public function actionIndex()
    {
//        $products = Yii::app()->db->createCommand()
//            ->select('*')
//            ->from('product p')
//            ->leftJoin('imgs i', 'p.id=i.product_id')
//            ->limit(12)
//            ->order(array('RAND()'))
//            ->queryAll();
        $page  = Page::model()->findByPk(8);

        $criteria = new CDbCriteria();
        $criteria->limit = 12;
        $criteria->order = 'RAND()';
        $products = Product::model()->findAll($criteria);

//        echo "<pre>";
//        print_r($products);
//        exit;
        $this->render('index', array('products' => $products, 'page'=>$page ));
    }

    public function actionAboutus()
    {
//        $vacancies = Vacancies::model()->findAll();
//
//        if (empty($vacancies)) {
//            Yii::app()->user->setFlash('vacancies', 'There is no available positions');
//        }
//        $this->render('vacancies', array('vacancies' => $vacancies));
        $this->render('aboutus');
    }

    public function actionHowtobuy()
    {
//        $vacancies = Vacancies::model()->findAll();
//
//        if (empty($vacancies)) {
//            Yii::app()->user->setFlash('vacancies', 'There is no available positions');
//        }
//        $this->render('vacancies', array('vacancies' => $vacancies));
        $this->render('howtobuy');
    }

    public function actionDealer()
    {
//        $vacancies = Vacancies::model()->findAll();
//
//        if (empty($vacancies)) {
//            Yii::app()->user->setFlash('vacancies', 'There is no available positions');
//        }
//        $this->render('vacancies', array('vacancies' => $vacancies));
        $this->render('dealer');
    }

    public function actionVacancies()
    {
        $vacancies = Vacancies::model()->findAll();

        if (empty($vacancies)) {
            Yii::app()->user->setFlash('vacancies', 'There is no available positions');
        }
        $this->render('vacancies', array('vacancies' => $vacancies));
//        echo "<pre>";
//        print_r($vacancies);
//        exit;
    }

    public function actionHistory()
    {
//        $history = History::model()->findAll();
//
//        if (empty($history)) {
//            Yii::app()->user->setFlash('history', 'There is no history text');
//        }
//        $this->render('history', array('vacancies' => $history));
        $this->render('history');
    }

    public function actionDiplomas()
    {
//        $diplomas = Diplomas::model()->findAll();
//
//        if (empty($diplomas)) {
//            Yii::app()->user->setFlash('diplomas', 'There is no diplomas');
//        }
//        $this->render('diplomas', array('diplomas' => $diplomas));
        $this->render('diplomas');
    }

    public function actionPress()
    {
//        $press = Press::model()->findAll();
//
//        if (empty($press)) {
//            Yii::app()->user->setFlash('press', 'There is no press information');
//        }
//        $this->render('press', array('press' => $press));
        $this->render('press');
    }

    public function actionGallery()
    {
//        $gallery = Gallery::model()->findAll();
//
//        if (empty($gallery)) {
//            Yii::app()->user->setFlash('gallery', 'There is no photos');
//        }
//        $this->render('gallery', array('gallery' => $gallery));
        $this->render('gallery');
    }

    public function actionBlog()
    {
        $criteria = new CDbCriteria();

        $criteria->order = 'id desc';

        $news = News::model()->findAll($criteria);

        if (empty($news)) {
            Yii::app()->user->setFlash('news', 'There is no available news');
        }
        $this->render('blog', array('news' => $news));
    }

    public function actionNewspage($id)
    {
        $news = News::model()->findByPk($id);

        if (empty($news)) {
            Yii::app()->user->setFlash('news', 'There is no available news');
        }
        $this->render('newspage', array('news' => $news));
    }

    public function actionCatalog($id = 0)
    {
        if ($id == 0) {
            $criteria = new CDbCriteria();
            $criteria->limit = 20;
            $criteria->order = 'RAND()';
            $products = Product::model()->findAll($criteria);
        } else {
            $products = Product::model()->findAllByAttributes(array('cat_id' => $id));
        }

        if (empty($products)) {
            Yii::app()->user->setFlash('products', 'There is no available items');
        }

        $this->render('catalog', array('products' => $products));
    }

    public function actionProduct($id = 0, $id2 = 0)
    {
        if ($id == 0) {
        } else {
            $product = Product::model()->findByPk(array('id' => $id2, 'cat_id' => $id)); //findByPk(array($id,$id2));
        }

        if (empty($product)) {
            Yii::app()->user->setFlash('product', 'There is no available product');
        }
        $this->render('product', array('product' => $product));
    }

    public function actionGetBrand()
    {
//        $id = $_POST['id'];
//        $brand = Brand::model()->findAll();
//
//        if (empty($brand)) {
//            Yii::app()->user->setFlash('brand', 'There is no available brand');
//        }
//        $this->render('brand', array('brand' => $brand));

        $this->renderPartial('brand');
    }

    public function actionBrands()
    {
        $brands = Brand::model()->findAll();
        $page  = Page::model()->findByPk(4);


//        if (empty($brands)) {
//            Yii::app()->user->setFlash('brands', 'There is no available brands');
//        }
       $this->render('brands', array('brands' => $brands, 'page'=>$page ));

    }

    public function actionProducts()
    {
        $products = Product::model()->findAll();
        $page  = Page::model()->findByPk(5);
//
//        if (empty($products)) {
//            Yii::app()->user->setFlash('products', 'There is no available products');
//        }
        $this->render('products', array('products' => $products, 'page'=>$page ));

    }

    public function actionPartners()
    {
        $partners = Partner::model()->findAll();

        $page  = Page::model()->findByPk(3);

//        if (empty($partners)) {
//            Yii::app()->user->setFlash('partners', 'There is no available partners');
//        }
        $this->render('partners', array('partners' => $partners, 'page'=>$page));
    }

    public function actionCustomization()
    {
        $customization = Customization::model()->findAll();
        $page  = Page::model()->findByPk(6);
//
//        if (empty($customization)) {
//            Yii::app()->user->setFlash('customization', 'There is no available customization');
//        }
        $this->render('customization', array('customizations' => $customization, 'page'=>$page));

    }

    public function actionContacts()
    {
        $page  = Page::model()->findByPk(9);
//        $customization = Customization::model()->findAll();
//
//        if (empty($customization)) {
//            Yii::app()->user->setFlash('customization', 'There is no available customization');
//        }
//        $this->render('customization', array('customization' => $customization));
        $this->render('contacts', array('page'=>$page));
    }

    public function actionInspiration()
    {
       // $customization = Customization::model()->findAll();
        $page  = Page::model()->findByPk(7);
//
//        if (empty($customization)) {
//            Yii::app()->user->setFlash('customization', 'There is no available customization');
//        }
        $this->render('customization', array('page'=>$page ));

    }

    public function actionInteriorpage($id)
    {
        $interior = Interiers::model()->findByPk($id);

        if (empty($interior)) {
            Yii::app()->user->setFlash('interiorpage', 'There is no available interior');
        }
        $this->render('interiorpage', array('interior' => $interior));
    }

    /**
     * Displays the contact page
     */
    public function actionContact()
    {
        $model = new ContactForm;
        if (isset($_POST['ContactForm'])) {
            $model->attributes = $_POST['ContactForm'];
            if ($model->validate()) {
                $firstname = '=?UTF-8?B?' . base64_encode($model->firstname) . '?=';
                $lastname = '=?UTF-8?B?' . base64_encode($model->lastname) . '?=';
                $middlename = '=?UTF-8?B?' . base64_encode($model->middlename) . '?=';
                $subject = '=?UTF-8?B?' . base64_encode($model->subject) . '?=';
                $headers = "From: $firstname $lastname $middlename <{$model->email}>\r\n" .
                    "Reply-To: {$model->email}\r\n" .
                    "MIME-Version: 1.0\r\n" .
                    "Content-Type: text/plain; charset=UTF-8";

                $model->body = 'phone: '. $model->phone . ' \n ' . $model->body;

                mail(Yii::app()->params['adminEmail'], $subject, $model->body, $headers);
                Yii::app()->user->setFlash('contact', 'Thank you for contacting us. We will respond to you as soon as possible.');
                $this->refresh();
            }
        }
        $this->render('contact', array('model' => $model));
    }

    /**
     * This is the action to handle external exceptions.
     */
    public function actionError()
    {
        if ($error = Yii::app()->errorHandler->error) {
            if (Yii::app()->request->isAjaxRequest)
                echo $error['message'];
            else
                $this->renderPartial('error', $error);
        }
    }


    public function actionFromWhere()
    {
        $objects = MapObjects::model()->findAll();
        $this->render("fromwhere", array("objects" => $objects));
    }

    /*
     *  Single product action
     */
    public function actionSubItem($id)
    {
        $item = Items::model()->findByPk($id);

        $this->pageTitle = Yii::app()->name . '-' . $item->cname;

        $this->render("subItem",
            array("item" => $item));
    }


    public function actionBlogs()
    {

        $criteria = new CDbCriteria();

        $criteria->order = 'date desc';
        // $criteria->params = null;

        $count = Blog::model()->count($criteria);
        $pages = new CPagination($count);

        $pages->pageSize = 5;
        $pages->applyLimit($criteria);

        $blogs = Blog::model()->findAll($criteria);

        // if(empty($blogs))
        //    $this->redirect("index");

        $this->render("blogs", array('blogs' => $blogs, 'pages' => $pages));
    }

//    public function actionBlog($id) {
//
//        $blog = Blog::model()->find("alias=:alias", array(":alias"=>$id));
//
//        if(empty($blog))
//            $this->redirect(array("blogs"));
//
//        //print_r($blog);
//
//        $this->render("blog", array("blog"=>$blog));
//    }

    public function actionAbout()
    {
        $this->render('about');
    }

    public function actionSolutions()
    {
        $solutions = Categories::model()->findAll();

        $items = Yii::app()->db->createCommand()
            ->select('*')
            ->from('item_categries c')
            ->join('items i', 'c.item_id = i.id')
            ->where('cat_id=:id', array(':id' => 1))
            ->having('i.main=1')
            ->queryAll();

        $category = Categories::model()->find();

        $this->render("solution", array('solutions' => $solutions, 'items' => $items, 'category' => $category));
    }

    /*
     *   !!!   Region for ajax calls  !!!
     */

    public function actionGetItems()
    {

        $items = Items::model()->findAll("subproduct_id=:pr_id", array(':pr_id' => $_POST['subid']));
        $this->renderPartial("_products", array('items' => $items), false, true);
    }

    public function actionGetitemssbycat()
    {

        if (Yii::app()->request->isAjaxRequest) {
            $criteria = new CDbCriteria();

            $criteria->condition = 'lang=:lang';
            $criteria->params = array(':lang' => Yii::app()->language);

            if ($_POST['all'] == 0) {
                $items = Yii::app()->db->createCommand()
                    ->select('*')
                    ->from('item_categries c')
                    ->join('items i', 'c.item_id = i.id')
                    ->where('cat_id=:id', array(':id' => $_POST['catid']))
                    ->having('i.main=1')
                    ->queryAll();
            } else {
                $items = Yii::app()->db->createCommand()
                    ->select('*')
                    ->from('item_categries c')
                    ->join('items i', 'c.item_id = i.id')
                    ->where('cat_id=:id', array(':id' => $_POST['catid']))
                    ->queryAll();
            }

            $category = Categories::model()->findByPk($_POST['catid']);

            $this->renderPartial("_solution", array('items' => $items, 'category' => $category), false, true);
        }
    }

    public function actionSendMail()
    {
        $email = $_POST['email'];
        $name = $_POST['name'];
        $message = $_POST['message'];
        $mess = "<br/>Name: " . $_POST['name'] . "<br/>E mail: " . $_POST['email'] . "<br/>Subject: " . $_POST['message'] . "<br/>";
        $to = "hartuk18@gmail.com";
        $headers = "Content-Type: text/html; charset=utf-8\r\n";
        $headers .= "From:" . $email . "\r\n";

        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            mail($to, $name, $mess, $headers);
            echo Yii::t("language", "mail_success");
        } else {
            echo Yii::t("language", "mail_failure");
        }
    }


}