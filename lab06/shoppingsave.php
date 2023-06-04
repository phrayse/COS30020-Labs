<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="description" content="Web application development" />
    <meta name="keywords" content="PHP" />
    <meta name="author"	content="STUID" />
    <title>Lab6</title>
</head>
<body>
    <h1>Web Programming - Lab06</h1>
    <?php
    if (isset($_POST["item"]) && isset($_POST["qty"])) {
        $item = $_POST["item"];
        $qty = $_POST["qty"];
        $filename = "../../data/shop.txt";	// assumes php file is inside lab06

        $alldata = array();	// create an empty array
        if ($filename) {	// check if file exists for reading
            $itemdata = array();	// create an empty array
            $handle = fopen($filename, "r");	// open the file in read mode
            while (! feof ($handle)) {	// loop while not end of file
                $onedata = fgets($handle);	// read a line from the text file
                if ($onedata != "") {	// ignore blank lines
                    $data = explode(",", $onedata);	// explode string to array
                    $alldata [] = $data;	// create an array element
                    $itemdata[] = $data [0];	// create a string element
                }
            }
            fclose ($handle);	// close the text file
            $newdata = !(in_array($item, $itemdata)); // check if item exists in array
        } else {
            $newdata = true;	// file does not exist, thus it must be new data
        }
        if ($newdata) {
            $handle = fopen($filename, "a");	// open the file in append mode
            $data = $item . "," . $qty . "\n"; // concatenate item and qty delimited by comma
            fputs($handle, $data);	// write string to text file
            fclose ($handle);	// close the text file

            $alldata [] = array($item, $qty); // add data to array
            echo "<p>Shopping item added</p>";
        } else {
            echo "<p>Shopping item already exists</p>";
        }

        sort($alldata);	// sort array elements
        echo "<p>Shopping List</p>";
        foreach ($alldata as $data) {	// loop using for each
            echo "<p>", $data [0], " -- ", $data[1], "</p>";
        }
    } else {	// no input
        echo "<p>Please enter item and quantity in the input form.</p>";
    }
    ?>
</body>
</html>