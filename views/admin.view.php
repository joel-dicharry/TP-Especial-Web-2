<?php

    require_once('libs/Smarty.class.php');

    class AdminView {
        public function showAdmin($students, $especialidades,$users) {
            $smarty = new Smarty();
            $smarty->assign('basehref', BASE_URL);
            $smarty->assign('students', $students);
            $smarty->assign('usuarios', $users);
            $smarty->assign('especialidades', $especialidades);
            $smarty->display('templates\showAdmin.tpl');
        }

        public function modifyStudent($student,$especialidades){
            $smarty = new Smarty();
            $smarty->assign('student', $student);
            $smarty->assign('especialidades', $especialidades);
            $smarty->assign('basehref', BASE_URL);
            $smarty->display('templates\modifyStudent.tpl');
        }

        public function modifyEsp($especialidad){
            $smarty = new Smarty ();
            $smarty->assign('basehref', BASE_URL);
            $smarty->assign('especialidad',$especialidad);
            $smarty->display('templates\modifyEsp.tpl');

        }
        public function showPrecept($students,$session){
            $smarty = new Smarty ();
            $smarty->assign('basehref', BASE_URL);
            $smarty->assign('session', $session);
            $smarty->assign('students', $students);
            $smarty->display('templates\preceptora.tpl');
        }
        public function addActas($student,$session){
            $smarty = new Smarty ();
            $smarty->assign('basehref', BASE_URL);
            $smarty->assign('student', $student);
            $smarty->assign('session', $session);
            $smarty->display('templates\addActas.tpl');
        }

    }