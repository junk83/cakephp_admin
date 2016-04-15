<?php
class UsersController extends AppController
{

    public function beforeFilter()
    {
        $this->Auth->allow('login');
    }

    public function login()
    {
        //ログイン済みの場合は管理画面にリダイレクト
        if($this->Auth->user()){
            return $this->redirect($this->Auth->redirect());
        }else{
            //画面タイトル設定
            $this->set('title_for_layout', '管理画面ログイン');
            if($this->request->is('post'))
            {
                if($this->Auth->login())
                {
                    return $this->redirect($this->Auth->redirect());
                }
                else{
                    $this->set('error', '入力されたIDまたはパスワードが間違っています。');
                }
            }
        }
    }

    public function logout()
    {
        $this->redirect($this->Auth->logout());
    }

}