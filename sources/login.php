<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- link css, icon, font, bootstrap -->
     <!-- ========================================== -->
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200 "/>
     <!-- ========================================== -->
    <title>Document</title>
</head>

<body>
    <div class="container" id="main">
        <div class="sign-up">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
                <h1>Tạo tài khoản</h1>
                <div class="input-group">
                    <input type="text" name="txt" placeholder="Tên đăng nhập" required>
                    <input type="password" id ="passSignUp"name="passSignUp" placeholder="Mật khẩu" required>
                    <input type="email" name="email" placeholder="Email" required>
                </div>
                <h4>Bạn là ai?</h4>
                <ul class="role-list">
                    <li><input type="radio" name="role" value="0" id="company" required>Tổ chức</li>
                    <li><input type="radio" name="role" value="1" id="student" required>Sinh viên</li>
                    <li><input type="radio" name="role" value="2" id="worker" required>Ứng viên xin việc</li>
                </ul>
                <button type="submit">Đăng ký</button>
            </form>
        </div>
        <div class="sign-in">
            <form action="#">
                <h1>Đăng nhập</h1>
                <div class="input-group">
                    <input type="email" name="email" placeholder="Email" required>
                    <input type="password" id ="passSignIn" name="passSignIn" placeholder="Mật khẩu" required>
                    <span id ="eye-open"class="material-symbols-outlined icon ">
                        visibility
                    </span>
                    <span id ="eye-close" class="material-symbols-outlined icon">
                        visibility_off
                    </span>
                </div>
                <a href="#">Quên mật khẩu?</a>
                <button type="submit">Đăng nhập</button>
            </form>
        </div>
        <div class="panel-container">
            <div class="panel">
                <div class="panel-left">
                    <h1>Chào mừng bạn trở lại!</h1>
                    <p>Đăng nhập để tiếp tục trải nghiệm</p>
                    <button id="signIn">Đăng nhập</button>
                </div>
                <div class="panel-right">
                    <h1>Chào bạn!</h1>
                    <p>Đăng ký để bắt đầu trải nghiệm!</p>
                    <button id="signUp">Đăng ký</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        const signUp = document.getElementById('signUp');
        const signIn = document.getElementById('signIn');
        const main = document.getElementById('main');
        const eyeOpen = document.getElementById('eye-open');
        const eyeClose = document.getElementById('eye-close');
        const passSignIn = document.getElementById('passSignIn');
        eyeOpen.addEventListener('click', () => {
            eyeOpen.style.display = 'none';
            eyeClose.style.display = 'block';
            passSignIn.setAttribute('type', 'password');    
        });
        eyeClose.addEventListener('click', () => {
            eyeOpen.style.display = 'block';
            eyeClose.style.display = 'none';
            passSignIn.setAttribute('type', 'text');
        });
       
        signUp.addEventListener('click', () => {
            main.classList.add('right-panel-active');
        });
        signIn.addEventListener('click', () => {
            main.classList.remove('right-panel-active');
        });

    </script>
</body>

</html>