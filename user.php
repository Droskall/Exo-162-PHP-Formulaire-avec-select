<?php
if (isset($_GET['get-surname'], $_GET['get-name'])) {
    echo $_GET['get-surname'];
    echo $_GET['get-name'];
}

if (isset($_POST['post-surname'], $_POST['post-name'])) {
    echo $_POST['post-surname'];
    echo $_POST['post-name'];
}