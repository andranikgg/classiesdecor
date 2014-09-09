<?php

/**
 * This is the model class for table "page".
 *
 * The followings are the available columns in table 'page':
 * @property integer $id
 * @property string $title_ru
 * @property string $title_en
 * @property string $desc1_ru
 * @property string $desc2_ru
 * @property string $desc3_ru
 * @property string $desc1_en
 * @property string $desc2_en
 * @property string $desc3_en
 *
 * The followings are the available model relations:
 * @property BannerImages[] $bannerImages
 */
class Page extends CActiveRecord
{
    const MAIN = 1;
    const PARTNER = 3;
    const CUSTOMIZATION = 4;
    const INSPIRATION = 5;
    const PRODUCT = 6;

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'page';
	}

    public function getctitle() {
        if(Yii::app()->language == "en")
            return $this->title_en;
        elseif(Yii::app()->language == "ru")
            return $this->title_ru;
    }

    public function getcdesc1() {
        if(Yii::app()->language == "en")
            return $this->desc1_en;
        elseif(Yii::app()->language == "ru")
            return $this->desc1_ru;

    }

    public function getcdesc2() {
        if(Yii::app()->language == "en")
            return $this->desc2_en;
        elseif(Yii::app()->language == "ru")
            return $this->desc2_ru;

    }

    public function getcdesc3() {
        if(Yii::app()->language == "en")
            return $this->desc3_en;
        elseif(Yii::app()->language == "ru")
            return $this->desc3_ru;

    }

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('title_ru, title_en', 'required'),
			array('title_ru, title_en', 'length', 'max'=>250),
            array('desc1_ru, desc2_ru, desc3_ru, desc1_en, desc2_en, desc3_en', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, title_ru, title_en, desc_ru, desc_en', 'safe', 'on'=>'search'),
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
			'bannerImages' => array(self::HAS_MANY, 'BannerImages', 'page_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
            'title_ru' => 'Title Ru',
			'desc1_ru' => 'Desc1 Ru',
			'title_3_ru' => 'Desc2 3 Ru',
            'desc1_en' => 'Desc1 En',
            'desc2_en' => 'Desc2 En',
            'desc3_en' => 'Desc3 En',
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

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Page the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
