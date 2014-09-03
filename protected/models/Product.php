<?php

/**
 * This is the model class for table "product".
 *
 * The followings are the available columns in table 'product':
 * @property integer $id
 * @property integer $cat_id
 * @property string $name_ru
 * @property string $name_en
 * @property string $name_de
 * @property string $name_it
 * @property string $description_ru
 * @property string $description_en
 * @property string $description_de
 * @property string $description_it
 * @property string $palitra_image
 * @property string $price
 * @property string $keywords_ru
 * @property string $keywords_en
 * @property string $keywords_de
 * @property string $keywords_it
 * @property string $mdescription_ru
 * @property string $mdescription_en
 * @property string $mdescription_de
 * @property string $mdescription_it
 *
 * The followings are the available model relations:
 * @property Imgs[] $imgs
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

    public function getcname() {
        if(Yii::app()->language == "en")
            return $this->name_en;
        elseif(Yii::app()->language == "ru")
            return $this->name_ru;
        elseif(Yii::app()->language == "de")
            return $this->name_de;
        elseif(Yii::app()->language == "it")
            return $this->name_it;
    }

    public function getcdescription() {
        if(Yii::app()->language == "en")
            return $this->description_en;
        elseif(Yii::app()->language == "ru")
            return $this->description_ru;
        elseif(Yii::app()->language == "de")
            return $this->description_de;
        elseif(Yii::app()->language == "it")
            return $this->description_it;
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

    public function getcmetadescription() {
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
            array('cat_id, name_ru', 'required'),
            array('id, cat_id', 'numerical', 'integerOnly'=>true),
            array('name_ru, name_en, name_de, name_it, description_ru, description_en, description_de, description_it, palitra_image, price, keywords_ru, keywords_en, keywords_de, keywords_it, mdescription_ru, mdescription_en, mdescription_de, mdescription_it', 'length', 'max'=>255),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, cat_id, name_ru, name_en, name_de, name_it, description_ru, description_en, description_de, description_it, palitra_image, price, keywords_ru, keywords_en, keywords_de, keywords_it, mdescription_ru, mdescription_en, mdescription_de, mdescription_it', 'safe', 'on'=>'search'),
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
//            'imgs' => array(self::HAS_ONE, 'Imgs', 'product_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'id' => 'ID',
            'cat_id' => 'Cat',
            'name_ru' => 'Name Ru',
            'name_en' => 'Name En',
            'name_de' => 'Name De',
            'name_it' => 'Name It',
            'description_ru' => 'Description Ru',
            'description_en' => 'Description En',
            'description_de' => 'Description De',
            'description_it' => 'Description It',
            'palitra_image' => 'Palitra Image',
            'price' => 'Price',
            'keywords_ru' => 'Keywords Ru',
            'keywords_en' => 'Keywords En',
            'keywords_de' => 'Keywords De',
            'keywords_it' => 'Keywords It',
            'mdescription_ru' => 'Mdescription Ru',
            'mdescription_en' => 'Mdescription En',
            'mdescription_de' => 'Mdescription De',
            'mdescription_it' => 'Mdescription It',
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
        $criteria->compare('cat_id',$this->cat_id);
        $criteria->compare('name_ru',$this->name_ru,true);
        $criteria->compare('name_en',$this->name_en,true);
        $criteria->compare('name_de',$this->name_de,true);
        $criteria->compare('name_it',$this->name_it,true);
        $criteria->compare('description_ru',$this->description_ru,true);
        $criteria->compare('description_en',$this->description_en,true);
        $criteria->compare('description_de',$this->description_de,true);
        $criteria->compare('description_it',$this->description_it,true);
        $criteria->compare('palitra_image',$this->palitra_image,true);
        $criteria->compare('price',$this->price,true);
        $criteria->compare('keywords_ru',$this->keywords_ru,true);
        $criteria->compare('keywords_en',$this->keywords_en,true);
        $criteria->compare('keywords_de',$this->keywords_de,true);
        $criteria->compare('keywords_it',$this->keywords_it,true);
        $criteria->compare('mdescription_ru',$this->mdescription_ru,true);
        $criteria->compare('mdescription_en',$this->mdescription_en,true);
        $criteria->compare('mdescription_de',$this->mdescription_de,true);
        $criteria->compare('mdescription_it',$this->mdescription_it,true);

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