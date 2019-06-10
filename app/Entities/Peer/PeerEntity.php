<?php
/**
 * Created by PhpStorm.
 * Date: 2019-06-03
 * Time: 19:40
 */

namespace App\Entities\Torrent;

class PeerEntity {

    private $_id = 0;

    private $_userId = 0;
    private $_torrentId = 0;
    private $_ipv4 = '';
    private $_ipv6 = '';

    private $_isSeed = true;

    private $_lastConnectTimestamp = 0;

}