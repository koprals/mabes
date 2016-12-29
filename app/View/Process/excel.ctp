<style>
tr{
	height:30px;
	vertical-align:middle;
	padding-left:10px;
}
tr.header{
	background-color:#999999;
	font-weight:bold;
	font-size:16px;
}

tr.ganjil{
	background-color:#ffffff;
	font-weight:normal;
	font-size:14px;
}
tr.genap{
	background-color:#F0F0F0;
	font-weight:normal;
	font-size:14px;
}


</style>

<h5 style="text-align:Left;"><?php echo "TENTARA NASIONAL INDONESIA"?> <br> <?php echo "MARKAS BESAR"?></h5>
<h3 style="text-align:Center;"><?php echo "Control Siswa Luar Negeri Berdasarkan Negara untuk Periode 2016"?> <br> <?php echo "Nama Negara : Amerika Serikat"?></h3>
<table width="1350" border="1" cellspacing="0" cellpadding="0">
	<tr class="header">
		<td width="50">No</td>
		<td width="150">Nama Siswa</td>
		<td width="150">NRP Kesatuan</td>
		<td width="100">Pangkat</td>
		<td width="250">Nama Pendidikan</td>
		<td width="150">Jenis Pendidikan</td>
		<td width="150">Lama DIK bulan/hari</td>
		<td width="150">Berangkat</td>
		<td width="150">Kembali</td>
	</tr>
	
	<?php if(!empty($data)):?>
	<?php $count = 0;?>
	<?php foreach($data as $data): ?>
	<?php $count++;?>
	<?php $no		=	(($page-1)*$viewpage) + $count;?>
	<?php $class = ($count % 2 == 0) ? "ganjil" : "genap";?>
  	<tr class="<?php echo $class?>">
		<td style="text-align:center;"><?php echo $no; ?></td>
		<td style="text-align:center;"><?php echo $data['Personnel']['personnel_name'] ?></td>
		<td style="text-align:center;"><?php echo $data['Personnel']['personel_nrp'] ?></td>
		<td style="text-align:center;"><?php echo $data['Personnel']['personel_occupation'] ?></td>
		<td style="text-align:center;"><?php echo $data['AvailableCourse']['ProgramStudy']['edu_name'] ?></td>
		<td style="text-align:center;"><?php echo $data['AvailableCourse']['EducationType']['edu_type'] ?></td>
		<td style="text-align:center;"><?php echo $data[$ModelName]['long_term_education'] ?></td>
		<td style="text-align:center;"><?php echo $data[$ModelName]['depart'] ?></td>
		<td style="text-align:center;"><?php echo $data[$ModelName]['arrive'] ?></td>
	</tr>
	<?php endforeach;?>
	<?php else:?>
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	<?php endif;?>
</table>