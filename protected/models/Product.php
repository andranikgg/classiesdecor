<?php

/**
 * This is the model class for table "product".
 *
 * The followings are the available columns in table 'product':
 * @property integer $id
 * @property string $title_ru
 * @property string $title_en
 * @property string $desc_ru
 * @property string $desc_en
 * @property integer $brand_id
 * @property integer $category_id
 * @property integer $status
 * @property string $image
 *
 * The followings are the available model relations:
 * @property Category $category
 * @property Brand $brand
 * @property ProductImages[] $productImages
 */
class Product extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'product';
	}

    public function getctitle() {
        if(Yii::app()->language == "en")
            return $this->title_en;
        elseif(Yii::app()->language == "ru")
            return $this->title_ru;
    }

    public function getcdesc() {
        if(Yii::app()->language == "en")
            return $this->desc_en;
        elseif(Yii::app()->language == "ru")
            return $this->desc_ru;
    }


	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('title_ru, title_en, desc_ru, desc_en, brand_id, category_id, status', 'required'),
			array('brand_id, category_id, status', 'numerical', 'integerOnly'=>true),
            array('image, title_ru, title_en', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, title_ru, title_en, desc_ru, desc_en, brand_id, category_id, status', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'category' => array(self::BELONGS_TO, 'Category', 'category_id'),
			'brand' => array(self::BELONGS_TO, 'Brand', 'brand_id'),
			'productImages' => array(self::HAS_MANY, 'ProductImages', 'product_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'title_ru' => Yii::t("menu", "title_ru"),
			'title_en' => Yii::t("menu", "title_en"),
			'desc_ru' => Yii::t("menu", "desc_ru"),
			'desc_en' => Yii::t("menu", "desc_en"),
			'brand_id' => Yii::t("menu", "brands"),
			'category_id' => Yii::t("menu", "category"),
			'status' => Yii::t("menu", "st"),
            'image' => Yii::t("menu", "image"),
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('title_ru',$this->title_ru,true);
		$criteria->compare('title_en',$this->title_en,true);
		$criteria->compare('desc_ru',$this->desc_ru,true);
		$criteria->compare('desc_en',$this->desc_en,true);
		$criteria->compare('brand_id',$this->brand_id);
		$criteria->compare('category_id',$this->category_id);
		$criteria->compare('status',$this->status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Product the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
