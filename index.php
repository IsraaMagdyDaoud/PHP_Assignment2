<!DOCTYPE <!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <h1>Day2</h1>
        <?php
        // Search for how to make \n work in browser.
        echo nl2br("One line.\nAnother line.");
        //  Display $_SERVER in readable format.
        echo '<pre>';
        foreach ($_SERVER as $key => $value) {
            echo "[$key] => $value\n";
        }
        echo '</pre>';
        // Try any three functions from String or Arrays built in.
        echo strripos("I love php, I love php too!","PHP");
        echo strtoupper("<br>Hello WORLD!");
        echo "<br>";
        $arr = array('Hello','World!','Beautiful','Day!');
        echo join(" ",$arr);
        echo "<br>";
        // Task4
        // $array=[12, 45, 10, 25];
        $array[1] = 45;
        $array[0] = 12;
        $array[3] = 25;
        $array[2] = 10;
        $sum = array_sum($array);
        $avg = $sum / count($array);
        rsort($array);
        echo "Sum: " . $sum . "<br>";
        echo "Average: " . $avg . "<br>";
        echo "Sort it in a reverse order (Highest to Lowest): ";
        print_r($array);
        echo "<br>";
        // Task5
        $array2 = array("Sara"=>31, "John"=>41, "Walaa"=>39, "Ramy"=>40);
        // ascending order sort by value
        asort($array2);
        echo "Ascending order by value: ";
        print_r($array2);
        echo "<br>";
        // ascending order sort by Key
        $array2 = array("Sara"=>31, "John"=>41, "Walaa"=>39, "Ramy"=>40);
        ksort($array2);
        echo "Ascending order by key: ";
        print_r($array2);
        echo "<br>";
        //descending order sorting by Value
        $array2 = array("Sara"=>31, "John"=>41, "Walaa"=>39, "Ramy"=>40);
        arsort($array2);
        echo "Descending order by value: ";
        print_r($array2);
        echo "<br>";
        //descending order sorting by Key
        $array2 = array("Sara"=>31, "John"=>41, "Walaa"=>39, "Ramy"=>40);
        krsort($array2);
        echo "Descending order by key: ";
        print_r($array2);
        ?>
    </body>
</html>
