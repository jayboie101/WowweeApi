<?php header("Access-Control-Allow-Origin: *");

if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require("sendgrid-php/sendgrid-php.php");

class Admin extends MX_Controller 
{
//header("Access-Control-Allow-Origin: *");

	function Admin()
	{
		parent::__construct();
		$this->load->model('mdl_admin','mdl_admin');
		$this->load->library('session','session');
                //$this->load->model('db_model');
		
	}

	function index()
	{		
		$this->load->library('session');
		$this->load->view('login');
	}

	function processpayment(){ 
//      collects payment and card details
        $data=$this->get_form_data(); 
        $amount=$data['amount'].'.00'; 
        $custid=2;
        $description=$data['description']; 
        $cardType='recurrentcard';

//        flutterwave api access and curl init        
         $iv = "kayazGcY";
          $bit_check=8;
          $apikey = 'tk_HmUNSe9zuJD0Xs3Y7V2I';
          $apikey='tk_6qu8wdJsc94L3VjWKi2A';
          //$merchantid='tk_2YvkoT08jU';
          $merchantid='tk_40kqJBrZnW';
          $url = 'http://staging1flutterwave.co:8080/pwc/rest/card/mvva/pay';  
          $ch = curl_init( $url );

// encryption and postdata array to fluterwave          

      $postData = array(
        'merchantid'    =>  $merchantid,
        'amount'        =>  $this->encrypt($amount,$apikey),
        'currency'      =>  $this->encrypt($data['trxcurr'],$apikey),
        'cardno'        =>  $this->encrypt($data['cardno'],$apikey),
        'cvv'           =>  $this->encrypt($data['cvv'],$apikey),
        'expirymonth'   =>  $this->encrypt($data['expmonth'],$apikey),
        'expiryyear'    =>  $this->encrypt($data['expyear'],$apikey),
        'pin'           =>  $this->encrypt($data['pin'],$apikey),
        'narration'     =>  $this->encrypt($description,$apikey),
        'custid'        =>  $this->encrypt($custid,$apikey),
        'authmodel'     =>  $this->encrypt('PIN',$apikey),
        );
         

      $payload = json_encode( $postData ) ; 
      curl_setopt( $ch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt( $ch, CURLOPT_POSTFIELDS, $payload );
      curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
          # Return response instead of printing.
      curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
          # Send request.
      $result = curl_exec($ch);
      //echo "error no : ".curl_errno($ch)."<br />";
      //echo 'error : ' . curl_error($ch)."<br />";
      curl_close($ch);
          # Print response.
      //echo "<pre>"; print_r($result); echo "</pre>";

       
      print_r($result);
      //die();

      
      
  }



  function processotp(){
      $data=$this->get_form_data();
      
      $otptransactionidentifier=$data['OTPReferenceNumber']; 
      $otp=$data['OTP'];
      $custid=2;
     // $description=$sesiondata['paymentDetails']['description'];

      $cardType='recurrentcard';
      
        $iv = "kayazGcY";
          $bit_check=8;
          $apikey = 'tk_HmUNSe9zuJD0Xs3Y7V2I';
          $apikey='tk_6qu8wdJsc94L3VjWKi2A';
          //$merchantid='tk_2YvkoT08jU';
          $merchantid='tk_40kqJBrZnW';
        $url = 'http://staging1flutterwave.co:8080/pwc/rest/card/mvva/pay/validate'; 

        $ch = curl_init( $url );
        

        $postData = array(
          'merchantid'                  =>  $merchantid,
          'otp'                         =>  $this->encrypt($otp,$apikey),
          'otptransactionidentifier'    =>  $this->encrypt($otptransactionidentifier,$apikey) 
          );
            

        $payload = json_encode( $postData ) ;
          
        curl_setopt( $ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt( $ch, CURLOPT_POSTFIELDS, $payload );
        curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
            # Return response instead of printing.
        curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
            # Send request.
        $result = curl_exec($ch);
        print_r($result);
        //echo "error no : ".curl_errno($ch)."<br />";
        //echo 'error : ' . curl_error($ch)."<br />";
        curl_close($ch);
            # Print response.
        
         
  }
 



   function encrypt($data, $secret)
  {
      //Generate a key from a hash
    $key = md5(utf8_encode($secret), true);

      //Take first 8 bytes of $key and append them to the end of $key.
    $key .= substr($key, 0, 8);

      //Pad for PKCS7
    $blockSize = mcrypt_get_block_size('tripledes', 'ecb');
    $len = strlen($data);
    $pad = $blockSize - ($len % $blockSize);
    $data .= str_repeat(chr($pad), $pad);

      //Encrypt data
    $encData = mcrypt_encrypt('tripledes', $key, $data, 'ecb');

    return base64_encode($encData);
  }

  function decrypt($data, $secret)
  {
      //Generate a key from a hash
    $key = md5(utf8_encode($secret), true);

      //Take first 8 bytes of $key and append them to the end of $key.
    $key .= substr($key, 0, 8);

    $data = base64_decode($data);

    $data = mcrypt_decrypt('tripledes', $key, $data, 'ecb');

    $block = mcrypt_get_block_size('tripledes', 'ecb');
    $len = strlen($data);
    $pad = ord($data[$len-1]);

    return substr($data, 0, strlen($data) - $pad);
  }



function get_form_data(){
		$data = $this->input->post();
		return $data;
	}
















	function sendGridMail($usermail,$message){
		//echo $email.$message;
		//die();
	
		$sendgrid = new SendGrid('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');


    	$email = new SendGrid\Email();
    	$email
    	->addTo($usermail)
        //->addTo('bar@foo.com') //One of the most notable changes is how `addTo()` behaves. We are now using our Web API parameters instead of the X-SMTPAPI header. What this means is that if you call `addTo()` multiple times for an email, **ONE** email will be sent with each email address visible to everyone.
        ->setFrom('support@smartshop234.com')
        ->setSubject('Account Verification')
        ->setText('Hello')
        ->setHtml($message);

        $sendgrid->send($email);
	}

	function sendGridMail2($usermail,$message){
		//echo $email.$message;
		//die();
	
		$sendgrid = new SendGrid('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');


    	$email = new SendGrid\Email();
    	$email
    	->addTo($usermail)
        //->addTo('bar@foo.com') //One of the most notable changes is how `addTo()` behaves. We are now using our Web API parameters instead of the X-SMTPAPI header. What this means is that if you call `addTo()` multiple times for an email, **ONE** email will be sent with each email address visible to everyone.
        ->setFrom('support@smartshop234.com')
        ->setSubject('SmartShop Transaction Alert')
        ->setText('Hello')
        ->setHtml($message);

        $sendgrid->send($email);
	}

 

}







