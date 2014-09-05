<?php

class BannerImagesController extends SecureController
{

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
		$model=new BannerImages;

		// Uncomment the following line if AJAX validation is needed
		$this->performAjaxValidation($model);

		if(isset($_POST['BannerImages']))
		{

            $image =  $_POST['BannerImages']['image'];

            if(isset($image) && $image != "") {
                $model->attributes=$_POST['BannerImages'];
                if($model->save()) {

                    Yii::app()->ih
                        ->load($_SERVER['DOCUMENT_ROOT'] .Yii::app()->baseUrl . '/images/bannerimages/temp/'.$image)
                        ->save($_SERVER['DOCUMENT_ROOT'] .Yii::app()->baseUrl . '/images/bannerimages/' . $model->id . '.png');
                    $model->image = $model->id . '.png';

                    $dir=Yii::app()->basePath.'/../images/bannerimages/temp/';

                    foreach(glob($dir.'*.*') as $files){
                        unlink($files);
                    }

                    if($model->save()) {
                        $this->redirect(array('view','id'=>$model->id));
                    }

                }
            }
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

		if(isset($_POST['BannerImages']))
		{

            $image =  $_POST['BannerImages']['image'];

            if($model->image != $image) {

                $model->attributes=$_POST['BannerImages'];

                Yii::app()->ih
                    ->load($_SERVER['DOCUMENT_ROOT'] .Yii::app()->baseUrl . '/images/bannerimages/temp/'.$image)
                    ->save($_SERVER['DOCUMENT_ROOT'] .Yii::app()->baseUrl . '/images/bannerimages/' . $model->id . '.png');
                $model->image = $model->id . '.png';

                $dir=Yii::app()->basePath.'/../images/bannerimages/temp/';

                foreach(glob($dir.'*.*') as $files){
                    unlink($files);
                }

            }

            if($model->save()) {
                $this->redirect(array('view','id'=>$model->id));
            }

			$model->attributes=$_POST['BannerImages'];
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
		$dataProvider=new CActiveDataProvider('BannerImages');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new BannerImages('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['BannerImages']))
			$model->attributes=$_GET['BannerImages'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return BannerImages the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=BannerImages::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param BannerImages $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='banner-images-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
