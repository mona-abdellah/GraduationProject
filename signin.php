<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>sign_in</title>
    <link rel="stylesheet" href="assets/css/sign.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://kit.fontawesome.com/60e05f5ce2.js" crossorigin="anonymous"></script>


</head>

<body>
    <div class="container">
        <div class="form-box">
            <h1 id="title"> تسجيل الدخول </h1>
            <form action="connectin.php" method = 'POST'>

                <div class="input_group">

                    <div class="input_field">
                        <i class="fa-solid fa-envelope"></i>
                        <input type="email" name="email" placeholder="أدخل الإيميل " required>

                    </div>
                    <div class="input_field">
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" name="password" placeholder="أدخل كلمة المرور" required>

                    </div>
                    <div>
                        <p class="p" id="p1"> إن لم يكن لديك حساب بالفعل ؟ <a href="signup.php"> إضغط
                                هنا
                            </a></p>


                        <p class="p" id="p1">نسيت كلمة المرور ؟ <a href="forget.php"> إضغط
                                هنا
                            </a></p>
                    </div>


                </div>
                <div class="btn">
                <button type="submit" >تسجيل الدخول   </button>
                </div>

            </form>
        </div>
    </div>

</body>

</html>