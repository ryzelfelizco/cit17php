<html>
    <body>
        <?php
        // Integers
        $int_var = 12345;
        $another_int = -12345 + 12345;
        print("INTEGERS<br>");
        print("$int_var<br>");
        print("$another_int<br>");
        
        // Doubles
        $many = 2.2888800;
        $many_2 = 2.21112000;
        $few = $many + $many_2;
        print("<br>DOUBLES<br>");
        print("$many + $many_2 = $few<br>");

        //Boolean
        print("<br>BOOLEAN<br>");
        if (TRUE)
            print("This will always print<br>");
        else
            print("This will never print<br");

        /* true_num = 3 + 0.14159;
            $true_str = "Tried and true"
            $true_array[49] = "An array element";
            $false_array = array();
            $false_null = NULL;
            $false_num = 999 - 999;
            $false_str = "";
        */    

        // NULL
        print("<br>NULL<br>");
        $my_var = NULL;
        $my_var = null;

        //STRINGS
        print("<br>STRINGS<br>");
        $string_1 = "This is a string in double quotes.";
        $string_2 = "This is somewhat longer, singly quoted string.";
        $string_39 = "This string has thirty-nine characters.";
        $string_0 = ""; //a string with zero characters
        print("$string_1<br>");
        ?>

        <?php
        $variable = "name";
        $literally = 'My $variable will not print!<br>';
        print($literally);
        $literally = 'My $variable will print!<br>';
        print($literally);
        ?>
    </body>
</html>