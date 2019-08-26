<?php

namespace SuperStulle007\UltraJoinSettings;

use pocketmine\plugin\PluginBase;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\Listener;
use pocketmine\Player;
use pocketmine\item\Item;
use SuperStulle007\UltraJoinSettings\libs\jojoe77777\FormAPI\SimpleForm;
use pocketmine\utils\Config;

class Main extends PluginBase implements Listener {
	
	public function onEnable()
	{
		  $this->getLogger()->info("UltraBasics wurde aktiviert!");
                  $this->getServer()->getPluginManager()->registerEvents($this ,$this);
        }

    public function openWelcomeUI($player) {
        $form = new SimpleForm(function (Player $player, int $data = null){
            if($player instanceof Player){
            $result = $data;
            if($result === null){
                return true;
            }
            switch($result){
                case 0:
                    break;
            }
            }
        });
        $form->setTitle($this->getConfig()->get("Welcome-Title"));
        $form->setContent($this->getConfig()->get("Welcome-Content"));
        $form->addButton($this->getConfig()->get("Welcome-Button"));
        $form->sendToPlayer($player);
        return $form;
    }
	
public function onJoin(PlayerJoinEvent $event) {
    $config = new Config($this->getDataFolder() . "config.yml", Config::YAML);
            $player = $event->getPlayer();
            if(!$player->hasPlayedBefore()) {
                $player->getInventory()->addItem(Item::get(272, 0, 1));
                $player->getInventory()->addItem(Item::get(275, 0, 1));
                $player->getInventory()->addItem(Item::get(274, 0, 1));
                $player->getInventory()->addItem(Item::get(273, 0, 1));
                $player->getInventory()->addItem(Item::get(297, 0, 16));
                  if($config->get("WelcomeUI") = "true"){
                      $this->openWelcomeUI($player);
                    if($config->get("Join-Title") != "false"){
                       $player->addTitle($config->get("Join-Title");
                }
            }
      }
        }
}
