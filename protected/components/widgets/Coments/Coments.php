<?php
    class Coments extends CWidget // Создаем виджет для коментариев.
    {
        public $story; // ID задачи;
        public $coment_list;
        public function init() // Инициализация виджета (Секция BeginWidget контроллера)
        {
                        
        }
        
        public function run() // Запуск виджета (Секция EndWidget контроллера)
        {
            $this->coment_list=StoryComent::ShowComent($this->story);
            $this->render('Coments', array('coment_list'=>$this->coment_list)); // Передаем список коментариев в представление
        }
    }