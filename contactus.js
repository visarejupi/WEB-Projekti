function login()
{
    var email = document.getElementById("contactemail").value;
    var txt = document.getElementById("textarea").value;
    if(email =='')
    {
        alert("Enter your email");
    }
    else if(txt == '')
    {
        alert("You should write something in text field")
    }
    else
    {
alert('Thank you for contacting us. We will write you back soon.');

        }
}		
