<?php

namespace App\Validation;
use App\Models\Frage;

class AntwortRules
{
    public function antwortValidation(string $str):bool{

        /*Checking: Number must start from 5-9{Rest Numbers}*/
        if((int) $str==1|$str==2|$str==3|$str==4){

            /*Checking: Mobile number must be of 10 digits*/
          return true;
        }else{

            return false;
        }
    }
    public function jokerValidation(string $str):bool{

        /*Checking: Number must start from 5-9{Rest Numbers}*/
        if((int) $str==1|$str==2|$str==3|$str==4|$str==null){

            /*Checking: Mobile number must be of 10 digits*/
            return true;
        }else{

            return false;
        }
    }

}