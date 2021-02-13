<?php
    include 'header.php';
?>

    <main>
        <script src="contactus.js"></script>
        <div class="contactus">
       <h1>Contact us!</h1>
        <p>Do not hesitate to contact our team</p>
        </div>
        <form id="contactform">             
         <div class="contact">
        
                <input type="email" placeholder="Email" id="contactemail" class="tb" /> <br>
                 
                <textarea rows="4" cols="50" name="comment" id="textarea" required form="usrform" placeholder="Enter your text here..."></textarea><br>                 
        
                <button class="feedbackbtn" value="Login"  onClick="login()" >Send Feedback</button>
                
                </div>
                </form>
        </div>

        <div class="writeback">

            <p>
                Whenever any costumer sends us a feedback <br>
                we try to respond as soon as possible <br>
                So don't worry about how much it will take for <br>
                us to respond
            </p>
        </div>

    </main>
    <?php
 include 'footer.php';
 ?>