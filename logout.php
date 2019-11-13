<?php
session_start();
session_destroy();
setcookie('user',$data[3], time()-3600,"/");
header('location: home.html');

?>