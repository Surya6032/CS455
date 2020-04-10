<br>
<?php
 $hostname="localhost";
 $username="root";
 $password="";
 $databaseName="ajax_demo";
 $connect = mysqli_connect($hostname,$username,$password,$databaseName);
 
 
 $state= $_GET['state'];

?> 

<select name="items">
            <?php
                if($state=="Alabama"){
                    $query = "SELECT * FROM cities where state_name='Alabama' ";
                $result = mysqli_query($connect,$query);
                while($row1 = mysqli_fetch_array($result)):;?>
         
                <option><?php echo $row1[2];?></option>
                <?php endwhile;}?>
                
                <?php
                if($state=="Colorado"){
                    $query1 = "SELECT * FROM cities where state_name='Colorado' ";
                    $result1=mysqli_query($connect,$query1);
                while($row1 = mysqli_fetch_array($result1)):;?>
         
                <option><?php echo $row1[2];?></option>
                <?php endwhile;}?>
                
             
                //<!-- 7. create a database using the ddl provided -->
                //<!-- 8. add all items from the database as additional drop down options -->
               
 </select>
