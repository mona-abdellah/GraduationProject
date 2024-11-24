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
            <h1 id="title">إنشاء حساب</h1>
            <form action="connectup.php" name="myForm"  onsubmit="return validateForm()" method="POST">
                <div class="input_group">
                    <div class="input_field" id="inputName">
                        <i class="fa-solid fa-user"></i>
                        <input type="text" name="name" placeholder="أدخل الاسم " required>

                    </div>
                    <div class="input_group">
                        <div class="input_field">
                            <i class="fa-solid fa-envelope"></i>
                            <input type="email" placeholder="أدخل الإيميل " required name="email">

                        </div>
                        <div class="input_field">
                            <i class="fa-solid fa-lock"></i>
                            <input type="password" placeholder="أدخل كلمة المرور" required   name="fname" minlength="3" maxlength="10">

                        </div>
                        <div class="input_field" id="confirm1">
                            <i class="fa-solid fa-lock"></i>
                            <input type="password" placeholder="تأكيد لكلمة المرور" required  name="fname1">

                        </div>

            </form>
            <div class="btn">
                <button type="submit" onclick="validateEmail(document.myForm.email)">إنشاء حساب  </button>
            </div>
        </div>
    </div>
    <script src="assets/js/script.js"></script>
</body>

</html>