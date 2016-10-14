<?php

namespace ShipBundle\Controller;

use NavalBundle\Controller\NavalController;

class ShipController extends NavalController
{

    public function getShipsAction()
    {
        return array(1,2,3);
    }
}
