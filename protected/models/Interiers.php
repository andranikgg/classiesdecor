<?php

/**
 * This is the model class for table "interiers".
 *
 * The followings are the available columns in table 'interiers':
 * @property integer $id
 * @property string $title_ru
 * @property string $title_en
 * @property string $title_de
 * @property string $title_it
 * @property string $text_ru
 * @property string $text_en
 * @property string $text_de
 * @property string $text_it
 * @property string $keywords_ru
 * @property string $keywords_en
 * @property string $keywords_de
 * @property string $keywords_it
 * @property string $mdescription_ru
 * @property string $mdescription_en
 * @property string $mdescription_de
 * @property string $mdescription_it
 * @property string $image
 *
 * The followings are the available model relations:
 * @property InterierImgs $id0
 */
class Interiers extends CActiveRecord
{
    /**
     * @return string the associated database table name
     */
    public function tableName()
    {
        return 'interiers';
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

    public function getctext() {
        if(Yii::app()->language == "en")
            return $this->text_en;
        elseif(Yii::app()->language == "ru")
            return $this->text_ru;
        elseif(Yii::app()->language == "de")
            return $this->text_de;
        elseif(Yii::app()->language == "it")
            return $this->text_it;
    }

    public function getckeywords() {
        if(Yii::app()->language == "en")
            return $this->keywords_en;
        elseif(Yii::app()->language == "ru")
            return $this->keywords_ru;
        elseif(Yii::app()->language == "de")
            return $this->keywords_de;
        elseif(Yii::app()->language == "it")
            return $this->keywords_it;
    }

    public function getcmdescription() {
        if(Yii::app()->language == "en")
            return $this->mdescription_en;
        elseif(Yii::app()->language == "ru")
            return $this->mdescription_ru;
        elseif(Yii::app()->language == "de")
            return $this->mdescription_de;
        elseif(Yii::app()->language == "it")
            return $this->mdescription_it;
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('id, title_ru, text_ru', 'required'),
            array('id', 'numerical', 'integerOnly'=>true),
            array('title_ru, title_en, title_de, title_it, text_ru, text_en, text_de, text_it, keywords_ru, keywords_en, keywords_de, keywords_it, mdescription_ru, mdescription_en, mdescription_de, mdescription_it, image', 'length', 'max'=>255),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, title_ru, title_en, title_de, title_it, text_ru, text_en, text_de, text_it, keywords_ru, keywords_en, keywords_de, keywords_it, mdescription_ru, mdescription_en, mdescription_de, mdescription_it, image', 'safe', 'on'=>'search'),
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
            'id0' => array(self::BELONGS_TO, 'InterierImgs', 'id'),
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
            'title_en' => 'Title En',
            'title_de' => 'Title De',
            'title_it' => 'Title It',
            'text_ru' => 'Text Ru',
            'text_en' => 'Text En',
            'text_de' => 'Text De',
            'text_it' => 'Text It',
            'keywords_ru' => 'Keywords Ru',
            'keywords_en' => 'Keywords En',
            'keywords_de' => 'Keywords De',
            'keywords_it' => 'Keywords It',
            'mdescription_ru' => 'Mdescription Ru',
            'mdescription_en' => 'Mdescription En',
            'mdescription_de' => 'Mdescription De',
            'mdescription_it' => 'Mdescription It',
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
        $criteria->compare('title_ru',$this->title_ru,true);
        $criteria->compare('title_en',$this->title_en,true);
        $criteria->compare('title_de',$this->title_de,true);
        $criteria->compare('title_it',$this->title_it,true);
        $criteria->compare('text_ru',$this->text_ru,true);
        $criteria->compare('text_en',$this->text_en,true);
        $criteria->compare('text_de',$this->text_de,true);
        $criteria->compare('text_it',$this->text_it,true);
        $criteria->compare('keywords_ru',$this->keywords_ru,true);
        $criteria->compare('keywords_en',$this->keywords_en,true);
        $criteria->compare('keywords_de',$this->keywords_de,true);
        $criteria->compare('keywords_it',$this->keywords_it,true);
        $criteria->compare('mdescription_ru',$this->mdescription_ru,true);
        $criteria->compare('mdescription_en',$this->mdescription_en,true);
        $criteria->compare('mdescription_de',$this->mdescription_de,true);
        $criteria->compare('mdescription_it',$this->mdescription_it,true);
        $criteria->compare('image',$this->image,true);

        return new CActiveDataProvider($this, array(
            'criteria'=>$criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Interiers the static model class
     */
    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }
}