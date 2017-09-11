<?php
require(__DIR__ . '/vendor/autoload.php');
use Qiniu\Storage\UploadManager;
use Qiniu\Auth;
class Token{
    public $accessKey = "tjuC6AiIgDsL-QYYAR0XCdUITLou4EX28BgcqcaY";
    public $secretKey = "GNICcGREGSwVKBpDqM21XGRwRJoJ_z3zb4HL7bbE";
    public $bucketName = "test-hourse";
    public function getToken() {
        $upManager = new UploadManager();
        $auth = new Auth($this->accessKey, $this->secretKey);
        $token = $auth->uploadToken($this->bucketName);

        return $token;
        //list($ret, $error) = $upManager->put($token, 'formput', 'hello world');
    }

}
$token = new Token();
var_dump($token->getToken());
?>