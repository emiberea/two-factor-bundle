<?php
namespace Scheb\TwoFactorBundle\Security\TwoFactor\Provider\Email\Validation;

use Scheb\TwoFactorBundle\Model\Email\TwoFactorInterface;

class EmailCodeValidator implements CodeValidatorInterface
{

    /**
     * Validates the code, which was entered by the user
     *
     * @param  \Scheb\TwoFactorBundle\Model\Email\TwoFactorInterface $user
     * @param  integer                                               $code
     * @return bool
     */
    public function checkCode(TwoFactorInterface $user, $code)
    {
        return $user->getEmailAuthCode() == $code;
    }
}
