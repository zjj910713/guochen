
//询问操作
$(document).on('click', '.alert-do', function(){
	var thise=$(this), title=thise.data('title'), url=thise.data('url');
	layer.confirm(title, {
	btn: ['确定','取消']
	}, function(){
		var loadpage=layer.load(1, {shade: [0.8, '#393D49']});
		$.getJSON(url, {}, function(e){
			layer.close(loadpage);
			if(e.state){
				if(e.url && e.url!=''){
					window.location.href=e.url;	
				}else{
					window.location.reload();	
				}
			}else{
				layer.alert(e.msg);
			}
		});
	}, function(){
		layer.msg('取消');
	});
});

//laydate 选择日期
$(document).on('click', '.lay-datetime', function(){
	laydate({istime:true, format:'YYYY-MM-DD hh:mm:ss'});
});
$(document).on('click', '.lay-date', function(){
	laydate();
});

//刷新当前页面
$(document).on('click', '.reload', function(){
	window.location.reload();
});

//表单异步提交
$(document).on('submit', '.form-post-submit', function(e){
	e.preventDefault();
	var f = $(".form-post-submit"), url = f.attr('action'), d = f.serialize(), loadpage=layer.load(1, {shade: [0.8, '#393D49']});
	$.post(url, d, function(e){
		layer.close(loadpage);
		if(e.state){
			if(e.url && e.url!=''){
				window.location.href=e.url;
			}else{
				window.location.reload();
			}
		}else{
			layer.alert(e.msg);
		}
	}, 'json');

});
$(document).on('submit', '.open-form-post-submit', function(e){
	e.preventDefault();
	var f = $(".open-form-post-submit"), url = f.attr('action'), d = f.serialize(), loadpage=layer.load(1, {shade: [0.8, '#393D49']});
	$.post(url, d, function(e){
		layer.close(loadpage);
		if(e.state){
			parent.window.location.reload();
		}else{
			layer.alert(e.msg);
		}
	}, 'json');

});
$(document).on('click', '.ajax-edit-submit', function(){
	var thise=$(".ajax-edit-form"), url=thise.attr('action'), d=thise.serialize(), loadpage=layer.load(1, {shade: [0.8, '#393D49']});
	$.post(url, d, function(e){
		layer.close(loadpage);
		if(e.state){
			if(e.url && e.url!=''){
				window.location.href=e.url;
			}else{
				window.location.reload();
			}
		}else{
			layer.alert(e.msg);
		}
	}, 'json');
});

//图片上传
var globthis;
$(document).on('click', '.me-image-group .me-image', function(){
	globthis=$(this);
	var xxx = $(".me-upload-iamge-form").html();
	if(xxx){
		$(".me-upload-iamge-form").remove();
	}
	var updiv = '<div class="me-upload-iamge-form" style="display:none;"><input type="file" id="meimagefile"/></div>';
	$("body").append(updiv);
	$(".me-upload-iamge-form #meimagefile").click();
});
$(document).on('change', '.me-upload-iamge-form #meimagefile', function(){
	var name = globthis.data('title'), mul=globthis.data('id'), link=globthis.data('link');
	var file = $("#meimagefile").prop ('files')[0];
	if (!/image\/\w+/.test(file.type)) {
		layer.alert('不是图片格式');
		return false;
	}
	var reader = new FileReader();
	reader.readAsDataURL(file);
	reader.onload = function(e) {
		var indexload = layer.load(2, {shade: [0.8, '#393D49'], scrollbar: false});
		// var oldimg = $('.show-img input').val();
		var oldimg = globthis.parents(".me-image-group").find(".show-img input").val();
		$.ajax({
			type:'POST',
			async:true,
			crossDomain:true,
			url:'/api/uploadimage',
			data:{base64:this.result,token:admin_token,oldimage:oldimg},
			dataType:'json',
			success: function(data){
			layer.close(indexload);
			if(data.state) {
				var filename = data.data.name;
				var fileimg = data.data.img;
				if (mul == 0) {
					var newdiv = '<div class="show-upimg">' +
						'<div class="show-img">' +
						'<input type="hidden" name="' + name + '" value="' + filename + '">' +
						'<img src="' + fileimg + '-adminsamll">' +
						'</div>' +
						'<div class="show-btn">' +
						'<a class="bnt btn-danger btn-xs show-upimg-del">删除</a>' +
						'</div>' +
						'</div>';
					globthis.parents(".me-image-group").find(".me-image-list").html(newdiv);
				}else{
					if(link == 1){
						var newdiv = '<div class="show-upimg show-upimg-link">' +
							'<div class="show-img">' +
							'<input type="hidden" name="' + name + '[]" value="' + filename + '">' +
							'<img src="' + fileimg + '-adminsamll">' +
							'</div>' +
							'<div>' +
							'<input type="text" class="form-control" name="link[]" value="">' +
							'</div>' +
							'<div class="show-btn">' +
							'<a class="bnt btn-danger btn-xs show-upimg-del">删除</a>' +
							'</div>' +
							'</div>';
					}else{
						var newdiv = '<div class="show-upimg">' +
							'<div class="show-img">' +
							'<input type="hidden" name="' + name + '[]" value="' + filename + '">' +
							'<img src="' + fileimg + '-adminsamll">' +
							'</div>' +
							'<div class="show-btn">' +
							'<a class="bnt btn-danger btn-xs show-upimg-del">删除</a>' +
							'</div>' +
							'</div>';
					}
					globthis.parents(".me-image-group").find(".me-image-list").append(newdiv);
				}
			}else{
				layer.alert(data.msg);
			}
		}
		});
	};
});
$(document).on('click', '.show-upimg-del', function(){
	$(this).parents('.show-upimg').remove();
});
//弹出窗口
$(document).on('click', '.lay-open', function(){
	var url = $(this).data('url');
	layer.open({
		type: 2,
		title: '弹出窗口',
		scrollbar: false,
		shadeClose: false,
		shade: 0.8,
		area: ['80%', '100%'],
		content: url
	});
});

var $tips;
$(document).on('mouseover', '.show-img img', function(){
	var $e = $(this), src=$e.attr('src');
	$tips = layer.tips('<img style="max-width: 400px;" src="'+src+'"/>', $e, {tips:1, area: ['auto', 'auto']});
});

$(document).on('mouseout', '.show-img img', function(){
	layer.close($tips);
});

