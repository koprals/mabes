<div align="center" style="font-family:Arial, Helvetica, sans-serif;">
    <table width="100%" border="0" cellspacing="0" cellpadding="0" style="font-family:Arial, Helvetica, sans-serif;">
        <tr>
            <td align="center">
                <h2 style="font-weight:bold;margin:5px;">LAPORAN PEMBERANGKATAN/KEMBALI</h2>
                <h2 style="font-size:16px;font-weight:bold;margin:5px;">TUGAS BELAJAR LUAR NEGERI</h2>
            </td>
        </tr>
        <tr>
          <td>_____________________________________________________________________________</td>
        </tr>
    </table>
</div>

<div align="left" style="font-family:Arial, Helvetica, sans-serif;">
    <table width="100%" border="0" cellspacing="0" cellpadding="0" style="font-family:Arial, Helvetica, sans-serif;">
        <tr>
          <td><br></td>
        </tr>
        <tr>
            <td width="50%" style="font-size:14px;font-weight:bold;">
                Nama Personnel
            </td>
            <td width="80%" style="font-size:14px;font-weight:bold;">
                : <?php echo $detail[$ModelName]['personnel_name'] ?>
            </td>
        </tr>
        <tr>
            <td width="50%" style="font-size:14px;font-weight:bold;">
                Matra/Korps/NRP
            </td>
            <td  width="80%" style="font-size:14px;font-weight:bold;">
                : <?php echo $detail[$ModelName]['SMatra'] ?>/<?php echo $detail[$ModelName]['SCorps'] ?>/<?php echo $detail[$ModelName]['personel_nrp'] ?>
            </td>
        </tr>
        <tr>
            <td width="50%" style="font-size:14px;font-weight:bold;">
                Tempat/Tanggal Lahir
            </td>
            <td  width="80%" style="font-size:14px;font-weight:bold;">
                : <?php echo $detail[$ModelName]['place_of_birth'] ?>, <?php echo $detail[$ModelName]['date_of_birth'] ?>
            </td>
        </tr>
        <tr>
            <td width="50%" style="font-size:14px;font-weight:bold;">
                Jabatan
            </td>
            <td  width="80%" style="font-size:14px;font-weight:bold;">
                : <?php echo $detail[$ModelName]['personel_occupation'] ?>
            </td>
        </tr>
        <tr>
            <td width="50%" style="font-size:14px;font-weight:bold;">
                Sumber Dikma/Diktuk & TMT Prajurit
            </td>
            <td  width="80%" style="font-size:14px;font-weight:bold;">
                : <?php echo $detail[$ModelName]['personel_dikma'] ?>
            </td>
        </tr>
        <tr style="background-color:#94dee7;">
            <td width="50%" style="font-size:14px;font-weight:bold;">
                Alamat Kantor
            </td>
            <td  width="80%" style="font-size:14px;font-weight:bold;">
                : <?php echo $detail[$ModelName]['office_address'] ?>
            </td>
        </tr>
        <tr style="background-color:#94dee7;">
            <td width="50%" style="font-size:14px;font-weight:bold;">
                Tlp Kantor
            </td>
            <td  width="80%" style="font-size:14px;font-weight:bold;">
                : <?php echo $detail[$ModelName]['office_phone_number'] ?>
            </td>
        </tr>
        <tr style="background-color:#94dee7;">
            <td width="50%" style="font-size:14px;font-weight:bold;">
                HP
            </td>
            <td  width="80%" style="font-size:14px;font-weight:bold;">
                : <?php echo $detail[$ModelName]['home_phone_number'] ?>
            </td>
        </tr>
        <tr style="background-color:#94dee7;">
            <td width="50%" style="font-size:14px;font-weight:bold;">
                Email
            </td>
            <td  width="80%" style="font-size:14px;font-weight:bold;">
                : <?php echo $detail[$ModelName]['personel_email'] ?>
            </td>
        </tr>
        <tr style="background-color:#91b83f;">
            <td width="50%" style="font-size:14px;font-weight:bold;">
                Kep Panglima TNI
            </td>
            <td  width="80%" style="font-size:14px;font-weight:bold;">
                : <?php echo $detail[$ModelName]['commander_name'] ?>
            </td>
        </tr>
        <tr style="background-color:#91b83f;">
            <td width="50%" style="font-size:14px;font-weight:bold;">
                Sprin Angkatan
            </td>
            <td  width="80%" style="font-size:14px;font-weight:bold;">
                : <?php echo $detail[$ModelName]['sprin_force'] ?>
            </td>
        </tr>
        <tr style="background-color:#91b83f;">
            <td width="50%" style="font-size:14px;font-weight:bold;">
                Medical Record
            </td>
            <td  width="80%" style="font-size:14px;font-weight:bold;">
                : <?php echo $detail[$ModelName]['medical_record'] ?>
            </td>
        </tr>
        <tr style="background-color:#91b83f;">
            <td width="50%" style="font-size:14px;font-weight:bold;">
                Passport
            </td>
            <td  width="80%" style="font-size:14px;font-weight:bold;">
                : <?php echo $detail[$ModelName]['passport'] ?>
            </td>
        </tr>
        <tr style="background-color:#91b83f;">
            <td width="50%" style="font-size:14px;font-weight:bold;">
                Security Clearence
            </td>
            <td  width="80%" style="font-size:14px;font-weight:bold;">
                : <?php echo $detail[$ModelName]['security_clearance'] ?>
            </td>
        </tr>
        <tr>
            <td width="50%" style="font-size:14px;font-weight:bold;">
                Alamat Famili di Indonesia
            </td>
            <td  width="80%" style="font-size:14px;font-weight:bold;">
                : <?php echo $detail[$ModelName]['family_address'] ?>
            </td>
        </tr>
        <tr style="background-color:#91b83f;">
            <td width="50%" style="font-size:14px;font-weight:bold;">
                No Rekening Bank
            </td>
            <td  width="80%" style="font-size:14px;font-weight:bold;">
                : <?php echo $detail[$ModelName]['bank_account_number'] ?>
            </td>
        </tr>
        <tr>
          <td><br></td>
        </tr>
    </table>
