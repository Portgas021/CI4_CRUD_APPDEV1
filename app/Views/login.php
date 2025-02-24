<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Netflix Login Page | CodingNepal</title>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;600;700&display=swap");
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Roboto', sans-serif;
        }
        body {
            background: #000;
        }
        body::before {
            content: "";
            position: absolute;
            left: 0;
            top: 0;
            opacity: 0.5;
            width: 100%;
            height: 100%;
            background: url("images/hero-img.jpg");
            background-position: center;
        }
        nav {
            position: fixed;
            padding: 25px 60px;
            z-index: 1;
        }
        nav a img {
            width: 167px;
        }
        .form-wrapper {
            position: absolute;
            left: 50%;
            top: 50%;
            border-radius: 4px;
            padding: 70px;
            width: 450px;
            transform: translate(-50%, -50%);
            background: rgba(0, 0, 0, .75);
        }
        .form-wrapper h2 {
            color: #fff;
            font-size: 2rem;
        }
        .form-wrapper form {
            margin: 25px 0 40px;
        }
        form .form-control {
            height: 50px;
            position: relative;
            margin-bottom: 16px;
        }
        .form-control input {
            height: 100%;
            width: 100%;
            background: #333;
            border: none;
            outline: none;
            border-radius: 4px;
            color: #fff;
            font-size: 1rem;
            padding: 0 20px;
        }
        .form-control input:is(:focus, :valid) {
            background: #444;
            padding: 16px 20px 0;
        }
        .form-control label {
            position: absolute;
            left: 20px;
            top: 50%;
            transform: translateY(-50%);
            font-size: 1rem;
            pointer-events: none;
            color: #8c8c8c;
            transition: all 0.1s ease;
        }
        .form-control input:is(:focus, :valid)~label {
            font-size: 0.75rem;
            transform: translateY(-130%);
        }
        form button {
            width: 100%;
            padding: 16px 0;
            font-size: 1rem;
            background: #e50914;
            color: #fff;
            font-weight: 500;
            border-radius: 4px;
            border: none;
            outline: none;
            margin: 25px 0 10px;
            cursor: pointer;
            transition: 0.1s ease;
        }
        form button:hover {
            background: #c40812;
        }
        .form-wrapper a {
            text-decoration: none;
        }
        .form-wrapper a:hover {
            text-decoration: underline;
        }
        .form-wrapper :where(label, p, small, a) {
            color: #b3b3b3;
        }
        form .form-help {
            display: flex;
            justify-content: space-between;
        }
        form .remember-me {
            display: flex;
            align-items: center;
        }
        form .remember-me input {
            margin-right: 5px;
            accent-color: #b3b3b3;
        }
        form .form-help :where(label, a) {
            font-size: 0.9rem;
        }
        .extra-links {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }
        .extra-links a {
            color: #fff;
            font-size: 0.9rem;
        }
        .extra-links a:first-child {
            color: #0071eb;
        }
        @media (max-width: 740px) {
            body::before {
                display: none;
            }
            nav, .form-wrapper {
                padding: 20px;
            }
            nav a img {
                width: 140px;
            }
            .form-wrapper {
                width: 100%;
                top: 43%;
            }
            .form-wrapper form {
                margin: 25px 0 40px;
            }
        }
    </style>
</head>
<body>
    
    <div class="form-wrapper">
        <h2>Sign In</h2>
        <form action="#">
            <div class="form-control">
                <input type="text" required>
                <label>Email or phone number</label>
            </div>
            <div class="form-control">
                <input type="password" required>
                <label>Password</label>
            </div>
            <button type="submit">Sign In</button>
            <div class="form-help"> 
                <div class="remember-me">
                    <input type="checkbox" id="remember-me">
                    <label for="remember-me">Remember me</label>
                </div>
                <a href="#">Need help?</a>
            </div>
        </form>
        <div class="extra-links">
            <a href="#">Forgot password?</a>
            <a href="register.php">Sign up now</a>
        </div>
    </div>
</body>
</html>
