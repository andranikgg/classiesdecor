<?php

class ProductController extends SecureController
{
    /**
     * @return array action filters
     */
    public function filters()
    {
        return array(
            'accessControl', // perform access control for CRUD operations
        );
    }


    public function actionCreate()
    {
        $model=new Product;

        if(isset($_POST['Product']))
        {
          $image =  $_POST['Product']['palitra_image'];

            if(isset($image) && $image != "") {
                $model->attributes=$_POST['Product'];
                if($model->save()) {

                    Yii::app()->ih
                        ->load($_SERVER['DOCUMENT_ROOT'] .Yii::app()->baseUrl . '/images/products/temp/'.$image)
                        ->save($_SERVER['DOCUMENT_ROOT'] .Yii::app()->baseUrl . '/images/products/'. DIRECTORY_SEPARATOR . $model->cat_id . DIRECTORY_SEPARATOR . $model->id.'.png');
                    $model->palitra_image = $model->id . '.png';

                    $dir=Yii::app()->basePath.'/../images/products/temp/';

                    foreach(glob($dir.'*.*') as $files){
                        unlink($files);
                    }

                    if($model->save()) {
                        $this->redirect(array('view','id'=>$model->id, 'cat_id'=>$model->cat_id));
                    }

                }
            }
            /*echo "<pre>";
            print_r($_POST['Product']);
            exit;*/

        }

        $categories = Categories::model()->findAll();
        $list_categories = CHtml::listData($categories,
            'id', 'name_ru');


        $this->render('create',array('model'=>$model, 'categories'=>$list_categories));
    }


    public function actionUpdate($id, $cat_id)
    {
        $model=Product::model()->findByPk(array('id' =>$id , 'cat_id' =>$cat_id ));

        if(isset($_POST['Product']))
        {
            $image =  $_POST['Product']['palitra_image'];

            if($model->palitra_image != $image) {

                $model->attributes=$_POST['Product'];

                Yii::app()->ih
                    ->load($_SERVER['DOCUMENT_ROOT'] .Yii::app()->baseUrl . '/images/products/temp/'.$image)
                    ->save($_SERVER['DOCUMENT_ROOT'] .Yii::app()->baseUrl . '/images/products/'. DIRECTORY_SEPARATOR . $model->cat_id . DIRECTORY_SEPARATOR . $model->id.'.png');
                $model->palitra_image = $model->id . '.png';

                $dir=Yii::app()->basePath.'/../images/products/temp/';

                foreach(glob($dir.'*.*') as $files){
                    unlink($files);
                }

            }

            if($model->save()) {
                $this->redirect(array('view','id'=>$model->id, 'cat_id'=>$model->cat_id));
            }

        }

        $categories = Categories::model()->findAll();
        $list_categories = CHtml::listData($categories,
            'id', 'name_ru');

        $this->render('update',array('model'=>$model, 'categories'=>$list_categories));
    }


	public function actionDelete($id, $cat_id)
	{

        $model = Product::model()->findByPk(array('id' => $id, 'cat_id' =>$cat_id ));

        if($model->delete())
        {
            if(file_exists(Yii::app()->basePath . '/../images/products/' . $cat_id . DIRECTORY_SEPARATOR . $model->palitra_image)) {
                unlink(Yii::app()->basePath . '/../images/products/' . $cat_id . DIRECTORY_SEPARATOR . $model->palitra_image);
            }

            $this->redirect(array('index'));
        }
	}

    /**
     * Lists all models.
     */
    public function actionIndex()
    {
        $dataProvider=new CActiveDataProvider('Product');
        $this->render('index',array(
            'dataProvider'=>$dataProvider,
        ));
    }

    public function actionView($id, $cat_id) {

        $model = Product::model()->findByPk(array('id' => $id, 'cat_id' => $cat_id));



        $this->render('view',array(
            'model'=>$model,
        ));
    }


    public function actionAdmin()
    {
        $model=new Product('search');
        $model->unsetAttributes();  // clear any default values
        if(isset($_GET['Categories']))
            $model->attributes=$_GET['Categories'];

        $this->render('admin',array(
            'model'=>$model,
        ));
    }


    /* ajax calls */

    public function actionUpload()
    {
        Yii::import("ext.EAjaxUpload.qqFileUploader");
        $folder= 'images/products/temp/';// folder for uploaded files
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
        $imageUrl = Yii::app()->request->baseUrl . '/images/products/temp/'. $_GET['fileName'];
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
            $jcropper->thumbPath = '/images/items';

            // some settings ...
            $jcropper->jpeg_quality = 100;
            $jcropper->png_compression = 0;

            // get the image cropping coordinates (or implement your own method)
            $coords = $jcropper->getCoordsFromPost('imageId');

            Yii::app()->ih
                ->load($_SERVER['DOCUMENT_ROOT'] .Yii::app()->baseUrl . '/images/products/temp/'.$image)
                ->crop($coords['w'],$coords['h'],$coords['x'],$coords['y'])
                ->save($_SERVER['DOCUMENT_ROOT'] .Yii::app()->baseUrl . '/images/products/temp/c_'.$image);

            if(file_exists($_SERVER['DOCUMENT_ROOT'] .Yii::app()->baseUrl . '/images/products/temp/' . $image))
            {
                unlink($_SERVER['DOCUMENT_ROOT'] .Yii::app()->baseUrl . '/images/products/temp/' . $image);
            }

            $returnPath = 'c_' . $image;

            echo $returnPath;

            Yii::app()->end();
            // returns the path of the cropped image, source must be an absolute path.
            //$thumbnail = $jcropper->crop('images/up/uploaded.png', $coords);
        }

    }


}