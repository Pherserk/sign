<?php

namespace Pherserk\Sign\model;

class SignInterface
{
    public function getSign() : string;

    public function getType() : string;
}

