<?php
/**
 *  Модель Задачи.
 *
 * Ниже перечислены доступные столбцы в таблице 'story':
 * @property integer $id
 * @property string $title
 * @property string $description
 * @property string $date
 * @property integer $status
 * @property integer $user
 * The followings are the available model relations:
 * @property Связанный пользователь $id0
 */
class Story extends CActiveRecord
{
		/**
	 * Возвращение статической модели AR класса.
	 * @param string $className Имя AR класса.
	 * @return Возвращает статический класс Users
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return Имя таблицы БД
	 */
	public function tableName()
	{
		return 'story';
	}

/**
	 * @return массив валидаторов для аттрибутов модели.
	 */
	public function rules()
	{
		return array(
			array('title, description, date, status, user', 'required'),
			array('status, user', 'numerical', 'integerOnly'=>true),
			array('title', 'length', 'max'=>300),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, title, description, date, status, user', 'safe', 'on'=>'search'),
		);
	}

/**
	 * @return Связи.
	 */
	public function relations()
	{
		return array(
			'id0' => array(self::BELONGS_TO, 'Users', 'id'),
		);
	}

	/**
	 * @return Массив произвольных лейблов для аттрибутов модели.
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'title' => 'Название',
			'description' => 'Описание',
			'date' => 'Дата',
			'status' => 'Состояние',
			'user' => 'Пользователь',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('date',$this->date,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('user',$this->user);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}