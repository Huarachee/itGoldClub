<?php
session_start();
unset($_SESSION['user']); // Удаляем сессию
header('Location: ../index.php');