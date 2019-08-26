<?php
 
      $username=$_POST['username'];
      $password=$_POST['pass'];
      
     
      $con=mysqli_connect('localhost','root');
      mysqli_select_db($con,'db5');
      $result=mysqli_query($con,"select *from login ");
      $n=mysqli_num_rows($result);
      
      for($i=1;$i<=$n;$i++)
      {
         $row=mysqli_fetch_array($result);
         
         if($row['username']=="$username" && $row['pass']==$password)
            {
               $x=1;
            }
         else
         {
            $x=0;
         }
         if($x==1)
         {
            header('location:attendence management2.html');
         }
      }
      if($x==0)
      {
         echo 'wrong pass';
      }
  
    mysqli_close($con);  `                                                                                                     
?>