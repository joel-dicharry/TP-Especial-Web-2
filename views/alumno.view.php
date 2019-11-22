<?php

    require_once('libs/Smarty.class.php');

    class AlumnosView {

        protected $base;

        function __construct() {
            $this->base = 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/';
        }

        function showStudents($students,$especialidades,$session=null,$user=null){
            $smarty = new Smarty();
            $smarty->assign('basehref',  $this->base);
            $smarty->assign('session',  $session);
            $smarty->assign('user',  $user);
            $smarty->assign('students', $students);
            $smarty->assign('especialidades', $especialidades);
            $smarty->display('templates\showStudents.tpl');
        }
        
        function showFiltro($students, $especialidades){
            $smarty = new Smarty();
            $smarty->assign('basehref',  $this->base);
            $smarty->assign('students', $students);
            $smarty->assign('especialidades', $especialidades);
            $smarty->display('templates\showFiltro.tpl');
        }
        
        function showStudent($student){
            $smarty = new Smarty ();
            $smarty->assign('basehref',  $this->base);
            $smarty->assign('student',$student);
            $smarty->display('templates\showStudent.tpl');
        }
        
        function showHome($students) {
            $smarty = new Smarty();
            $smarty->assign('basehref',  $this->base);
            $smarty->assign('students', $students);
            $smarty->display('templates\showAll.tpl');
        }
        
        public function showError($error){
            $smarty = new Smarty ();
            $smarty->assign('basehref',  $this->base);
            $smarty->assign('error',$error);
            $smarty->display('templates\showError.tpl');
        }
        public function showSingIn(){
            $smarty = new Smarty ();
            $smarty->display('templates\registrarse.tpl');

        }
    }