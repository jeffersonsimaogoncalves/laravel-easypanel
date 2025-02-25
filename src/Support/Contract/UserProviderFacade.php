<?php

namespace EasyPanel\Support\Contract;

use EasyPanel\Support\User\UserProvider;

/**
 * @method static makeAdmin(int $id, bool $is_superuser = false)
 * @method static findUser(int $id)
 * @method static deleteAdmin(int $id)
 * @method static getAdmins()
 * @see UserProvider
 */
class UserProviderFacade extends BaseFacade
{

}
