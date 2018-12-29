<?php

namespace App\Config;

class Form
{

    const POST = 'post';

    /**
     * Returns the post method
     *
     * @return string
     */
    public function post()
    {
        return self::POST;
    }
}
