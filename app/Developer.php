<?php

namespace App;

class Developer extends Worker
{
    protected string $position = 'developer';

    public function work()
    {
        print_r('im developing');
    }
}
