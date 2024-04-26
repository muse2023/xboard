<?php

namespace App\Payments;

class XgPay {
    public function __construct($config)
    {
        $this->config = $config;
    }

    public function form()
    {
        return [
            'url' => [
                'label' => 'URL',
                'description' => '',
                'type' => 'input',
            ],
            'pid' => [
                'label' => 'PID',
                'description' => '',
                'type' => 'input',
            ],
            'key' => [
                'label' => 'KEY',
                'description' => '',
                'type' => 'input',
            ]
        ];
    }

    public function pay($order)
    {
        //$params = [
        //   'money' => $order['total_amount'] / 100,
        //    'name' => $order['trade_no'],
        //    'notify_url' => $order['notify_url'],
        //    'return_url' => $order['return_url'],
        //    'out_trade_no' => $order['trade_no'],
        //    'pid' => $this->config['pid']
        // ];

        $params = [
            'version' => '1.0',
            'customerid' => $this->config['pid'],
            'total_fee' => sprintf("%.2f",$order['total_amount'] / 100),
            'sdorderno' => $order['trade_no'],
            'paytype' => $this->isMobile() ? 'alipaywap': 'alipay',
            'notifyurl' => $order['notify_url'],
            'returnurl' => $order['return_url']
        ];
        $userkey = '307330f2f0a80139405ecea5bd95bae1ea3eda73';
        $sign=md5('version=1.0&customerid='.$params['customerid'].'&total_fee='.$params['total_fee'].'&sdorderno='.$params['sdorderno'].'&notifyurl='.$params['notifyurl'].'&returnurl='.$params['returnurl'].'&'.$this->config['key']);
        $params['sign'] = $sign;
        return [
            'type' => 1, // 0:qrcode 1:url
            'data' => $this->config['url'] .'?' . http_build_query($params)
        ];
    }

    public function notify($params)
    {
        if(+$params['status'] !== 1){
            return false;
        }
        $sign = $params['sign'];
        $sign1 = md5('version=1.0&customerid='.$params['customerid'].'&status=1&sdorderno='.$params['sdorderno'].'&total_fee='.$params['total_fee'].'&paytype=alipay&'.$this->config['key']);
        if ($sign !== $sign) {
            return false;
        }
        return [
            'trade_no' => $params['sdorderno'],
            'callback_no' => $params['sdpayno']
        ];
    }

    private function isMobile(){
        $_SERVER['ALL_HTTP'] = isset($_SERVER['ALL_HTTP']) ? $_SERVER['ALL_HTTP'] : '';
        $mobile_browser = '0';
        if (preg_match('/(up.browser|up.link|mmp|symbian|smartphone|midp|wap|phone|iphone|ipad|ipod|android|xoom)/i', strtolower($_SERVER['HTTP_USER_AGENT'])))
            $mobile_browser++;
        if ((isset($_SERVER['HTTP_ACCEPT'])) and (strpos(strtolower($_SERVER['HTTP_ACCEPT']), 'application/vnd.wap.xhtml+xml') !== false))
            $mobile_browser++;
        if (isset($_SERVER['HTTP_X_WAP_PROFILE']))
            $mobile_browser++;
        if (isset($_SERVER['HTTP_PROFILE']))
            $mobile_browser++;
        $mobile_ua = strtolower(substr($_SERVER['HTTP_USER_AGENT'], 0, 4));
        $mobile_agents = array(
            'w3c ', 'acs-', 'alav', 'alca', 'amoi', 'audi', 'avan', 'benq', 'bird', 'blac',
            'blaz', 'brew', 'cell', 'cldc', 'cmd-', 'dang', 'doco', 'eric', 'hipt', 'inno',
            'ipaq', 'java', 'jigs', 'kddi', 'keji', 'leno', 'lg-c', 'lg-d', 'lg-g', 'lge-',
            'maui', 'maxo', 'midp', 'mits', 'mmef', 'mobi', 'mot-', 'moto', 'mwbp', 'nec-',
            'newt', 'noki', 'oper', 'palm', 'pana', 'pant', 'phil', 'play', 'port', 'prox',
            'qwap', 'sage', 'sams', 'sany', 'sch-', 'sec-', 'send', 'seri', 'sgh-', 'shar',
            'sie-', 'siem', 'smal', 'smar', 'sony', 'sph-', 'symb', 't-mo', 'teli', 'tim-',
            'tosh', 'tsm-', 'upg1', 'upsi', 'vk-v', 'voda', 'wap-', 'wapa', 'wapi', 'wapp',
            'wapr', 'webc', 'winw', 'winw', 'xda', 'xda-'
        );
        if (in_array($mobile_ua, $mobile_agents))
            $mobile_browser++;
        if (strpos(strtolower($_SERVER['ALL_HTTP']), 'operamini') !== false)
            $mobile_browser++;
        // Pre-final check to reset everything if the user is on Windows
        if (strpos(strtolower($_SERVER['HTTP_USER_AGENT']), 'windows') !== false)
            $mobile_browser = 0;
        // But WP7 is also Windows, with a slightly different characteristic
        if (strpos(strtolower($_SERVER['HTTP_USER_AGENT']), 'windows phone') !== false)
            $mobile_browser++;
        if ($mobile_browser > 0)
            return true;
        else
            return false;
    }
}