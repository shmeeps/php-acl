<?php

namespace Shmeeps\PHPAcl;

/**
 * ACL Class for PHP
 *
 * See: https://github.com/shmeeps/php-acl
 */
abstract class AclActor {

    // Groups the user belongs to
    protected $groupHierarchy = array();

    /**
     * @return integer
     */
    abstract public function getAclActorId();

    /**
     * @param IAclObject    $object    Object to check access against
     * @param AclAction     $actionId  Action to check access against
     * @return boolean
     */
    public function hasAccess(IAclObject $object, AclAction $actionId) {

        // Get actor and object data
        $actorId = $this->getAclActorId();
        $objectId = $object->getAclObjectId();

        // TODO: Get Actor permissions, check them, those override everything

        // TODO: If no actor stuff, get groups and their permissions
    }

    /**
     * Get groups the user belongs too in a hierarchy so they can be
     * transversed for inherited permissions
     */
    public function getGroupHierarchy() {

    }
}