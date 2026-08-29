<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Add Student</title>
<link rel="stylesheet" href="">
</head>
<body>
<hr>
<center><h3>ADD STUDENT FORM</h3></center>
<hr><br>
<?=form_open('student/add')?>
 <div class="box-body">
 <div class="form-group">
 <label>Student ID : </label>
 <input type="number" name="student_id" placeholder="Enter Student ID" required autofocus>
 </div><br>
 <div class="form-group">
 <label>Student Name : </label>
 <input type="text" name="name" placeholder="Enter Student Name" required
autofocus>
 </div><br>
 <div class="form-group">
 <label>Gender : </label>
 <select name="gender" required autofocus>
 <option value="">Select Gender</option>
 <option value="Male">Male</option>
 <option value="Female">Female</option>
 </select>
 </div><br>
 <div class="form-group">
 <label>Study Program : </label>
 <select name="program" required autofocus>
 <option value="">Select Study Program</option>
 <option value="Informatics Engineering">Informatics Engineering</option>
 <option value="Information Systems">Information Systems</option>
 <option value="Informatics Management">Informatics Management</option>
 <option value="Computer Accounting">Computer Accounting</option>
 </select>
 </div><br>
 <div class="form-group">
 <label>Level : </label>
 <select name="level" required autofocus>
 <option value="">Select Level</option>
 <option value="S1">S1</option>
 <option value="D3">D3</option>
 </select>
 </div><br>
 <div class="form-group">
 <label>Semester : </label>
 <select name="semester" required autofocus>
 <option value="">Select Semester</option>
 <option value="1">Semester 1</option>
 <option value="2">Semester 2</option>
 <option value="3">Semester 3</option>
 <option value="4">Semester 4</option>
 <option value="5">Semester 5</option>
 <option value="6">Semester 6</option>
 <option value="7">Semester 7</option>
 <option value="8">Semester 8</option>
 </select>
 </div><br>
 <div class="form-group">
 <label>Phone No. : </label>
 <input type="number" name="phone" placeholder="Enter Phone No." required
autofocus>
 </div><br>
 </div>
 <!-- /.box-body -->
 <div class="box-footer">
 <button type="submit" name="submit">Add</button>
 </div>
 <?=form_close()?>
 </body>
 </html>
