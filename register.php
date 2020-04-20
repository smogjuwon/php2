<?php session_start();

include('lib/header.php');
 ?>
 <h3>Register</h3>
<p><strong>Welcome please register to proceed</strong></p>
   <p> <form action="processregister.php" method="POST" >
                <p>
                <?php
                if(isset($_SESSION['error']) && !empty($_SESSION['error'])){
                    echo "<span style='color:red'>" . $_SESSION['error'] ."</span>";
                    session_destroy();
                }
                ?>
                </P>
                <p>
                    <label for="first_name">First Name</label><br>
                    <input
                    <?php
                if(isset($_SESSION['first_name'])){
                    echo "value=". $_SESSION['first_name'];
                }
                ?>
                     type="text"name="first_name" placeholder="Enter Your First Name"required/>
                </p>
                
                <p>
                    <label for="last_name">Last Name</label><br>
                    <input
                    <?php
                if(isset($_SESSION['last_name'])){
                    echo "value=". $_SESSION['last_name'];
                }
                ?>
                     type="text"name="last_name" placeholder="Enter Your Last Name"required/>
                </p>
                <p>
                    <label for="email">Email</label><br>
                    <input 
                    <?php
                if(isset($_SESSION['email'])){
                    echo "value=". $_SESSION['email'];
                }
                ?>
                    type="email"name="email" placeholder="Enter Your email"required />
                </p>
                <p>
                <label for="password">password</label><br>
                <input type="password" name="password" placeholder="enter password">
                </p>
                <p>  
                    <label for="gender">GENDER</label> <br>
                    <select name="gender" id="Gender" required>
                     <option value=""></option>
                     <option 
                     <?php
                if(isset($_SESSION['female']) && $_SESSION['gender'] == 'female'){
                    echo "selected";
                }
                ?> 
                     value="female">Female</option>
                     <option
                     <?php
                if(isset($_SESSION['male']) && $_SESSION['gender'] == 'male'){
                    echo "selected";
                }
                ?>
                      value="male">Male</option>
                    </select>
                 <p>
                     <label for="designation">Designation</label><br>
                     <select name="designation" id="text" required>
                         <option value=""></option>
                         <option
                         <?php
                if(isset($_SESSION['Staff'])){
                    echo "selected";
                }
                ?> 
                         value="staff">Staff</option>
                         <option
                         <?php
                if(isset($_SESSION['student'])){
                    echo "selected";
                }
                ?>
                          value="student">Student</option>
                     </select><br>


                <button type="submit">create account</button>
            </form>
            </p>
       
        <?php include_once('lib/footer.php'); ?>
 