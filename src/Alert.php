<?php

namespace RulWeb\Alert;

use Illuminate\Session\Store;

/**
 * Class AlertPlugin
 * @package App\Plugins
 */
class Alert
{
    /**
     * @var Store
     */
    public $session;

    /**
     * Alert constructor.
     * @param Store $session
     */
    public function __construct(Store $session)
    {
        $this->session = $session;
    }

    /**
     * @param string $message
     * @param string|null $style
     * @return void
     */
    public function flash($message, $style = 'info')
    {
        $this->session->flash('alert.message', $message);
        $this->session->flash('alert.style', $style);
    }

    /**
     * @return bool
     */
    public function has() : bool
    {
        return $this->session->has('alert.message');
    }

    /**
     * @return string
     */
    public function message() : string
    {
        return $this->session->get('alert.message');
    }

    /**
     * @return string
     */
    public function style() : string
    {
        return $this->session->get('alert.style');
    }

    /**
     * @param string $message
     * @return void
     */
    public function danger($message)
    {
        $this->flash($message, 'danger');
    }

    /**
     * @param string $message
     * @return void
     */
    public function error($message)
    {
        $this->flash($message, 'danger');
    }

    /**
     * @param string $message
     * @return void
     */
    public function success($message)
    {
        $this->flash($message, 'success');
    }

    /**
     * @param string $message
     * @return void
     */
    public function info($message)
    {
        $this->flash($message, 'info');
    }

    /**
     * @param string $message
     * @return void
     */
    public function warning($message)
    {
        $this->flash($message, 'warning');
    }
}