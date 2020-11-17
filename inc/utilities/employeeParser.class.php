<?php

class EmployeeParser {

    static public $employees = array();
    

    static public function ParseEmployees($content) {

        
        if (!empty($content)) {
           
            try {
                
            {
                    foreach ($content as $employee) {
                        $emp = new employee();
                        $emp->setId($employee->id);
                        $emp->setfName($employee->fName);
                        $emp->setlName($employee->lName);
                        $emp->setEmail($employee->email);
                        $emp->setphoneNo($employee->phoneNo);
                        $emp->setCompanyCode($employee->companyCode);
                        echo "employee = ", $employee->id;

                        
                        self::$employees[] = $emp;

                    }
                }  
            }
            catch (Exception $pe) {
                echo $pe->getMessage();
            }
        }

        


    }


}


?>