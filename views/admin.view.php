<?php
    require_once('libs/Smarty.class.php');
   
    class AdminView {
        public function showAdmin($students, $especialidades) {
            $smarty = new Smarty();
            $smarty->assign('basehref', BASE_URL);
            $smarty->assign('students', $students);
            $smarty->assign('especialidades', $especialidades);
            $smarty->display('templates\showAdmin.tpl');
        }
        function modifyStudent($student){
            $smarty = new Smarty();
            $smarty->assign('basehref', BASE_URL);
            $smarty->assign('student',$student);
            $smarty->display('templates\modifyStudent.tpl');
        }
    }