<!DOCTYPE html>
<!-- Designined by CodingLab - youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Responsive Registration Form | CodingLab </title>
    <link rel="stylesheet" href="css/userProfileStyle.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="title">CREATE YOUR PROFILE</div>
    <div class="content">
    <form action="../includes/userCreateProfileInclude.php" method="post">
        <div class="user-details">
          <div class="input-box">
            <span class="details">First Name</span>
            <input type="text" placeholder="Enter your First Name" name="firstname" required>
          </div>
          <div class="input-box">
            <span class="details">Last Name</span>
            <input type="text" placeholder="Enter your Last Name" name="lastname" required>
          </div>
          <div class="input-box">
            <span class="details">Mobile Number</span>
            <input type="text" placeholder="Enter your mobile number" name="phone" required>
          </div>
          <div class="input-box">
            <span class="details">State</span>
            <input type="text" placeholder="Enter your State of Origin"  name="state" required>
          </div>
          <div class="input-box">
            <span class="details">Enter your address</span>
            <input type="text" placeholder="Enter your Residential Address" name="address" required>
          </div>
          <div class="input-box">
            <span class="details">Gender</span>
            <select name="gender" id="">
            <option value="">Select Gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>

            </select>
          </div>
        </div>
      
        <div class="button">
          <input type="submit" value="Submit" name="submit">
        </div>
      </form>
    </div>
  </div>

</body>
</html>
