<?php
  //error_reporting(0);
//include('store.php');
if(isset($_POST['commit']))
{
  $fname=$_POST['firstname'];
  $query="select * from patients where FNAME='$fname'";
  $search_result=filterTable($query); 
}
else{
  $query="select * from patients";
  $search_result=filterTable($query);
}
function filterTable($query)
{
  $con = mysqli_connect("127.0.0.1",'root','password',"clinic");
  $filter_result=mysqli_query($con,$query);
  return $filter_result;
}

header("refresh:200; url=index.html");
?>
<html>
<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <link rel="icon" type="image/gif/png" href="clinic.jpg">
  <title>Search Patient</title>
  <link rel="stylesheet" href="css/style.css">
  <style>
  table{
      margin: 0 auto;
      margin-top: 50px;
      border-right: none;
      border-left: none;
      border-top:2px solid #694551;
      border-bottom:2px solid #694551;
      background-color: white;
     border-radius: 3px;
  -webkit-box-shadow: 0 0 200px rgba(255, 255, 255, 0.5), 0 1px 2px rgba(0, 0, 0, 0.3);
  -moz-box-shadow: 0 0 200px rgba(255, 255, 255, 0.5), 0 1px 2px rgba(0, 0, 0, 0.3);
  box-shadow: 0 0 200px rgba(255, 255, 255, 0.5), 0 1px 2px rgba(0, 0, 0, 0.3);

      }
      th{
      font-family:"Trebuchet MS",tahoma;
      font-size: 26px;
      height: 40px;
      width: 1500px;
      border-bottom: 2px solid black;
      }
      td{
        height: 30px;
        font-size: 20px;
      text-align: center;
      border-bottom: 1px solid #694551;
      }
  }

  </style>
</head>
<body>
	<div class="container">
    <section class="register">
      <h1>Enter Patient's First Name</h1>
      <div class="reg_section">
      <form action="display.php" method="post">
        <input id="firstname" type="text" name="firstname" value="" placeholder="First Name">
      </div>
      <p class="submit"><input type="submit" name="commit" value="Search"></p>
      </form>

    </section>
  </div>

  <table>
    <tr>
      <th>First Name</th>
      <th>Last name</th>
      <th>Age</th>
      <th>Date of Birth</th><th>Phone Number</th><th>Gender</th><th>Details</th>
    </tr>
    <?php while($row=mysqli_fetch_array($search_result)):?>
      <tr>
        <td><?php echo $row['FNAME'];?></td>
        <td><?php echo $row['LNAME'];?></td>
        <td><?php echo $row['AGE'];?></td>
        <td><?php echo $row['DOB'];?></td>
        <td><?php echo $row['PHONE'];?></td>
        <td><?php echo $row['GENDER'];?></td>
        <td><?php echo $row['DETAILS'];?></td>
      </tr>
    <?php endwhile;?>
  </table>
</body>
</html>