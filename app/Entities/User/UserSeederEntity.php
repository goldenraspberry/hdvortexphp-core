<?php
/**
 * Created by PhpStorm.
 * User: nova
 * Date: 2019-06-03
 * Time: 15:13
 */

namespace App\Entities\User;


class UserSeederEntity extends UserBasicEntity {

    private $_uploaded = 0;
    private $_downloaded = 0;
    private $_passkey = '';
    private $_seedTime = 0;
    private $_leechTime = 0;
    private $_score = 0;
}