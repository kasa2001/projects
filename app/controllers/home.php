<?php

/**
 * All new classes must extends which class Controller. You can in this moment profit a function included in framework
 * */
class Home extends Controller
{
    public function index($name = '')
    {
        $user = $this->loadModel('User');
        $css = "main home";
        $js = "";
        $this->view('home/index', NULL, $css, $js);
    }
}