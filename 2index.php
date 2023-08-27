<?php
    // print_r($_POST["name"]); //kavel yeh likhane pe error de rha hai islye 
    echo "<pre>";
    print_r($_POST);                //agar humlog isko dekheng tab yeh pta chakega ki ----> radiobutton aur checkboxes <---- ko jab tak humlog selecct nhi karenge tab tak array me nhi aayega
?>

<form method="post">
    Name :- <input type="textbox" name="name"/><br/><br/>
    Password :- <input type="password" name="password"><br/><br/>
    Gender :-
    <input type="radio" name="gender" value="female">Female   <!--- agar value nhi kikhenge tab value on  pass hogi ,(remove value to see)--->
    <input type="radio" name="gender" value="male">Male<br/><br/>  <!--radio button-->
    City:- 
    <select name = "city">     <!--dropdown-->
        <option>Select city</option>                       
        <option>Delhi</option>
        <option>Bangalore</option>
        <option>Mumbai</option>
        <option>Noida</option>
    </select><br/><br/>
    Education:-                          <!--ab kyuki checkbox rakhe hai , aur usme user multiple choice select kar skta hai isliye [] yeh laga rhe hai , after modifying 'education[]' agar aisa
nhi karte hai taab agar user teen yaa char checkbox ko select karta ahai tab jo akhiri wla hoga wohi dikhai dega ,pura selected nhi-->
<!--education[] ---- karne se saari value array me jayegi-->
Education:
    B.Tech<input type="checkbox" name="education[]" value="B.Tech">   <!--agr value nhi likhenge tab submit karne pe on ya off aayega , aur clear nhi ho payega ki user kya choose kiya hai-->
    MBA<input type="checkbox" name="education[]" value="MBA">
    BE/B.E.<input type="checkbox" name="education[]" value="BE/B.E">
    M.Tech<input type="checkbox" name="education[]" value="M.Tech"> 
    <input type="submit"/>
</form>


<!-- POST and GET  -->
<!-- POST is used to send data to a server to create/update a resource WHEREAS "GET" is used to request data from a specified resource. -->

<!-- POST requests do not remain in the browser history WHEREAS GET requests remain in the browser history -->

<!-- when we pass data through POST , then it is secured WHEREAS if we pass data through GET it is not secure .
     If we are passing data through get then the data is visible in the URL.-->