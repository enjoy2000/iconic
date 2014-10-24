<?php
class Iconic_Blog_Helper_Data extends Mage_Core_Helper_Abstract
{
	public function getRoute(){
		return 'blog';
	}
	
	public function getAuthorLink(){
		return 'author';
	}


    public function formatUrlKey($str)
    {
        $trans = array(
            'á' => 'a', 'à' => 'a', 'ả' => 'a', 'ã' => 'a', 'ạ' => 'a',
            'ắ' => 'a', 'ằ' => 'a', 'ẳ' => 'a', 'ẵ' => 'a', 'ặ' => 'a', 'ă' => 'a',
            'ấ' => 'a', 'ầ' => 'a', 'ẩ' => 'a', 'ẫ' => 'a', 'ậ' => 'a', 'â' => 'a',
            'Á' => 'a', 'À' => 'a', 'Ả' => 'a', 'Ã' => 'a', 'Ạ' => 'a',
            'Ắ' => 'a', 'Ằ' => 'a', 'Ẳ' => 'a', 'Ẵ' => 'a', 'Ặ' => 'a', 'Ă' => 'a',
            'Ấ' => 'a', 'Ầ' => 'a', 'Ẩ' => 'a', 'Ẫ' => 'a', 'Ậ' => 'a', 'Â' => 'a',
            'Đ' => 'd', 'đ' => 'd',
            'é' => 'e', 'è' => 'e', 'ẻ' => 'e', 'ẽ' => 'e', 'ẹ' => 'e',
            'É' => 'e', 'È' => 'e', 'Ẻ' => 'e', 'Ẽ' => 'e', 'Ẹ' => 'e',
            'ế' => 'e', 'ề' => 'e', 'ể' => 'e', 'ễ' => 'e', 'ệ' => 'e', 'ê' => 'e',
            'Ế' => 'e', 'Ề' => 'e', 'Ể' => 'e', 'Ễ' => 'e', 'Ệ' => 'e', 'Ê' => 'e',
            'í' => 'i', 'ì' => 'i', 'ỉ' => 'i', 'ĩ' => 'i', 'ị' => 'i',
            'Í' => 'i', 'Ì' => 'i', 'Ỉ' => 'i', 'Ĩ' => 'i', 'Ị' => 'i',
            'ó' => 'o', 'ò' => 'o', 'ỏ' => 'o', 'õ' => 'o', 'ọ' => 'o',
            'ố' => 'o', 'ồ' => 'o', 'ổ' => 'o', 'ỗ' => 'o', 'ộ' => 'o',
            'ớ' => 'o', 'ờ' => 'o', 'ở' => 'o', 'ỡ' => 'o', 'ợ' => 'o', 'ơ' => 'o',
            'Ó' => 'o', 'Ò' => 'o', 'Ỏ' => 'o', 'Õ' => 'o', 'Ọ' => 'o',
            'Ố' => 'o', 'Ồ' => 'o', 'Ổ' => 'o', 'Ỗ' => 'o', 'Ộ' => 'o',
            'Ớ' => 'o', 'Ờ' => 'o', 'Ở' => 'o', 'Ỡ' => 'o', 'Ợ' => 'o', 'Ơ' => 'o',
            'ú' => 'u', 'ù' => 'u', 'ủ' => 'u', 'ũ' => 'u', 'ụ' => 'u',
            'ứ' => 'u', 'ừ' => 'u', 'ử' => 'u', 'ữ' => 'u', 'ự' => 'u', 'ư' => 'u',
            'Ú' => 'u', 'Ù' => 'u', 'Ủ' => 'u', 'Ũ' => 'u', 'Ụ' => 'u',
            'Ứ' => 'u', 'Ừ' => 'u', 'Ử' => 'u', 'Ữ' => 'u', 'Ự' => 'u', 'Ư' => 'u',
            'ý' => 'y', 'ỳ' => 'y', 'ỷ' => 'y', 'ỹ' => 'y', 'ỵ' => 'y',
            'Ý' => 'y', 'Ỳ' => 'y', 'Ỷ' => 'y', 'Ỹ' => 'y', 'Ỵ' => 'y'
        );
        $str = strtr($str, $trans);

        $urlKey = preg_replace('#[^0-9a-z]+#i', '-', Mage::helper('catalog/product_url')->format($str));
        $urlKey = strtolower($urlKey);
        $urlKey = trim($urlKey, '-');

        return $urlKey;
    }

