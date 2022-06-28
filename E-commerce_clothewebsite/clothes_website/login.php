<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
</head>
<body>
<form method = 'post' action = "">
      <fieldset>
        <legend><strong>Personal Information</strong></legend>
      <p></p>
      <div>
        <label for="fname">First Name</label>
        <input
          type="text"
          id="fname"
          name="fname"
          placeholder="Enter first name"
        />

        <label for="lname">Last Name</label>
        <input
          type="text"
          id="lname"
          name="lname"
          placeholder="Enter last name"
        />
      </div>
      <p></p>
      <div><p>
        <label for="oname">other Name</label>
        <input
          type="text"
          id="oname"
          name="oname"
          placeholder="Enter other name if any"
        />
        
        <label for="date">date of Birth</label>
        <input type="date" id="date" name="date" />
      </div>
      <div>
        <p></p>
        <label for="phone">phone Number</label>
        <input type="tel" id="phone" name="phone" Value="39874289374983" readonly>

        <label for="email">Email</label>
        <input type="email" name="email" id="email" required />
        <div> -->
        <button>Submit</button>
      </div>
      </div></fieldset>
      
    
</form>
</body>
</html>