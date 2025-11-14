<?php

// $car = array("mvm", "pride", "peykan"); // شمارشی




// $car = ["mvm", "pride", "peykan"]; // شمارشی


// $car = [ 1=> "mvm", "pride", "peykan", "BMW"]; // اندیس دار


// echo "<pre>";
// print_r($car);
// echo "</pre>";

// $car[] = "kia" ;

// $car[1] = "Lexus" ;

// unset($car[3]);

// $car[3] = "kmc" ;

// echo "<pre>";
// print_r($car);
// echo "</pre>";


// انجمنی
$daneshamoz = [
    "esm" => "ali",
    "family" => "karemi",
    "nomre" => "10"
];

echo "<pre>";
print_r($daneshamoz);
echo "</pre>";

$daneshamoz["code_melli"] = "0771234566";

$daneshamoz["nomre"] = "15";

unset($daneshamoz["nomre"]);


echo "<pre>";
print_r($daneshamoz);
echo "</pre>";


foreach($daneshamoz as $i => $x) {
    echo $i . " vhvfghj " . $x . "<br>";
}






// echo "<pre>";
// print_r($daneshamoz);
// echo "</pre>";

// $daneshamoz["nomre"] = "16";

// $daneshamoz["codmli"] = "077456454345";

// unset($daneshamoz["nomre"]);


// echo "<pre>";
// print_r($daneshamoz);
// echo "</pre>";

// foreach ($daneshamoz as $i => $x) {
//     echo $i . " ***** " . $x . "<br>";
// }


// $class304 = [
//     [
//         "esm" => "ali",
//         "family" => "karemi",
//         "nomre" => "10"
//     ],
//     [
//         "esm" => "reza",
//         "family" => "rezai",
//         "nomre" => "13"
//     ],
//     [
//         "esm" => "mahnaz",
//         "family" => "afshar",
//         "nomre" => "18"
//     ]
// ];

// echo $class304[2]["family"];

// echo "<pre>";
// print_r($class304);
// echo "</pre>";

// $class304[1]["codmli"]="0776565654";

// unset($class304[2]["nomre"]);

// echo "<pre>";
// print_r($class304);
// echo "</pre>";