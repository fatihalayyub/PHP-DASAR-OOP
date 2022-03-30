<?php

// variabel
/*
$tester = "Naufal";
$nama = "Ganteng";

echo $tester;
echo $nama;

$string = "Abrar";
$b = 10;
$float = 10.9;
$boolean = false;
$array = [1, 2, 3];

// Operator aritmatika
// +, -, /, %, **
// $a = 10;
// $b = 20;
       
// $total = $a / $b;
// echo $total;
// Operator Assignment
/*
$a = 20;
$b = 30;
$total = 10;

$total *= $a;
echo $total;

$harga = 0;

$bakso = 20_000;
$estehmanis = 5_000;
$kerupuk = 3_000;

$harga =+ $bakso + $estehmanis + $kerupuk;
echo ($harga);

*/

// Operator pembanding
/*
$a = 9;
$b = 10;
$komparasi = $a==$b;
echo var_dump ($komparasi); 
*/

/*
// condition making

$suhu = 30;

if ($suhu > 40) {
    echo "Kamu Covid 19";
}
else if ($suhu == 40 ) {
    echo "Kamu tidak covid";
}
else {
    echo "Kamu sehat";
} 

$nilai = 70;
$absen = 5;

if ($nilai >= 80 && $absen <= 3) {
    echo "Anda lulus";
}
elseif ($nilai <79 || $absen <=3) {
    echo "Anda lulus bersyarat";
}
else {
    echo "Maaf anda tidak lulus";
}

$rambu = "Hijau";

switch ($rambu) {
    case 'Merah':
        break;
        echo "Berhenti";
    
    case 'Kuning':
       echo "Berhati-hati";
        break;

    case 'Hijau':
        echo "Jalan";
        break;

    default:
        echo "Rambu rusak";
        break;
}

$a = 1;

while ($a <= 10) {
    echo "Aku sayang kamu " .$a. '</br>';
    $a++;
}
*/

/*
echo "benar : ";
var_dump(true);

echo "Salah : ";
var_dump(false);
echo "\n";

echo <<<Abrar
Ini adalah contoh dari string heredoc
semoga sukses selalu
dan semangat terus
Abrar;
echo "\n";

define("PENULIS", "NAUFAL ABRAR RABBANI");
define("TERBIT", "2023");

echo "Penulis : ";
echo PENULIS;
echo "\n";
echo "Terbit : ";
echo TERBIT;
*/

// Contoh Array
/*
$nilai = [1, 2, 3, 4, 5];
var_dump($nilai);
echo "\n";
$nama = ["Ahmad", "Ya", "Habibi"];
var_dump($nama["1"]);

$data_mahasiswa = [
    "nim" => 2103015160,
    "name" => "Naufal",
    "age" => 20,
    "address" => [
        "city" => "Jakarta",
        "country" => "Indonesia"
    ]
];
var_dump($data_mahasiswa);
echo "\n";
var_dump($data_mahasiswa["address"]["city"]);
*/

// Operator Logika
/*
var_dump (true && true);
var_dump (true && false);
echo "\n";

var_dump (true || true);
var_dump (true || false);
echo "\n";

var_dump (true xor true);
var_dump (true xor false);
echo "\n";

var_dump (!false);
var_dump (!true);
*/

// Operator Array
/*
$first = [
    "first_name" => "Naufal"
];
$middle = [
    "middle_name" => "Abrar"
];
$last= [
    "last_name" => "Rabbani"
];

$fullname = $first + $middle + $last;
var_dump($fullname);
*/

// Manipulasi String
/*
$name = "Naufal Abrar Rabbani";
$nim = 2103015160;
echo "Nama : " . $name . PHP_EOL;
echo "NIM : " . $nim . PHP_EOL;

$valueString = (string)100;
var_dump($valueString);
echo PHP_EOL;

$valueInt = (int)"200";
var_dump($valueInt);

$name = "Naufal";
echo "Hello $name semoga kamu sukses dunia akhirat ya, aamiin";
*/

//FOREACH
/*
$data = [
    "nama_depan" => "Naufal",
    "nama_akhir" => "Abrar"
];

foreach ($data as $key => $value) {
    echo "$key : $value" . PHP_EOL;
}

function sayHello($name) {
    echo "Haai $name sayang" . PHP_EOL;
}
sayHello("Naufal")

*/

function sum(int $first, int $last):int {
    $total = $first + $last;
    return $total;
}
$result = sum(100, 300);
var_dump($result);

function sumAll(...$values) {
    $jumlah = 0;
    foreach ($values as $value) {
        $jumlah += $value;
    }
    echo "Total " . implode (" + ", $values) . " = $jumlah" . PHP_EOL;
}

$values = [2, 4, 8, 10];
sumAll (2, 4, 8, 10);
sumAll(...$values);

function getFinalValue (int $value): string {
    if ($value >= 80) {
        return 1;
    }
    elseif ($value >= 70) {
        return "B";
    }
    elseif ($value >= 70) {
        return "C";
    }
    elseif ($value >= 70) {
        return "B";
    }
    else {
        return "E";
    }
}
$nilai = getFinalValue (90);
var_dump($nilai);

function foo () 
{
    echo "Foo" . PHP_EOL;
}
function bar () {
    echo "Bar" . PHP_EOL;
}

$functionName = "Foo";
$functionName ();

$functionName = "Bar";
$functionName ();

function helloNaufal(string $name, $filter) {
    $finalname = $filter($name);
    echo "Hello $finalname" . PHP_EOL;
}

function sampleFunction (string $name): string {
    return "Ini adalah sampel dari $name";
}

helloNaufal("tes sampel", "sampleFunction");
helloNaufal("Naufal Abrar", "strtoupper");
helloNaufal("IYA", "strtolower");

$iniVariabel = function (string $anonymous) {
    echo "Ini adalah contoh $anonymous" . PHP_EOL;
};

$iniVariabel("Abror");

function iniFungsi(string $nama, $pilter) {
    $fullnama = $pilter($nama);
    echo "Hai kamu $fullnama" . PHP_EOL;
}

iniFungsi("Semangat terus yaaa", function (string $nama):string {
    return strtoupper ($nama) . PHP_EOL;
});

$filterFunction = function (string $nama):string {
    return strtoupper ($nama);
};

iniFungsi("Terima kasih", $filterFunction);

$namaDepan = "Naufal Abrar";
$namaBelakang = "Rabbani";

$sayHelloAbrar = function () use ($namaDepan, $namaBelakang) {
    echo "Hai, $namaDepan $namaBelakang" . PHP_EOL;
};

$sayHelloAbrar ();

$arrowFunction = fn() => "Semangat ya $namaDepan $namaBelakang". PHP_EOL;

echo $arrowFunction();

?>