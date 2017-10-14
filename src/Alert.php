<?php

declare(strict_types=1);

namespace RulWeb\Alert;

use Illuminate\Session\Store;

class Alert
{
    /**
     * The session storage instance.
     *
     * @var \Illuminate\Session\Store
     */
    protected $session;

    /**
     * Create a new alert instance.
     *
     * @param \Illuminate\Session\Store $session
     *
     * @return void
     */
    public function __construct(Store $session)
    {
        $this->session = $session;
    }

    /**
     * @param string $message
     * @param string $style
     * @return \RulWeb\Alert\Alert
     */
    public function flash($message, $style = 'info'): Alert
    {
        $this->session->flash('alert.message', $message);
        $this->session->flash('alert.style', $style);

        return $this;
    }

    /**
     * Flash a danger alert.
     *
     * @param string $message
     *
     * @return \RulWeb\Alert\Alert
     */
    public function danger(string $message): Alert
    {
        return $this->flash($message, 'alert-danger');
    }

    /**
     * Flash an error alert.
     *
     * @param string $message
     *
     * @return \RulWeb\Alert\Alert
     */
    public function error(string $message): Alert
    {
        return $this->danger($message);
    }

    /**
     * Flash an info alert.
     *
     * @param string $message
     *
     * @return \RulWeb\Alert\Alert
     */
    public function info(string $message): Alert
    {
        return $this->flash($message, 'alert-info');
    }

    /**
     * Flash a success alert.
     *
     * @param string $message
     *
     * @return \RulWeb\Alert\Alert
     */
    public function success(string $message): Alert
    {
        return $this->flash($message, 'alert-success');
    }

    /**
     * Flash a warning alert.
     *
     * @param string $message
     *
     * @return \RulWeb\Alert\Alert
     */
    public function warning(string $message): Alert
    {
        return $this->flash($message, 'alert-warning');
    }
}