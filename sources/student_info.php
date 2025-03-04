<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- nhúng link css, font, icon, bootstrap -->
    <!-- ====================================== -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/info.css">
    <!-- ====================================== -->

    <title>Thông tin sinh viên</title>
</head>
<body>
    <div class="container">
        <h1>Thông tin sinh viên</h1>
        <form action="*" method="" enctype="multipart/form-data">
            <div class="avatar-container">
               <img id="avatarPreview" src="../imgs/avt.jpg" alt="Ảnh đại diện">
                <button id="uploadBtn">Chọn ảnh</button>
            </div>
            <div class="info-text">
                <input type="text" name="name" placeholder="Họ và tên" required>
                <input type="text" name="school" placeholder="Trường" required>
                <input type="text" name="major" placeholder="Chuyên ngành" required>
                <select name="stu_list" id="stuList" required>
                    <option value="">-----Chọn học vấn-----</option>
                    <option value="">Sinh viên đại học chính quy</option>
                    <option value="">Sinh viên đại học không chính quy</option>
                    <option value="">Sinh viên đại học liên thông</option>
                    <option value="">Sinh viên cao đẳng chính quy</option>
                    <option value="">Sinh viên cao đẳng không chính quy</option>
                    <option value="">Sinh viên cao đẳng liên thông</option>
                    <option value="">Sinh viên cao đẳng nghề</option>
                    <option value="">Khác</option>
                </select>
                <input type="email" name="mail" placeholder="Email" required>
                <input type="tel" name="phone" placeholder="Số điện thoại" required>
                <button type="submit">Cập nhật</button>
            </div>
        </form>
    </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>