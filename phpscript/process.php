<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="c_s_s_files/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="c_s_s_files/style.css">

	<title>CGPA calculator</title>

	<style>
		table{
	      margin: 0 auto;
	      overflow: auto;
	      background: #33CCCC;
	      width: 30%;
	      font-family: helvetica,arial,sans-serif;
	      font-size: 20px;
	      border-collapse: collapse;
	      border-radius: 16px;
		}
		th{
		    text-align: center;
		    height: 15vh;
		    background-color: #0099CC;
		}
		table tbody  tr td{
		   	text-align: ;
	     	margin-left: 50px;
	      	padding: 0px 50px 10px 60px;
		    text-align: justify-all;
		}
		table tbody  tr td strong{
			color: #33CCCC;
		}
		table tbody  tr td b{
      		justify-content: center;
      		text-align: justify;
		}
		button{
			float: right;
		}
		button a{
      		color: white;
     		font-size: 25px;
     		font-family: Apple-Chancery;
		}
		button a:hover{
      		color: white;
      		float: right;
		}
		footer{
		  text-align:center;
		  font-size:22px;
		  background: black;
		  color:white;
		  display: flex;
		  justify-content: center;
		  font-family:Apple-Chancery;
		  width:100%;
		  height:auto;
		  margin: 0;
		  margin-top:260px;
		}
	</style>
</head>
<body>
	<main>
		<div class="container" id="container">
			<center>
				<table>
					<form method="post" action="process.php">
						<thead>
							<th><h1>RESULT</h1></th>
						</thead>
						<tbody>
							<?php
								if (isset($_POST['btn'])) {
									$s_name = $_POST['s_name'];
									$s_faculty = $_POST['s_faculty'];
									$s_department = $_POST['s_department'];
									$s_level = $_POST['s_level'];
									$s_adm_no = $_POST['s_adm_no'];
								}
							?>
							<tr>
								<td><br>STUDENT NAME:<strong>_______________</strong><?php echo $s_name; ?></td>
							</tr>
							<tr>
								<td>STUDENT FACULTY:<strong>____________.</strong><?php echo $s_faculty; ?></td>
							</tr>
							<tr>
								<td>STUDENT DEPARTMENT:<strong>________.</strong><?php echo $s_department; ?></td>
							</tr>
							<tr>
								<td>STUDENT LEVEL:<strong>_______________</strong><?php echo $s_level; ?></td>
							</tr>
							<tr>
								<td>STUDENT ADMISSION NUNBER:<strong>__.</strong><?php echo $s_adm_no; ?></td>
							</tr>
							<tr>
								<td><b>______________________________________________________________________</b></td>
							</tr>
							<tr>
								<td>
									<?php include("In_cludes/server.php") ?>
								</td>
							</tr>
							<tr>
								<td>
									<button class="btn btn-success">
										<a href="conn.php">Take it over...</a>
									</button>
								</td>
							</tr>
						</tbody>
					</form>
				</table>
			</center>
		</div>
	</main>
</body>
</html>