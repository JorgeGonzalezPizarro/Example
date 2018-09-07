<?php
    /**
     * Created by PhpStorm.
     * User: PTL-JGonzalez
     * Date: 07/09/2018
     * Time: 10:26
     */
    
    namespace App\IO\Validator;
    
    
    class UrlValidator
    {
    
        public static function urlValidator($url)
        {
            if (filter_var($url, FILTER_VALIDATE_URL)) {
            
                return true;
            
            }
            return false;
        
        }
    }