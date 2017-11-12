<?php

namespace Pherserk\Sign\model;

interface SignInterface
{
    public function getSign() : string;

    public function getType() : string;
}

