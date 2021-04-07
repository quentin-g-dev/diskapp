<?php
// src/Security/AppVoter.php
namespace App\Security;

use App\Entity\Disk;
use App\Entity\User;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\Voter\Voter;

class AppVoter extends Voter
{
    // these strings are just invented: you can use anything
    const VIEW = 'view';
    const EDIT = 'edit';

    protected function supports($attribute, $subject)
    {
        // if the attribute isn't one we support, return false
        if (!in_array($attribute, [self::VIEW, self::EDIT])) {
            return false;
        }

        // only vote on `Disk` objects
        if (!$subject instanceof Disk) {
            return false;
        }

        return true;
    }

    protected function voteOnAttribute($attribute, $subject, TokenInterface $token)
    {
        $user = $token->getUser();

        if (!$user instanceof User) {
            // the user must be logged in; if not, deny access
            return false;
        }

        // you know $subject is a Disk object, thanks to `supports()`
        /** @var Disk $disk */
        $disk = $subject;

        switch ($attribute) {
            case self::VIEW:
                return $this->canView($disk, $user);
            case self::EDIT:
                return $this->canEdit($disk, $user);
        }

        throw new \LogicException('This code should not be reached!');
    }

    private function canView(Disk $disk, User $user)
    {
        // if they can edit, they can view
        if ($this->canEdit($disk, $user)) {
            return true;
        }

        // the Disk object could have, for example, a method `isPrivate()`
        return !$disk->isPrivate();
    }

    private function canEdit(Disk $disk, User $user)
    {
        // this assumes that the Disk object has a `getOwner()` method
        return $user === $disk->getOwner();
    }
}
