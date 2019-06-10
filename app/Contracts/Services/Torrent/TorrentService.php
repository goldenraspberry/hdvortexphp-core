<?php
/**
 * Created by PhpStorm.
 * User: nova
 * Date: 2019-06-03
 * Time: 17:54
 */

namespace App\Contracts\Services\Torrent;


use App\Entities\Torrent\TorrentBasicEntity;

interface TorrentService {

    /**
     * @param int $torrentId
     * @return TorrentBasicEntity
     */
    public function getBasicEntity(int $torrentId): TorrentBasicEntity;

}