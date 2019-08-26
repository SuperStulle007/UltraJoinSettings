<?php

namespace SuperStulle007\UltraJoinSettings;

use pocketmine\plugin\PluginBase;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\Listener;
use pocketmine\Player;
use pocketmine\item\Item;

class Main extends PluginBase implements Listener {
	
	public function onEnable()
	{
		  $this->getLogger()->info("UltraBasics wurde aktiviert!");
                  $this->getServer()->getPluginManager()->registerEvents($this ,$this);
        }
	
public function onJoin(PlayerJoinEvent $event) {
            $player = $event->getPlayer();
            if(!$player->hasPlayedBefore()) {
                $player->getInventory()->addItem(Item::get(272, 0, 1));
                $player->getInventory()->addItem(Item::get(275, 0, 1));
                $player->getInventory()->addItem(Item::get(274, 0, 1));
                $player->getInventory()->addItem(Item::get(273, 0, 1));
                $player->getInventory()->addItem(Item::get(297, 0, 16));
            }
        }
}
