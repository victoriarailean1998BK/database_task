<?php
$connect = mysqli_connect('localhost', 'root', '', 'info_bnm');
if (!$connect) {
    die(mysqli_connect_error);
}else {
echo "Connected with successfully";
}

//create a table
$sql = "CREATE TABLE curs_bnm (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
DATE DATE NOT NULL,
EUR FLOAT (20),
USD FLOAT (20),
RON FLOAT (20),
RUB FLOAT (20),
CHF FLOAT (20),
HUF FLOAT (20),
AUD FLOAT (20),
JPY FLOAT (20),
CAD FLOAT (20)
)";


//if ($connect->query($sql) === TRUE) {
//    echo "Table created successfully";
//} else {
//    echo "Error creating table: " . $connect->error;
//}
$sql_1 = "INSERT INTO curs_bnm ( DATE, EUR, USD, RON, RUB, CHF, HUF, AUD, JPY, CAD)
VALUES ('2021-05-31', 21.45, 17.61, 4.35, 0.23, 24.97, 19.57, 6.16, 13.59, 16.02)";
$sql_2 = "INSERT INTO curs_bnm ( DATE, EUR, USD, RON, RUB, CHF, HUF, AUD, JPY, CAD)
VALUES ('2021-05-30', 21.51, 17.62, 4.37, 0.24, 24.89, 19.62, 6.18, 13.65, 16.14)";
$sql_3 = "INSERT INTO curs_bnm ( DATE, EUR, USD, RON, RUB, CHF, HUF, AUD, JPY, CAD)
VALUES ('2021-05-29', 21.55, 17.63, 4.334, 0.22, 24.92, 19.64, 6.19, 13.64, 16.10)";

//mysqli_query($connect, $sql_1);
//mysqli_query($connect, $sql_2);
//mysqli_query($connect, $sql_3);

//Select from Database

//SELECT EUR, USD, RON, RUB `curs_bnm` WHERE DATE='2021-05-30';

$connect->close();