<?php
    
    include_once 'dbAccess.php';

    $name = $_POST['name'];
    $hotel = $_POST['hotel'];
    $tour = $_POST['tour'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $adults = $_POST['adults'];
    $kids = $_POST['kids'];
    $reservedBy = $_POST['reservedBy'];
    $room = $_POST['room'];
    $details = $_POST['details'];

    
    $sql = "INSERT INTO reservations (name, hotel, tour, date, time, 
        adults, kids, reservedBy, room, details) VALUES ('$name', '$hotel', '$tour', 
        '$date', '$time', '$adults', '$kids', '$reservedBy', '$room', '$details');";

    mysqli_query($conn, $sql);

    header("Location: ../index.html?signup=success");
?>