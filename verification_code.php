<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>confirmCode</title>
    <link rel="stylesheet" href="assets/css/sign.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://kit.fontawesome.com/60e05f5ce2.js" crossorigin="anonymous"></script>


</head>

<body>
    <div class="container">
        <div class="form-box">
            <!-- <h1 id="title">إنشاء حساب</h1> -->
            <form action="verify_code.php" name="myForm" method="POST">
                    
                    <div class="input_group">
                        <p>قم بإدخال الكود الذى تم إرساله للإيميل</p>
                        
                        <div class="input_field">
                            
                            <input type="text" placeholder="أدخل الكود" required name="code">

                        </div>
                    </div>
                    
                    <div class="btn">
                        <button type="submit" value="text">إرسال </button>
                    </div>

            </form>
        </div>
    </div>
    <script src="assets/js/script.js"></script>
</body>

</html>