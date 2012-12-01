    <!--
    | ----------------------------------------------------------------------------------
    | This code developed for donate mate web apps in Sanitation Hackathon 2012.
    | ----------------------------------------------------------------------------------
    | Author: Thouhedul Islam Suchi
    | Email: tisuchi@gmail.com
    | URI : http://tisuchi.wordpress.com
    | Cell: +8801710823643
    | Copyright: all rights researved by author.
    -->

<?php 


    //request for database 
    @mysql_connect('localhost', 'root', '') or die();
    @mysql_select_db('hackathon') or die(); 


   

    if(@$_POST['submit']){
        //taking data from the users
        $username = @$_POST['email'];
        $password = @$_POST['password'];



        $query="SELECT * FROM personal_info WHERE email='$username' ";
        $result = @mysql_query($query) ; 
        
        if(@mysql_num_rows($result) > 0){

           //echo "hhmm";
           //$r = mysql_fetch_array($result);
            
           $data = mysql_fetch_array($result);

                $pass= $data['password'];
               
                if($pass == $password){
                    session_start();
                    $_SESSION['sess_user'] = $data['email'];
                    header('Location:index.php');
                }else{

                    echo "Wrong password!";
                }
            
        }else{
            echo "wrong user name";
        }





    }//if(@$_POST['submit']){



 ?>

<?php include "includes/header.php"; ?>

    <h3>Font End User Login</h3>
    <form class="form-horizontal" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <div class="control-group">
            <label class="control-label" for="inputEmail">Email</label>
            <div class="controls">
                <input type="text" id="inputEmail" name="email" placeholder="Email" required>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="inputPassword">Password</label>
            <div class="controls">
                <input type="password" name="password" id="inputPassword" class="password" placeholder="Password" required>
            </div>
        </div>
        <div class="control-group">
            <div class="controls">
            <label class="checkbox">
                <input type="checkbox"> Remember me
            </label>
        <input type="submit" name="submit" class="btn" value="Sign in" />
        </div>
        </div>
    </form>


        

<?php include "includes/footer.php"; ?>