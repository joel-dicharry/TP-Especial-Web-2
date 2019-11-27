<?php

require_once('libs/Smarty.class.php');

class LoginView
{

    private $smarty;

    private function __construct()
    {
        $this->smarty = new Smarty();
    }

    public function showLogin($registro = NULL, $error = NULL)
    {
        $this->smarty->assign('basehref', BASE_URL);
        $this->smarty->assign('registro', $registro);
        $this->smarty->assign('error', $error);
        $this->smarty->display('templates\showLogin.tpl');
    }
}
