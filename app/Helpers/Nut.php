<?php
namespace App\Helpers;

class Nut
{

    // public static function convert_number_to_words($number) {

    //     $hyphen      = '-';
    //     $conjunction = ' and ';
    //     $separator   = ', ';
    //     $negative    = 'negative ';
    //     $decimal     = ' point ';
    //     $dictionary  = array(
    //         0                   => 'zero',
    //         1                   => 'one',
    //         2                   => 'two',
    //         3                   => 'three',
    //         4                   => 'four',
    //         5                   => 'five',
    //         6                   => 'six',
    //         7                   => 'seven',
    //         8                   => 'eight',
    //         9                   => 'nine',
    //         10                  => 'ten',
    //         11                  => 'eleven',
    //         12                  => 'twelve',
    //         13                  => 'thirteen',
    //         14                  => 'fourteen',
    //         15                  => 'fifteen',
    //         16                  => 'sixteen',
    //         17                  => 'seventeen',
    //         18                  => 'eighteen',
    //         19                  => 'nineteen',
    //         20                  => 'twenty',
    //         30                  => 'thirty',
    //         40                  => 'fourty',
    //         50                  => 'fifty',
    //         60                  => 'sixty',
    //         70                  => 'seventy',
    //         80                  => 'eighty',
    //         90                  => 'ninety',
    //         100                 => 'hundred',
    //         1000                => 'thousand',
    //         1000000             => 'million',
    //         1000000000          => 'billion',
    //         1000000000000       => 'trillion',
    //         1000000000000000    => 'quadrillion',
    //         1000000000000000000 => 'quintillion'
    //     );

    //     if (!is_numeric($number)) {
    //         return false;
    //     }

    //     if (($number >= 0 && (int) $number < 0) || (int) $number < 0 - PHP_INT_MAX) {
    //         // overflow
    //         trigger_error(
    //             'convert_number_to_words only accepts numbers between -' . PHP_INT_MAX . ' and ' . PHP_INT_MAX,
    //             E_USER_WARNING
    //         );
    //         return false;
    //     }

    //     if ($number < 0) {
    //         return $negative . Self::convert_number_to_words(abs($number));
    //     }

    //     $string = $fraction = null;

    //     if (strpos($number, '.') !== false) {
    //         list($number, $fraction) = explode('.', $number);
    //     }

    //     switch (true) {
    //         case $number < 21:
    //             $string = $dictionary[$number];
    //             break;
    //         case $number < 100:
    //             $tens   = ((int) ($number / 10)) * 10;
    //             $units  = $number % 10;
    //             $string = $dictionary[$tens];
    //             if ($units) {
    //                 $string .= $hyphen . $dictionary[$units];
    //             }
    //             break;
    //         case $number < 1000:
    //             $hundreds  = $number / 100;
    //             $remainder = $number % 100;
    //             $string = $dictionary[$hundreds] . ' ' . $dictionary[100];
    //             if ($remainder) {
    //                 $string .= $conjunction . Self::convert_number_to_words($remainder);
    //             }
    //             break;
    //         default:
    //             $baseUnit = pow(1000, floor(log($number, 1000)));
    //             $numBaseUnits = (int) ($number / $baseUnit);
    //             $remainder = $number % $baseUnit;
    //             $string = Self::convert_number_to_words($numBaseUnits) . ' ' . $dictionary[$baseUnit];
    //             if ($remainder) {
    //                 $string .= $remainder < 100 ? $conjunction : $separator;
    //                 $string .= Self::convert_number_to_words($remainder);
    //             }
    //             break;
    //     }

    //     if (null !== $fraction && is_numeric($fraction)) {
    //         $string .= $decimal;
    //         $words = array();
    //         foreach (str_split((string) $fraction) as $number) {
    //             $words[] = $dictionary[$number];
    //         }
    //         $string .= implode(' ', $words);
    //     }

    //     return $string;
    // }

