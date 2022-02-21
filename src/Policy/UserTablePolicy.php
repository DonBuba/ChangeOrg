<?php
declare(strict_types=1);

namespace App\Policy;

use App\Model\Entity\UserTable;
use Authorization\IdentityInterface;

/**
 * UserTable policy
 */
class UserTablePolicy
{
    /**
     * Check if $user can add UserTable
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\UserTable $userTable
     * @return bool
     */
    public function canAdd(IdentityInterface $user, UserTable $userTable)
    {
    }

    /**
     * Check if $user can edit UserTable
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\UserTable $userTable
     * @return bool
     */
    public function canEdit(IdentityInterface $user, UserTable $userTable)
    {
    }

    /**
     * Check if $user can delete UserTable
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\UserTable $userTable
     * @return bool
     */
    public function canDelete(IdentityInterface $user, UserTable $userTable)
    {
    }

    /**
     * Check if $user can view UserTable
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\UserTable $userTable
     * @return bool
     */
    public function canView(IdentityInterface $user, UserTable $userTable)
    {
    }
}
