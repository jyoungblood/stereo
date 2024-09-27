<?php

// session ref, keeping for now
// from https://github.com/mcvendrell/SlimFramework4LoginAuth/blob/main/public/index.php


// session_start();
// // Session lifetime in seconds
// $inactividad = 300;
// if (isset($_SESSION["timeout"])){
//     $sessionTTL = time() - $_SESSION["timeout"];
//     if ($sessionTTL > $inactividad) {
//         session_destroy();
//         header("Location: /");
//     }
// }
// // Start timeout for later check
// $_SESSION["timeout"] = time();



(require_once '../app/stereo.php')->run();