<?php

class EmployeeDAO {

    static private $employee = array();
    
    
    
    static public function updateemployees() {

        $content = FileService::readFile(EMPLOYEE_DATA_FILE);
        employeeParser::ParseEmployees($content);
        self::$employee = employeeParser::$employees;
    
    }

    static public function convertToStd($dataToConvert) {
        
        $employeeStd = array();

        if(is_array($dataToConvert)) {

            if(!empty($dataToConvert)) {
            
              
                foreach($dataToConvert as $employee) {
                    $emp = new stdClass;

                    $emp->id = $employee->getId();
                    $emp->fName = $employee->getFName();
                    $emp->lName = $employee->getlName();
                    $emp->phoneNo = $employee->getPhoneNo();
                    $emp->companyCode = $employee->getCompanyCode();
                    $emp->email = $employee->getEmail();
                    
                    $employeeStd[] = $emp;

                    
                }
                    return $employeeStd;
            
            }
        }

        else {

            $emp = new stdClass;

                $emp->id = $dataToConvert->getId();
                $emp->fName = $dataToConvert->getFName();
                $emp->lName = $dataToConvert->getlName();
                $emp->phoneNo = $dataToConvert->getPhoneNo();
                $emp->companyCode = $dataToConvert->getCompanyCode();
                $emp->email = $dataToConvert->getEmail();

            return $emp;
        }


    }


    static public function createemployeeObj($data) {


        $emp = new employee;

        $emp->setId($data->id);
        $emp->setfName($data->fName);
        $emp->setlName($data->lName);
        $emp->setphoneNo($data->phoneNo);
        $emp->setEmail($data->email);
        $emp->setCompanyCode($data->companyCode);

        return $emp;
    }
    

    static public function getemployees() {

        self::updateemployees();

        return self::convertToStd(self::$employee);

    }
    
    
    static public function add_Employee($data) {

        self::updateemployees();
        
        $jsonData  = file_get_contents(EMPLOYEE_DATA_FILE);
        $array = json_decode($jsonData);
        $emp = self::createemployeeObj($data);
        $empStd = self::convertToStd($emp);
        array_push($array, $empStd);
        $nArray = json_encode($array);
        file_put_contents(EMPLOYEE_DATA_FILE, $nArray);
    }

    static public function delete_Employee($data) {

        self::updateemployees();
        
        $jsonData  = file_get_contents(EMPLOYEE_DATA_FILE);
        $array = json_decode($jsonData);
       
        foreach ($array as $key => $value) {
            if (in_array('y@m.com' , $value)) {
                unset($array[$key]);
            }
        }
        $jsonData = json_encode($array);
    }

    static public function editemployee($input) {

        self::updateemployees();

        $emp = self::createemployeeObj($input);
        $i = 0;
        foreach(self::$employees as $employee) {
            if($employee->getId() == $emp->getId()) {

                self::$employees[$i] = $emp;
            break;
            
            }

            ++$i;
        }

        $updateArray = self::convertToStd(self::$employees);

        file_put_contents(EMPLOYEE_DATA_FILE, json_encode($updateArray));



    }

}
?>