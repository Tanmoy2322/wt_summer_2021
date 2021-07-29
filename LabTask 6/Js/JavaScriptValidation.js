function get(id){
  return document.getElementById(id);
}




function jsvalidationForm() {
  var Name = document.getElementById("name").value;
  var password = document.getElementById("password").value;
  var email = document.getElementById("email").value;
  var comment = document.getElementById("comment").value;
  var pattren = /^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/;
  var res = pattren.test(email);
  
  if (Name == "" ) {
   document.getElementById("err_name").innerHTML="Please fill Name";
  
  }
  else{
    document.getElementById("err_name").innerHTML="";
  }

  if(!res)
  {
    document.getElementById("err_email").innerHTML=" Your Email format is not correct";
    
  }
  else
  {
    document.getElementById("err_email").innerHTML="";
  }

 if (password.length<8) 
 {
   document.getElementById("err_password").innerHTML="Password contains 8 char";

  }
  else 
  {
    document.getElementById("err_password").innerHTML="";
  }

  if (comment.length<10) {
    document.getElementById("err_comment").innerHTML="Comment contains 10 char";
    
   }
   else 
   {
    document.getElementById("err_comment").innerHTML="";
   }

   if(v_Gender()==false)
   {
     document.getElementById("err_gender").innerHTML="Please Chosse Gender ";
  
   }
   else{
    document.getElementById("err_gender").innerHTML="";
   }

   if(!get("Singing").checked && !get("Dancing").checked && !get("Reading").checked){
    hasError=true;
    document.getElementById("err_hobby").innerHTML="Please Chosse one Hobby ";
    return false;
}

else 
{
  document.getElementById("err_hobby").innerHTML=" ";
}


}

function v_Gender(){
  var gen = document.getElementsByName("gender");
  var checked = false;
  for(var i=0;i<gen.length;i++){
      if(gen[i].checked){
          checked = true;
          break;
      }
  }
  return checked;
}
function v_Hobby(){
  var hoby = document.getElementsByName("hobbies[]");
  var checked = false;
  for(var i=0;i<hoby.length;i++){
      if(hoby[i].checked){
          checked = true;
          break;
      }
  }
  return checked;
}




