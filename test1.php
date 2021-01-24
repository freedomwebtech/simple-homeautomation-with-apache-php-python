<?php
    if (isset($_POST['button']))
    {
       echo shell_exec("python3 teston.py");
         

    }

    if (isset($_POST['butn']))
    {
         exec("python3 testoff.py");
         

    }

    if (isset($_POST['button1']))
    {
       echo shell_exec("python3 teston1.py");


    }

    if (isset($_POST['butn1']))
    {
         exec("python3 testoff1.py");


    }




 

?>
<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
 
<body>
    <div align="center">
    <form method="post">
    <p>
     <input type="submit" value="ON" name="button" class="btn btn-primary">
     <input type="submit" value="OFF" name="butn" class="btn btn-danger">
    
    </P>
     <p>
      <input type="submit" value="ON" name="button1" class="btn btn-primary">
     <input type="submit" value="OFF" name="butn1" class="btn btn-danger">     
    </p>
    </form>
</div>
<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
</body>
</html>
