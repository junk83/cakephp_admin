<?php
class HomesController extends AppController
{

    public function beforeFilter()
    {
        $this->Auth->deny('home');
    }

    public function home()
    {
        //画面タイトル設定
        $this->set('title_for_layout', '管理画面');
        $user_data = $this->Auth->user();
        if(is_null($user_data)){
            $user_data['User']['name'] = '管理者名';
        }

        $this->set('user_data', $user_data);

    }

}