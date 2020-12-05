<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
<title>PHP 프로그래밍 입문</title>
<link rel="stylesheet" type="text/css" href="./css/common.css">
<link rel="stylesheet" type="text/css" href="./css/member.css">
<script>
    function check_input() { // 폼양식에 데이터가 들어와 있는지 확인
        if(!document.member_form.id.value) {
            alert("아이디를 입력하세요!");
            document.member_form.id.focus();
            return;
        }
        if(!document.member_form.pass.value) {
            alert("비밀번호를 입력하세요!");
            document.member_form.pass.focus();
            return;
        }
        if(!document.member_form.pass_confirm.value) {
            alert("비밀번호 확인을 입력하세요!");
            document.member_form.pass_confirm.focus();
            return;
        }
        if(!document.member_form.name.value) {
            alert("이름을 입력하세요!");
            document.member_form.name.focus();
            return;
        }
        if(!document.member_form.email1.value) {
            alert("이메일을 입력하세요!");
            document.member_form.email1.focus();
            return;
        }
        if(!document.member_form.email2.value) {
            alert("이메일을 입력하세요!");
            document.member_form.email2.focus();
            return;
        }
        if(document.member_form.pass.value !=
        document.member_form.pass_confirm.value){
            alert("비밀번호가 일치하지 않습니다. \n 다시 입력해주세요");
            document.member_form.pass.focus();
            document.member_form.pass.select();
            return;
        }
        document.member_form.submit(); //사용자가 입력한 데이터를 post방식으로 전달 
    }

    function reset_form() { //입력창 정보 초기화하는 함수 , 취소하기 버튼 누르면 호출
      document.member_form.id.value = "";  
      document.member_form.pass.value = "";
      document.member_form.pass_confirm.value = "";
      document.member_form.name.value = "";
      document.member_form.email1.value = "";
      document.member_form.email2.value = "";
      document.member_form.id.focus();
      return;
   }

   function check_id() { //아이디 중복확인 함수
    window.open("member_check_id.php?id=" + document.member_form.id.value,
         "IDcheck",
          "left=700,top=300,width=350,height=200,scrollbars=no,resizable=yes");
   }

</script>
</head>
<body> 
	<header>
    	<?php include "header.php";?>
    </header>
	<section>
		<div id="main_img_bar">
            <img src="./img/main_img.png">
        </div>
        <div id="main_content">
      		<div id="join_box">
          	<form  name="member_form" method="post" action="member_insert.php">
			    <h2>회원 가입</h2>
    		    	<div class="form id">
				        <div class="col1">아이디</div>
				        <div class="col2">
							<input type="text" name="id">
				        </div>  
				        <div class="col3">
				        	<a href="#"><img src="./img/check_id.gif" 
				        		onclick="check_id()"></a>
				        </div>                 
			       	</div>
			       	<div class="clear"></div>

			       	<div class="form">
				        <div class="col1">비밀번호</div>
				        <div class="col2">
							<input type="password" name="pass">
				        </div>                 
			       	</div>
			       	<div class="clear"></div>
			       	<div class="form">
				        <div class="col1">비밀번호 확인</div>
				        <div class="col2">
							<input type="password" name="pass_confirm">
				        </div>                 
			       	</div>
			       	<div class="clear"></div>
			       	<div class="form">
				        <div class="col1">이름</div>
				        <div class="col2">
							<input type="text" name="name">
				        </div>                 
			       	</div>
			       	<div class="clear"></div>
			       	<div class="form email">
				        <div class="col1">이메일</div>
				        <div class="col2">
							<input type="text" name="email1">@<input type="text" name="email2">
				        </div>                 
			       	</div>
			       	<div class="clear"></div>
			       	<div class="bottom_line"> </div>
			       	<div class="buttons">
	                	<img style="cursor:pointer" src="./img/button_save.gif" onclick="check_input()">&nbsp;
                  		<img id="reset_button" style="cursor:pointer" src="./img/button_reset.gif"
                  			onclick="reset_form()">
	           		</div>
           	</form>
        	</div> <!-- join_box -->
        </div> <!-- main_content -->
	</section> 
	<footer>
    	<?php include "footer.php";?>
    </footer>
</body>
</html>