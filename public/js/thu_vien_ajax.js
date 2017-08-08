// JavaScript Document
$(document).ready(function(e) {
	
	$("#btnNT").click(function(){
			
			var email=$("#Email").val();
			if(email=="")
			{
				alert("Bạn chưa nhập email");
				email.focus();
				return false;
			}
			if(!checkEmail(email))
			{
				email.focus();
				return false;
			}
			// ajax
			var form_data = {mail:email};
			$.ajax({
			url: "xl_nhan_tin.php",
			type: 'POST',
			data: form_data,
			success: function(data) {
					
					if(data==1)
					{
						alert("Cập nhật mail thành công");	
					}
					else
					{
						alert("Cập nhật mail không thành công");
					}
				  }
				});
			
			
			return false;
		})
	
function checkEmail(email) {  
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/; 
    if (!filter.test(email)) { 
             alert('Định dạng email không hợp lệ.\nExample@gmail.com');
             email.focus; 
             return false; 
    }
    else
    {
    	return true;
    }
} 


});
