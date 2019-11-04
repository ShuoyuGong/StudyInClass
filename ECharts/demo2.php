<?php 
$dsn="mysql:host=localhost;dbname=med;port=3306";
$user="root";
$pwd="root";
$pdo = new PDO($dsn, $user, $pwd); 
$sql="select i.medName,s.salesYear,s.salesMouth,s.salesMoney from med_info as i,med_sales as s where i.medName = 'liuwei'";
$arr= $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
// foreach ($arr as $value) {
//     $brr = $value;
// }
echo json_encode($arr);


// CREATE TABLE IF NOT EXISTS `med_info`(
//     `medId` INT UNSIGNED,
//     `medName` VARCHAR(100) NOT NULL,
//     `medCreTime` date NOT NULL,
//     PRIMARY KEY ( `medId` )
// )ENGINE=InnoDB DEFAULT CHARSET=utf8;


// CREATE TABLE IF NOT EXISTS `med_sales`(
//     `salesId` INT UNSIGNED AUTO_INCREMENT,
//     `medId` INT references med_info(medId),
//     `salesYear` int NOT NULL,
//     `salesMouth` int NOT NULL,
//     `salesMoney` int NOT NULL,
//     PRIMARY KEY ( `salesId` )
// )ENGINE=InnoDB DEFAULT CHARSET=utf8;
// select i.medName,s.salesYear,s.salesMouth,s.salesMoney from med_info as i,med_sales as s where i.medName = "liuwei";
// INSERT INTO med_info ( medId, medName,medCreTime )
//     VALUES
//     ( 72542,"六味地黄丸",now()),
//     ( 3434,"999感冒灵",now() ),
//     ( 78645,"皮炎平",now() ),
//     ( 7845343,"西瓜霜",now() ),
//     ( 3453,"阿莫西林",now() );


// INSERT INTO med_sales ( salesId, medId,salesYear,salesMouth,salesMoney)
//     VALUES
//     (null,1,2019,1,50000),
//     (null,1,2019,2,45123),
//     (null,1,2019,3,78912),
//     (null,1,2019,4,12365),
//     (null,1,2019,5,78531),
//     (null,1,2019,6,98123),
//     (null,1,2019,7,23688),
//     (null,1,2019,8,78915),
//     (null,1,2019,9,74231),
//     (null,1,2019,10,87913),
//     (null,1,2019,11,78131),
//     (null,1,2019,12,123154);

// create database med;

// select * from med_info where medName = "六味地黄丸";

