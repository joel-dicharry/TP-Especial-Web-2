<?php
    require_once('libs/Smarty.class.php');
   
    class TaskView {
        public function showAdmin($students) {
            $smarty = new Smarty();
            $smarty->assign('students', $students);
            $smarty->display('templates\showAdmin.tpl');
        }
    }