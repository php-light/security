<?php

/**
 * Created by PhpStorm.
 * User: iknsa
 * Date: 04/07/17
 * Time: 02:08
 */

namespace PhpLight\Security\Model;


interface UserInterface
{
    /**
     * @return array
     */
    public function getPublicData();

    /**
     * @return {@object}
     */
    public function setPublicData();
}
