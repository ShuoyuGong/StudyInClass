<?php 
$dsn="mysql:host=localhost;dbname=huowu;port=3306";
$user="root";
$pwd="root";
$pdo = new PDO($dsn, $user, $pwd); 
$sql="select * from huowu_info";
$arr= $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($arr);


// CREATE TABLE IF NOT EXISTS `huowu_info`(
//     `id` INT UNSIGNED AUTO_INCREMENT,
//     `name` VARCHAR(100) NOT NULL,
//     `price` int NOT NULL,
//     PRIMARY KEY ( `id` )
//  )ENGINE=InnoDB DEFAULT CHARSET=utf8;

//  INSERT INTO huowu_info ( id, name,price )
//     VALUES
//     ( null,"watch",2000 ),
//     ( null,"rice",5000 ),
//     ( null,"shop",2000 ),
//     ( null,"open",2000 ),
//     ( null,"obb",2000 );