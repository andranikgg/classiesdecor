<?php

class SiteController extends Controller
{
    /**
     * This is the default 'index' action that is invoked
     * when an action is not explicitly requested by users.
     */
    public function actionIndex()
    {
        $critjob = new CDbCriteria();
        $critjob->limit = 3;
        $critjob->order = 'posted desc';
        $jobs = Jobs::model()->findAll($critjob);

        $critnews = new CDbCriteria();
        $critnews->limit = 3;
        $critnews->order = 'startdate desc';
        $news = News::model()->findAll($critnews);

        $critframeworks = new CDbCriteria();
        $critframeworks->limit = 3;
        $critframeworks->order = 'id desc';
        $frameworks = Frameworks::model()->findAll($critframeworks);

        $this->render('index', array('jobs' => $jobs, 'news' => $news, 'frameworks' => $frameworks));
    }

    public function actionAboutus()
    {
        $aboutus = About::model()->findByPk(1);
        /*echo "<pre>";
        print_r($aboutus);
        exit;*/
        $this->render('aboutus', array('aboutus' => $aboutus));
    }

    public function actionExpertise()
    {
        $services = Services::model()->findAll();
        $sectors = Sectors::model()->findAll();
        $frameworks = Frameworks::model()->findAll();


        $criteria = new CDbCriteria();
        $count = Projects::model()->count($criteria);
        $pages = new CPagination($count);

        $pages->pageSize = 5;
        $pages->applyLimit($criteria);

        $projects = Projects::model()->findAll();
        /* echo "<pre>";
         print_r($services);
         exit;*/

        $this->render('expertise', array('services' => $services, 'sectors' => $sectors, 'projects' => $projects, 'frameworks' => $frameworks));
    }

    public function actionJobs()
    {
        $jobs = Jobs::model()->findAll();
        $this->render('jobs', array('jobs' => $jobs));
    }

    public function actionAddjob()
    {

        $jobs = new Jobs;
        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST) && !empty($_POST)) {
            $jobs->createdate = new CDbExpression('NOW()');
            $jobs->status = 1;
            $jobs->attributes = $_POST;

//            echo "<pre>";
//            print_r($jobs);
//            exit;
            if ($jobs->save())
                $this->redirect(array('jobs', 'block' => 'jobsboard'));
        }

        $this->redirect(array('jobs', 'block' => 'jobsboard'));
    }

    public function actionSubscribe()
    {
        $subscriber = new Subscribers;
        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST) && !empty($_POST)) {
            $subscriber->attributes = $_POST;
            $subscriber->createdate = new CDbExpression('NOW()');
            $subscriber->status = 1;

            /*echo "<pre>";
            print_r($subscriber->attributes);
            exit;*/

            if ($subscriber->save())
                $this->redirect(array('jobs', 'block' => 'jobsboard'));
        }


        $this->redirect(array('jobs', 'block' => 'jobsboard'));

//
//        $jobs = Jobs::model()->findAll();
//        $this->render('jobs', array( 'jobs'=>$jobs ));
    }

    public function actionExperts()
    {
        $experts = Experts::model()->findAll();
        /*echo "<pre>";
        print_r($experts);
        exit;*/
        $this->render('experts', array('experts' => $experts));
    }

    public function actionRegisterexpert()
    {
        $expert = new Experts;
        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST) && !empty($_POST)) {
            $expert->createdate = new CDbExpression('NOW()');
            $expert->attributes = $_POST;

//            echo "<pre>";
//            print_r($expert);
//            exit;
            if ($expert->save())
                $this->redirect(array('experts'));
        }

        $this->redirect(array('experts'));
    }

    public function actionNews()
    {

        $criteria = new CDbCriteria();
        $count = News::model()->count($criteria);
        $pages = new CPagination($count);

        $pages->pageSize = 5;
        $pages->applyLimit($criteria);

        $news = News::model()->findAll($criteria);
        $this->render('news', array('news' => $news, 'pages' => $pages));
    }

    public function actionContactus()
    {
        $contacts = Contacts::model()->findAll();

        $this->render('contactus', array('contacts' => $contacts));
    }

    public function actionTermsofuse()
    {
        $terms = Terms::model()->findByPk(1);
        $this->render('termsofuse', array('terms' => $terms));
    }

    public function actionContact()
    {
        if (Yii::app()->request->isAjaxRequest) {
            $contact = Contacts::model()->findByPk(1);

            $headers = "From: Site VGM Partners <{$_POST['email']}>\r\n" .
                "Reply-To: {$_POST['email']}\r\n" .
                "MIME-Version: 1.0\r\n" .
                "Content-Type: text/plain; charset=UTF-8";


            mail($contact->feedback_email, 'Mail From VGM Partners', "Phone -" . $_POST['phone'] . "content" . $_POST['message'], $headers);

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

    public function actionSearchjob()
    {
        $model = new Jobs('search');
        $model->unsetAttributes(); // clear any default values
        if (isset($_GET['Jobs']))
            $model->attributes = $_GET['Jobs'];

        //send model object for search
        $this->render('jobs', array(
                'dataProvider' => $model->search(),
                'jobs' => $model)
        );

//        $criteria = new CDbCriteria();
//        if( strlen( $string ) > 0 )
//            $criteria->addSearchCondition( 'title', $string, true, 'OR' );
//        $jobs = Jobs::model()->findAll($criteria);
////        $jobs = new CActiveDataProvider( 'Jobs', array( 'criteria' => $criteria, ) );
//        $this->render( 'jobs', array( 'jobs' => $jobs ) );
    }

    public function actionLogin()
    {
        $model=new LoginForm;

        // if it is ajax validation request
        if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
        {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }

        // collect user input data
        if(isset($_POST['LoginForm']))
        {
            $model->attributes=$_POST['LoginForm'];
            // validate user input and redirect to the previous page if valid
            if($model->validate() && $model->login())
                $this->redirect(Yii::app()->user->returnUrl);
        }
        // display the login form
        $this->render('login',array('model'=>$model));
    }

    public function actionLogout()
    {
        Yii::app()->user->logout();
        $this->redirect(Yii::app()->homeUrl);
    }



}