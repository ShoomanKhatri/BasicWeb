<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width , initial-scale=1.0">
    <link rel="stylesheet" href="https://www.phptutorial.net/app/css/style.css">
    <title>Register</title>
</head>
<body>
    <main>
        <form action="Register.php" method="post">
            <h1>sign up</h1>
            <div>
                <label for="username">Username:</label>
                <input type="text" name="username" id="username">
            </div>
            <div>
                <label for="email">Email:</label>
                <input type="email" name="email" id="email">
            </div>
            <div>
                <label for="password">Password:</label>
                <input type="password" namw="password" id="password">
            </div>
            <div>
                <label for="agree">
                    <input type="checkbox" name="agree" id="agree" value="yes"/> I agree with 
                    <a href="#" title="term of the services">term of the services</a>
                    
                </label>
            </div>
            <button type="submit"> Register</button>
            <footer> Already a member?<a href="login.php">Login here</a></footer>
        </form>
    </main>
</body>
</html>
