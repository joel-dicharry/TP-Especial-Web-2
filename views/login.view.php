<?php

    require_once('libs/Smarty.class.php');

    class LoginView{
        
        public function showLogin(){
            $smarty = new Smarty();
            $smarty->assign('basehref', BASE_URL);
            $smarty->display('templates\showLogin.tpl');
        }
        public function recuperarContraseña(){
            $smarty = new Smarty();
            $smarty->assign('basehref', BASE_URL);
            $smarty->display('templates\forgout.tpl');
        }
    }
