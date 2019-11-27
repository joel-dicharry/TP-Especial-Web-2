<?php

    require_once('libs/Smarty.class.php');

    class AlumnosView {

        private $smarty;
        protected $base;

        function __construct() {
            $this->smarty = new Smarty();
            $this->base = 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/';
        }

        function showStudents($students,$especialidades,$session=null,$user=null){
            $this->smarty->assign('basehref',  $this->base);
            $this->smarty->assign('session',  $session);
            $this->smarty->assign('user',  $user);
            $this->smarty->assign('students', $students);
            $this->smarty->assign('especialidades', $especialidades);
            $this->smarty->display('templates\showStudents.tpl');
        }
        
        function showFiltro($students, $especialidades){
            $this->smarty->assign('basehref',  $this->base);
            $this->smarty->assign('students', $students);
            $this->smarty->assign('especialidades', $especialidades);
            $this->smarty->display('templates\showFiltro.tpl');
        }
        
        function showStudent($student){
            $this->smarty->assign('basehref',  $this->base);
            $this->smarty->assign('student',$student);
            $this->smarty->display('templates\showStudent.tpl');
        }
        
        function showHome($students) {
            $this->smarty->assign('basehref',  $this->base);
            $this->smarty->assign('students', $students);
            $this->smarty->display('templates\showAll.tpl');
        }
        
        public function showError($error){
            $this->smarty->assign('basehref',  $this->base);
            $this->smarty->assign('error',$error);
            $this->smarty->display('templates\showError.tpl');
        }
        public function showSingIn(){
            $this->smarty->display('templates\registrarse.tpl');

        }
    }