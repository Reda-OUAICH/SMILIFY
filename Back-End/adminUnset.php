<?php
/**
 * Created by PhpStorm.
 * User: theodoreyip
 * Date: 14/02/2018
 * Time: 07:51
 */

//Remove your admin status when you return on the Front Index.php
session_start();
if (isset($_SESSION['admin'])) {
    unset($_SESSION['admin']);
}
