<?php

$daneshamooz = [
    "name" => "ali",
    "family" => "noorani",
    "age" => "1386"
];

$class304 = [
    [
        "name" => "mahnaz",
        "family" => "afshar",
        "age" => "1386"
    ],
    [
        "name" => "reza",
        "family" => "mohebi",
        "age" => "1400"
    ],
    [
        "name" => "barat",
        "family" => "shabani",
        "age" => "1372"
    ]
];


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            border-collapse: collapse;
            width: 50% ;
            margin: 0 auto;
        }
        td , th {
            border: solid 1px black;
        }
        th{
            background-color: navy;
            color: beige;
        }
        tr:hover{
            background-color: yellow;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>name</th>
            <th>family</th>
            <th>age</th>
        </tr>
        <?php 
            foreach($class304 as $b){
                echo "<tr>" ;
                echo "<td>" . $b["name"] . "</td>" ;
                echo "<td>" . $b["family"] . "</td>" ;
                echo "<td>" . $b["age"] . "</td>" ;
                echo "</tr>" ;
            }

?>
    </table>
</body>
</html>