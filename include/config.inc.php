<?php
// ok ok, just a test, if you want to hack this vps, just go on.
// There is the connection args...
    define('DEBUG',true);
    if (DEBUG)
    {
        define('HOST', '115.29.110.218');
    }
    else
    {
        define('HOST', 'localhost');
    }
    define('DATABASE', 'randomchat');
    define('USER', 'randomchat');
    define('PASSWORD', 'RandomChat');
    define('TABLE_USER', 'user');
?>