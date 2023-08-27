<?php
    // echo "<pre>";
    // print_r($_POST);

    // variable Declaration
    $name = '';
    $password = "";
    $city = "";
    $gender = "";
    $educationStr = "";
    $maleChecked ="";
    $femaleChecked = "";
    $education = array();
    
    if(isset($_POST['name'])){
        $name = $_POST['name'];
    }

    if(isset($_POST["password"])){
        $password = $_POST["password"];
    }

    if(isset($_POST["gender"])){
        $gender = $_POST["gender"];
        if($gender == "Male"){
            $maleChecked = "checked='checked'";
        }else{
            $femaleChecked = "checked='checked'";
        }
    }

    if(isset($_POST["city"])){
        $city = $_POST["city"];
    }

    if(isset($_POST["education"])){
        $education = $_POST["education"];
        $educationStr = implode(" ," , $education);  //the implode function ise used to convert array into string.
    }else{
        $education = "Not Provided";
    }
    // if(isset($_POST["educa"]))

    // echo "Name:- $name<br>";
    // echo "Password:- $password<br>";
    // echo "City:- $city<br>";
    // echo "Gender:- $gender<br>";
    // echo "Education:- $educationStr<br>";
    // echo "<br><br>"
?>
         <!--value = "<>"-- is used to poupulate the data---->

         <!DOCTYPE html>
<html>
<head>
    <title>Admin Panel - User Information</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600&display=swap');
        *{
            margin: 0px;
            padding: 0px;
            font-family: "Poppins";
        }
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }
        .admin-panel {
            display: flex;
            max-width: 1200px;
            margin: 0 auto;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .sidebar {
            width: 20%;
            background-color: #333;
            color: #fff;
            padding: 20px;
            box-shadow: 2px 0px 5px rgba(0, 0, 0, 0.1);
        }
        .sidebar h1 {
            margin: 0;
            padding: 15px 0;
            font-size: 24px;
            text-align: center;
        }
        .sidebar ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        .sidebar li {
            padding: 10px 0;
        }
        .sidebar a {
            color: #fff;
            text-decoration: none;
            display: block;
            padding: 8px 15px;
            border-radius: 5px;
            transition: background-color 0.2s;
        }
        .sidebar a:hover {
            background-color: #555;
        }
        .main-content {
            width: 80%;
            padding: 20px;
        }
        h1 {
            margin-top: 0;
        }
        label {
            font-weight: bold;
        }
        input[type="text"],
        input[type="password"],
        select,
        input[type="checkbox"],
        input[type="radio"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
    </style>
</head>
<body>
    <div class="admin-panel">
        <div class="sidebar">
            <h1>Admin Panel</h1>
            <ul>
            <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                <li><a href="#"><i class="fa fa-users"></i> Users</a></li>
                <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                <li><a href="#"><i class="fa fa-sign-out"></i> Logout</a></li>
            </ul>
        </div>
        <div class="main-content">
            <h1>User Information</h1><br>
            <form method="post">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($name); ?>"><br>

                <label for="password">Password:</label>
                <input type="password" id="password" name="password"><br>

                <label>Gender:</label><br><br>
                Female<input type="radio" name="gender" value="Female" <?php echo $femaleChecked; ?>>
                Male<input type="radio" name="gender" value="Male" <?php echo $maleChecked; ?>>
                <br>
                <label for="city">City:</label><br><br>
                <select id="city" name="city"><br>
                    <option>Select city</option>
                    <?php
                    $cityArr = array("Bangalore", "Noida" , "Mumbai","Delhi");
                        foreach ($cityArr as $list) {
                            if ($city == $list) {
                                echo '<option selected>' . $list . '</option>';
                            } else {
                                echo '<option>' . $list . '</option>';
                            }
                        }
                    ?>
                </select><br>

                <label>Education:</label><br><br>
                <?php
                $educationArr = array("B.Tech" , "M.Tech" , "MS" , "MBA");
                    foreach ($educationArr as $list) {
                        $checked = in_array($list, $education) ? 'checked="checked"' : '';
                        echo "$list <input type='checkbox' name='education[]' value='$list' $checked><br>";
                    }
                ?>

                <input type="submit"><br><br>
            </form>
            <h2>User Information:</h2>
            <p><strong>Name:</strong> <?php echo $name; ?></p>
            <p><strong>Password:</strong> <?php echo $password; ?></p>
            <p><strong>Gender:</strong> <?php echo $gender; ?></p>
            <p><strong>City:</strong> <?php echo $city; ?></p>
            <p><strong>Education:</strong> <?php echo $educationStr; ?></p>
        </div>
    </div>
</body>
</html>
