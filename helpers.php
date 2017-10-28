<?php

if (!function_exists('alert')) {
    /**
     * @param null $message
     * @param string $style
     * @return \RulWeb\Alert\Alert
     */
    function alert($message = null, $style = 'info') {
        if($message)
            return app('alert')->flash($message, $style);

        return app('alert');
    }
}