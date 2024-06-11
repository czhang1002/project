<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="CSS/Login.css">
        <title>Login</title>
    </head>

    <body>
        <main class="login_main_body">
            <div class="login_main_container login">
                <h2>LOGIN</h2>
                <form action="#">
                    <div class="input_box">
                        <span class="icon">
                            <ion-icon name="mail-outline"></ion-icon>
                        </span>
                        <input type="text" name="email" required>
                        <label>Email</label>
                    </div>
                    <div class="input_box">
                        <span class="icon">
                            <ion-icon name="key-outline"></ion-icon>
                        </span>
                        <input type="password" name="password" required>
                        <label>Password</label>
                    </div>
                    <div class="remember_forgot_argreement">
                        <label><input type="checkbox" name="remember">Remember me</label>
                        <a href="#">Forget Password</a>
                    </div>
                    <input type="submit" class="button" value="Login">
                    <div class="login_register">
                        <p>Do not have an account? 
                            <a href="#" class="register_link link">Register</a></p>
                    </div>
                </form>
            </div>
            <div class="login_main_container register">
                <h2>REGISTRATION</h2>
                <form action="#">
                    <div class="input_box">
                        <span class="icon">
                            <ion-icon name="person-outline"></ion-icon>
                        </span>
                        <input type="text" name="username" required>
                        <label>Username</label>
                    </div>
                    <div class="input_box">
                        <span class="icon">
                            <ion-icon name="mail-outline"></ion-icon>
                        </span>
                        <input type="text" name="email" required>
                        <label>Email</label>
                    </div>
                    <div class="input_box">
                        <span class="icon">
                            <ion-icon name="key-outline"></ion-icon>
                        </span>
                        <input type="password" name="password" required>
                        <label>Password</label>
                    </div>
                    <div class="remember_forgot_argreement">
                        <label><input type="checkbox" name="agreement">I agree to the terms & conditions</label>
                    </div>
                    <input type="submit" class="button" value="Register">
                    <div class="login_register">
                        <p>Already have an account?
                            <a href="#" class="login_link link">Login</a></p>
                    </div>
                </form>
            </div>
        </main>

        <script src="JS/Login.js"></script>
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    </body>
    
</html>