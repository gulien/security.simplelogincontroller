<?php

namespace Mouf\Security\Views;

use Mouf\Html\HtmlElement\HtmlElementInterface;
use Mouf\Html\Renderer\Renderable;
use Mouf\Utils\Value\ValueInterface;

/**
 * The view for the login screen.
 * 
 * @author David
 * @Component
 */
class SimpleLoginView implements HtmlElementInterface
{
    use Renderable;

    /**
     * The label for the "login" field.
     *
     * @var string|ValueInterface
     */
    private $loginLabel = 'Login';

    /**
     * The label for the "password" field.
     *
     *
     * @var string|ValueInterface
     */
    private $passwordLabel = 'Password';

    /**
     * The label for the "login" submit button.
     *
     *
     * @var string|ValueInterface
     */
    private $loginSubmitLabel = 'Login';

    /**
     * @var string
     */
    private $login;

    /**
     * @var string
     */
    private $redirecturl;

    /**
     * @var bool
     */
    private $addRememberMeCheckbox;

    /**
     * The label for the "login" submit button.
     *
     * @Property
     *
     * @var string|ValueInterface
     */
    private $rememberMeLabel = 'remember me';

    /**
     * @return ValueInterface|string
     */
    public function getLoginLabel()
    {
        return $this->loginLabel;
    }

    /**
     * @param ValueInterface|string $loginLabel
     */
    public function setLoginLabel($loginLabel)
    {
        $this->loginLabel = $loginLabel;
    }

    /**
     * @return ValueInterface|string
     */
    public function getPasswordLabel()
    {
        return $this->passwordLabel;
    }

    /**
     * @param ValueInterface|string $passwordLabel
     */
    public function setPasswordLabel($passwordLabel)
    {
        $this->passwordLabel = $passwordLabel;
    }

    /**
     * @return ValueInterface|string
     */
    public function getLoginSubmitLabel()
    {
        return $this->loginSubmitLabel;
    }

    /**
     * @param ValueInterface|string $loginSubmitLabel
     */
    public function setLoginSubmitLabel($loginSubmitLabel)
    {
        $this->loginSubmitLabel = $loginSubmitLabel;
    }

    /**
     * @return mixed
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @param mixed $login
     */
    public function setLogin($login)
    {
        $this->login = $login;
    }

    /**
     * @return mixed
     */
    public function getRedirecturl()
    {
        return $this->redirecturl;
    }

    /**
     * @param mixed $redirecturl
     */
    public function setRedirecturl($redirecturl)
    {
        $this->redirecturl = $redirecturl;
    }

    /**
     * @return bool
     */
    public function isAddRememberMeCheckbox()
    {
        return $this->addRememberMeCheckbox;
    }

    /**
     * @param bool $addRememberMeCheckbox
     */
    public function setAddRememberMeCheckbox($addRememberMeCheckbox)
    {
        $this->addRememberMeCheckbox = $addRememberMeCheckbox;
    }

    /**
     * @return ValueInterface|string
     */
    public function getRememberMeLabel()
    {
        return $this->rememberMeLabel;
    }

    /**
     * @param ValueInterface|string $rememberMeLabel
     */
    public function setRememberMeLabel($rememberMeLabel)
    {
        $this->rememberMeLabel = $rememberMeLabel;
    }
}
