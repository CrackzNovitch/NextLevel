<?php

namespace CrackzNovitch\LogPm;

use pocketmine\plugin\PluginBase;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\Player;
use pocketmine\Server;
use pocketmine\event\Listener;

class Main extends PluginBase implements Listener{                                       
    public function onEnable() {
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        $this->getLogger()->info("Everything loaded!");
    }
    
    public function onJoin(PlayerJoinEvent $event) {
        $player = $event->getPlayer();
        if ($player->isOp()) {
            $event->setJoinMessage(+$player->getDisplayName());
            
        }else {
            $event->setJoinMessage(-$player->getDisplayName());
            
        }
        
    }

    function __construct() {
        
    }

}

