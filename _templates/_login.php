<?php
   $email = $_POST['email_address'];
   $password = $_POST['password'];

   echo $_email;

  //  $result = validate_credentials($email,$password);
  //   if ($result){
  //     // echo "login success";
      
  //   }
  //   else
  //   {

    
?>


<main class="form-signin w-100 m-auto">
  <form method="post" action="dummy.php">
    <img class="mb-4 txt-center" src="https://git.selfmade.ninja/uploads/-/system/appearance/header_logo/1/Logo_dark.png"alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">Please  login</h1>

    <div class="form-floating"> 
      <input  name="email_address" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <button class="w-100 btn btn-lg btn-primary hvr-skew" type="submit">Sign in</button>
    <p class="mt-5 mb-3 text-muted">&copy; All rights reserved</p>
  </form>
</main>

