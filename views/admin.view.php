<?php
    require_once('libs/Smarty.class.php');
   
    class AdminView {
        public function showAdmin($students) {
            $smarty = new Smarty();
            $smarty->assign('basehref', BASE_URL);
            $smarty->assign('students', $students);
            $smarty->display('templates\showAdmin.tpl');
        }
        function modifyStudent($studen){
            $smarty = new Smarty();
            $smarty->assign('basehref', BASE_URL);
            $smarty->assign('student',$student);
            $smarty->display('templates\modifyStudent.tpl');
        }
    }