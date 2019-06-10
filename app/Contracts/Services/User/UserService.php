<?php
/**
 * Created by PhpStorm.
 * User: nova
 * Date: 2019-06-03
 * Time: 14:49
 */

namespace App\Contracts\Services\User;


use App\Entities\User\UserBasicEntity;

/**
 * 用户相关接口
 * Interface UserService
 * @package App\Contracts\Services\User
 */
interface UserService {

    /**
     * 取得用户基本信息
     * @param int $userId
     * @return UserBasicEntity
     */
    public function getBasicEntity(int $userId): UserBasicEntity;


}