<?php

namespace MB\MBServicesBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class MBMBServicesBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
