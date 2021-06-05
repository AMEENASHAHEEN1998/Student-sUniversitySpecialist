<?php



$dsn='mysql:host=localhost;dbname=mbtiquestion';
$user="root";
$pass='';
$options=array(
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET CHARACTER SET utf8' ,
    // PDO::MYSQL_ATTR_INIT_COMMAND => 'set NAMES utf8' ,
);

try {
    $con=new PDO($dsn ,$user ,$pass ,$options);
    $con->setAttribute(PDO::ATTR_ERRMODE ,PDO::ERRMODE_EXCEPTION);
   
// echo "you are connect" ;
} catch (PDOException $e) {
   echo "faile connect" .$e->getMessage() ;
}

?>


<?php

// $stm = $con->prepare("SELECT * FROM eztrquestion ");
// $stm->execute();
// $row = $stm->fetch();

// $count = $stm->rowCount();
// echo $count;
// echo print_r($row) ;

// $stm = $con->prepare("SELECT * FROM eztrquestion ");
// $stm->execute();
// $row = $stm->fetch();

// $count = $stm->rowCount();
// echo $count;
// echo print_r($row) ;

//    $stm=$con->prepare("INSERT INTO eztrquestion(Extro_Intro_1, Extro_Intro_2, Extro_Intro_3, Extro_Intro_4, Extro_Intro_5)
//     VALUES('E','E','E','E','E')");
//     $stm->execute();

?>