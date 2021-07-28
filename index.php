<?php
ob_start();

session_start();

require __DIR__ . "/vendor/autoload.php";

echo "Agora Esta indo tudo certo";


ob_end_flush();