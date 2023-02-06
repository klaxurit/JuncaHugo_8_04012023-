<?php

namespace App\Security\Voter;

use App\Entity\Task;
use App\Entity\User;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\Authorization\Voter\Voter;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;

class TaskVoter extends Voter
{
    public const EDIT = 'TASK_EDIT';
    public const VIEW = 'TASK_VIEW';
    public const DELETE = 'TASK_DELETE';

    protected function supports(string $attribute, $subject): bool
    {
        // replace with your own logic
        // https://symfony.com/doc/current/security/voters.html
        return in_array($attribute, [self::EDIT, self::VIEW, self::DELETE])
            && $subject instanceof \App\Entity\Task;
    }

    protected function voteOnAttribute(string $attribute, $subject, TokenInterface $token): bool
    {
        $user = $token->getUser();
        // if the user is anonymous, do not grant access
        if (!$user instanceof UserInterface) {
            return false;
        }

        $task = $subject;
        if (!$task instanceof Task) {
            return false;
        }

        if (self::DELETE) {
            return $this->canDelete($task, $user);
        }

        return false;
    }

    public function taskIsAnonymous(Task $task)
    {
        return (!$task->getUser() || $task->getUser()->getEmail() === User::ANONYMOUS_USER_EMAIL);
    }

    public function isTaskAuthor(Task $task, User $user)
    {
        if ($task->getUser()) {
            return $task->getUser()->getEmail() === $user->getEmail();
        }
    }

    public function canDelete(Task $task, User $user)
    {
        if (in_array('ROLE_ADMIN', $user->getRoles()) && $this->taskIsAnonymous($task) || $this->isTaskAuthor($task, $user)) {
            return true;
        }
        return false;
    }
}
