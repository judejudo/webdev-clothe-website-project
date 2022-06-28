<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
</head>

<body>
  <form action="register_process.php" method="post">

    <fieldset>


      <legend><strong>Registration</strong></legend>
      <p></p>
      <div>

        <label for="fname">First Name</label>
        <input type="text" id="fname" name="ffname" placeholder="Enter first name" />

        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lname" placeholder="Enter last name" />
      </div>
      <p></p>
      <div>
        <p>
          <label for="pass">Password</label>
          <input type="password" id="pass" name="password" placeholder="Enter Password" />

          <label for="sex">Gender</label>
          <input type="Text" id="sex" name="sex" />
      </div>
      <div>
        <p></p>
        <label for="role">Role</label>
        <input type="role" id="role" name="role" placeholder="Please enter occupation">

        <label for="email">Email</label>
        <input type="email" name="email" id="email" required />

        <label for="isD">Is Deleted</label>
        <input type="number" name="isD" id="isD"  />
      </div>
  </form>
  <div>
  <input type="submit" value="Submit" name ="submit">
  </div>


  </fieldset>


</body>

</html>