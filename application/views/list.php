<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title><?=$title?></title>
<link rel="stylesheet" href="">
</head>
<body>
<style>
table {
 font-family: arial, sans-serif;
 border-collapse: collapse;
 width: 100%;
}
td, th {
 border: 1px solid #dddddd;
 text-align: left;
 padding: 8px;
}
tr:nth-child(even) {
 background-color: #dddddd;
}
</style>
<hr>
<center><h3>STUDENT DATA</h3></center>
<hr><br>
<?php
if($this->session->flashdata('saved')) {
 echo '<div align="center">'.$this->session->flashdata('saved').'</div>';
} else if($this->session->flashdata('updated')) {
 echo '<div align="center">'.$this->session->flashdata('updated').'</div>';
} else if($this->session->flashdata('deleted')) {
 echo '<div align="center">'.$this->session->flashdata('deleted').'</div>';
} else if($this->session->flashdata('failed')) {
 echo '<div align="center">'.$this->session->flashdata('failed').'</div>';
}
?>
<a href="<?=base_URL()?>student/add" type="button"><input type="button"
value="Add Student"></a>
<br><br>
<table>
 <thead>
 <tr>
 <th>NO</th>
 <th>STUDENT ID</th>
 <th>NAME</th>
 <th>GENDER</th>
 <th>PROGRAM / LEVEL</th>
 <th>PHONE NO.</th>
 <th>ACTION</th>
 </tr>
 </thead>
 <tbody>
 <?php
 $no = 1;
 foreach($students as $s) :
 ?>

 <tr>
 <td><?=$no?></td>
 <td><?=$s->student_id?></td>
 <td><?=$s->name?></td>
 <td><?=$s->gender?></td>
 <td><?=$s->program?> / <?=$s->level?></td>
 <td><?=$s->phone?></td>
 <td>
 <a href="<?=base_URL()?>student/edit/<?=$s->student_id?>" data-toggle="tooltip"
title="Edit Data"> <input type="button" value="Edit"></a>
 <a href="<?=base_URL()?>student/delete/<?=$s->student_id?>" onclick="return
confirm('Are you sure you want to delete this record?')" data-toggle="tooltip" title="Delete Data">
<input type="button" value="Delete"></a>
 </td>
 </tr>
 <?php $no++; endforeach; ?>

 </tbody>
 <tfoot>
 </tfoot>
</table>
</body>
</html>
