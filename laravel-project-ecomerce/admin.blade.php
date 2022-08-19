
<link rel="stylesheet" href="style2.css"> 
<main>
<form method="post" action="{{ url ('postadmin') }}">
    @csrf
    <div class="row">
            <div class="colm-logo photo"><img src="Pictures/logo3.png" alt="Logo" >
               
               
            </div>

            <div class="colm-form"><h2>Are you ADMIN?</h2>
                <div class="form-container">
                <input type="text" name="name" placeholder="Name" class="form-control p_input">
                    <input type="password" name="password" placeholder="Password"class="form-control p_input">
                    <button type="submit" class="btn login">Login</button>
                </div>
            </div> 

    </div>
</main>
<footer>
        <div class="footer-contents">
            
            <small>SPORTLY © 2022</small>
        </div>
    </footer>

</html>          



  <!--<div class="form-group ">
    <label>Name</label>
    <input type="text" name="name" class="form-control p_input">
  </div>
  <div class="form-group ">
    <label>Password </label>
    <input type="password" name="password" class="form-control p_input">
  </div>

  <div class="text-center">
    <button type="submit" class="btn btn-primary btn-block enter-btn">Admin</button>
  </div>


