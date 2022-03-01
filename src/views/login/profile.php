<?php

if ($_SESSION['isAdmin'] === 1) {
    include __DIR__ . '/../admin/admin.php';
} else {
    include __DIR__ . '/../user/user.php';
}
