$(function(){

	$(".list-group .active").nextAll().hide();
	$(".list-group .active").eq(0).nextAll().toggle();

	 $(".list-group .active").click(function(){
	 	  $(".list-group .active").nextAll().hide();
	 	  $(this).nextAll().show();
	 })
	$(".update").click(function(){
		$(".hidden").removeClass("hidden");
		$("#input_id").val($(this).parent().prevAll().eq(4).html());
		$("#input_title").val($(this).parent().prevAll().eq(3).html());
		$("#input_time").val($(this).parent().prevAll().eq(0).html());
		$("#input_editor").val($(this).parent().prevAll().eq(1).html());
		$("#input_content").val($(this).parent().prevAll().eq(2).html());
		$(window).scrollTop(1000);
	})
})
var editor;
KindEditor.ready(function(K){
    K.create(".content",{resizeType : 0,})
})