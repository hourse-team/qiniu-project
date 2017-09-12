<?php
require(__DIR__ . '/vendor/autoload.php');
require(__DIR__ . '/config/config.php');
use Qiniu\Storage\UploadManager;
use Qiniu\Auth;
class Token{
    public $accessKey = AK;
    public $secretKey = SK;
    public $bucketName = BuCKER_NAME;
    public function getToken() {
        $upManager = new UploadManager();
        $auth = new Auth($this->accessKey, $this->secretKey);
        $token = $auth->uploadToken($this->bucketName);
        return ["token" => $token];
    }
    public function getDomain() {
        return ["domain"=> QINIU_DOMAIN];
    }
}
?>
