<?php

namespace Media\Api\Interfaces;

interface Params
{
    /**
     * PUBLIC属性转数组
     * @return array
     */
    public function build(): array;
}