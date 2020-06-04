function check_input() {
	if (!document.login_form.id.value)
	{
		alert("아이디를 입력하세요");
		document.login_form.id.focus();
		return;
	}

	if (!document.login_form.pass.value)
	{
		alert("비밀번호를 입력하세요");
		document.login_form.pass.focus();
		return;
	}
	document.login_form.submit();
}

function reset_login_form() {
	document.login_form.id.value = "";  
	document.login_form.pass.value = "";
	document.lgoin_form.id.focus();
	return;
}	