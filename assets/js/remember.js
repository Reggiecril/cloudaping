if ($("#remember_me").attr("checked")) {
　　　　$.cookie("rmbUser", "true", { expires: 7 }); //存储一个带7天期限的cookie
　　　　$.cookie("email", account, { expires: 7 });
　　　　$.cookie("password", password, { expires: 7 });
}
else {
　　　　$.cookie("rmbUser", "false", { expire: -1 });
　　　　$.cookie("email", "", { expires: -1 });
　　　　$.cookie("password", "", { expires: -1 });
}
$().ready(function(){
　　　　//获取cookie的值
　　　　var email = $.cookie('email');
　　　　var password = $.cookie('password');
 
　　　　//将获取的值填充入输入框中
　　　　$('#email').val(email);
　　　　$('#password').val(password); 
　　　　if(email != null && email != '' && password != null && password != ''){
  //选中保存秘密的复选框
　　　　 $("#remember_me").attr('checked',true);
		}
});