<?php

require_once('libs/Smarty.class.php');

class LoginView{
    public function showLogin(){
        $smarty = new Smarty();
        $smarty->display('templates\showLogin.tpl');
    }
}
