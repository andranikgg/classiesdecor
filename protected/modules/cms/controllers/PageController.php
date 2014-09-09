<?php

class PageController extends SecureController
{

	/**
	 * Lists all models.
	 */
	public function actionIndex($id = 1)
	{

        $model=$this->loadModel($id);

        // Uncomment the following line if AJAX validation is needed
        $this->performAjaxValidation($model);

        if(isset($_POST['Page']))
        {
            $model->attributes=$_POST['Page'];
            if($model->save())
                Yii::app()->user->setFlash('success', "Changes have been saved successfully!");
        }

        $this->render('update',array(
            'model'=>$model, 'id'=>$id
        ));


	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Page('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Page']))
			$model->attributes=$_GET['Page'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Page the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Page::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Page $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='page-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}


    /* Region ajax calls  */

    public function actionUpload()
    {
        try {
            Yii::import("ext.EAjaxUpload.qqFileUploader");
            $folder= 'images/page/temp/';// folder for uploaded files
            $allowedExtensions = array("jpg", "jpeg", "png");//array("jpg","jpeg","gif","exe","mov" and etc...
            $sizeLimit = 2 * 1024 * 1024;// maximum file size in bytes
            $uploader = new qqFileUploader($allowedExtensions, $sizeLimit);
            $result = $uploader->handleUpload($folder);
            $return = htmlspecialchars(json_encode($result), ENT_NOQUOTES);

            $fileSize=filesize($folder.$result['filename']);//GETTING FILE SIZE
            $fileName=$result['filename'];//GETTING FILE NAME
        }
        catch(Exception $ex) {
            echo 'Caught exception: ',  $ex->getMessage(), "\n";
        }

        echo $return;// it's array
        Yii::app()->end();
    }

    public function actionCropImg()
    {
        Yii::app()->clientScript->scriptMap=array(
            (YII_DEBUG ?  'jquery.js':'jquery.min.js')=>false,
        );
        $imageUrl = Yii::app()->request->baseUrl . '/images/page/temp/'. $_GET['fileName'];
        $this->renderPartial('cropImg', array('imageUrl'=>$imageUrl, 'pageid'=>$_GET['pageid']), false, true);
    }

    public function actionAjaxcrop()
    {
        if(Yii::app()->request->isAjaxRequest)
        {
            $url = $_POST['imageUrl'];
            $image = $id = substr( $url, strrpos( $url, '/' )+1 );

            $banner = new BannerImages;

            $banner->page_id = $_POST['pageid'];
            $banner->link = $_POST['link'];

            if($banner->save()) {



                Yii::import('ext.jcrop.EJCropper');
                $jcropper = new EJCropper();
                $jcropper->thumbPath = '/images/items';

                // some settings ...
                $jcropper->jpeg_quality = 100;
                $jcropper->png_compression = 0;

                // get the image cropping coordinates (or implement your own method)
                $coords = $jcropper->getCoordsFromPost('imageId');

                Yii::app()->ih
                    ->load($_SERVER['DOCUMENT_ROOT'] .Yii::app()->baseUrl . '/images/page/temp/'.$image)
                    ->crop($coords['w'],$coords['h'],$coords['x'],$coords['y'])
                    ->save($_SERVER['DOCUMENT_ROOT'] .Yii::app()->baseUrl . '/images/page/' . $banner->id .'.png');

                $banner->image = $banner->id . ".png";
                $banner->save();

                $dir=Yii::app()->basePath.'/../images/page/temp/';

                foreach(glob($dir.'*.*') as $files){
                    unlink($files);
                }

            }
           Yii::app()->end();
        }
    }


    public function actionDeletebanner() {
        if(Yii::app()->request->isAjaxRequest) {

                $model = BannerImages::model()->findByPk($_POST['bannerid']);

                $model->delete();

                echo "deleted";

            Yii::app()->end();
        }
    }

}
