<?php 
  function koneksi(){
    return mysqli_connect('localhost','root','', 'mahasiswa');
  }
  function query($query) {
    $conn = koneksi();
    $result = mysqli_query($conn, $query);
    //jika hanya 1 data
    if (mysqli_num_rows($result) == 1 ) {
      return mysqli_fetch_assoc($result);
    }
    $rows =[];
    while ($row = mysqli_fetch_assoc($result)){
      $rows[] = $row;
    }
    return $rows;
  }
?> 