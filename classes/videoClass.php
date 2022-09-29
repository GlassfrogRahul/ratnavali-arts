<?php 
require "../vendor/autoload.php";
require("env.php");
use OpenTok\OpenTok;
use OpenTok\MediaMode;
use OpenTok\Session;
use OpenTok\Role;

class Video{
    private $opentok;
    function __construct(){
        $this->opentok =new OpenTok(apiKey, apiSecret);
    }


    public function createSession(){
        $sessionOptions = array(
            'mediaMode' => MediaMode::ROUTED
        );
        $session = $this->opentok->createSession($sessionOptions);
        return  $session;
    }

    public function generateToken($name){
        $session=$this->createSession();
        $token=$session->generateToken(array(
            'role'       => Role::MODERATOR,
            'expireTime' => time()+(7 * 24 * 60 * 60), 
            'data'       => 'name='.$name,
            'initialLayoutClassList' => array('focus')
        ));        
        return json_encode(["token"=>$token,"session"=>$session->getSessionId()],false);
    }//generateToken


}

 


?>