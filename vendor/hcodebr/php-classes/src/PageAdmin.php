<?php

namespace Hcode;


class PageAdmin extends Page
{

    function __construct($opts = [], $tpl_dir = "/views/admin/")
    {
        parent::__construct($opts, $tpl_dir);
    }

}