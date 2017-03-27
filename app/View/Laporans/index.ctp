
<script>
$(document).ready(function(){
	$("#contents_area").css("opacity","1");
	$("#contents_area").load("<?php echo $settings['cms_url'] . $ControllerName?>/ListItem/page:<?php echo $page?>/limit:<?php echo $viewpage?>/?time=<?php echo time()?>",function(){
		$("#contents_area").css("opacity","1");
		$("a[rel^='lightbox']").prettyPhoto({
			social_tools :''
		});

		$("#view").uniform();
		$('.tipS').tipsy({gravity: 's',fade: true});
	});
});

function onClickPage(el,divName)
{
	$(divName).css("opacity","0.5");
	$(divName).load(el.toString(),function(){
		$(divName).css("opacity","1");
		$("a[rel^='lightbox']").prettyPhoto({
			social_tools :''
		});
		$("#view").uniform();
		$('.tipS').tipsy({gravity: 's',fade: true});
	});
	return false;
}
function SearchAdvance()
{
	$("#SearchAdvance").ajaxSubmit({
		url:"<?php echo $settings['cms_url'].$ControllerName ?>/ListItem",
		type:'POST',
		dataType: "html",
		clearForm:false,
		beforeSend:function()
		{
			$("#reset").val("0");
			$("#contents_area").css("opacity","0.5");
		},
		complete:function(data,html)
		{
			$("#contents_area").css("opacity","1");
		},
		error:function(XMLHttpRequest, textStatus,errorThrown)
		{
			alert(textStatus);
		},
		success:function(data)
		{
			$("#contents_area").html(data);
		}
	});

	return false;
}
function ClearSearchAdvance()
{
	$("#SearchId, #SearchName").val("");
	$('#reset').val('1');
	SearchAdvance();
}
</script>
<!-- START BREADCRUMB -->
<ul class="breadcrumb">
	<li><a href="javascript:void(0)">Home</a></li>
	<li class="active">Laporan Berkala</li>
</ul>
<!-- END BREADCRUMB -->
<!-- PAGE TITLE -->
<div class="page-title">
	<h2><span class="fa fa-list-ul"></span> List Laporan Berkala</h2>
</div>
<!-- END PAGE TITLE -->

<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">

	<!-- START RESPONSIVE TABLES -->
	<div id="contents_area">
		 <!-- LIST ITEM START FROM HERE -->
	</div>
	<!-- END RESPONSIVE TABLES -->

</div>
<!-- END CONTENT WRAPPER -->
