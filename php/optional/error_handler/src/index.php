<?php
function customError($num) {
    switch ($num) {
        case 1:
            echo "ERROR";
            break;
        case 2:
            echo "WARNING";
            break;
        case 8:
            echo "NOTICE";
            break;
        default:
            echo "NO errors";
            break;
    }
}
set_error_handler("customError");
fopen("hello.php");
