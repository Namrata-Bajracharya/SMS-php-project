<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>User Registration</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Registration</h1>
        <form action="sturegisterationphp.php" method="post" enctype="multipart/form-data">
            <label for="name">name:</label>
            <input type="text" id="name" name="fullname" placeholder="Enter your name" required>

            <label for="age">age:</label>
            <input type="age" id="age" name="age" placeholder="Enter age" required>

            <label for="address">Address:</label>
            <input type="type" id="address" name="address"  required>

            <label for="Father">Father's Name:</label>
            <input type="text" id="Father" name="Fathername" placeholder="Enter Fathers's name" required>

            <label for="FatherProfession">Father's Profession:</label>
            <input type="text" id="Fatherprofession" name="Fatherprofession" placeholder="Enter Fathers's profession" required>

            <label for="Fathermobileno">Father's  mobile number:</label>
            <input type="number" id="Fathermobileno" name="Fathermobileno" placeholder="Enter Fathers's mobile number" required>
           
            <label for="mother's">mother's Name:</label>
            <input type="text" id="mother's" name="mothername" placeholder="Enter mother's Name" required>

            <label for="MotherProfession">Mother's Profession:</label>
            <input type="text" id="Motherprofession" name="motherprofession" placeholder="Enter Mothers's profession" required>

            <label for="Mothermobileno">Mother's  mobile number:</label>
            <input type="number" id="Mothermobileno" name="mothermobileno" placeholder="Enter Mothers's mobile number" required>
           
            <label for="phonenumber">Phone number:</label>
            <input type="number" id="phonenumber" name="phonenumber" placeholder="Enter Phone number" required>
           
            <button type="submit">Register</button>
        </form>
        <p>Already have an account? <a href="login.html">Login here</a></p>
    </div>
</body>
</html> 
