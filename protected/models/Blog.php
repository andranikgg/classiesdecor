<?php

/**
 * This is the model class for table "blog".
 *
 * The followings are the available columns in table 'blog':
 * @property integer $id
 * @property string $title
 * @property string $title_ru
 * @property string $title_en
 * @property string $alias
 * @property string $description
 * @property string $description_ru
 * @property string $description_en
 * @property string $content
 * @property string $content_ru
 * @property string $content_en
 * @property string $date
 * @property string $img
 * @property string $keywords
 * @property string $language
 */
class Blog extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'blog';
	}

    public function init()
    {
        $this->language = Yii::app()->language;
        $this->date = date("Y-m-d");
        $this->img=0;
    }

    public function getcdescription() {
        if(Yii::app()->language == "ru") {
            return $this->description_ru;
        }
        else if(Yii::app()->language == "en") {
            return $this->description_en;
        }
        else {
            return $this->description;
        }
    }

    public function getccontent() {
        if(Yii::app()->language == "ru") {
            return $this->content_ru;
        }
        else if(Yii::app()->language == "en") {
            return $this->content_en;
        }
        else {
            return $this->content;
        }
    }

    public function getctitle() {
        if(Yii::app()->language == "ru") {
            return $this->title_ru;
        }
        else if(Yii::app()->language == "en") {
            return $this->title_en;
        }
        else {
            return $this->title;
        }
    }

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('title, title_ru, title_en, alias', 'required'),
            array('title, title_ru, title_en', 'length', 'max'=>250),
			array('alias', 'length', 'max'=>150),
			array('alias', 'unique'),
			array('img', 'length', 'max'=>100),
			array('language', 'length', 'max'=>15),
            array('description, description_ru, description_en, content, content_ru, content_en, date, keywords', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
            array('id, title, title_ru, title_en, alias, description, description_ru, description_en, content, content_ru, content_en, date, img, keywords, language', 'safe', 'on'=>'search'),

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
			'title' => 'Title',
            'title_ru' => 'Title Ru',
            'title_en' => 'Title En',
			'alias' => 'Alias',
			'description' => 'Description',
            'description_ru' => 'Description Ru',
            'description_en' => 'Description En',
			'content' => 'Content',
            'content_ru' => 'Content Ru',
            'content_en' => 'Content En',
            'date' => 'Date',
			'img' => 'Img',
			'keywords' => 'Keywords',
			'language' => 'Language',
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
        $criteria=new CDbCriteria;

        $criteria->compare('id',$this->id);
        $criteria->compare('title',$this->title,true);
        $criteria->compare('title_ru',$this->title_ru,true);
        $criteria->compare('title_en',$this->title_en,true);
        $criteria->compare('alias',$this->alias,true);
        $criteria->compare('description',$this->description,true);
        $criteria->compare('description_ru',$this->description_ru,true);
        $criteria->compare('description_en',$this->description_en,true);
        $criteria->compare('content',$this->content,true);
        $criteria->compare('content_ru',$this->content_ru,true);
        $criteria->compare('content_en',$this->content_en,true);
        $criteria->compare('date',$this->date,true);
        $criteria->compare('img',$this->img,true);
        $criteria->compare('keywords',$this->keywords,true);
        $criteria->compare('language',$this->language,true);

        return new CActiveDataProvider($this, array(
            'criteria'=>$criteria,
        ));
    }

    protected function afterFind ()
    {

        if($this->date <> '')
        {
            // mise en forme de class_date
            list($y, $m, $d) = explode('-', $this->date);
            $mk=mktime(0, 0, 0, $m, $d, $y);
            $this->date = date ('d-m-Y', $mk);
        }

        return parent::afterFind ();
    }

    protected function beforeSave ()
    {
        if($this->date <> '')
        {
            // mise en forme de class_date
            list($d, $m, $y) = explode('-', $this->date);
            $mk=mktime(0, 0, 0, $m, $d, $y);
            $this->date = date ('Y-m-d', $mk);
        }

        return parent::beforeSave ();
    }

    /**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Blog the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
