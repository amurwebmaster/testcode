<?php

/**
 *  Модель Пользователи.
 *
 * Ниже перечислены доступные столбцы в таблице 'users':
 * @property integer $id Ключ
 * @property string $login Логин
 * @property string $password Хеш пароля
 * @property string $reg_date Дата регистрации
 * @property string $last_visit Дата последнего визита
 */
class Users extends CActiveRecord
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
		return 'users';
	}

	/**
	 * @return массив валидаторов для аттрибутов модели.
	 */
	public function rules()
	{
	
		return array(
			array('login, password', 'required'), // Обязательные параметры
			array('login', 'length', 'max'=>20), // Длина логина (не обязательно если не использовать регистрацию, так как при вводе проверяется через модель LoginForm)
			array('password', 'length', 'max'=>100), // Длина пароля 
			array('id, login, password, reg_date, last_visit', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return Связи.
	 */
	public function relations()
	{
		return array(
			'storys' => array(self::HAS_MANY, 'Story', 'user'),
		);
	}
    
    /**
     * Примитивная функция преоброзования пароля в хеш
	 * @return Хеш пароля.
	 */
     
     public function hashPassword($password)
     {
        return md5($password); // Хешируем пароль MD5 алгоритмом
     }
    
    public function beforeSave() // Перед сохранением..
    {
        if ($this->isNewRecord)
        {
            $this->password=$this->hashpassword($this->password); // .меняем пароль на Хеш пароля
        }
        return parent::beforeSave();
    }
    
    
    /**
     * Функция проверки совпадений хеша паролей
	 * @return Хеш пароля.
	 */
    
    public function validatePassword($password) // Проверка совпадения хешей паролей
    {
        if ($this->password === $this->hashPassword($password)) // Если совпадают то истина инача ложь
            return true;
        return false;
    }
    
    public function allUsers()
    {
        return Users::model()->findAll();
    }

	/**
	 * @return Массив произвольных лейблов для аттрибутов модели.
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'login' => 'Логин',
			'password' => 'Пароль',
			'reg_date' => 'Дата регистрации',
			'last_visit' => 'Последний визит',
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
		$criteria->compare('login',$this->login,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('reg_date',$this->reg_date,true);
		$criteria->compare('last_visit',$this->last_visit,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}