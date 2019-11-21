
function showPassword(id){
	$('#' + id + '-btn-show').click(function(){
		$showed = true;
		if($('#' + id).attr('type') == 'password'){
			$showed = false;
		}else{
			$showed = true;
		}

		if($showed){
			$('#' + id).attr('type','password');
		}else $('#' + id).attr('type','text');
	});
}

function deleteRow(el){
	bootbox.confirm({
		title:"Xác nhận",
		message:"<strong>Bạn muốn xóa!</strong>",
		size: 'small',
		buttons: {
	        confirm: {
	            label: 'Yes',
	            className: 'btn-success'
	        },
	        cancel: {
	            label: 'No',
	            className: 'btn-danger'
	        }
	    },
	    backdrop: true,
	    callback:function(result){ 
			if(result) window.location = $(el).attr('data-href');
		}
	});
}