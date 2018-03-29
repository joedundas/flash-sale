<?php


use Illuminate\Http\Request;
use \Illuminate\Support\Facades\Hash;
use \Illuminate\Support\Facades\Response;

class ArrayUtilities extends Controller
{


    public function __construct() {

    }

    // ArrayKeyImplode
    // Will make a single level deep associate array by imploding a deep level associative array.
    //   keys of the new array will be $glue delimited strings based on the keys of the original array.
    // Example:
    //        $exampleArray = [
    //            'a'=>[
    //                'b'=>'bird',
    //                'e'=>[
    //                    'animals'=>'dog',
    //                    'plant'=>'eggplant'
    //                ]
    //            ],
    //            'c'=>'cat'
    //        ]
    //     ArrayKeyImplode($exampleArray,'.','myPrefix',$results)
    //     Results:
    //               $results = [
    //                   'myPrefix.a.b'=>'bird',
    //                   'myPrefix.a.e.animals'=>'dog',
    //                   'myPrefix.a.e.plan'=>'eggplant',
    //                   'myPrefix.c'=>'cat'
    //               ];
    static public function ArrayKeyImplode($array,$glue,$include_key_prefix,&$imploded_array) {
        foreach($array as $key=>$value) {
            $this_key = ltrim($include_key_prefix . "." . $key,'.');
            if(is_array($value)) {
                self::ArrayKeyImplode($value,$glue,$this_key,$imploded_array);
            }
            else {
                $imploded_array[$this_key] = $value;
            }
        }
    }




}