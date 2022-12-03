    <!DOCTYPE html>
    <html>
    <head>
        <title>GPA Calculator</title>

        <link rel="stylesheet" type="text/css" href="c_s_s_files/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="c_s_s_files/style.css">
	    <link rel="stylesheet" type="text/css" href="c_s_s_files/main_table.css">
        <script type="text/javascript" src="/c_s_s_files/jquery.js"></script>
    	<header>
    		<nav>
    			<div class="container" id="container">
    				<h1 class="text text-center">Grade Point Average<br>(GPA) Calculator</h1>
    			</div>
    		</nav>
    	</header>
    	<main>
    		<div class="container form-group" id="container">
    			<center>
    				<p><b>Note:</b><br> <i>In order to insert your grade you will need to use:</i></p>
    				<table  class="col" auto id="tablemain">
    					<tr>
    						<td>5</td>
    						<td>as</td>
    						<td>A</td>
    					</tr>
    					<tr>
    						<td>4</td>
    						<td>as</td>
    						<td>B</td>
    					</tr>
    					<tr>
    						<td>3</td>
    						<td>as</td>
    						<td>C</td>
    					</tr>
    					<tr>
    						<td>2</td>
    						<td>as</td>
    						<td>D</td>
    					</tr>
    					<tr>
    						<td>1</td>
    						<td>as</td>
    						<td>E</td>
    					</tr>
    					<tr>
    						<td>0</td>
    						<td>as</td>
    						<td>F</td>
    					</tr>
    				</table>
    			</center>
    		</div>

    		<div class="container" id="container">
    			<div>
    				<center>
    				<table class="gridtable" id="tablemain">
    					<form auto method="post" action="process.php">
    						<div class=" bg-info">
    							<thead>
    							<th class="text text-center" style="font-size: 20px">STUDENT'S INFORMATION</th>
    						</thead>
    						</div>
    						<tbody>
    							<div class="row">
    								<div>
    									<tr class="breakrow form-group">
    										<td>
    											<label style="font-size: 15px; color:;">CLICK TO INSERT YOUR DETAILS</label>
    										</td>
    									</tr>
    								</div>
    								<div>
    									<tr class="datarow form-group" id="item">
    										<td>
    											<label style="float: left" >Student Name:</label>
    											<input class="form-control" type="text" name="s_name" placeholder="Enter your Full name">
    										</td>
    									</tr>
    								</div>
    								<div>
    									<tr class="datarow form-group" id="item">
    										<td>
    											<label>Student Faculty:</label>
    											<input class="form-control" type="text" name="s_faculty" placeholder="Enter your Faculty name">
    										</td>
    									</tr>
    								</div>
    								<div>
    									<tr class="datarow form-group" id="item">
    										<td>
    											<label>Student Department:</label>
    											<input class="form-control" type="text" name="s_department" placeholder="Enter your Department name">
    										</td>
    									</tr>
    								</div>
    								<div>
    									<tr class="datarow form-group" id="item">
    										<td>
    											<label>Student Classification:</label>
    											<input class="form-control" type="text" name="s_level" placeholder="Enter your classification">
    										</td>
    									</tr>
    								</div>
    								<div>
    									<tr class="datarow form-group" id="item">
    										<td>
    											<label>Student Banner Number:</label>
    											<input class="form-control" type="text" name="s_adm_no" placeholder="Enter your Banner Number">
    										</td>
    									</tr>
    								</div>
    							</div>

    						</tbody>
    					<!--form-->
    				</table>
    				</center>
    			</div>
    		</div>

    		</div>
            		<div class="container" id="container">
                    			<center>
                    				<table class="gridtable" id="tablemain">
                    					<!--form method="post" action="process.php"-->
                    						<thead>
                    							<th>S/N</th>
                    							<th>COURSE NAME</th>
                    							<th>COURSE CREDIT WEIGHT</th>
                    							<th>COURSE GRADE</th>
                    						</thead>
                    						<tbody>
                    							<tr class="breakrow">
                    								<td>CLICK TO INSERT YOUR DATA</td><td></td><td></td><td></td>
                    							</tr>
                    							<tr class="datarow">
                    								<td class="sn">1</td>
                    								<td><input type="text" name="course_code_1" placeholder="Enter the course Code"></td>
                    								<td><input type="number" name="course_unit_1" placeholder="Enter the course unit"></td>
                    								<td><input type="text" name="course_grade_1" placeholder="Enter the course grade"></td>
                    							</tr>
                    							<tr class="datarow">
                    								<td class="sn">2</td>
                    								<td><input type="text" name="course_code_2" placeholder="Enter the course Code"></td>
                    								<td><input type="number" name="course_unit_2" placeholder="Enter the course unit"></td>
                    								<td><input type="text" name="course_grade_2" placeholder="Enter the course grade"></td>
                    							</tr>
                    							<tr class="datarow">
                                                        								<td class="sn">3</td>
                                                        								<td><input type="text" name="course_code_3" placeholder="Enter the course Code"></td>
                                                        								<td><input type="number" name="course_unit_3" placeholder="Enter the course unit"></td>
                                                        								<td><input type="text" name="course_grade_3" placeholder="Enter the course grade"></td>
                                                        							</tr>
                                                        							<tr class="datarow">
                                                        								<td class="sn">4</td>
                                                        								<td><input type="text" name="course_code_4" placeholder="Enter the course Code"></td>
                                                        								<td><input type="number" name="course_unit_4" placeholder="Enter the course unit"></td>
                                                        								<td><input type="text" name="course_grade_4" placeholder="Enter the course grade"></td>
                                                        							</tr>
                                                        							<tr class="datarow">
                                                        								<td class="sn">5</td>
                                                        								<td><input type="text" name="course_code_5" placeholder="Enter the course Code"></td>
                                                        								<td><input type="number" name="course_unit_5" placeholder="Enter the course unit"></td>
                                                        								<td><input type="text" name="course_grade_5" placeholder="Enter the course grade"></td>
                                                        							</tr>
                                                        							<tr class="breakrow">
                                                        								<td>CLICK ME TO LOAD INPUT</td><td></td><td></td><td></td>
                                                        							</tr>
                                                        							<tr class="datarow">
                                                        								<td class="sn">6</td>
                                                        								<td><input type="text" name="course_code_6" placeholder="Enter the course Code"></td>
                                                        								<td><input type="number" name="course_unit_6" placeholder="Enter the course unit"></td>
                                                        								<td><input type="text" name="course_grade_6" placeholder="Enter the course grade"></td>
                                                        							</tr>
                                                        							<tr class="datarow">
                                                        								<td class="sn">7</td>
                                                        								<td><input type="text" name="course_code_7" placeholder="Enter the course Code"></td>
                                                        								<td><input type="number" name="course_unit_7" placeholder="Enter the course unit"></td>
                                                        								<td><input type="text" name="course_grade_7" placeholder="Enter the course grade"></td>
                                                        							</tr>
                                                        							<tr class="datarow">
                                                        								<td class="sn">8</td>
                                                        								<td><input type="text" name="course_code_8" placeholder="Enter the course Code"></td>
                                                        								<td><input type="number" name="course_unit_8" placeholder="Enter the course unit"></td>
                                                        								<td><input type="text" name="course_grade_8" placeholder="Enter the course grade"></td>
                                                        							</tr>
                                                        							<tr class="datarow">
                                                        								<td class="sn">9</td>
                                                        								<td><input type="text" name="course_code_9" placeholder="Enter the course Code"></td>
                                                        								<td><input type="number" name="course_unit_9" placeholder="Enter the course unit"></td>
                                                        								<td><input type="text" name="course_grade_9" placeholder="Enter the course grade"></td>
                                                        							</tr>
                                                        							<tr class="datarow">
                                                        								<td class="sn">10</td>
                                                        								<td><input type="text" name="course_code_10" placeholder="Enter the course Code"></td>
                                                        								<td><input type="number" name="course_unit_10" placeholder="Enter the course unit"></td>
                                                        								<td><input type="text" name="course_grade_10" placeholder="Enter the course grade"></td>
                                                        							</tr>
                                                        							<tr class="breakrow">
                                                        								<td>CLICK ME TO LOAD INPUT</td><td></td><td></td><td></td>
                                                        							</tr>
                                                        							<tr class="datarow">
                                                        								<td class="sn">11</td>
                                                        								<td><input type="text" name="course_code_11" placeholder="Enter the course Code"></td>
                                                        								<td><input type="number" name="course_unit_11" placeholder="Enter the course unit"></td>
                                                        								<td><input type="text" name="course_grade_11" placeholder="Enter the course grade"></td>
                                                        							</tr>
                                                        							<tr class="datarow">
                                                        								<td class="sn">12</td>
                                                        								<td><input type="text" name="course_code_12" placeholder="Enter the course Code"></td>
                                                        								<td><input type="number" name="course_unit_12" placeholder="Enter the course unit"></td>
                                                        								<td><input type="text" name="course_grade_12" placeholder="Enter the course grade"></td>
                                                        							</tr>
                                                        							<tr class="datarow">
                                                        								<td class="sn">13</td>
                                                        								<td><input type="text" name="course_code_13" placeholder="Enter the course Code"></td>
                                                        								<td><input type="number" name="course_unit_13" placeholder="Enter the course unit"></td>
                                                        								<td><input type="text" name="course_grade_13" placeholder="Enter the course grade"></td>
                                                        							</tr>
                                                        							<tr class="datarow">
                                                        								<td class="sn">14</td>
                                                        								<td><input type="text" name="course_code_14" placeholder="Enter the course Code"></td>
                                                        								<td><input type="number" name="course_unit_14" placeholder="Enter the course unit"></td>
                                                        								<td><input type="text" name="course_grade_14" placeholder="Enter the course grade"></td>
                                                        							</tr>
                                                        							<tr class="datarow">
                                                        								<td class="sn">15</td>
                                                        								<td><input type="text" name="course_code_15" placeholder="Enter the course Code"></td>
                                                        								<td><input type="number" name="course_unit_15" placeholder="Enter the course unit"></td>
                                                        								<td><input type="text" name="course_grade_15" placeholder="Enter the course grade"></td>
                                                        							</tr>
                                                        							<tr class="breakrow">
                                                        								<td>CLICK ME TO LOAD INPUT</td><td></td><td></td><td></td>
                                                        							</tr>
                                                        							<tr class="datarow">
                                                        								<td class="sn">16</td>
                                                        								<td><input type="text" name="course_code_16" placeholder="Enter the course Code"></td>
                                                        								<td><input type="number" name="course_unit_16" placeholder="Enter the course unit"></td>
                                                        								<td><input type="text" name="course_grade_16" placeholder="Enter the course grade"></td>
                                                        							</tr>
                                                        							<tr class="datarow">
                                                        								<td class="sn">17</td>
                                                        								<td><input type="text" name="course_code_17" placeholder="Enter the course Code"></td>
                                                        								<td><input type="number" name="course_unit_17" placeholder="Enter the course unit"></td>
                                                        								<td><input type="text" name="course_grade_17" placeholder="Enter the course grade"></td>
                                                        							</tr>
                                                        							<tr class="datarow">
                                                        								<td class="sn">18</td>
                                                        								<td><input type="text" name="course_code_18" placeholder="Enter the course Code"></td>
                                                        								<td><input type="number" name="course_unit_18" placeholder="Enter the course unit"></td>
                                                        								<td><input type="text" name="course_grade_18" placeholder="Enter the course grade"></td>
                                                        							</tr>
                                                        							<tr class="datarow">
                                                        								<td class="sn">19</td>
                                                        								<td><input type="text" name="course_code_19" placeholder="Enter the course Code"></td>
                                                        								<td><input type="number" name="course_unit_19" placeholder="Enter the course unit"></td>
                                                        								<td><input type="text" name="course_grade_19" placeholder="Enter the course grade"></td>
                                                        							</tr>
                                                        							<tr class="datarow">
                                                        								<td class="sn">20</td>
                                                        								<td><input type="text" name="course_code_20" placeholder="Enter the course Code"></td>
                                                        								<td><input type="number" name="course_unit_20" placeholder="Enter the course unit"></td>
                                                        								<td><input type="text" name="course_grade_20" placeholder="Enter the course grade"></td>
                                                        							</tr>
                                                        						</tbody>
                                                        						<tr>
                                                        						<td colspan="4" style="text-align: center; width: 100%; background: green;">
                                                                                        								<input type="submit" name="btn" value="Calculate" style=" width: 100%; height: 50px; font-size: 25px; font-family: Apple-Chancery" class="btn btn-success form-control">
                                                                                        							</td>
                                                                                        						</tr>
                                                                                        					</form>
                                                                                        				</table>
                                                                                        			</center>
                                                                                        		</div>


    		<?php include("In_cludes/main_table.php");?>
    	</main>
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

    	<script>
    		$(document).ready(function(){

    			//collapse and Expand section

    			$('.breakrow').click(function(){
    			//$('#tableMain').on('click','tr.breakrow',function(){
    				$(this).nextUntil('tr.breakrow').slideToggle(200);

    			});
    		});
    	</script>
    </body>
    </html>