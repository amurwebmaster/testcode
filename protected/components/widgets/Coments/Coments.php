<?php
    class Coments extends CWidget // ������� ������ ��� �����������.
    {
        public $story; // ID ������;
        public $coment_list;
        public function init() // ������������� ������� (������ BeginWidget �����������)
        {
                        
        }
        
        public function run() // ������ ������� (������ EndWidget �����������)
        {
            $this->coment_list=StoryComent::ShowComent($this->story);
            $this->render('Coments', array('coment_list'=>$this->coment_list)); // �������� ������ ����������� � �������������
        }
    }