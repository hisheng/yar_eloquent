<?php
require 'bootstrap.php';
class API {
    /**
     * 测试打印出 hihi
     * @params
     * @return
     */
    public function hello($parameter, $option = "foo") {
    	return 'hihi';
    }
 
    protected function client_can_not_see() {
    }
    
    
    /**
     * 打印 user得第一个数据
     */
    public function user()
    {
        $user = new \App\Models\User();
        $users = $user->first();
        var_dump($users->toArray());
    }
}
 
$service = new Yar_Server(new API());
$service->handle();
?>