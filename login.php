<?php
    include 'header.php';
?>

    <main>
        <script src="login.js"></script>

        <div class="login1">
            <h1>Login</h1>
             <p>We are happy to have you here</p>
             </div>
             <form id="loginform" action="loginVerify.php" method="post" onsubmit="return validate()">             
              <div class="login">

             
           <input type="email"  name="login-email"placeholder="Email" id="loginemail" class="tb" /> <br>
            <input type="password" name="login-password"placeholder="Password" id="password">       
            <br>
            <button class="loginbtn" value="Login" name="login-btn"  onClick="login()" >Login</button>
                    
            </div>
            </form>
             </div>
     
             <div class="writeback">
     
                 <p>
                     Whenever any costumer sends us a feedback <br>
                     we try to respond as soon as possible <br>
                     So don't worry about how much it will take for <br>
                     us to respond. <br> Turn on notifications to get <br>
                     updated for every new feature we add
                 </p>
             </div>
     
         </main>

         <?php
 include 'footer.php';
 ?>