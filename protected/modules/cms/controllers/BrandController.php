<?php

class BrandController extends SecureController
{


	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Brand;

		// Uncomment the following line if AJAX validation is needed
		 $this->performAjaxValidation($model);

		if(isset($_POST['Brand']))
		{
            $image =  $_POST['Brand']['image'];



            if(isset($image) && $image != "") {
                $model->attributes=$_POST['Brand'];

                if($model->save()) {

                    Yii::app()->ih
                        ->load($_SERVER['DOCUMENT_ROOT'] .Yii::app()->baseUrl . '/images/brand/temp/'.$image)
                        ->save($_SERVER['DOCUMENT_ROOT'] .Yii::app()->baseUrl . '/images/brand/' . $model->id . '.png');
                    $model->image = $model->id . '.png';

                    $dir=Yii::app()->basePath.'/../images/brand/temp/';

                    foreach(glob($dir.'*.*') as $files){
                        unlink($files);
                    }

                    if($model->save()) {
                        $this->redirect(array('view','id'=>$model->id));
                    }

                }
            }



			$model->attributes=$_POST['Brand'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		 $this->performAjaxValidation($model);

		if(isset($_POST['Brand']))
		{
			$model->attributes=$_POST['Brand'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Brand');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Brand('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Brand']))
			$model->attributes=$_GET['Brand'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Brand the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Brand::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Brand $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='brand-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}


    /* ajax calls */

    public function actionUpload()
    {
        Yii::import("ext.EAjaxUpload.qqFileUploader");
        $folder= 'images/brand/temp/';// folder for uploaded files
        $allowedExtensions = array("jpg", "jpeg", "png");//array("jpg","jpeg","gif","exe","mov" and etc...
        $sizeLimit = 2 * 1024 * 1024;// maximum file size in bytes
        $uploader = new qqFileUploader($allowedExtensions, $sizeLimit);
        $result = $uploader->handleUpload($folder);
        $return = htmlspecialchars(json_encode($result), ENT_NOQUOTES);

        $fileSize=filesize($folder.$result['filename']);//GETTING FILE SIZE
        $fileName=$result['filename'];//GETTING FILE NAME

        echo $return;// it's array
        Yii::app()->end();
    }


    public function actionCropImg()
    {
        Yii::app()->clientScript->scriptMap=array(
            (YII_DEBUG ?  'jquery.js':'jquery.min.js')=>false,
        );
        $imageUrl = Yii::app()->request->baseUrl . '/images/brand/temp/'. $_GET['fileName'];
        $this->renderPartial('cropImg', array('imageUrl'=>$imageUrl), false, true);
    }

    public function actionAjaxcrop()
    {
        if(Yii::app()->request->isAjaxRequest)
        {
            $url = $_POST['imageUrl'];
            $image = $id = substr( $url, strrpos( $url, '/' )+1 );


            Yii::import('ext.jcrop.EJCropper');
            $jcropper = new EJCropper();
            $jcropper->thumbPath = '/images/brand/items';

            // some settings ...
            $jcropper->jpeg_quality = 100;
            $jcropper->png_compression = 0;

            // get the image cropping coordinates (or implement your own method)
            $coords = $jcropper->getCoordsFromPost('imageId');

            Yii::app()->ih
                ->load($_SERVER['DOCUMENT_ROOT'] .Yii::app()->baseUrl . '/images/brand/temp/'.$image)
                ->crop($coords['w'],$coords['h'],$coords['x'],$coords['y'])
                ->save($_SERVER['DOCUMENT_ROOT'] .Yii::app()->baseUrl . '/images/brand/temp/c_'.$image);

            if(file_exists($_SERVER['DOCUMENT_ROOT'] .Yii::app()->baseUrl . '/images/brand/temp/' . $image))
            {
                unlink($_SERVER['DOCUMENT_ROOT'] .Yii::app()->baseUrl . '/images/brand/temp/' . $image);
            }

            $returnPath = 'c_' . $image;

            echo $returnPath;

            Yii::app()->end();
            // returns the path of the cropped image, source must be an absolute path.
            //$thumbnail = $jcropper->crop('images/up/uploaded.png', $coords);
        }
    }

}
