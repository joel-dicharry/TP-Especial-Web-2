<?php

    require_once('libs/Smarty.class.php');

    class AlumnosView {
        function showStudents($students){
            $smarty = new Smarty();
            $smarty->assign('basehref', BASE_URL);
            $smarty->assign('students', $students);
            $smarty->display('templates\showStudents.tpl');
        }
        function showStudent($student){
            $smarty = new Smarty ();
            $smarty -> assign('student',$student);
            $smarty->display('templates\showStudent.tpl');
        }
        function showHome($students) {
            $smarty = new Smarty();
            $smarty->assign('basehref', BASE_URL);
            $smarty->assign('students', $students);
            $smarty->display('templates\showAll.tpl');
        }
        public function showError($error){
            $smarty = new Smarty ();
            $smarty->assign('basehref', BASE_URL);
            $smarty->assign('error',$error);
            $smarty->display('templates\showError.tpl');
        }
    }