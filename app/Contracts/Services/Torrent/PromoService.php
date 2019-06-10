<?php
/**
 * Created by PhpStorm.
 * User: nova
 * Date: 2019-06-03
 * Time: 17:52
 */

namespace App\Contracts\Services\Torrent;


use App\Entities\Torrent\PromoEntity;
use App\Entities\Torrent\TorrentBasicEntity;
use App\Entities\User\UserBasicEntity;

interface PromoService {

    /**
     * @param UserBasicEntity $user
     * @param TorrentBasicEntity $torrent
     * @return PromoEntity
     */
    function getPromo(UserBasicEntity $user, TorrentBasicEntity $torrent): PromoEntity;

    /**
     * @param UserBasicEntity $user
     * @param array $listTorrent
     * @return []PromoEntity
     */
    function listPromo(UserBasicEntity $user, array $listTorrent): array;

}
