<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <title>회원 관리 시스템</title>
</head>
<body>
    <h1>회원 관리 시스템</h1>
    <a href="select.php">(1) 회원 조회 (조회 후 수정/삭제 가능)</a> /<br><br>
    <a href="insert.php">(2) 회원 신규 등록</a> /<br><br>
    <form method="get" action="update.php">(3) 회원 수정 - 회원 아이디: <input type="text" name="userid">
        <input type="submit" value="수정"></form>
    <form method="get" action="delete.php">(4) 회원 삭제 - 회원 아이디: <input type="text" name="userid">
        <input type="submit" value="삭제"></form>
</body>
</html>