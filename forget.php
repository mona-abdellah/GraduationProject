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
            <h1 id="title">نسيت كلمة المرور </h1>
            <form action="gmail/send.php" method="POST">
                   
                    <div class="input_group">
                        <div class="input_field">
                            
                            <input type="email" placeholder="أدخل الإيميل " required name="email">

                        </div>
                    </div>   

                    <div class="btn">
                        <button type="submit" value="text" id="myButton" onclick="validateEmail(document.myForm.email)">تأكيد</button>
                    </div>

            </form>
        </div>
    </div>
    <script src="assets/js/script.js"></script>
 

    <script type="text/javascript">
        document.getElementById("myButton").onclick = function () {
            location.href = "verfication_code.php";
        };
    </script>

</body>

</html>