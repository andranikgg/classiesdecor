<?php

class SiteController extends Controller
{
    /**
     * This is the default 'index' action that is invoked
     * when an action is not explicitly requested by users.
     */
    public function actionIndex()
    {
        $page  = Page::model()->findByPk(1);
        /*echo "<pre>";
        print_r($page);
        exit;*/
        $this->render('index', array( 'page'=>$page ));
    }


    public function actionGetproduct()
    {
        try{
            $product = Product::model()->findByPk($_POST['id']);

            $this->renderPartial('_product', array('product'=>$product));
        }
        catch(Exception $ex) {
            echo $ex->getMessage();
        }

        Yii::app()->end();
    }

    public function actionBrands($id = 0)
    {
        $page  = Page::model()->findByPk(4);

       if($id == 0) {
           $brands = Brand::model()->findAll();
           $this->render('brands', array('brands' => $brands, 'page'=>$page ));
       }
       else {
           $brand = Brand::model()->findByPk($id);
           $this->render('products', array('brand' => $brand, 'page'=>$page ));
       }



    }

    public function actionProducts() {
        $products = Product::model()->findAll();
        $page  = Page::model()->findByPk(5);

        $this->render('productsall', array('products' => $products, 'page'=>$page ));
    }

    public function actionCategory($id = 0) {
        if($id != 0) {
            $category = Category::model()->findByPk($id);
            //$products = Product::model()->findAll();
            $page  = Page::model()->findByPk(5);

            $this->render('productsall', array('products' => $category->products, 'page'=>$page ));
        }
        else {
            $this->redirect('index');
        }
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
        /*print_r();
        exit;
        Yii::app()->end();*/
        $page  = Page::model()->findByPk(9);
        $contacts = Contacts::model()->findAll();

        $this->render('contacts', array('page'=>$page, 'contacts'=>$contacts));
    }

    public function actionInspiration()
    {
        $gallery = Gallery::model()->findAllByAttributes(array('status'=>1));

        /*echo "<pre>";
        print_r($gallery);
        exit;*/

        $this->renderPartial('_gallery', array('gallery' => $gallery));

        Yii::app()->end();
    }

    public function actionContact()
    {
        if(Yii::app()->request->isAjaxRequest) {
            $contact = Contacts::model()->findByPk(1);

            $headers = "From: Site ClassiesDecor <{$_POST['email']}>\r\n" .
                "Reply-To: {$_POST['email']}\r\n" .
                "MIME-Version: 1.0\r\n" .
                "Content-Type: text/plain; charset=UTF-8";


            mail($contact->feedback_email, 'Mail From ClassiesDecor',"Phone -". $_POST['phone'] ."content" . $_POST['message'], $headers);

            Yii::app()->end();
        }
        $this->redirect('index');
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