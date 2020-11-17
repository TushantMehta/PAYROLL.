<?php 


class manageEmployees {


    static public function html_header()
    {
        echo "<!DOCTYPE html>
        <html lang='en'>
        <head>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
    
        <title>Payroll project-Legends </title>
        <script src = './js/manageEmployeesPage.js'></script>
        </head>
        <body>";

    }

    static public function html_form() {
        echo  "
        <h1>Legends Payroll</h1>
    <center>

    
    
    <div class='manageEmployees'> 
    
    <form  id = 'employees'>
    
        <p><b>Manage Employees</b></p>
        <br><br>

      
        
        <input name='fName' id='fName' type='text' placeholder='First Name'required >
        <br><br>

        <input name='lName' id='lName' type='text'placeholder='Last Name' required >
        <br><br>

        <input name='email' id='email' type='email' placeholder='Email' required>
        <br><br>

        <input name='phoneNo' id='number' type='tel'placeholder='Mobile Number' required >

        <br><br>

        <input name='companyCode' id='companyCode' type='number' placeholder='Company Code' required >
        <br><br>

        <input type='button' name='AddEmployee' id='addEmployee' value='Add Employee' onclick='add_Employee()' >
        <input type='button' name='DeleteEmployee' id='saveChange' value='Delete Employee' onclick='delete_Employee()' >

        </form>
</div>
</center>";
            



    }

    static public function html_footer()

    {
        
        echo "</body>
        </html>";
        
    }

    }

?>