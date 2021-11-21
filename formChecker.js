var  username=document.getElementById("username");
let password=document.getElementById("password");
let item1=document.getElementById("Tshirtitem");
let item2=document.getElementById("JeansItem");
let item3=document.getElementById("baseballcap");
 function check(){
     var radios = document.getElementsByName("shipping");
     for (var i = 0;  i<(radios.length); i++) {
          if (radios[i].checked) {
              return true;
          }
     }

     return false;
 }
function validateForm()
{
        if(username.value.length==0)
        {
                alert("Username field is empty");
                return false;
        }

        else if(password.value.length==0)
        {
                alert("Password field is empty");
                return false;
        }
        else if(check()==false)
        {
                alert("Haven't selected shipping option");
                return false;
        }





}
