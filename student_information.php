<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Information</title>
</head>
<body>
    <?php
    
    //create arrays of student information
    $names = array("larry", "harry", "barry", "sally", "gina", "linda", "melvin");
    $ages = array(13,14,17,12,15,16,17);
    $grades = array(98.3,63.4,56.3,87.4,75.1,99.5,68.6);

    //calculate average age
    function avg_age($ages) {
        $total = 0;
        foreach ($ages as $age) {
            $total += $age;
        };
        $avg_age = round($total/(count($ages)),2);
        return $avg_age;
    }

    //display student information
    function display_info($names, $ages, $grades) {
        for ($i = 0; $i < count($names); $i++) {
            echo "<br>-----------<br>";
            echo "<br>Student: " . ($i + 1);
            echo "<br>Name: " . ucfirst($names[$i]);
            echo "<br>Age: " . $ages[$i];
            echo "<br>Grade: " . $grades[$i];
            echo "<br>-----------<br>";
        }
        //demonstration of variable scope
        //$local_scope = "I am hidden in a function";
    }
    //echo $local_scope; //this will throw an undefined variable error


    //use the static keyword to demonstrate a variable in a function that retains it's value 

    function incrementor(){
        static $value = 0;
        $value++;
        return $value;
    }
    
    // despite calling the function multiple times, the variable retains the value from the previous iteration. 
    echo "Static value demonstration: <br>";
    $repeats = 7;
    do {
        echo incrementor() . "<br>";
        $repeats -= 1;
    } while ($repeats > 0);


    // calculate and store average student age
    $average_student_age = avg_age($ages);
    // display student info
    echo "<br>Student Details: <br>";
    display_info($names,$ages,$grades);

    echo "<br>The average student age is: $average_student_age.<br>";
    
    
    ?>
    
</body>
</html>