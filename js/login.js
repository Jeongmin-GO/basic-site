function check_input() {
    if (!document.login_form.id.value) {
        alert("아이디를 입력하세요.");
        document.login_form.id.focus();
        return;
    }
    if (!document.login_form.pass.value) {
        alert("비밀번호를 입력하세요.");
        document.login_form.pass.focus();
        return;
    }
    document.login_form.submit(); //login_form.php의 form태그 action에 선언된 login.php로 이동
}