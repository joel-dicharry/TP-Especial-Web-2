<?php

    require_once('libs/Smarty.class.php');

    class AlumnosView {
        function showHome($students) {
            $smarty = new Smarty();
            // $smarty->assign('titulo', 'Lista de Tareas');
            $smarty->assign('basehref', BASE_URL);
            $smarty->assign('students', $students);
            $smarty->display('templates\showAll.tpl');
        }
        function showStudents($students){
            $smarty = new Smarty();
            $smarty->assign('basehref', BASE_URL);
            $smarty->assign('students', $students);
            $smarty->display('templates\showStudents.tpl');
        }
        public function showError($error){
            $smarty = new Smarty ();
            $smarty->assign('basehref', BASE_URL);
            $smarty->assign('error',$error);
            $smarty->display('templates\showError.tpl');
        }
    }