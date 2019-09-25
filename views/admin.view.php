<?php
    require_once('libs/Smarty.class.php');
   
    class AdminView {
        public function showAdmin($students) {
            $smarty = new Smarty();
            $smarty->assign('students', $students);
            $smarty->display('templates\showAdmin.tpl');
        }
        function modifyStudent($student){
            $smarty = new Smarty();
            $smarty->assign('student',$student);
            $smarty->display('templates\modifyStudent.tpl');
        }
    }