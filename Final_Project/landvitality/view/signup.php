<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../asset/signup.css">
    <title>Sign Up</title>
    <script type="text/javascript" src="../js/signupval.js"></script>
</head>
<body>
    <div class="container">
        <header>
            <a class="menu-link" href="login.php">Login</a>
            <a class="menu-link" href="About.php">About</a>
        </header>
        <div class="signup-container">
            <fieldset class="form-container">
                <legend>Sign Up</legend>
                <form action="../controller/signupcheck.php" method="post" onsubmit="return signupval()">
                    <label for="id">ID :</label>
                    <input type="text" name="id" id="id" placeholder="Use Digits">

                    <label for="fusername">First Name :</label>
                    <input type="text" name="fusername" id="fusername" placeholder="First Name">

                    <label for="lusername">Last Name :</label>
                    <input type="text" name="lusername" id="lusername" placeholder="Last Name">

                    <label for="password">Password :</label>
                    <input type="password" name="password" id="password" placeholder="Password">

                    <label for="phone">Phone Number :</label>
                    <input type="text" name="phone" id="phone" placeholder="User Digits">

                    <label for="email">Email :</label>
                    <input type="text" name="email" id="email" placeholder="email">

                    <label for="gender">Gender:</label>
                    <select name="gender" id="gender">
                        <option value="none">Not Selected</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>

                    <label for="date_of_birth">Date of birth :</label>
                    <input type="text" name="date_of_birth" id="date_of_birth" placeholder="DD/MM/YYYY">

                    <div>
                        <input type="radio" name="usertype" id="admin" value="admin">Admin
                        <input type="radio" name="usertype" id="user" value="user" checked>User
                    </div>

                    <hr>

                    <input type="submit" name="submit" value="Signup">
                </form>
            </fieldset>
        </div>
    </div>
</body>
</html>
