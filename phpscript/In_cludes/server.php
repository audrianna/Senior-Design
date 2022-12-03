?php
$T_grade_1 = "";
$T_grade_2 = "";
$T_grade_3 = "";
$T_grade_4 = "";
$T_grade_5 = "";
$T_grade_6 = "";
$T_grade_7 = "";
$T_grade_8 = "";
$T_grade_9 = "";
$T_grade_10 = "";
$T_grade_11 = "";
$T_grade_12 = "";
$T_grade_13 = "";
$T_grade_14 = "";
$T_grade_15 = "";
$T_grade_16 = "";
$T_grade_17 = "";
$T_grade_18 = "";
$T_grade_19 = "";
$T_grade_20 = "";
	$array = array("A"=>"5", "B"=>"4", "C"=>"3", "D"=>"2", "E"=>"1", "F"=>"0","a"=>"5", "b"=>"4", "c"=>"3", "d"=>"2", "e"=>"1", "f"=>"0");

	isset($_POST['btn']);

		$course_1 = $_POST['course_code_1'];
		$unit_1 = $_POST['course_unit_1'];
		$grade_1 = $_POST['course_grade_1'];

		$course_2 = $_POST['course_code_2'];
		$unit_2 = $_POST['course_unit_2'];
		$grade_2 = $_POST['course_grade_2'];

		$course_3 = $_POST['course_code_3'];
		$unit_3= $_POST['course_unit_3'];
		$grade_3= $_POST['course_grade_3'];

		$course_4 = $_POST['course_code_4'];
		$unit_4 = $_POST['course_unit_4'];
		$grade_4 = $_POST['course_grade_4'];

		$course_5 = $_POST['course_code_5'];
		$unit_5 = $_POST['course_unit_5'];
		$grade_5 = $_POST['course_grade_5'];

		$course_6 = $_POST['course_code_6'];
		$unit_6 = $_POST['course_unit_6'];
		$grade_6 = $_POST['course_grade_6'];

		$course_7 = $_POST['course_code_7'];
		$unit_7 = $_POST['course_unit_7'];
		$grade_7 = $_POST['course_grade_7'];

		$course_8 = $_POST['course_code_8'];
		$unit_8 = $_POST['course_unit_8'];
		$grade_8 = $_POST['course_grade_8'];

		$course_9 = $_POST['course_code_9'];
		$unit_9 = $_POST['course_unit_9'];
		$grade_9 = $_POST['course_grade_9'];

		$course_10 = $_POST['course_code_10'];
		$unit_10 = $_POST['course_unit_10'];
		$grade_10 = $_POST['course_grade_10'];

		$course_11 = $_POST['course_code_11'];
		$unit_11 = $_POST['course_unit_11'];
		$grade_11 = $_POST['course_grade_11'];

		$course_12 = $_POST['course_code_12'];
		$unit_12 = $_POST['course_unit_12'];
		$grade_12 = $_POST['course_grade_12'];

		$course_13 = $_POST['course_code_13'];
		$unit_13 = $_POST['course_unit_13'];
		$grade_13 = $_POST['course_grade_13'];

		$course_14 = $_POST['course_code_14'];
		$unit_14 = $_POST['course_unit_14'];
		$grade_14 = $_POST['course_grade_14'];

		$course_15 = $_POST['course_code_15'];
		$unit_15 = $_POST['course_unit_15'];
		$grade_15 = $_POST['course_grade_15'];

		$course_16 = $_POST['course_code_16'];
		$unit_16 = $_POST['course_unit_16'];
		$grade_16 = $_POST['course_grade_16'];

		$course_17 = $_POST['course_code_17'];
		$unit_17 = $_POST['course_unit_17'];
		$grade_17 = $_POST['course_grade_17'];

		$course_18 = $_POST['course_code_18'];
		$unit_18 = $_POST['course_unit_18'];
		$grade_18 = $_POST['course_grade_18'];

		$course_19 = $_POST['course_code_19'];
		$unit_19 = $_POST['course_unit_19'];
		$grade_19 = $_POST['course_grade_19'];

		$course_20 = $_POST['course_code_20'];
		$unit_20 = $_POST['course_unit_20'];
		$grade_20 = $_POST['course_grade_20'];

		if ($grade_1 != "") {
			$T_grade_1 = $array[$grade_1];
		}
		if ($grade_2 != "") {
			$T_grade_2 = $array[$grade_2];
		}
		if ($grade_3 != "") {
			$T_grade_3 = $array[$grade_3];
		}
		if ($grade_4 != "") {
			$T_grade_4 = $array[$grade_4];
		}
		if ($grade_5 != "") {
			$T_grade_5 = $array[$grade_5];
		}
		if ($grade_6 != "") {
			$T_grade_6 = $array[$grade_6];
		}
		if ($grade_7 != "") {
			$T_grade_7 = $array[$grade_7];
		}
		if ($grade_8 != "") {
			$T_grade_8 = $array[$grade_8];
		}
		if ($grade_9 != "") {
			$T_grade_9 = $array[$grade_9];
		}
		if ($grade_10 != "") {
			$T_grade_10 = $array[$grade_10];
		}
		if ($grade_11 != "") {
			$T_grade_11 = $array[$grade_11];
		}
		if ($grade_12 != "") {
			$T_grade_12 = $array[$grade_12];
		}
		if ($grade_13 != "") {
			$T_grade_13 = $array[$grade_13];
		}
		if ($grade_14 != "") {
			$T_grade_14 = $array[$grade_14];
		}
		if ($grade_15 != "") {
			$T_grade_15 = $array[$grade_15];
		}
		if ($T_grade_16 != "") {
			$T_grade_16 = $array[$grade_16];
		}
		if ($grade_17 != "") {
			$T_grade_17 = $array[$grade_17];
		}
		if ($grade_18 != "") {
			$T_grade_18 = $array[$grade_18];
		}
		if ($grade_19 != "") {
			$T_grade_19 = $array[$grade_19];
		}
		if ($grade_20 = "") {
			$T_grade_20 = $array[$grade_20];
		}



		(float)$T_unit = ((int)$unit_1 + (int)$unit_2 + (int)$unit_3 + (int)$unit_4 + (int)$unit_5 + (int)$unit_6 + (int)$unit_7 + (int)$unit_8 + (int)$unit_9 + (int)$unit_10 + (int)$unit_11 + (int)$unit_12 + (int)$unit_13 + (int)$unit_14 + (int)$unit_15 + (int)$unit_16 + (int)$unit_17 + (int)$unit_18 + (int)$unit_19 + (int)$unit_20);

		(float)$T_Score = (((int)$T_grade_1 * (int)$unit_1) + ((int)$T_grade_2 * (int)$unit_2) + ((int)$T_grade_3 * (int)$unit_3) + ((int)$T_grade_4 * (int)$unit_4) + ((int)$T_grade_5 * (int)$unit_5) + ((int)$T_grade_6 * (int)$unit_6) + ((int)$T_grade_7 * (int)$unit_7) + ((int)$T_grade_8 * (int)$unit_8) + ((int)$T_grade_9 * (int)$unit_9) + ((int)$T_grade_10 * (int)$unit_10) + ((int)$T_grade_11 * (int)$unit_11) + ((int)$T_grade_12 * (int)$unit_12) + ((int)$T_grade_13 * (int)$unit_13) + ((int)$T_grade_14 * (int)$unit_14)  + ((int)$T_grade_15 * (int)$unit_15) + ((int)$T_grade_16 * (int)$unit_16) + ((int)$T_grade_17 * (int)$unit_17) + ((int)$T_grade_18 * (int)$unit_18) + ((int)$T_grade_19 * (int)$unit_19) + ((int)$T_grade_20 * (int)$unit_20));

		(float)$GPA = (float)((float)$T_Score / (float)$T_unit);

			echo "Total unit = <big style='color:#00FF00'>'".$T_unit."'</big>";
			echo "<br>";

		if ($GPA >=4.5 and $GPA <= 5.00) {
				echo "<tr><td><h4> Your CGPA is : <big style='color:#00FF00;'>'".$GPA."'</big><br><big style='color:#00FF00'>Congratulations! <big style='color:#00FF00;'><i>Keep it  Up...</i></big></h4></td></tr>";
			}
			elseif ($GPA >= 3.50) {
				echo "<tr><td><h4> Your CGPA is : <big style='color:#00FF00;'>'".$GPA."'</big><br><big style='color:#00FF00'>Congratulations! <big style='color:#00FF00;'><i>Keep it  Up...</i></big></h4></td></tr>";<big style='color:#00FF00;'><i>Keep it  Up...</i></big></h4></td></tr>";
			}
			elseif ($GPA >= 2.50) {
				echo "<tr><td><h4> Your CGPA is : <big style='color:#00FF00;'>'".$GPA."'</big><br><big style='color:#00FF00'>Congratulations! <big style='color:#00FF00;'><i>Keep it  Up...</i></big></h4></td></tr>";<big style='color:#00FF00;'><i>Keep it  Up...</i></big></h4></td></tr>";
			}
			elseif ($GPA >= 2.00) {
				echo "<tr><td><h4> Your CGPA is : <big style='color:#FF9900;'>'".$GPA."'</big><br><big style='color:#00FF00'>Congratulations! <big style='color:#00FF00;'><i>Keep it  Up...</i></big></h4></td></tr>";<big style='color:#00FF00;'><i>Keep it  Up...</i></big></h4></td></tr>";
			}
			elseif ($GPA >= 1.00) {
				echo "<tr><td><h4> Your CGPA is : <big style='color:#FF9900;'>'".$GPA."'</big><br><big style='color:#00FF00'>Congratulations! <big style='color:#00FF00;'><i>Keep it  Up...</i></big></h4></td></tr>";<big style='color:#00FF00;'><i>Keep it  Up...</i></big></h4></td></tr>";
			}
			else {
				echo("<tr><td><h4>Your CGPA is : <big style='color:#FF3300'; background:whitesmoke>'".$GPA."'</big><br><i style='color:#FF3300';>Awwwww!</h4></td></tr>");
				}
?>