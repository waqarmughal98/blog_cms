<?php
// Disable Errors
//error_reporting(0);

// Form Validation Class
class Validation extends db {

    // Store Errors In Array
    public $errors = [];

    // Get Data From Input Fields
    public function input($inputField){
        // Get Method Type
        if($_SERVER['REQUEST_METHOD'] == 'POST' || $_SERVER['REQUEST_METHOD'] == 'post'):
            // Remove Extra Spaces & Tags
            return(strip_tags(trim($_POST[$inputField])));
        elseif($_SERVER['REQUEST_METHOD'] == 'GET' || $_SERVER['REQUEST_METHOD'] == 'get'):
            // Remove Extra Spaces & Tags
            return(strip_tags(trim($_GET[$inputField])));
        endif;
    }

    // Validation Method
    public function validate($inputField, $label, $rules){

        // Split Rule Strings And Convert Into Array On Pipe Sign
        $allRules = explode("|", $rules);

        // Call Get Data Input Function
        $field = $this->input($inputField);

        // Check Required Rules
        if(in_array("required", $allRules)):
            if(empty($field)):
                return($this->errors[$inputField] = $label . " Is Required");
            endif;
        endif;

        // Check Unique Emaile Rule
        if(in_array("uniqueEmail", $allRules)):
            // Search Indexs In Array
            $uniqueIndex = array_search("uniqueEmail", $allRules);
            $tableIndex  = $uniqueIndex + 1;
            $tableName   = $allRules[$tableIndex];
            // Run Query
            $result = $this->conn->prepare("SELECT * FROM " . $tableName . " WHERE " . $inputField . " = ?");
            if($result->execute([$field])):
                if($result->rowCount() > 0):
                    return($this->errors[$inputField] = $label . " Is Already Exist");
                endif;
            endif;
        endif;

        // Check Minimum Character Rule In Password
        if(in_array("min_len", $allRules)):
            $minLenIndex = array_search("min_len", $allRules);
            $valueIndex = $minLenIndex + 1;
            $minValue = $allRules[$valueIndex];
            if(strlen($field) < $minValue):
                return($this->errors[$inputField] = $label . " Is Too Short");
            endif;
        endif;
    }

    // Run Errors Method
    public function run(){
        if(empty($this->errors)):
            return(true);
        else:
            return(false);
        endif;
    }

    

}

?>