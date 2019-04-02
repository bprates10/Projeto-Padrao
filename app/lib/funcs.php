<?php
/**
 * Created by PhpStorm.
 * User: bruno
 * Date: 12/03/2019
 * Time: 22:37
 */

function routes($page) {

    try {
        switch ($page) {
            case 'home_temp':
                $_SESSION[''] = "Index";
                require_once ('view/home_temp.php');
                unset($_SESSION['']);
                break;
            default:
                require_once ('view/404.php');
                break;
        }
    } catch (Exception $e) {
        require_once ('view/404.php');
    }

}