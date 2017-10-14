<?php

if (!function_exists('alert')) {
    /**
     * @return RulWeb\Alert\Alert
     */
    function alert() {
        return app('alert');
    }
}