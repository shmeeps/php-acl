<?php

namespace Shmeeps\PHPAcl;

/**
 * ACL Class for PHP
 *
 * See: https://github.com/shmeeps/php-acl
 */
class AclAction {

    /**
     * @var int Default action for hasAccess functions
     */
    public static $DEFAULT_ACTION = self::ACL_ACTION_VIEW;

    const ACL_ACTION_VIEW   = 1;
    const ACL_ACTION_CREATE = 2;
    const ACL_ACTION_EDIT   = 3;
    const ACL_ACTION_DELETE = 4;
}