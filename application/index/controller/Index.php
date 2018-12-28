<?php/** *  +---------------------------------------------------------------------- *  | 草帽支付系统 [ WE CAN DO IT JUST THINK ] *  +---------------------------------------------------------------------- *  | Copyright (c) 2018 http://www.iredcap.cn All rights reserved. *  +---------------------------------------------------------------------- *  | Licensed ( https://www.apache.org/licenses/LICENSE-2.0 ) *  +---------------------------------------------------------------------- *  | Author: Brian Waring <BrianWaring98@gmail.com> *  +---------------------------------------------------------------------- */namespace app\index\controller;use app\common\controller\Common;class Index extends Common{    /**     * 首页     *     * @author 勇敢的小笨羊 <brianwaring98@gmail.com>     *     * @return mixed     */    public function index(){        return $this->fetch();    }    /**     * 产品介绍     *     * @author 勇敢的小笨羊 <brianwaring98@gmail.com>     *     * @return mixed     */    public function products(){        return $this->fetch();    }    /**     * 开发文档     *     * @author 勇敢的小笨羊 <brianwaring98@gmail.com>     *     * @return mixed     */    public function document(){        return $this->fetch();    }    /**     * Demo演示     *     * @author 勇敢的小笨羊 <brianwaring98@gmail.com>     *     * @return mixed     */    public function demo(){        return $this->fetch();    }    /**     * 开发指南     *     * @author 勇敢的小笨羊 <brianwaring98@gmail.com>     *     * @return mixed     */    public function introduce(){        return $this->fetch();    }    /**     * SDK下载     *     * @author 勇敢的小笨羊 <brianwaring98@gmail.com>     *     * @return mixed     */    public function sdk(){        return $this->fetch();    }    /**     * 关于我们     *     * @author 勇敢的小笨羊 <brianwaring98@gmail.com>     *     * @return mixed     */    public function about(){        return $this->fetch();    }    /**     * 发送验证码【测试】     *     * @author 勇敢的小笨羊 <brianwaring98@gmail.com>     *     */    public function sendVerCode(){        $user = session('user_info');        if (empty($user['phone'])){            $this->result('0','请先绑定手机号码');        }        //验证密码        if (($user['auth_code']) !== data_md5($this->request->post('code'))){            $this->result('0','安全码错误');        }        $this->request->isPost() && $this->result(            $this->logicBase->sendCode($user['phone'])        );    }}