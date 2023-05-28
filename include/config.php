<?php
$conn = mysqli_connect('localhost', 'root', '', 'travel');
if (mysqli_connect_errno()){
    echo 'Помилка підключення до БД ('.mysqli_connect_errno() .'):'.mysqli_connect_error();
    exit();
}
