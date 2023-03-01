<?php 
    $id_poloczenia = mysqli_connect('localhost', 'root', '', 'baza');
    $date = $_POST['date'];
    $ilosc = $_POST['ilosc'];
    $tel = $_POST['tel'];

    $zapytanie1 = "INSERT INTO 'rezerwacje'('nr_stolika', 'data_rez', 'liczba_osob', 'telefon') VALUES ('1', '$date', '$ilosc', '$tel')";

    $wynik_zapytanie = mysqli_query($id_poloczenia, $zapytanie1);

?>