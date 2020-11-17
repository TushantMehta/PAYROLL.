<?php

class customerService{
    static public function html_header(){
        echo"<!DOCTYPE html>
        <html>
        <head>
        <link rel='stylesheet' type='text/css' href='./css/customerService.style.css'/>  
        <script src='./js/customerService.js'></script>
        </head>
        <body>";
    }

    static public function html_form(){
        echo"<div id='heading'>
                        <h1>Legends Payroll</h1>
                    </div>

                    <div id='box'>
                        <h1>Customer service</h1>
                    </div>
                <br><br>
                <br><br><br><br><br><br><br>
                <center>
                <div id='fetch'>
                    <center>
                        <br>
                    <p id='message'>Welcome</p>

                    <br>
                </div>
                </center>
                <br><br><br><br>
                <div id='contactInfo'>
                <h1><b>Contact Us:</b></h1>
                <h3><b>Canada Head office</b></h3><br>
                <p id='inc' ><u>Legends payroll Inc.</u><br></p>
                <p>
                110 Mantheson Bivd West<br>
                Suite 320<br>
                Missisauga, Ontario<br>
                Tel: - +905 568 0101<br>
                Fax: - +905 568 8510<br>
                Website: https://www.legendspayroll.ca</p>
                <br><br><br><br>
                </div>
                <br><br><br><br><br><br><br>
                <div id='contactInfo2'>
                <p>
                <u>Support</u><br>
                Tel:+(800) 394 4357<br>
                visit: https://community.legends.com

                <br><br><br><br>
                <u>Security<br></u>
                Email: securityofficer@legends.com
                </p>
                </div>

                <div id='contactInfo3'>
                <p>
                <u>Press</u><br>
                Tel: +(978) 947 2855<BR>
                    Email: educate@gmail.com<br><br><br>
                    <u>Education<br></u>
                    Tel: +1(888) 293 5549<br>
                    Email: educate@legends.com
                </p>

                </div>";

    }
    static public function html_footer(){
        echo'</body></html>';
    }
}

?>