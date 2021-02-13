function login()
{
    var firstname = document.getElementById("fname").value;
    var surname = document.getElementById("sname").value;
    var email = document.getElementById("createaccemail").value;
    var pass = document.getElementById("cpassword").value;
    var cpass = document.getElementById("cpassword1").value;
    if(firstname == '')
    {
        alert("Enter your firstname")
        return false;
    }
    else if(surname == ''){
        alert("Enter your surname")
    }
    else if(email  =='' )
    {
        alert("Enter your email");
    }
    else if(pass=='')
    {
        alert("Enter your password");
    }
    else if(pass != cpass)
    {
        alert("Password does not match")
    }
    else if(pass.length  < 6  || cpass.length < 6)
    {
        alert("Password must be with 6 characters or more");
    }
    else
    {
alert('You logged in successfully');

        }
}		
