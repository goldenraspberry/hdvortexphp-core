<?php
/**
 * Created by PhpStorm.
 * User: nova
 * Date: 2019-06-03
 * Time: 14:50
 */

namespace App\Entities\User;

/**
 * 用户基本属性
 * Class UserBasicEntity
 * @package App\Entities\User
 */
class UserBasicEntity {

    private $_id = 0;
    private $_name = '';
    private $_email = '';
    private $_parent = 0;

    private $_status = 0;
    private $_rank = 0;

    private $_avatar = '';

    private $_joinTimestamp = 0;
    private $_lastLoginTimestamp = 0;

}