</div>
<h2 align="center" style="font-family:Arial, Helvetica, sans-serif;font-weight:bold;margin:5px;">RIWAYAT PENDIDIKAN</h2>
<table width="100%" border="0" cellspacing="0" cellpadding="0" align="center" style="font-family:Arial, Helvetica, sans-serif;">
    <tr>
      <td><br></td>
    </tr>
    <?php foreach ($historicalEdus as $historicalEdus): ?>
        <tr align="center">
            <td width="30%" style="font-size:14px;font-weight:bold;">
                <?php echo $historicalEdus['AvailableCourse']['ProgramStudy']['edu_name']; ?>
            </td>
            <td width="30%" style="font-size:14px;font-weight:bold;">
                -----
            </td>
            <td width="30%" style="font-size:14px;font-weight:bold;">
                <?php echo $historicalEdus['AvailableCourse']['Country']['country_name']; ?>
            </td>
        </tr>
    <?php endforeach; ?>
    <tr>
      <td><br></td>
    </tr>
    <tr>
      <td><br></td>
    </tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0" style="font-family:Arial, Helvetica, sans-serif;">
    <tr align="right">
      <td>
        <h4 style="font-size:14px">Pelapor</h4>
      </td>
    </tr>
    <tr>
      <td><br></td>
    </tr>
    <tr>
      <td><br></td>
    </tr>
    <tr>
      <td align="right">_______________</td>
    </tr>
    <tr>
        <td align="right">
            <h5 style="font-weight:bold;margin-bottom:5px;"><?php echo $detail[$ModelName]['personnel_name'] ?></h4>
            <h5 style="font-size:14px;font-weight:bold;"><?php echo $detail[$ModelName]['SMatra'] ?>&nbsp;<?php echo $detail[$ModelName]['SCorps'] ?>&nbsp;<?php echo $detail[$ModelName]['personel_nrp'] ?></h4>
        </td>
    </tr>
    <tr>
      <td style="font-size:10px;font-weight:bold;">
        &nbsp;
      </td>
    </tr>
</table>
