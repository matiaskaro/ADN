<?php
    class CurlRequest
    {
        public function sendPost()
        {
            //datos a enviar
            $data = array("d" => "ABCDE ABCDE ABCDE ABCDE ABCDE");
	    
              $ch = curl_init("http://multiservicepc.com.ar/Force-User/proceso.php");
                        
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
           
            curl_setopt($ch, CURLOPT_POSTFIELDS,http_build_query($data));
            
            $response = curl_exec($ch);
            
            curl_close($ch);
            if(!$response) {
              
return false;
            }else{
                return $response;
            }
        }

}
$new = new CurlRequest();

$resultado = $new ->sendPost();
//var_dump($resultado);
$string = $resultado;
$caracfinal = substr($string, -1);
if($caracfinal==1){
http_response_code(200);
var_dump(http_response_code());
}else
{http_response_code(403);
var_dump(http_response_code());}
?>