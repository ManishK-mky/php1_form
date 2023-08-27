<?php
    // echo "<pre>";
    // print_r($_POST);

    // variable Declaration
    $name = "";
    $password = "";
    $city = "";
    $gender = "";
    $education = "";
    
    if(isset($_POST['name'])){
        $name = $_POST['name'];
    }

    if(isset($_POST["password"])){
        $password = $_POST["password"];
    }

    if(isset($_POST["gender"])){
        $gender = $_POST["gender"];
    }

    if(isset($_POST["city"])){
        $city = $_POST["city"];
    }

    if(isset($_POST["education"])){
        $education = $_POST["education"];
        $education = implode(" ," , $education);  //the implode function ise used to convert array into string.
    }else{
        $education = "Not Provided";
    }
    // if(isset($_POST["educa"]))

    echo "Name:- $name<br>";
    echo "Password:- $password<br>";
    echo "City:- $city<br>";
    echo "Gender:- $gender<br>";
    echo "Education:- $education<br>";
    echo "<br><br>"
?>

<form method="post">
    Name :- <input type="textbox" name="name"/><br/><br/>
    Password :- <input type="password" name="password"><br/><br/>
    Gender :-
    <input type="radio" name="gender" value="female">Female   
    <input type="radio" name="gender" value="male">Male<br/><br/>  
    City:- 
    <select name = "city">    
        <option>Select city</option>                       
        <option>Delhi</option>
        <option>Bangalore</option>
        <option>Mumbai</option>
        <option>Noida</option>
    </select><br/><br/>
Education:
    B.Tech<input type="checkbox" name="education[]" value="B.Tech">   
    MBA<input type="checkbox" name="education[]" value="MBA">
    BE/B.E.<input type="checkbox" name="education[]" value="BE/B.E">
    M.Tech<input type="checkbox" name="education[]" value="M.Tech"> 
    <input type="submit"/>
    <br><br>
</form>


<!-- POST and GET  -->
<!-- POST is used to send data to a server to create/update a resource WHEREAS "GET" is used to request data from a specified resource. -->

<!-- POST requests do not remain in the browser history WHEREAS GET requests remain in the browser history -->

<!-- when we pass data through POST , then it is secured WHEREAS if we pass data through GET it is not secure .
     If we are passing data through get then the data is visible in the URL.-->