    public function _toSlugTransliterate($string) {
        // Lowercase equivalents found at:
        // https://github.com/kohana/core/blob/3.3/master/utf8/transliterate_to_ascii.php
        $lower = array(
            'à'=>'a','ô'=>'o','d'=>'d','?'=>'f','ë'=>'e','š'=>'s','o'=>'o',
            'ß'=>'ss','a'=>'a','r'=>'r','?'=>'t','n'=>'n','a'=>'a','k'=>'k',
            's'=>'s','?'=>'y','n'=>'n','l'=>'l','h'=>'h','?'=>'p','ó'=>'o',
            'ú'=>'u','e'=>'e','é'=>'e','ç'=>'c','?'=>'w','c'=>'c','õ'=>'o',
            '?'=>'s','ø'=>'o','g'=>'g','t'=>'t','?'=>'s','e'=>'e','c'=>'c',
            's'=>'s','î'=>'i','u'=>'u','c'=>'c','e'=>'e','w'=>'w','?'=>'t',
            'u'=>'u','c'=>'c','ö'=>'o','è'=>'e','y'=>'y','a'=>'a','l'=>'l',
            'u'=>'u','u'=>'u','s'=>'s','g'=>'g','l'=>'l','ƒ'=>'f','ž'=>'z',
            '?'=>'w','?'=>'b','å'=>'a','ì'=>'i','ï'=>'i','?'=>'d','t'=>'t',
            'r'=>'r','ä'=>'a','í'=>'i','r'=>'r','ê'=>'e','ü'=>'u','ò'=>'o',
            'e'=>'e','ñ'=>'n','n'=>'n','h'=>'h','g'=>'g','d'=>'d','j'=>'j',
            'ÿ'=>'y','u'=>'u','u'=>'u','u'=>'u','t'=>'t','ý'=>'y','o'=>'o',
            'â'=>'a','l'=>'l','?'=>'w','z'=>'z','i'=>'i','ã'=>'a','g'=>'g',
            '?'=>'m','o'=>'o','i'=>'i','ù'=>'u','i'=>'i','z'=>'z','á'=>'a',
            'û'=>'u','þ'=>'th','ð'=>'dh','æ'=>'ae','µ'=>'u','e'=>'e','i'=>'i',
        );
        return str_replace(array_keys($lower), array_values($lower), $string);
    }

    public function formatUrlKeyJp($string, $separator = '-') {
        // Work around this...
        #$string = iconv('UTF-8', 'ASCII//TRANSLIT//IGNORE', $string);
        $string = $this->_toSlugTransliterate($string);

        // Remove unwanted chars + trim excess whitespace
        // I got the character ranges from the following URL:
        // https://stackoverflow.com/questions/6787716/regular-expression-for-japanese-characters#10508813
        $regex = '/[^一-龠ぁ-ゔァ-ヴーａ-ｚＡ-Ｚ０-９a-zA-Z0-9々〆〤.+ -]|^\s+|\s+$/u';
        $string = preg_replace($regex, '', $string);

        // Using the mb_* version seems safer for some reason
        $string = mb_strtolower($string);

        // Same as before
        $string = preg_replace("/[ {$separator}]+/", $separator, $string);
        return $string;
    }
	
	public function getTransName($obj){
		$storeCode = Mage::app()->getStore()->getCode();
		if($storeCode == 'jp'){
			return $obj->getName();
		}else{
			return $obj->getNameEn();
		}
	}
	
	public function imgHeight(){
		return 125;
	}
	
	public function imgWidth(){
		return 162;
	}
	
	public function formatDate($date)
    {
        $format = date('Y年m月d日', strtotime($date));
        return $format;
    }
	
	public function getShareCount($url){
		$count = array();
		$url = rawurldecode($url);
		//google
		/*
		$curl = curl_init();
	    curl_setopt($curl, CURLOPT_URL, "https://clients6.google.com/rpc");
	    curl_setopt($curl, CURLOPT_POST, 1);
	    curl_setopt($curl, CURLOPT_POSTFIELDS, '[{"method":"pos.plusones.get","id":"p","params":{"nolog":true,"id":"' . $url . '","source":"widget","userId":"@viewer","groupId":"@self"},"jsonrpc":"2.0","key":"p","apiVersion":"v1"}]');
	    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	    curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
	    $curl_results = curl_exec ($curl);
	    curl_close ($curl);
	    $json = json_decode($curl_results, true);
	    $count['google'] = intval( $json[0]['result']['metadata']['globalCounts']['count'] );
		*/
		//facebook
		$fb = file_get_contents("http://api.facebook.com/restserver.php?method=links.getStats&format=json&urls=".$url);
	    $fb = json_decode($fb, true);
		$count['facebook'] = $fb[0]['like_count'];
		//twitter
		$json = file_get_contents( "http://urls.api.twitter.com/1/urls/count.json?url=".$url );
	    $ajsn = json_decode($json, true);
	    $count['twitter'] = $ajsn['count'];
		//LinkedIn
		/*
 		$stream = file_get_contents("http://www.linkedin.com/countserv/count/share?url={$url}&for‌​mat=json");
		$json = json_decode($stream, true);
		$count['linkedin'] = intval($json['count']);
		*/
		
		return $count;
	}
	
}
		