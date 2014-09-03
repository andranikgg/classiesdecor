<?php

/**
 * This is the model class for table "news".
 *
 * The followings are the available columns in table 'news':
 * @property integer $id
 * @property string $title_en
 * @property string $title_ru
 * @property string $title_de
 * @property string $title_it
 * @property string $content_en
 * @property string $content_ru
 * @property string $content_de
 * @property string $content_it
 * @property string $image
 */
class News extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'news';
	}

    public function getctitle() {
        if(Yii::app()->language == "en")
            return $this->title_en;
        elseif(Yii::app()->language == "ru")
            return $this->title_ru;
        elseif(Yii::app()->language == "de")
            return $this->title_de;
        elseif(Yii::app()->language == "it")
            return $this->title_it;
    }

    public function getccontent() {
        if(Yii::app()->language == "en")
            return $this->content_en;
        elseif(Yii::app()->language == "ru")
            return $this->content_ru;
        elseif(Yii::app()->language == "de")
            return $this->content_de;
        elseif(Yii::app()->language == "it")
            return $this->content_it;
    }

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('title_en, title_ru, title_de, title_it, image', 'length', 'max'=>255),
			array('content_en, content_ru, content_de, content_it', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, title_en, title_ru, title_de, title_it, content_en, content_ru, content_de, content_it, image', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'title_en' => 'Title En',
			'title_ru' => 'Title Ru',
			'title_de' => 'Title De',
			'title_it' => 'Title It',
			'content_en' => 'Content En',
			'content_ru' => 'Content Ru',
			'content_de' => 'Content De',
			'content_it' => 'Content It',
			'image' => 'Image',
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
		$criteria->compare('title_en',$this->title_en,true);
		$criteria->compare('title_ru',$this->title_ru,true);
		$criteria->compare('title_de',$this->title_de,true);
		$criteria->compare('title_it',$this->title_it,true);
		$criteria->compare('content_en',$this->content_en,true);
		$criteria->compare('content_ru',$this->content_ru,true);
		$criteria->compare('content_de',$this->content_de,true);
		$criteria->compare('content_it',$this->content_it,true);
		$criteria->compare('image',$this->image,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return News the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
