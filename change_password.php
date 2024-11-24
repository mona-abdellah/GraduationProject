<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>sign_up ,sign_in</title>
    <link rel="stylesheet" href="assets/css/sign.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://kit.fontawesome.com/60e05f5ce2.js" crossorigin="anonymous"></script>


</head>

<body>
    <div class="container">
        <div class="form-box">
            <h1 id="title">تغير كلمة المرور </h1>
            <form action="password.php" name="myForm"  onsubmit="return validateForm()" method="post">
               
                        <div class="input_field">
                           
                            <input type="password" placeholder="أدخل كلمة المرور" required   name="pass1" minlength="3" maxlength="10">

                        </div>
                        <div class="input_field" id="confirm1">
                          
                            <input type="password" placeholder="تأكيد لكلمة المرور" required  name="pass2">

                        </div>
                        <div class="btn">
                            <button type="submit" value="text" >تأكيد </button>
                        
                        
                        </div>
            </form>           
                
           
        
    </div>
    <script src="assets/js/script.js"></script>
</body>

</html>