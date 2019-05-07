<?php

public function logout(){
    unset($_SESSION['login']);
    unset($_SESSION['password']);
        require_once('./Login.php');
    }