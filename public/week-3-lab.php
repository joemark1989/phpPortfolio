<?php


$studentsClassInfo = [
    "Fall 2018" => array("CIS111" => ["Shannon Peasley", "Tom Jones", "Billy Smith"]), 
                        array("CIS112" => ["Sue Heckel", "Kyle Sanford"]),
                        array("CIS146" =>["Sue Heckel", "Kyle Sanford"]),
    "Winter 2019" => array("CIS111" => ["Jim Rice", "Vince Duncan", "Kyle Sanford"]), 
                        array("CIS146" => ["Jim Rice", "Vince Duncan"]),
    "Spring 2019" => array("CIS111" => ["Shannon Smith", "Mike Sanchez", "Scott Larson"])
];



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>2D Array / Looping</title>
</head>
<body>
    <h1>Week 3 Lab Output</h1>                                                                                 
        <ol>
        <!-- Outter foreach -->
        <?php foreach($studentsClassInfo as $schoolYear => $schoolArr) { ?>
                <?php if($schoolYear[0] != is_numeric($schoolYear[0])){
                    echo "<li>$schoolYear</li>";
                } ?>
                <!-- inner for each loop -->
                <?php foreach($schoolArr as $class => $students)  { ?>
                <ul>
                <li><?=$class?></li>
                <ul>
                    <?php foreach($students as $student) { ?>
                    <li style="color:<?= $student[0] == "S" ? "red" : "black"?>">
                    <?=$student?>
                    </li>
                   <?php } ?>
                </ul>
            </ul>
    <?php }} ?> 
        </ol>
</body>
</html>