<?php
if (!userHasAccess($resource)) {
    // إعادة توجيه المستخدم أو إظهار رسالة خطأ
  }
  session_start();
$token = bin2hex(random_bytes(32));
$_SESSION['csrf_token'] = $token;
echo '<input type="hidden" name="csrf_token" value="' . $token . '">';








?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

    <meta name="google-site-verification" content="tnMdCt0vt_3-m3-T_TDKSp4FjS3XqdcdN8cuAtS7Ejo" />    <title>لعبة نسبة الحب</title>
    <h1>لعبة نسبة الحب</h1>
    <style>
        .body{
            text-align: center;
            background-image: url('0b18c3c6d6a553011cbdfd1b795c7e81.jpg'); /* استبدل 'path/to/your/image.jpg' بمسار الصورة الخاص بك */
            /* تعيين الحجم والتكرار والموضع */
            background-size: cover; /* تغطية الصفحة بالكامل */
            background-repeat: no-repeat; /* عدم تكرار الصورة */
            background-position: center center;  /* وضع الصورة في وسط الصفحة */
            /* تعيين الألوان الإضافية أو النصوص أو الأنماط الأخرى حسب الحاجة */
        }
        
    </style>
    <script>
        function calculateLove() {
            const name1 = document.getElementById('name1').value;
            const name2 = document.getElementById('name2').value;

            // Simple algorithm to calculate love percentage
            const lovePercentage = Math.floor(Math.random() * 101); // Random number between 0 and 100

            const result = document.getElementById('result');
            result.innerHTML = `The love percentage between ${name1} and ${name2} is ${lovePercentage}%`;
        }
    </script>
</head>
<body class="body">
    <label for="name1">Name 1:</label>
    <input type="text" id="name1" placeholder="الاسم الاول">
    <br>
    <label for="name2">Name 2:</label>
    <input type="text" id="name2" placeholder="الاسم الثاني">
    <br>
    <button onclick="calculateLove()">Calculate</button>
    <br>
    <div id="result"></div>
    <br>
    <button onclick="share()">مشاركة</button>

    <script>
        function sanitizeInput(input) {
            // قم بتنظيف البيانات المدخلة هنا
            return cleanInput;
          }
          
        function share() {
            // التحقق من إمكانية دعم مشاركة الويب
            if (navigator.share) {
                // المعلومات التي ستتم مشاركتها
                const shareData = {
                    title: ' لعبة معرفة نسبة الحب',
                    text: 'لعبة معرفة نسبة الحب',
                    url: 'https://love-rose-iota.vercel.app/', // الرابط الذي يتم مشاركته
                };

                // فتح نافذة المشاركة
                navigator.share(shareData)
                    .then(() => console.log('تمت المشاركة بنجاح.'))
                    .catch((error) => console.error('حدث خطأ أثناء المشاركة:', error));
            } else {
                alert('عذرًا، مشاركة الويب غير مدعومة في هذا المستعرض.');
            }
        }
    </script>
</body>
</html>