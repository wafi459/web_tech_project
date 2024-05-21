function jsValidate()  {
    const x = document.getElementById("uname");
    const y = document.getElementById("pass");
     
   let flag = true; 
     
    if (x.value === "") {
    flag = false;
      document.getElementById('error1').innerHTML = "Please fill up the username";
    }
    if (y.value === "") {
    flag = false;
    document.getElementById('error2').innerHTML = "Please fill up the password";
    }
     
    return flag;
}

function jsValidate2()  {
  const x = document.getElementById("uname");
  const y = document.getElementById("email");
  const z = document.getElementById("pass");
   
 let flag = true; 
   
  if (x.value === "") {
  flag = false;
    document.getElementById('error1').innerHTML = "Please fill up the username";
  }
  if (y.value === "") {
  flag = false;
  document.getElementById('error2').innerHTML = "Please fill up the Email address";
  }

  if (z.value === "") {
    flag = false;
    document.getElementById('error3').innerHTML = "Please fill up the Password";
    }
   
  return flag;
}