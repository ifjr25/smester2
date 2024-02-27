<?php

$animals = ["kucing","ayam","banten","ikan"];
echo 'ini hewan dengan index ke 1 : ' .$animals[1];
echo "<br>";
echo 'ini hewan dengan index ke 3 : ' .$animals[3];
echo '<br>';
//mencetak seluruh data
foreach ($animals as $animals) {
    echo '<li>'.$animals.'</li>';
}