	<?php	include 'session.php'; 	?>
    <div id="slider">
    <div id="tooplate_wrapper">
		<table id='userdtl' name='userdtl' >
		<tr>
		<td>						</td>
		<td>						</td>
		<td>						</td>
		<td>						</td>
			</tr></table>
		
        <div id="tooplate_sidebar">
        
            <div id="header">
                <h2> ECR Leave Module </h2>
            </div>    
			
            <div id="menu">
                <ul class="navigation">
                    <li><a href="#home" class="selected menu_01">Home</a></li>
                    <li><a href="#services" class="menu_03">Services</a></li>
                    <li><a href="#gallery" class="menu_04">Leave Rules</a></li>
                    <li><a href="#contact" class="menu_05">Login</a></li>
                </ul>
            </div>
		</div> <!-- end of sidebar -->
    
        <div id="content">
            <div class="scroll">
                <div class="scrollContainer">
                
                    <div class="panel" id="home">
                    	<div class="content_section">
                            <h2>Welcome </h2>    
                            
                            <img src="images/tooplate_image_01.jpg" alt="Image 01" class="image_wrapper image_fl" />
                            
                            <p><em>This site is under development stage. Please post a messege here after project completed.</em></p>	
                            
                            <p>Message 2 <strong>Strong message</strong>. message 3</p>
                         </div>
                         <div class="content_section last_section">   
                         	<br> <br> <br> <br>	<marquee> 	Explain Here... </marquee>
						</div>
                    </div> <!-- end of home -->
                    
                    
                    <div class="panel" id="services">
                        <h1>Services</h1>
                        <img src="images/tooplate_image_02.jpg" alt="Image 02" class="image_wrapper image_fr" />
                        <p><em>Aenean dictum erat a nibh tempor varius malesuada orci gravida. Aenean tempor pharetra urna et accumsan. Nunc vitae nisl nisl.</em></p>
                        
                        <p>Proin porttitor viverra nisl, sed rutrum nunc blandit sit amet. Praesent vel nisl vitae mi pulvinar tempus vel tempus diam. Aenean quis pulvinar est. Duis sed orci porta urna consequat laoreet aliquet at mi.</p>
                        <div class="cleaner_h20"></div>
                        <ul class="service_list">
                            <li><a href="#" class="service_one">Morbi luctus, quam vitae cursus tincidunt.</a></li>
                            <li><a href="#" class="service_two">Pellentesque habitant morbi tristique senectus.</a></li>
                            <li><a href="#" class="service_three">Duis at sapien ut sapien commodo molestie.</a></li>
                            <li><a href="#" class="service_four">In aliquet blandit iaculis, et vitae elit libero.</a></li> 
                            <li><a href="#" class="service_five">Maecenas posuere fringilla ipsum ut pretium.</a></li>   
                        </ul>
                    </div>
                
                    <div class="panel" id="gallery">
                        <h1>Leave rules</h1>
						<img src="images/gallery/Leave_rl1.jpg" alt="Image 01" /> <br> <br> <br> <br> <br> 
                        <a href="https://indianrailways.gov.in/railwayboard/uploads/codesmanual/est-code-I/estbl-vol1-chap5.htm" target="_blank" >
						<img src="images/gallery/Leave_rl2.jpg" alt="Image 01" />  </a>
                        <!--ul id="gallery_container">
                            <li><a href="#"><img src="images/gallery/Leave_rl.jpg" alt="Image 01" /></a></li>
                            <li><a href="#"><img src="images/gallery/image_02.jpg" alt="Image 02" /></a></li>
                            <li><a href="#"><img src="images/gallery/image_03.jpg" alt="Image 03" /></a></li>
                            <li><a href="#"><img src="images/gallery/image_04.jpg" alt="Image 04" /></a></li>
                            <li><a href="#"><img src="images/gallery/image_05.jpg" alt="Image 05" /></a></li>
                            <li><a href="#"><img src="images/gallery/image_06.jpg" alt="Image 06" /></a></li>
						</ul-->
 
                    </div>
                
                    <div class="panel" id="contact">
                        <h1>Login</h1>
            
                        <p name="LoginMSG" id="LoginMSG">Provide user name and password here...</p>
                        
                        <div class="cleaner_h10"></div>
                                                
                        <div class="col_380 float_l">
                            <div id="contact_form">
                                <form method="post" name="Login" action="#" onsubmit="vldlogin();">
					
									<label for="author">User :</label> <input type="text" id="userid" name="userid" class="required input_field" />
									<div class="cleaner_h10"></div>
																
									<!--label for="email">Password:</label> <input type="password" class="validate-email required input_field" name="email" id="email" /-->
									<label for="email">Password:</label> <input type="password"  name="pwd" id="pwd" class="required input_field" />
									
									<div class="cleaner_h10"></div>
									<div class="cleaner_h10"></div>
									<div class="cleaner_h10"></div>
									<div class="cleaner_h10"></div>
									<div class="cleaner_h10"></div>
									<div class="cleaner_h10"></div>
									<div class="cleaner_h10"></div>
									<div class="cleaner_h10"></div>
									<div class="cleaner_h10"></div>									
									<!--label for="text">Message:</label> <textarea id="text" name="text" rows="0" cols="0" class="required"></textarea>
									<div class="cleaner_h10"></div-->				
									
									<input type="reset" value="Reset" id="reset" name="reset" class="submit_btn float_l" />
		<input type="button" value="Login" id="signin" name="signin" class="submit_btn float_r" onclick="vldlogin();" />
									<!--input type="submit" value="Login" id="signin" name="signin" class="submit_btn float_r" /-->
									
									
								</form>
                            </div>
                        </div>
                        
                        <div class="col_380 float_r">
                        
                        </div>
                    </div>
                    
                </div>
            </div>
            <!-- end of scroll -->
        </div>
        <div class="cleaner"></div>
    </div> <!-- end of content -->
    <div class="cleaner"></div>
</div>

