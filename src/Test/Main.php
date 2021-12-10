<?php

namespace Test;

use Test\Commands\TestCommands;
use pocketmine\Server;
use pocketmine\command\Command;
use pocketmine\permission\Permission;
use pocketmine\permission\PermissionManager;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase {

    private static $instance;

    protected function onEnable(): void
    {
        $this->getLogger()->info("§l§9[!!!]§r §aTest Plugin ON §l§9[!!!]");

        PermissionManager::getInstance()->addPermission(new Permission("testcommand.use"));

        Server::getInstance()->getCommandMap()->register("testcommand", new TestCommands());

        parent::onEnable();

        self::$instance = $this;
    }

    public static function getInstance(): self
    {
        return self::$instance;
    }
}
