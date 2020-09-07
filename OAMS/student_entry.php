<?php
$pagetitle="student data";
include "include/header.php"; ?>


			<div class="main">

				<div class="content">

                    <div class="text-center">
                        <hr class="team_hr team_hr_left hr_gray"/><span class="span_blog txt_darkgrey txt_orange">Students Entry</span>
                        <hr class="team_hr team_hr_right hr_gray" />
                    </div>  <!-- text-center -->
 
				    <!-- <br><br><br>
                    <a href="student_entry.php" class=" tiny_button ">+Insert</a>
                    <br><br> -->

                    <!-- <h6 class="or">or</h6> -->
                    <br><br>
            
		           <!--  <form action=" " method="POST" name="reg" onSubmit="return validate()">
					  <center>
		            
			          <div  class="row2"> id="C"
				            
				        <div class="form-group">
				            <label for="name" class="l"> Student Name(*) </label><br>
				            <input class="form-control" type="text" name="name" placeholder="student name" id="name" value="" required>
				        
				        </div><br>
		
				        <div class="form-group" >
				            <label for="dob" class="l"> Date Of Birth </label><br>
				            <input type="text" class="form-control" id="dob" name="dob" required>
			          	</div><br><br>
	
				        <div class="form-group" >
				        <label for="gender" class="l">Gender(*)</label><br>
				        <select  class="form-control"   required id="sex" name="gender">
				        <option>-------select-------</option>
				        <option value="male">Male</option>
				        <option value="female">Female</option> 
				        </select><br>
				        </div>
				      
		            
				        <div class="form-group">
				            <label for="email"  class="l">Email address </label><br>
				            <input type="email" class="form-control" required id="email" placeholder=" Email" name="email">
			          	</div><br>

						<div class="form-group">
				            <label for="phone" class="l">Phone </label><br>
				            <input type="text" class="form-control" id="phone" placeholder="Phone Number" name="phone">
			        	</div><br>

						<div class="form-group">
				        	<label for="semester"  class="l">Semester</label><br>
				            <select  class="form-control" name="semester"  required id="semester" >
				            <option>---select semester--- </option>
				            <option value="FIRST">FIRST</option>
				            <option value="SECOND">SECOND</option>
				            <option value="THIRD">THIRD</option> 
				            <option value="FOURTH">FOURTH</option>
				            <option value="FIFTH">FIFTH</option>
				            <option value="SIXTH">SIXTH</option>
				            <option value="SEVENTH">SEVENTH</option>
				            <option value="EIGHTH">EIGHTH</option>
				            </select>
				        </div> <br>

			          </div> C
			          </center>
			        </form> <br><br> -->

      				<form method="POST" action="student_entry_action.php" name="reg" onSubmit="return validate()">

      				<center>
 
      				<table bgcolor="" width="80%"> 

     				</center>  <!-- center -->

				      <tr>
				        <td>FIRST NAME:</td>
				        <td><input type="text" name="fn" class="form-control" required/></td>
				      </tr>

				      <tr>
				        <td>LAST NAME:</td>
				        <td><input type="text" name="ln" class="form-control" required /></td>
				      </tr>
				     
				      <tr>
				        <td>SESSION:</td>
				        <td>
				        <select name="session2" class="form-control">
				        <option >select session</option>
				        <option value='Spring'>SPRING</option>
				        <option value='Summer'>SUMMER</option>
				        <option value='Fall'>FALL</option>      
				        </select>

				        <select name='session' class="form-control" required>
				        <option >select session year</option>
				        <option value='2012'>2012</option>
				        <option value='2013'>2013</option>
				        <option value='2014'>2014</option>
				        <option value='2015'>2015</option>
				        <option value='2016'>2016</option>
				        </select>
				        </td>
				      </tr>

				      <tr>
				        <td>ROLL NO:</td>
				        <td><input type="text" name="rn" class="form-control" required></td>
				      </tr>
				    
				      <tr>
				        <td>DEPARTMENT</td>
				        <td>
				        <select name="branch" class="form-control" required>
				        <option >select department</option>
				        <option value="CSE">CSE</option>
				        <option value="ET&T">ET&T</option>
				        <option value="CIVIL">CIVIL</option>
				        <option value="MECHNICAL">MECHNICAL</option>
				        <option value="EEE">EEE</option>
				        </select>
				        </td>
				      </tr>

				      <tr>
				        <td>YEAR:</td>
				        <td>
				        <select name="year" class="form-control" required>
				        <option >select year</option>
				        <option value="FIRST">FIRST</option>
				        <option value="SECOND">SECOND</option>
				        <option value="THIRD">THIRD </option>
				        <option value="FOURTH">FOURTH</option>
				        </select>
				        </td>
				      </tr>

				      <tr>
				        <td>SEMESTER:</td>
				        <td>
				        <select name="semester" class="form-control" required>
				        <option >select semester</option>
				        <option value="FIRST">FIRST</option>
				        <option value="SECOND">SECOND</option>
				        <option value="THIRD">THIRD</option>
				        <option value="FOURTH">FOURTH</option>
				        <option value="FIFTH">FIFTH</option>
				        <option value="SIX">SIX</option>
				        <option value="SEVENTH">SEVENTH</option>
				        <option value="EIGHT">EIGHT</option>
				        <option value="NINETH">NINETH</option>
				        <option value="TENTH">TENTH</option>
				        <option value="ELEVENTH">ELEVENTH</option>
				        <option value="TWELVETH">TWELVETH</option>
				        </select>
				        </td>
				      </tr>

				      <tr>
				      
				        <td>Date Of Birth(DD-MM-YYYY)</td>
				        <td><select name="dd" class="form-control" required>
				        <option> select day </option>
				        <option value="1">1</option>
				        <option value="2">2</option>
				        <option value="3">3</option>
				        <option value="4">4</option>
				        <option value="5">5</option>
				        <option value="6">6</option>
				        <option value="7">7</option>
				        <option value="8">8</option>
				        <option value="9">9</option>
				        <option value="10">10</option>
				        <option value="11">11</option>
				        <option value="12">12</option>
				        <option value="13">13</option>
				        <option value="14">14</option>
				        <option value="15">15</option>
				        <option value="16">16</option>
				        <option value="17">17</option>
				        <option value="18">18</option>
				        <option value="19">19</option>
				        <option value="20">20</option>
				        <option value="21">21</option>
				        <option value="22">22</option>
				        <option value="23">23</option>
				        <option value="24">24</option>
				        <option value="25">25</option>
				        <option value="26">26</option>
				        <option value="27">27</option>
				        <option value="28">28</option>
				        <option value="29">29</option>
				        <option value="30">30</option>
				        <option value="31">31</option>
				        </select>

				        <select name="mm" class="form-control" required>
				        <option> select month </option>
				        <option value="jan">JAN</option>
				        <option value="feb">FEB</option>
				        <option value="mar">MAR</option>
				        <option value="apr">APR</option>
				        <option value="may">MAY</option>
				        <option value="jun">JUN</option>
				        <option value="jul">JUL</option>
				        <option value="aug">AUG</option>
				        <option value="sep">SEP</option>
				        <option value="oct">OCT</option>
				        <option value="nov">NOV</option>
				        <option value="dec">DEC</option>
				        </select>
				        <select name="yy" class="form-control" required>
				        <option>select year</option>
				        <option value="1988">1988</option>
				        <option value="1989">1989</option>
				        <option value="1990">1990</option>
				        <option value="1991">1991</option>
				        <option value="1992">1992</option>
				        <option value="1993">1993</option>
				        <option value="1994">1994</option>
				        <option value="1995">1995</option>
				        <option value="1996">1996</option>
				        <option value="1997">1997</option>
				        <option value="1998">1998</option>
				        <option value="1999">1999</option>
				        <option value="2000">2000</option>
				        <option value="2001">2001</option>
				        <option value="2002">2002</option>
				        <option value="2003">2003</option>
				        <option value="2004">2004</option>
				        <option value="2005">2005</option>
				        <option value="2006">2006</option>
				        <option value="2007">2007</option>
				        <option value="2008">2008</option>
				        <option value="2009">2009</option>
				        <option value="2010">2010</option>
				        <option value="2011">2011</option>
				        <option value="2012">2012</option>
				        <option value="2013">2013</option>
				        <option value="2014">2014</option>
				        <option value="2015">2015</option>
				        <option value="2016">2016</option>
				        </select>
				        </td>

				      </tr>

				      <tr>
				        <td>ADDRESS:</td>
				        <td><input type="text" name="address" class="form-control" required /></td>
				      </tr>
				      
				      <tr>
				        <td>&nbsp;</td>
				        <td><input class="mini_green_button" type="submit" name="submit" value="ADD" /></td>
				      </tr>
     				</table><br><br>

      				</form>


				</div> <!-- content -->


<?php include "include/footer.php"; ?>	