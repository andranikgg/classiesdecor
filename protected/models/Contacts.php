<?php

/**
 * This is the model class for table "contacts".
 *
 * The followings are the available columns in table 'contacts':
 * @property integer $id
 * @property string $address_ru
 * @property string $address_en
 * @property string $address_coord_x
 * @property string $address_coord_y
 * @property string $worktime
 * @property string $phone
 * @property string $contact_email
 * @property string $fb_link
 * @property string $in_link
 * @property string $pin_link
 * @property string $feedback_email
 */
class Contacts extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'contacts';
	}

    public function getcaddress() {
        if(Yii::app()->language == "en")
            return $this->address_en;
        elseif(Yii::app()->language == "ru")
            return $this->address_ru;
    }

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('address_coord_x, address_coord_y, worktime, contact_email, fb_link, in_link, pin_link, feedback_email', 'length', 'max'=>250),
			array('address_ru, address_en, phone', 'safe'),
			array('fb_link, in_link, pin_link', 'url'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, address_ru, address_en, address_coord_x, address_coord_y, worktime, phone, contact_email, fb_link, in_link, pin_link, feedback_email', 'safe', 'on'=>'search'),
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
			'address_ru' => Yii::t("menu", "address_ru"),
			'address_en' => Yii::t("menu", "address_en"),
			'address_coord_x' => Yii::t("menu", "address_cord_x"),
			'address_coord_y' => Yii::t("menu", "address_cord_y"),
			'worktime' => Yii::t("menu", "wt"),
			'phone' => Yii::t("menu", "ph"),
			'contact_email' => Yii::t("menu", "mail"),
			'fb_link' => Yii::t("menu", "fb"),
			'in_link' => Yii::t("menu", "in"),
			'pin_link' => Yii::t("menu", "pin"),
			'feedback_email' => Yii::t("menu", "feed"),
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
		$criteria->compare('address_ru',$this->address_ru,true);
		$criteria->compare('address_en',$this->address_en,true);
		$criteria->compare('address_coord_x',$this->address_coord_x,true);
		$criteria->compare('address_coord_y',$this->address_coord_y,true);
		$criteria->compare('worktime',$this->worktime,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('contact_email',$this->contact_email,true);
		$criteria->compare('fb_link',$this->fb_link,true);
		$criteria->compare('in_link',$this->in_link,true);
		$criteria->compare('pin_link',$this->pin_link,true);
		$criteria->compare('feedback_email',$this->feedback_email,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Contacts the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
