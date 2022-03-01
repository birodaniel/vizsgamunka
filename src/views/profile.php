<?php

if ($_SESSION['isAdmin'] === 1) {
    include 'admin.php';
} else {
    include 'user.php';
}
