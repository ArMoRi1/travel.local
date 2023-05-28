<?php
function get_menu (){
    global $conn;
    $sql = "SELECT * FROM menu";
    $result = mysqli_query($conn, $sql);
    $menus = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $menus;
}
function get_tours() {
    global $conn;
    $sql = "SELECT * FROM tours";
    $result = mysqli_query($conn, $sql);
    $tours = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $tours;
}
function get_tour_by_id ($tour_id) {
    global $conn;
    $sql = "SELECT * FROM tours WHERE id =" .$tour_id;
    $result = mysqli_query($conn, $sql);
    $tour = mysqli_fetch_assoc($result);
    return $tour;
}
