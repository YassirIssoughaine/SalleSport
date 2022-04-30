<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Salle de Sports</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
</head>
<body>
<div class="overlay">
    <form action="/login" method="POST">
        @csrf
        <!--   con = Container  for items in the form-->
        <div class="con">
            <!--     Start  header Content  -->
            <header class="head-form">
                <h2>E-Fitness</h2>
                <!--     A welcome message or an explanation of the login form -->
                <p>login here</p>
            </header>
            <!--     End  header Content  -->
            <br>
            <div class="field-set">

                <!--   user name -->
                <span class="input-item">
           <i class="fa fa-user-circle"></i>
         </span>
                <!--   user name Input-->
                <input class="form-input" name="email" id="txt-input" type="text" placeholder="@UserName" required>

                <br>
                <!--   Password -->
                <span class="input-item">
        <i class="fa fa-key"></i>
       </span>
                <!--   Password Input-->
                <input class="form-input" type="password" placeholder="Password" id="pwd"  name="password" required>
                <!--      Show/hide password  -->
                <span>
        <i class="fa fa-eye" aria-hidden="true"  type="button" id="eye"></i>
     </span>
                <br>
                <!--        buttons -->
                <!--      button LogIn -->
                <button class="log-in" type="submit" name="submit"> Log In </button>
            </div>

            <!--   other buttons -->
            <div class="other">
                <!--      Forgot Password button-->
                <button class="btn submits frgt-pass">Forgot Password</button>
                <!--     Sign Up button -->
                <button class="btn submits sign-up">Sign Up
                    <!--         Sign Up font icon -->
                    <i class="fa fa-user-plus" aria-hidden="true"></i>
                </button>
                <!--      End Other the Division -->
            </div>
            <!--   End Conrainer  -->
        </div>
        <!-- End Form -->
    </form>
</div>
<!-- =========== Scripts =========  -->
<script src="{{ asset('js/login.js') }}"></script>
</body>
</html>
