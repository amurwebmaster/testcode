<?php

/**
 *  Модель Коментарии к задачам.
 *
 * Ниже перечислены доступные столбцы в таблице 'story':
 * @property integer $id
 * @property string $text
 * @property string $date
 * @property integer $num_story
 * @property integer $coment_user
 * @property Связанная задача $numStory
 * @property           пользователь $comentUser
 */

class StoryComent extends CActiveRecord
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
		return 'story_coment';
	}

/**
	 * @return массив валидаторов для аттрибутов модели.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('text, num_story, coment_user', 'required'),
			array('num_story, coment_user', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, text, date, num_story, coment_user', 'safe', 'on'=>'search'),
		);
	}

    /**
	 * @return Связи.
	 */
	public function relations()
	{
		return array(
			'numStory' => array(self::BELONGS_TO, 'Story', 'num_story'),
			'comentUser' => array(self::BELONGS_TO, 'Users', 'coment_user'),
		);
	}
    
    public static function ShowComent($story)
    {
        $coment_list=StoryComent::model()->findAll('num_story=:story', array(':story'=>$story));
        foreach ($coment_list as $one_comment)
        {
            echo('<li>'.$one_comment->text.' | '.$one_comment->comentUser->login.'</li>');
        }
    }

	/**
	 * @return Массив произвольных лейблов для аттрибутов модели.
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'text' => 'Коментарий',
			'date' => 'Дата',
			'num_story' => 'Задача',
			'coment_user' => 'Пользователь',
		);
	}
    
    public function beforeSave()
    {
        if ($this->isNewRecord) // Если новая запись
        {
            $this->date=date('Y-m-d'); // Заполняем дату
        }
        
        return parent::beforeSave();
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
		$criteria->compare('text',$this->text,true);
		$criteria->compare('date',$this->date,true);
		$criteria->compare('num_story',$this->num_story);
		$criteria->compare('coment_user',$this->coment_user);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}