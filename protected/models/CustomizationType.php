<?php

/**
 * This is the model class for table "customization_type".
 *
 * The followings are the available columns in table 'customization_type':
 * @property integer $id
 * @property integer $customization_id
 * @property string $name_ru
 * @property string $name_en
 * @property string $image
 *
 * The followings are the available model relations:
 * @property Customization $customization
 */
class CustomizationType extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'customization_type';
	}

    public function getcname() {
        if(Yii::app()->language == "en")
            return $this->name_en;
        elseif(Yii::app()->language == "ru")
            return $this->name_ru;
    }



	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{

		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name_ru, name_en', 'required'),
			array('customization_id', 'numerical', 'integerOnly'=>true),
			array('name_ru, name_en, image', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, customization_id, name_ru, name_en, image', 'safe', 'on'=>'search'),
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
			'customization' => array(self::BELONGS_TO, 'Customization', 'customization_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'customization_id' => Yii::t("menu", "customization"),
			'name_ru' => Yii::t("menu", "name_ru"),
			'name_en' => Yii::t("menu", "name_en"),
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
		$criteria->compare('customization_id',$this->customization_id);
		$criteria->compare('name_ru',$this->name_ru,true);
		$criteria->compare('name_en',$this->name_en,true);
		$criteria->compare('image',$this->image,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return CustomizationType the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
