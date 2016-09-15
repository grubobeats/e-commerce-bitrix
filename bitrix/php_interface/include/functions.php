<?php
/**
 * Created by PhpStorm.
 * User: vladan
 * Date: 15.09.16
 * Time: 15:40
 */

function dump($var, $die, $all = false) {
    global $USER;
    if ($USER->isAdmin() || ($all == true)) {
        ?>
            <font style="text-align: left;font-size: 10px;"><pre><?var_dump($var)?></pre></font>
        <?php
    }
    if ($die) {
        die;
    }
}

?>