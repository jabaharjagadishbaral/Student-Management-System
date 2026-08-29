<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Edit Student</title>
<link rel="stylesheet" href="">
</head>
<body>
<hr>
<center><h3>EDIT STUDENT FORM</h3></center>
<hr><br>
<?=form_open('student/edit')?>
 <div class="box-body">
 <div class="form-group">
 <label>Student ID : </label>
 <input type="number" name="student_id" value="<?=$student['student_id']?>" placeholder="Enter
Student ID" readonly>
 </div><br>
 <div class="form-group">
 <label>Student Name : </label>
 <input type="text" name="name" value="<?=$student['name']?>" placeholder="Enter
Student Name" required autofocus>
 </div><br>
 <div class="form-group">
 <label>Gender : </label>
 <select name="gender" required autofocus>
 <option value="">Select Gender</option>
 <option value="Male" <?php if($student['gender'] == 'Male') { echo
"selected=selected";} ?>>Male</option>
 <option value="Female" <?php if($student['gender'] == 'Female') { echo
"selected=selected";} ?>>Female</option>
 </select>
 </div><br>
 <div class="form-group">
 <label>Study Program : </label>
 <select name="program" required autofocus>
 <option value="">Select Study Program</option>
 <option value="Informatics Engineering" <?php if($student['program'] == 'Informatics
Engineering') { echo "selected=selected";} ?>>Informatics Engineering</option>
 <option value="Information Systems" <?php if($student['program'] == 'Information
Systems') { echo "selected=selected";} ?>>Information Systems</option>
 <option value="Informatics Management" <?php if($student['program'] ==
'Informatics Management') { echo "selected=selected";} ?>>Informatics
Management</option>

 <option value="Computer Accounting" <?php if($student['program'] == 'Computer
Accounting') { echo "selected=selected";} ?>>Computer Accounting</option>
 </select>
 </div><br>
 <div class="form-group">
 <label>Level : </label>
 <select name="level" required autofocus>
 <option value="">Select Level</option>
 <option value="S1" <?php if($student['level'] == 'S1') { echo "selected=selected";}
?>>S1</option>
 <option value="D3" <?php if($student['level'] == 'D3') { echo "selected=selected";}
?>>D3</option>
 </select>
 </div><br>
 <div class="form-group">
 <label>Semester : </label>
 <select name="semester" required autofocus>
 <option value="">Select Semester</option>
 <option value="1" <?php if($student['semester'] == '1') { echo "selected=selected";}
?>>Semester 1</option>
 <option value="2" <?php if($student['semester'] == '2') { echo "selected=selected";}
?>>Semester 2</option>
 <option value="3" <?php if($student['semester'] == '3') { echo "selected=selected";}
?>>Semester 3</option>
 <option value="4" <?php if($student['semester'] == '4') { echo "selected=selected";}
?>>Semester 4</option>
 <option value="5" <?php if($student['semester'] == '5') { echo "selected=selected";}
?>>Semester 5</option>
 <option value="6" <?php if($student['semester'] == '6') { echo "selected=selected";}
?>>Semester 6</option>
 <option value="7" <?php if($student['semester'] == '7') { echo "selected=selected";}
?>>Semester 7</option>
 <option value="8" <?php if($student['semester'] == '8') { echo "selected=selected";}
?>>Semester 8</option>
 </select>
 </div><br>
 <div class="form-group">
 <label>Phone No. : </label>
 <input type="number" name="phone" value="<?=$student['phone']?>"
placeholder="Enter Phone No." required autofocus>
 </div><br>
 </div>
 <!-- /.box-body -->
 <div class="box-footer">
 <button type="submit" name="submit">Update</button>
 </div>
<?=form_close()?>
</body>
</html>
