<?php

    class AuthHelper {

        public function __construct() {}

        private function checkLoggedIn() {
            session_start();
            if (!isset($_SESSION['ID_USER'])) {
                header('Location: ' . LOGIN);
                die();
            }
        }
}