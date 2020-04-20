<?php include('lib/header.php'); ?>
  <H3>Login</H3>
<p>
                <?php
                if(isset($_SESSION['message']) && !empty($_SESSION['message'])){
                    echo "<span style='color:red'>" . $_SESSION['message'] ."</span>";
                    session_destroy();
                }
                ?>
                </P>
                <p>
                 <form action="processlogin.php" method="POST" >
                <p>
                <?php
                if(isset($_SESSION['error']) && !empty($_SESSION['error'])){
                    echo "<span style='color:red'>" . $_SESSION['error'] ."</span>";
                    session_destroy();
                }
                ?>
                </P>
                
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
                <input type="password" name="password" placeholder="enter password" required>
                </p>
               


                <button type="submit">Login</button>
            </form>
            </p>
       
        <?php include_once('lib/footer.php'); ?>
 