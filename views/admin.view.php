<?php

    require_once('libs/Smarty.class.php');

    class AdminView {

        private $smarty;

        private function __construct() {
            $this->smarty = new Smarty();
        }
        public function showAdmin($students, $especialidades,$users) {
            $this->smarty->assign('basehref', BASE_URL);
            $this->smarty->assign('students', $students);
            $this->smarty->assign('usuarios', $users);
            $this->smarty->assign('especialidades', $especialidades);
            $this->smarty->display('templates\showAdmin.tpl');
        }

        public function modifyStudent($student){
            $this->smarty->assign('basehref', BASE_URL);
            $this->smarty->assign('student',$student);
            $this->smarty->display('templates\modifyStudent.tpl');
        }

        public function modifyEsp($especialidad){
            $this->smarty->assign('basehref', BASE_URL);
            $this->smarty->assign('especialidad',$especialidad);
            $this->smarty->display('templates\modifyEsp.tpl');

        }
        public function showPrecept($students){
            $this->smarty->assign('basehref', BASE_URL);
            $this->smarty->assign('students', $students);
            $this->smarty->display('templates\preceptora.tpl');
        }
        public function addActas($student){
            $this->smarty->assign('basehref', BASE_URL);
            $this->smarty->assign('student', $student);
            $this->smarty->display('templates\addActas.tpl');
        }

    }