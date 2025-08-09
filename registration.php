<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <title>Student Form and Table</title>
 <style>
   body {
     font-family: Arial, sans-serif;
     background-color: #f0f4f8;
     display: flex;
     justify-content: center;
     align-items: center;
     height: 100vh;
     margin: 0;
   }

   form {
     background-color: #fff;
     padding: 30px;
     border-radius: 10px;
     width: 100%;
     max-width: 400px;
   }

   h1 {
     text-align: center;
     color: #333;
     margin-bottom: 20px;
   }

   label {
     display: block;
     margin-bottom: 5px;
     font-weight: bold;
     color: #555;
   }

   input[type="text"],
   input[type="email"],
   input[type="number"] {
     width: 100%;
     padding: 10px;
     margin-bottom: 15px;
     border: 1px solid #ccc;
     border-radius: 5px;
     box-sizing: border-box;
   }

   input[type="submit"] {
     background-color: #4CAF50;
     color: white;
     padding: 12px;
     border: none;
     border-radius: 5px;
     width: 100%;
     font-size: 16px;
     cursor: pointer;
   }

   input[type="submit"]:hover {
     background-color: #45a049;
   }
 </style>
</head>
<body>
 <form action="submit_student.php" method="POST">
   <h1>Student Registration</h1>

   <label for="name">Full Name:</label>
   <input type="text" name="name" id="name" placeholder="Enter your full name" required>

   <label for="email">Email Address:</label>
   <input type="email" name="email" id="email" placeholder="Enter your email address" required>

   <label for="age">Age:</label>
   <input type="number" name="age" id="age" placeholder="Enter your age" required>

   <label for="department">Department:</label>
   <input type="text" name="department" id="department" placeholder="Enter your department" required>

   <label for="phone">Phone Number:</label>
   <input type="text" name="phone" id="phone" placeholder="Enter your phone number" required>

   <input type="submit" value="Submit">
 </form>
</body>
</html>
