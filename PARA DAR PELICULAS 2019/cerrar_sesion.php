<?php
session_start();
session_destroy();
unset($_SESSION);
header("location:EXA_1eval_pelis_2019.html");
?>