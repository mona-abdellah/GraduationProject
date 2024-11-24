function validateForm() {
    let x = document.forms["myForm"]["fname"].value;
    let x1=document.forms["myForm"]["fname1"].value;
    if (x != x1) {
      alert("كلمة المرور ليست متطابقة !");
      return false;
    }
  }
  function validateEmail(emailId)
  {
  var mailformat = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
  if(emailId.value.match(mailformat))
  {
  document.myForm.text1.focus();
  return true;
  }
  else
  {
  alert(" ! عنوان البريد غير صالح ");
  document.myForm.text1.focus();
  return false;
  }
  } 
  

//   document.getElementById("myButton").onclick = function () {
//     location.href = "#cofirmPassword.html";
// };





