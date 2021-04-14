<?php
session_start();
var_dump($_SESSION);
session_unset();
var_dump($_SESSION);
session_destroy();