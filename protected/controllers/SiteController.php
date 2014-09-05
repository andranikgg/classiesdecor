<?php

class SiteController extends Controller
{

    /**
     * This is the default 'index' action that is invoked
     * when an action is not explicitly requested by users.
     */
    public function actionIndex()
    {
//        $products = Product::model()->findAllByAttributes(array('cat_id' => 1));

//        echo "<pre>";
//        print_r($products);
//        exit;
        $this->render('index');
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
//        $brands = Brands::model()->findAll();
//
//        if (empty($brands)) {
//            Yii::app()->user->setFlash('brands', 'There is no available brands');
//        }
//        $this->render('brands', array('brands' => $brands));
        $this->render('brands');
    }

    public function actionProducts()
    {
//        $products = Products::model()->findAll();
//
//        if (empty($products)) {
//            Yii::app()->user->setFlash('products', 'There is no available products');
//        }
//        $this->render('products', array('products' => $products));
        $this->render('products');
    }

    public function actionPartners()
    {
//        $partners = Partners::model()->findAll();
//
//        if (empty($partners)) {
//            Yii::app()->user->setFlash('partners', 'There is no available partners');
//        }
//        $this->render('partners', array('partners' => $partners));
        $this->render('partners');
    }

    public function actionCustomization()
    {
//        $customization = Customization::model()->findAll();
//
//        if (empty($customization)) {
//            Yii::app()->user->setFlash('customization', 'There is no available customization');
//        }
//        $this->render('customization', array('customization' => $customization));
        $this->render('customization');
    }

    public function actionContacts()
    {
//        $customization = Customization::model()->findAll();
//
//        if (empty($customization)) {
//            Yii::app()->user->setFlash('customization', 'There is no available customization');
//        }
//        $this->render('customization', array('customization' => $customization));
        $this->render('contacts');
    }

    public function actionInspiration()
    {
//        $inspiration = Inspiration::model()->findAll();
//
//        if (empty($inspiration)) {
//            Yii::app()->user->setFlash('inspiration', 'There is no available inspiration');
//        }
//        $this->render('inspiration', array('inspiration' => $inspiration));
        $this->renderPartial('inspiration');
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