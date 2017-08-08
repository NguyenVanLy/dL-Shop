function Tim_nguoi_dung(gtTim)
{
	if(gtTim=="")
	{
		$( "#hienthi" ).html("");
	}
	else
	{
	
		// ajax
		var form_data = {gt:gtTim};
				
		$.ajax({
		url: "xl_tim_nguoi_dung.php",
		type: 'POST',
		data: form_data,
		success: function(data) {
				$( "#hienthi" ).html(data);
			  }
			});
	}
}