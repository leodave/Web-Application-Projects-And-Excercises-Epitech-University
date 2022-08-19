

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPORTLY-Login or Sign up</title>
 <link rel="stylesheet" href="style2.css"> 
</head>
<main>
  <form method="post" action="{{ url ('postlogin') }}">
    @csrf
    <div class="row">
            <div class="colm-logo photo"><img src="Pictures/logo3.png" alt="Logo" >
               
               
            </div>
            <div class="colm-form">
                <div class="form-container">
                    <input type="text" name="name" placeholder="Name" class="form-control p_input">
                    <input type="password" name="password" placeholder="Password"class="form-control p_input">
                    <button type="submit" class="btn-login">Login</button>
                   
                    <button class="sign-up"><a href="{{ url ('viewregister') }}"> Register</a></button>
                </div>
                <p>Login or register to create a free ad </p>
            </div>
        </div>

</form>
</main> 
 <footer>
        <div class="footer-contents">
            
            <small>SPORTLY © 2022</small>
        </div>
    </footer>

</html>




 