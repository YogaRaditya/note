<?php
    define('DB_HOST','localhost');
    define('DB_USER','root');
    define('DB_PASS','');
    define('DB_NAME','yoga_raditya');
    $dbconnect=mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME) or die("gagal koneksi ke mysqli; " . mysqli_error($dbconnect));
    
    function query($kueri)
    {
        global $conn; 
        $result=mysqli_query($conn,$kueri);
        $rows  = [];
        while($row = mysqli_fetch_assoc($result))
        {
            $rows[] = $row;
        }
        return $row;
    }

    function inputdata($inputdata)
    {
        global $koneksi;
        $sql=mysqli_query("INSERT INTO notes VALUES (null,now(),'$notes')"); 
        if($simpan) {
            header("locatiin:list_notes.php");
        }
    }

    //Menampilkan data lama 
    function editdata($tablename,$id)
    {
        global $koneksi;
        $hasil=mysqli_query($koneksi,"select * from $tablename where id ='$id'");
        return $hasil;
    }
       
    function update($table, $data, $id)
    {
        global $koneksi;
        $sql = "UPDATE $table SET note = '$data' WHERE id = '$id'";
        $hasil=mysqli_query($koneksi,$sql);
        return $hasil;
    }

    function Delete($tablenama, $id)
    {
        global $koneksi;
        $hasil=mysqli_query($koneksi, "delete from $tablename where id='$id'");
        return $hasil;
    }
?>