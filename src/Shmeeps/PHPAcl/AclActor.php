<?php

namespace Shmeeps\PHPAcl;

/**
 * ACL Class for PHP
 *
 * See: https://github.com/shmeeps/php-acl
 */
abstract class AclActor {

    /**
     * @return integer
     */
    abstract public function getAclActorId();

    /**
     * @param IAclObject $object Object to check access against
     * @param AclAction  $action Action to check access against
     * @return boolean
     */
    public function hasAccess(IAclObject $object, AclAction $action) {

    }
}