<?php

$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "kuliahquery";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
    die("Connection failed : ".$conn->connect_error);
}

//refresh 
function refresh(){
    header("Refresh:0");
}

// query 
function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

//input
function input($data){
    global $conn;

    $nim = $data['nim'];
    $nama = $data['nama'];
    $fakultas = $data['fakultas'];
    $prodi = $data['prodi'];

    $query = "INSERT INTO mahasiswa VALUES
              ('', '$nim', '$nama', '$fakultas', '$prodi')";
    
    mysqli_query($conn, $query);
    refresh();
    return mysqli_affected_rows($conn);
}


//delete 
function delete($id){
    global $conn;

    $query = "DELETE FROM mahasiswa WHERE id = '$id'";
    
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

//update 
function update($data, $id){
    global $conn;

    $nim = $data['nim'];
    $nama = $data['nama'];
    $fakultas = $data['fakultas'];
    $prodi = $data['prodi'];

    $query = "UPDATE mahasiswa SET 
              nim       = '$nim',
              nama      = '$nama',
              fakultas  = '$fakultas',
              prodi     = '$prodi'
              WHERE id  = '$id'";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);

}

?>