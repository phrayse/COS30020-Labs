<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="Web Programming :: Lab 2" />
    <meta name="keywords" content="Web,programming" />
    <title>Using variables, arrays and operators</title>
</head>
<body>
    <?php
        $days = array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
        
        echo "<p>The days of the week in English are:<br>";
        $i=0;
        while(($i+1)<count($days)) {
            echo "$days[$i], ";
            $i++;
        }
        echo "$days[$i].</p>";

        $days[0] = "Dimanche";
        $days[1] = "Lundi";
        $days[2] = "Mardi";
        $days[3] = "Mercredi";
        $days[4] = "Jeudi";
        $days[5] = "Vendredi";
        $days[6] = "Samedi";

        echo "<p>The days of the week in French are:<br>";
        $j=0;
        while(($j+1)<count($days)) {
            echo "$days[$j], ";
            $j++;
        }
        echo "$days[$j].</p>";
    ?>
</body>
</html>