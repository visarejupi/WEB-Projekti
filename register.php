<?php
    include 'header.php';
?>

    <main>
        <script src="register.js"></script>

        <div class="createaccount">
          
        <form id="createaccform">
          
            <div class="createacc">
            <h1>Sign up</h1>
            <p>Fill the following requests</p>
    
           <input type="name" name="register-username" placeholder="First Name" id="fname" /> <br>
           <input type="name" name="register-lastname" placeholder="Second Name" id="sname" /> <br>
           <input type="email" name="register-email"  placeholder="Email" id="createaccemail"  /> <br>
           <input type="password"name="register-password" placeholder="Enter Password " id="cpassword"  /> <br>
           <input type="password" placeholder="Confirm Password" id="cpassword1"  /> 
           <br>
            
           <button class="registerbtn" value="Login" name="register-btn" onClick="login()" >Sign Up</button>

            </div>
            </div>
            </div>
             </form>
            
     

    </main>

    <?php
 include 'footer.php';
 ?>