<?php
    print_r($_POST); // [name]=>Manish ................ The information is stored in the form of key value pair
    echo "<br>";
    print_r($_POST["name"]);   //yeh direct array se name nikal k dega
?>

<form method="post">
    Name :- <input type="textbox" name="name"/>
    <input type="submit"/>
</form>