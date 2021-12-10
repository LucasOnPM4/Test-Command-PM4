<?php

namespace Test\Commands;

use Test\Main;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;


class TestCommands extends Command {

    public function __construct()
    {
        parent::__construct("testcommand", "Test Command for pm4", "/testcommand only");
    }

    public function execute(CommandSender $sender,  string $commandLabel, array $args)
    {
        $sender->sendTip("§9- §l§aTest command works ! §1(SUUUUUUUUUU) §9-");
        $sender->sendMessage("§9- §l§aTest command works ! §1(SUUUUUUUUUU) §9-");
    }
}