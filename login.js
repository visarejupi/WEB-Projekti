function login()
{
    var email = document.getElementById("loginemail").value;
    var pass = document.getElementById("password").value;
    if(email =='')
    {
        alert("Enter your email");
    }
    else if(pass=='')
    {
        alert("Enter your password");
    }
    else if(pass.length < 6 )
    {
        alert("Password must be with 6 characters or more");
    }
    else
    {
alert('You logged in successfully');

        }
}		
