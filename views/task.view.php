<?php
        require_once('libs/Smarty.class.php');
    class TaskView {
        function showHome($students) {
            $smarty = new Smarty();
            // $smarty->assign('titulo', 'Lista de Tareas');
            $smarty->assign('students', $students);
            $smarty->display('templates\showAll.tpl');

        }

        public function showAdmin($students) {
            $smarty = new Smarty();
            $smarty->assign('students', $students);
            $smarty->display('templates\showAdmin.tpl');
       
        }
        function showStudent($student){
            $smarty = new Smarty();
            $smarty->assign('student', $student);
            $smarty->display('templates\showStudent.tpl');
        }
    }