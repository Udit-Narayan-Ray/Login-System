<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="">

    <title>Document</title>
    <link rel="stylesheet" href="link.css">

    <style></style>
</head>
<body > 
    <form  action="registerback.php" method="post">
        <div align="center">
        
                <h2>Registration Form</h2>
          <center>  <img  src="loginimage.jpg"  width="100px" height="100px" ></center>
        
            <table  align="center" cellspacing="1px">
                <tr>
                 <td align="right"><label>Student Name:-&nbsp;</label></td>
                 <td><input type="text" value="" name="name" placeholder="Your Name" ></td>
                 </tr>
             <tr> <td align="right"><label>Roll No:-&nbsp;</label></td>
             <td> <input type="number" value="" name="rollno" placeholder="Roll No"></td>
             </tr>
             <tr>
                <td align="right"><label>Email:-&nbsp;</label></td>
         <td>       <input type="email" required placeholder="e-mail" name="email" ></td>
             </tr>
               <tr> <td align="right"><label>DOB:-&nbsp;</label></td>
               <td> <input type="date" name="dob" value="" placeholder="Date of Birth"></td>
             </tr>
             <tr>
                <td align="right">
                    <label>Mobile Number:-&nbsp;</label></td>
                   <td> <input type="number" value="" name="number" placeholder="mobile number" required>
                </td>
             </tr>
             <tr>
                <td align="right"><label>Gender:-&nbsp;</label></td>
                <td><input type="radio" value="Male" name="gender">M
                <input type="radio" value="Female" name="gender">F
            <input type="radio" value='Other' name='gender'>Other</td>

             </tr>
             <tr>
                <td align="right"><label>Hobbies&nbsp;</label></td>
              <td>  <input type="checkbox" name="hobbie[]" value="Reading">Reading
                <input type="checkbox" name="hobbie[]" value="Playing">Playing
                <input type="checkbox" name="hobbie[]" value="Entertainment">Entertainment
                <input type="checkbox" name="hobbie[]" value="Creative">Creative</td>
             </tr>
             <tr>
                <td align="right">Branch&nbsp;
                </td><td>
                    <select name="branch" >
                        <option value=""></option>
                        <option value="IT">IT</option>
                        <option value="ME">ME</option>
                        <option value="CE">CE</option>
                        <option value="MME">MME</option>
                        <option value="PE">PE</option>
                        <option value="ChE">ChE</option>
                        <option value="CSE">CSE</option>
                    </select>
                </td>
             </tr>
             <tr><td align="right"><label>Password&nbsp;</label></td>
            <td> <input type="password" value="" name="password" placeholder="Password" required> </td></tr> 
            <tr><td align="right"><label>Confirm Password&nbsp;</label></td>
             <td><input type="password" name="cpassword" value="" placeholder="Confirm Password"></td></tr>
            <tr><td align="right">
                <label class="cl">
                    <button  type="submit"  value="Register"  name="save">Register</button>
                </label>  </td>
           <td><label>
            <button type="reset" value='' name='reset'>RESET</button>
        </label></td></tr>
            <tr>
                <div  >
                   
                <td align="center">
                    <label>
                     &nbsp;Already Have an account? <a href="signin.php">Log in</a>
                    </label>
                </td>
                </div>
                
            </tr>
        </table>   
       
        </div>
    </form>
    
</body>
</html>