<?php

class SiteController extends Controller
{
    /**
     * This is the default 'index' action that is invoked
     * when an action is not explicitly requested by users.
     */
    public function actionIndex()
    {
        $page  = Page::model()->findByPk(8);
        /*echo "<pre>";
        print_r($page);
        exit;*/
        $this->render('index', array( 'page'=>$page ));
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
        $inspiration = Inspiration::model()->findAll();
        $page  = Page::model()->findByPk(7);
//
//        if (empty($customization)) {
//            Yii::app()->user->setFlash('customization', 'There is no available customization');
//        }
        $this->render('inspiration', array( 'inspirations' => $inspiration, 'page'=>$page ));

    }

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