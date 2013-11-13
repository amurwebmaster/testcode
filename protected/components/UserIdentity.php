<?php

// Класс авторизации пользователя
class UserIdentity extends CUserIdentity
{
    private $_id; //Ключ пользователя

    public function authenticate()
    {
        $username = strtolower($this->username);//Получаем логин пользователя из модели LoginForm
        $user = Users::model()->find('login=:login', array(':login' => $username)); //Поиск пользователя в модели
        if ($user === null) { // Если переменная пуста
            $this->errorCode = self::ERROR_USERNAME_INVALID; // Возвращаем ошибку
        } else
            if (!$user->validatePassword($this->password)) {
                $this->errorCode = self::ERROR_PASSWORD_INVALID; // Если Пароли не совпадают возвращаем ошибку
            } else {
                    $this->_id = $user->id; // Запоминаем ключ пользователя
                    $this->username = $user->login; // Запоминаем логин пользователя
                    $this->errorCode = self::ERROR_NONE; // Без ошибок
                }
                return $this->errorCode == self::ERROR_NONE;
    }

    public function getId()
    {
        return $this->_id;
    }
}
