<?php
 
$servername = "localhost";
$username = "starngqi_careers";
$password = "Careers@123";
$dbname = "starngqi_careers";
//$mysqli = new mysqli($servername, $username,$password, $dbname);
$conn=new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
 
// Checking for connections
// if ($mysqli->connect_error) {
//     die('Connect Error (' .
//     $mysqli->connect_errno . ') '.
//     $mysqli->connect_error);
// }
 
// SQL query to select data from database
$stat = $conn->prepare("select * from career_form");
$stat->execute();
//$mysqli->close();
?>

<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <title>Reference List</title>
    <!-- CSS FOR STYLING THE PAGE -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
 
<body>
    <section>
        
        <!-- TABLE CONSTRUCTION-->
        <div style="margin-left:220px;margin-bottom:15px">
             <!--<a class="navbar-brand logo" href="index.php">-->
         <img id="logo-img" class="img-fluid" src="images/logo.png" alt="">
         </a>
        </div>
        <div class="container">
            <h2>Careers Data</h2>
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" id="gfg" style="width:200px; margin-right: 0px; margin-left: 10px; display: inline;"> <!--search bar-->
<div class="dropdown" style="padding-left: 0px; display: inline;">
    <button class="btn btn-secondary" type="button" id="export_button" data-toggle="dropdown" aria-expanded="false" style="background-color: white; color: black;">
      Export
    </button>
</div>
        <table id="employee_data" class="table table-striped" style="margin-top:1rem;">
            <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Mobile</th>
                <th scope="col">Role</th>
                <th scope="col">Job Type</th>
                <th scope="col">Education Details</th>
                <th scope="col">Cover letter Details</th>
                <th scope="col">Resume</th>
            </tr>
            <!-- PHP CODE TO FETCH DATA FROM ROWS-->
            <?php   // LOOP TILL END OF DATA
                    while($rows = $stat->fetch()){
             ?>
             </thead>
             <tbody id="geeks">
            <tr>
                <!--FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN-->
                <td><?php echo $rows['name'];?></td>
                <td><?php echo $rows['email'];?></td>
                <td><?php echo $rows['mobile'];?></td>
                <td><?php echo $rows['role'];?></td>
                <td><?php echo $rows['job_type'];?></td>
                <td><?php echo $rows['education'];?></td>
                <td><?php echo $rows['othercomments'];?></td>
                <td style="list-style:none"><?php echo "<li ><a target='_blank' href='data-conn.php?id=".$rows['id']."'>".$rows['filename']."</a></li>"?></td>
            </tr>
            </tbody>
            <?php
                }
             ?>
        </table>
        </div>
    </section>
</body>
<script type="text/javascript" src="https://unpkg.com/xlsx@0.15.1/dist/xlsx.full.min.js"></script>
    
    <script>
        $(document).ready(function() {
            $("#gfg").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#geeks tr").filter(function() {
                    $(this).toggle($(this).text()
                    .toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>
    <script>
        function html_table_to_excel(type){
            var data = document.getElementById('employee_data');
            var file = XLSX.utils.table_to_book(data, {sheet: "sheet1"});
            XLSX.write(file, { bookType: type, bookSST: true, type: 'base64' });
            XLSX.writeFile(file, 'file.' + type);
        }
        const export_button = document.getElementById('export_button');
        export_button.addEventListener('click', () =>  {
        html_table_to_excel('xlsx');
        Test();
    });
    </script>
 
</html>

