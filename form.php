<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>쇼핑몰</title>
    <link rel="stylesheet" href="style.css">
    <script>
        function check_input(){
            if(!document.member.id.value){
                alert("아이디를 입력하세요!");
                document.member.id.focus();
                return;
            }  
            if(!document.member.pass.value){
                alert("비밀번호를 입력하세요!");
                document.member.pass.focus();
                return;
            }
            if(!document.member.pass_confirm.value){
                alert("비밀번호확인을 입력하세요!");
                document.member.pass_confirm.focus();
                return;
            }    
            if(!document.member.name.value){
                alert("이름을 입력하세요!");
                document.member.name.focus();
                return;
            }    
            if(!document.member.email.value){
                alert("이메일 주소를 입력하세요!");
                document.member.email.focus();
                return;
            }        
            if(!document.member.id.value != document.member.pass_confirm.value){
                alert("비밀번호가 일치하지 않습니다.\n다시 입력해 주세요!");
                document.member.pass.focus();
                document.member.pass.select();
                return;
            }   
            document.member.submit();
        }
    </script>
</head>
<body>
    <form name="member" action="insert.php" methgod="post">
        <h2>회원가입</h2>
        <ul class="join_form">
        <li>
            <span class="col1">아이디</span>
            <span class="col2"><input type="text" name="id"></span>
            <span class="col3"><button type="button" onclick="">중복체크</button></span>
        </li>
        <li>
            <span class="col1">비밀번호</span>
            <span class="col2"><input type="passwork" name="pass"></span>
        </li>
        <li>    
            <span class="col1">비밀번호 확인</span>
            <span class="col2"><input type="passwork" name="pass_confirm"></span>
        </li>
        <li>
        <span class="col1">이름</span>
            <span class="col2"><input type="text" name="name"></span>
        </li>
        <li>
        <span class="col1">이메일</span>
            <span class="col2"><input type="text" name="e-mail"></span>
        </li>
    </ul>
    <ul class="buttons">
        <li><button type="button" onclick="check_input()">저장하기</button></li>
        <li><button type="button" onclick="rest_form()">취소하기</button></li>
</ul>
</form>
</body>
</html>