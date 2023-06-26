<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
    <!--Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- logo -->
  <link rel="shortcut icon" href="{{ asset('Images/logo.png') }}" type="image/png">

    <style>
        body{
            width: 100vw;
            height: 100vh;
            box-sizing: border-box;
            background-color: #ebebeb;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .login-form {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100%;
        }
        .login-form form {
            width: 350px;
            background-color: white;
            border: 1px solid hsl(0, 0%, 80%);
        }

        .card{
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #ebebeb;
        }

        p{
            font-size: 15px;
        }

        .btn-primary{
            border-radius: 20px;
        }

        .image{
            width: 150px;
            height: 150px;
        }

        .image img{
            width: 100%;
            height: 100%
        }

        .footer .container{
            display: flex;
            align-items: center;
            justify-content: center;
        }

        @media (max-width: 576px) {
            .login-form form {
                width: 100%;
                padding: 0 15px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="login-form">
            <div class="image">
                <img src="{{asset('Images/logo.png')}}" alt="logo">
            </div>
            <form action="{{ route('login.post') }}" method="POST">
                @csrf
                <div class="form-group mb-4 card">
                    <p class="">Medical Store Management System (MSMS)</h2>
                </div>
                <div class="form-group px-3">
                    <label for="email">Email address</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="Enter email">
                </div>
                <div class="form-group px-3">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Enter password">
                </div>
                <div class="form-group px-3 text-center">
                    <button type="submit" class="btn btn-primary w-75"><i class="fa-solid fa-right-to-bracket pr-2"></i>Submit</button>
                </div>
            </form>
        </div>

        <footer class="footer mt-4">
            <div class="container">
                <span>Allright &copy; <span id="year"></span> By Swahili Developers.</span>
            </div>
        </footer>
    </div>

    <script>
        document.getElementById('year').innerHTML = new Date().getFullYear();
    </script>
</body>
</html>
