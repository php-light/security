<?php
/**
 * Created by PhpStorm.
 * User: iknsa
 * Date: 19/06/17
 * Time: 18:13
 */

namespace PhpLight\Security\Manager;


use PhpLight\Framework\Components\Config;

class RolesManager
{
    /**
     * @var array
     */
    private $roles;

    /**
     * @var Config
     */
    private $config;

    public function __construct()
    {
        $this->config = (new Config())->getConfig();

        $this->rolesFromConfig();
    }

    private function rolesFromConfig()
    {
        if (!isset($this->config["security"]["roles"])) {
            return null;
        }

        $this->roles = $this->config["security"]["roles"];

        return $this;
    }

    /**
     * @return array
     */
    public function getRoles()
    {
        return $this->roles;
    }
}
