<?php require_once('config.php'); ?>

<?php   

    $id = isset($_GET['id']) ? $_GET['id'] : '';

        $query=mysql_query("select * from users where id='$id' ");
        $row=mysql_fetch_array($query);

        ?>

<form action="welcome.php" method="post" enctype="multipart/form-data">
  <table align="center">
   <tr>
   <td> <label><strong>Username</strong></label></td>
     <td> <label> <?php echo $row['username']; ?></label><input type="hidden" name="id" value="<?php echo $id; ?> " />
     <br /></td>
    </tr>
    <tr>

     <td><label><strong>Email</strong></label></td>
  <td> <input type="text" name="pass" value="<?php echo $row['email']; ?> " /><br /></td>
  </tr>

    <tr>
  <td> 
          <input type="reset" name="Reset" value="CANCEL" />
      <br></td>


     <td> 
          <input type="submit" name="Submit2" value="Update" />      </td>
   </tr>
</table>
</form>
</body>
</html>