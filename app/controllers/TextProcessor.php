<?php


use Illuminate\Http\Request;
use \Illuminate\Support\Facades\Hash;
use \Illuminate\Support\Facades\Response;

class TextProcessor extends Controller
{


    public function __construct() {

    }

    static public function display($text = '') {
        echo self::process($text);
    }
    static public function process($text = '') {
        self::terminology($text);
        if(Config::get('app.text-processor-debug')) {
            $text = "<span style='background-color:yellow'>" . $text . "</span>";
        }
        return $text;
    }

    static public function terminology(&$text) {
        $terms = [];
        ArrayUtilities::ArrayKeyImplode(Config::get('terminology'),'.','',$terms);
        foreach($terms as $key=>$value) {


            $searchFor = "{%" . $key . "%}";
            $text = preg_replace("/$searchFor/",$value, $text);

            $searchFor = "{%" . ucfirst($key) . "%}";
            $text = preg_replace("/$searchFor/",ucfirst($value), $text);

            $expArray = explode('.',$key);
            $term = $expArray[0];
            $remainder = implode('.',array_slice($expArray,1));

            $searchFor = "{%" . strtoupper($term) . "." . $remainder . "%}";
            $text = preg_replace("/$searchFor/",strtoupper($value), $text);


        }

    }

//if(preg_match("/$searchFor/i",$text,$matches)) {
//for($i=0; $i<count($matches); $i++) {
//
//
//}
//$allCaps = false;
//$firstLetterCaps = false;
//
//
//$text = preg_replace("/$searchFor/i", $value, $text);
//}


}