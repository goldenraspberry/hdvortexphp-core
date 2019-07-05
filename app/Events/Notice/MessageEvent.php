<?php
/**
 * Created by PhpStorm.
 * Date: 2019-06-23
 * Time: 15:01
 */

namespace App\Events\Notice;


use App\Events\Event;

/**
 * 站内信
 * Class MessageEvent
 * @package App\Events\Notice
 */
class MessageEvent extends Event {

    private $from = '';
    private $to = '';
    private $message = '';

    public function __construct ($from, $to, $message){
        $this->from = $from;
        $this->to = $to;
        $this->message = $message;
    }

}