
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
	<li class="active">Keberangkatan</li>
</ul>
<!-- END BREADCRUMB -->
<!-- PAGE TITLE -->
<div class="page-title">
	<h2><span class="fa fa-list-ul"></span> List Keberangkatan</h2>
</div>
<!-- END PAGE TITLE -->

<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">
	<div class="row">
		<div class="col-md-12">
			<div class="center-button center-block">
				<a href="<?php echo $settings["cms_url"].$ControllerName?>/Add" class="tile tile-primary "><span style="color:#ffffff;" class="fa fa-plus"></span><h3 style="color:#ffffff;">ADD</h3></a>
			</div>
		</div>
	</div>

	<!-- START ADVANCE SEARCH -->
    <div class="row">
        <div class="col-md-12">
            <div class="faq panel panel-primary">
                <div class="faq-item">
                    <div class="faq-title">
                        <span class="fa fa-angle-down"></span>Advance Search
                    </div>
                    <div class="faq-text">
											<!-- START VERTICAL FORM SAMPLE -->
													<div class="panel-default">
															<div class="panel-body">
																	<?php echo $this->Form->create("Search",array("onsubmit"=>"return SearchAdvance()","url"=>"","id"=>"SearchAdvance", "role"=>"form", "class" =>  "form-horizontal"))?>
																			<input name="data[Search][reset]" type="hidden" value="0" id="reset">
																			<div class="form-group">
																					<div class="col-md-3">
																							<?php
																									echo $this->Form->input('Search.name', array(
																											'label'         =>  'Nama Siswa',
																											'class'         =>  'form-control'
																									));
																							?>
																					</div>
																					<div class="col-md-3">
																							<?php
																									echo $this->Form->input('Search.personel_matra', array(
																											'label'         =>  'Matra Personel',
																											'class'         =>  'form-control select',
																											'options'       =>  $matras,
																											'empty'         =>  "Pilih Matra",
																									));
																							?>
																					</div>
																					<div class="col-md-3">
																							<?php
																									echo $this->Form->input('Search.personel_corps', array(
																											'label'         =>  'Korp Personel',
																											'class'         =>  'form-control select',
																											'options'       =>  $corps,
																											'empty'         =>  "Pilih Korp",
																									));
																							?>
																					</div>
																					<div class="col-md-3">
																							<?php
																									echo $this->Form->input('Search.personel_occupation', array(
																											'label'         =>  'Pangkat Personel',
																											'class'         =>  'form-control'
																									));
																							?>
																					</div>
																			</div>
																			<div class="form-group">
																				<div class="col-md-4">
																						<?php
																								echo $this->Form->input('Search.nama_pendidikan', array(
																										'label'         =>  'Nama Pendidikan',
																										'options'				=>	$programstudies,
																										'class'         =>  'form-control select',
																										'empty'					=>	'Pilih Pendidikan'
																								));
																						?>
																				</div>
																				<div class="col-md-4">
																						<?php
																								echo $this->Form->input('Search.edu_type_id', array(
																										'label'         =>  'Jenis Pendidikan',
																										'class'         =>  'form-control select',
																										'options'				=>	$list_education,
																										'empty'					=>	'Pilih Jenis Pendidikan'
																								));
																						?>
																				</div>
																				<div class="col-md-4">
																						<?php
																								echo $this->Form->input('Search.status', array(
																										'label'         =>  'Status Pendidikan',
																										'class'         =>  'form-control select',
																										'options'				=>	array('0'=>'Berjalan', '1'=>'Selesai', '2'=>'Tidak Selesai', '3'=>'Daftar Baru'),
																										'empty'					=>	'Pilih Status Pendidikan'
																								));
																						?>
																				</div>
																			</div>
																			<div class="form-group">
																				<div class="col-md-6">
																						<?php
																								echo $this->Form->input('Search.country_id', array(
																										'label'         =>  'Negara',
																										'class'         =>  'form-control select',
																										'options'				=>	$list_country,
																										'empty'					=>	'Pilih Negara'
																								));
																						?>
																				</div>
																				<div class="col-md-6">
																						<?php
																								echo $this->Form->input('Search.year', array(
																										'label'         =>  'Tahun',
																										'class'         =>  'form-control',
																										'options'				=>	array()
																								));
																						?>
																				</div>
																			</div>
																	<?php echo $this->Form->end()?>
																	<div class="form-group">
																			<div class="col-md-4">
																					<button type="button" class="btn btn-primary btn-rounded" href="javascript:void(0);" title="" onclick="return SearchAdvance();"><span class="fa fa-search"></span>Search</button>
																			</div>
																	</div>
															</div>
													</div>
											<!-- END VERTICAL FORM SAMPLE -->
                    </div>
                </div>
            </div>
        </div>
    </div>

	<!-- START RESPONSIVE TABLES -->
	<div id="contents_area">
		 <!-- LIST ITEM START FROM HERE -->
	</div>
	<!-- END RESPONSIVE TABLES -->

</div>
<!-- END CONTENT WRAPPER -->
