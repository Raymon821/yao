<?php
/**
 * Created by PhpStorm.
 * User: raymon
 * Date: 2018/6/29
 * Time: 上午10:41
 */
try {
    file_put_contents('log.txt', json_encode($_POST['payload']) . PHP_EOL, FILE_APPEND);
//    $payload = $this->getParams('payload');
//    $requestParams = json_decode($payload, true);
//    if ($requestParams['ref'] == 'refs/heads/develop') { //develop 分支自动发布到beta
//        $payload = 'need-pub: ' . $payload;
//        $shellPath = BASE_DIR . '/publish/';
//        $shellScript = 'develop_publish.sh';
//        $publishLog = $shellPath . 'log/publish.log';
//        exec('cd ' . $shellPath . ' && chmod a+x ' . $shellScript . ' && ./' . $shellScript . ' >' . $publishLog);
//    }
//    Bw_File_Log::getInstance('webhook')->write(date('Y-m-d H:i:s') . ' -- ' . $payload);
//    $this->sendJson(true, ['message' => '回调成功!']);
} catch (\Exception $e) {
    echo $e->getMessage();
}