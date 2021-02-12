<?php
include 'header.php';
    ?>
    <main>
        <form id="form">
      
            <div class="login">
            <h1>Log in</h1>
            <p>In order to buy the product you need to log in or sign up</p>
    
           <input type="email" placeholder="Email" id="loginemail" class="tb" />
         
            <input type="password" placeholder="Enter Password here" id="password" class="tb" />
        
            <div class="loginbutonat">

            <button class="loginbtn" value="Login"  onClick="login()" >Log in</button>
            <a href="createacc.html">Don't have an account? Create one.</a>

            </div>
            </div>
             </form>
            
    </main>
      
 <?php
 include 'footer.php';
 ?>
  