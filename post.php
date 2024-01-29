<?php
class Post {
    public function post_employees(){
        return array(
            "EMPLOYEE_ID" => 1,
            "FIRST_NAME" => "KENT HAROLD",
            "LAST_NAME" => "BELEN",
            "EMAIL" => "belenkentharold@gmail.com",
            "PHONE_NUMBER" => "09934406024",
            "HIRE_DATE" => "01/01/01"
        );
    }


    public function post_jobs(){
        return array(
            "SALARY" => "10000",
            "JOB_TITLE" => "WEB DEV",
            "MIN_SALARY" => "1000",
            "MAX_SALARY" => "20000"
        );
    }

    public function add_employees($data){
        $data->firstname = "kent harold";
        return $data;
}
}

?>
