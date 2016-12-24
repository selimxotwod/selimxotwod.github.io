<?php
/**
 * Created by PhpStorm.
 * User: maxime
 * Date: 16/12/2016
 * Time: 13:52
 */

namespace Controller;


class indexController
{
    public function render($name){
        echo "Hello " . $name;
    }

    public function getCurrentVideo(){
        if (isset($_GET['videoId'])) {
            $currentVideo = $_GET['videoId'];
        } else {
            $currentVideo = "M7lc1UVf-VE";
        }
    }
}