    public static function convert_number_to_words($number) {

        $convert = explode('.', $number);    
         $num[17] = array('zero', 'un', 'deux', 'trois', 'quatre', 'cinq', 'six', 'sept', 'huit',
                          'neuf', 'dix', 'onze', 'douze', 'treize', 'quatorze', 'quinze', 'seize');
                           
         $num[100] = array(20 => 'vingt', 30 => 'trente', 40 => 'quarante', 50 => 'cinquante',
                           60 => 'soixante', 70 => 'soixante-dix', 80 => 'quatre-vingt', 90 => 'quatre-vingt-dix');
                                           
         if (isset($convert[1]) && $convert[1] != '') {
           
           if($convert[1][0] == 0 || strlen($convert[1]) > 1){
             $convert[1] = (int) $convert[1];    
           }else{
             $convert[1] = (int) ($convert[1].'0');   
           }
     
           return self::convert_number_to_words($convert[0]).'$$$'.self::convert_number_to_words( $convert[1]);
         }
         if ($number < 0) return 'moins '.self::convert_number_to_words(-$number);
         if ($number < 17) {
           return $num[17][$number];
         }
         elseif ($number < 20) {
           return 'dix-'.self::convert_number_to_words($number-10);
         }
         elseif ($number < 100) {
           if ($number%10 == 0) {
             return $num[100][$number];
           }
           elseif (substr($number, -1) == 1) {
             if( ((int)($number/10)*10)<70 ){
               return self::convert_number_to_words((int)($number/10)*10).'-et-un';
             }
             elseif ($number == 71) {
               return 'soixante-et-onze';
             }
             elseif ($number == 81) {
               return 'quatre-vingt-un';
             }
             elseif ($number == 91) {
               return 'quatre-vingt-onze';
             }
           }
           elseif ($number < 70) {
             return self::convert_number_to_words($number-$number%10).'-'.self::convert_number_to_words($number%10);
           }
           elseif ($number < 80) {
             return self::convert_number_to_words(60).'-'.self::convert_number_to_words($number%20);
           }
           else {
             return self::convert_number_to_words(80).'-'.self::convert_number_to_words($number%20);
           }
         }
         elseif ($number == 100) {
           return 'cent';
         }
         elseif ($number < 200) {
           return self::convert_number_to_words(100).' '.self::convert_number_to_words($number%100);
         }
         elseif ($number < 1000) {
           return self::convert_number_to_words((int)($number/100)).' '.self::convert_number_to_words(100).($number%100 > 0 ? ' '.self::convert_number_to_words($number%100): '');
         }
         elseif ($number == 1000){
           return 'mille';
         }
         elseif ($number < 2000) {
           return self::convert_number_to_words(1000).' '.self::convert_number_to_words($number%1000).' ';
         }
         elseif ($number < 1000000) {
           return self::convert_number_to_words((int)($number/1000)).' '.self::convert_number_to_words(1000).($number%1000 > 0 ? ' '.self::convert_number_to_words($number%1000): '');
         }

        //  else if ($number == 1000000){
        //     return 'Un million';
        //     }
        
        // else if ($number < 2000000) {
        //   return self::convert_number_to_words(1000000) . ' ' . self::convert_number_to_words($number % 1000000) . ' ';
        // }
        // else if ($number < 1000000000) {
        //   return self::convert_number_to_words((int)($number / 1000000)) . ' ' . self::convert_number_to_words(1000000) . ' ' . self::convert_number_to_words($number % 1000000);
        // }

      
     

        else if ($number < 2000000) {
          return 'un million ' . self::convert_number_to_words($number % 1000000) . ' ';
        }  
        // else if ($number < 1 000 000 000) {
        //   return self::convert_number_to_words((int)($number / 1000000)) . ' millions ' . self::convert_number_to_words($number % 1000000);
        // }

     

        else if ($number < 1000000000) {
          return self::convert_number_to_words((int)($number / 1000000)) . ' millions ' .self::convert_number_to_words($number % 1000000);
        }
         return  $number;
     }








     

}
?>
