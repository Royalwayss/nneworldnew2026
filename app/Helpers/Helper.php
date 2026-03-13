<?php 
use App\Models\BannerImage;
use App\Models\Cart;
use App\Models\Wishlist;
use App\Models\Product;
use App\Models\Category;

    
    
	function meta(){
		return [];
	}
	
	function from_input_error_message($field=''){
		return '<p class="error_message" id="input-error-'.$field.'"></p>';
	}
	
	function RandNumbers($len) { 
		$str = mt_rand(1,9);
		for($i=0;$i<$len-1;$i++) { 
			$str .= mt_rand(0, 9);
		}
      return $str;
	}
	
	function popup_slider($previous_id='',$next_id='',$route_name='',$popup_type='',$module=''){
		    $popup_slider = '';
			if($previous_id != ''){
				$popup_slider .='<img title="View Previous" style="margin-left:20px;width:24px" class="view-modal" data-id="'.$previous_id.'" data-module="'.$module.'" modal-type="'.$popup_type.'" data-href="'.route($route_name,[$previous_id]).'" src="'.asset('admin/images/icons/left-arrow.jpg').'">';
			}else{
				$popup_slider .='<img style="margin-left:20px;width:24px;filter: blur(8px);-webkit-filter: blur(20px);cursor:not-allowed;" src="'.asset('admin/images/icons/left-arrow.jpg').'">';
			}
			
			if($next_id != ''){
				$popup_slider .= '<img title="View Next" style="margin-left:20px;width:24px" class="view-modal" data-id="'.$next_id.'" data-module="'.$module.'" modal-type="'.$popup_type.'" data-href="'.route($route_name,[$next_id]).'" src="'.asset('admin/images/icons/right-arrow.jpg').'">';
			}else{
				$popup_slider .= '<img style="margin-left:20px;width:24px;filter: blur(8px);-webkit-filter: blur(20px);cursor:not-allowed;"  src="'.asset('admin/images/icons/right-arrow.jpg').'">';
			}
			return $popup_slider;
	}
	
	function form_popup_slider($previous_id='',$next_id='',$route_name='',$popup_type='',$module=''){
		    $popup_slider = '';
			if($previous_id != ''){
				$popup_slider .='<img title="View Previous" style="margin-left:20px;width:24px" class="addedit-modal" data-id="'.$previous_id.'" data-module="'.$module.'" modal-type="'.$popup_type.'" data-href="'.route($route_name,[$previous_id]).'" src="'.asset('admin/images/icons/left-arrow.jpg').'">';
			}else{
				$popup_slider .='<img style="margin-left:20px;width:24px;filter: blur(8px);-webkit-filter: blur(20px);cursor:not-allowed;" src="'.asset('admin/images/icons/left-arrow.jpg').'">';
			}
			
			if($next_id != ''){
				$popup_slider .= '<img title="View Next" style="margin-left:20px;width:24px" class="addedit-modal" data-id="'.$next_id.'" data-module="'.$module.'" modal-type="'.$popup_type.'" data-href="'.route($route_name,[$next_id]).'" src="'.asset('admin/images/icons/right-arrow.jpg').'">';
			}else{
				$popup_slider .= '<img style="margin-left:20px;width:24px;filter: blur(8px);-webkit-filter: blur(20px);cursor:not-allowed;"  src="'.asset('admin/images/icons/right-arrow.jpg').'">';
			}
			return $popup_slider;
	}
	
	
	function formatAmt($amount){
        list ($number, $decimal) = explode('.', sprintf('%.2f', floatval($amount)));
        $sign = $number < 0 ? '-' : '';
        $number = abs($number);
        for ($i = 3; $i < strlen($number); $i += 3){
            $number = substr_replace($number, ',', -$i, 0);
        }
        if($decimal==00){
            return  $sign . $number;
        }else{
            return  $sign . $number;
        }
    }

    

    function formatPrice($currencyinfo,$amount,$convert=null){
        if($convert =="no"){
            $amount  =  round($amount);
        }else{
            $amount  =  round($amount/$currencyinfo['rate']);
        }
        list ($number, $decimal) = explode('.', sprintf('%.2f', floatval($amount)));
        $sign = $number < 0 ? '-' : '';
        $number = abs($number);
        for ($i = 3; $i < strlen($number); $i += 3){
            $number = substr_replace($number, ',', -$i, 0);
        }
        return  $currencyinfo['currency_symbol']." ".$sign . $number.".".$decimal;
    }

    function convert_number_to_words($number) {
        $hyphen      = '-';
        $conjunction = ' and ';
        $separator   = ', ';
        $negative    = 'negative ';
        $decimal     = ' point ';
        $dictionary  = array(
            0                   => 'zero',
            1                   => 'one',
            2                   => 'two',
            3                   => 'three',
            4                   => 'four',
            5                   => 'five',
            6                   => 'six',
            7                   => 'seven',
            8                   => 'eight',
            9                   => 'nine',
            10                  => 'ten',
            11                  => 'eleven',
            12                  => 'twelve',
            13                  => 'thirteen',
            14                  => 'fourteen',
            15                  => 'fifteen',
            16                  => 'sixteen',
            17                  => 'seventeen',
            18                  => 'eighteen',
            19                  => 'nineteen',
            20                  => 'twenty',
            30                  => 'thirty',
            40                  => 'fourty',
            50                  => 'fifty',
            60                  => 'sixty',
            70                  => 'seventy',
            80                  => 'eighty',
            90                  => 'ninety',
            100                 => 'hundred',
            1000                => 'thousand',
            1000000             => 'million',
            1000000000          => 'billion',
            1000000000000       => 'trillion',
            1000000000000000    => 'quadrillion',
            1000000000000000000 => 'quintillion'
        );
        
        if (!is_numeric($number)) {
            return false;
        }
        
        if (($number >= 0 && (int) $number < 0) || (int) $number < 0 - PHP_INT_MAX) {
            // overflow
            trigger_error(
                'convert_number_to_words only accepts numbers between -' . PHP_INT_MAX . ' and ' . PHP_INT_MAX,
                E_USER_WARNING
            );
            return false;
        }

        if ($number < 0) {
            return $negative . convert_number_to_words(abs($number));
        }
        
        $string = $fraction = null;
        
        if (strpos($number, '.') !== false) {
            list($number, $fraction) = explode('.', $number);
        }
    
        switch (true) {
            case $number < 21:
                $string = $dictionary[$number];
                break;
            case $number < 100:
                $tens   = ((int) ($number / 10)) * 10;
                $units  = $number % 10;
                $string = $dictionary[$tens];
                if ($units) {
                    $string .= $hyphen . $dictionary[$units];
                }
                break;
            case $number < 1000:
                $hundreds  = $number / 100;
                $remainder = $number % 100;
                $string = $dictionary[$hundreds] . ' ' . $dictionary[100];
                if ($remainder) {
                    $string .= $conjunction . convert_number_to_words($remainder);
                }
                break;
            default:
                $baseUnit = pow(1000, floor(log($number, 1000)));
                $numBaseUnits = (int) ($number / $baseUnit);
                $remainder = $number % $baseUnit;
                $string = convert_number_to_words($numBaseUnits) . ' ' . $dictionary[$baseUnit];
                if ($remainder) {
                    $string .= $remainder < 100 ? $conjunction : $separator;
                    $string .= convert_number_to_words($remainder);
                }
                break;
        }
    
        if (null !== $fraction && is_numeric($fraction)) {
            $string .= $decimal;
            $words = array();
            foreach (str_split((string) $fraction) as $number) {
                $words[] = $dictionary[$number];
            }
            $string .= implode(' ', $words);
        }
        return $string;
    }

  
   

    function exceptionError($message,$code=422){
        $error = [
            'status' => false,
            'code' => $code,
            'message' => $message,
        ];
        return $error;
    }
    function exceptionMessage($e){
        $message = $e->getMessage() . " Line Number ". $e->getLine()." File :- ".$e->getFile();
        return exceptionError($message);
    }

    function apiSuccessResponse($message,$data=NULL){
        $success = [
            'status'       => true,
            'code'          => 200,
            'message'       => $message,  
            'data'          => $data
        ];
        return $success;
    }

    function apiErrorResponse($message,$code=422){
        $error = [
            'status'       => false,
            'code'          => $code,
            'message'       => $message,
        ];
        return $error;
    }


   
	function pd($data=[]){
		echo "<pre>"; print_r($data);die(); exit; 
	}

    
    function ajaxSuccessResponse($message,$data=NULL){
        $success = [
            'status'       => true,
            'code'          => 200,
            'message'       => $message,
            'data'          => $data
        ];
        return $success;
    }
	
	function DataTime($date=''){
		if($date != ''){
		     return date("d-m-Y, g:i a", strtotime($date));
		}else{
			 return '';
		}
		
	}