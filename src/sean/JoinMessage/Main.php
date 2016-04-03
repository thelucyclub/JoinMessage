<?php
namespace Sean_M\JoinMessage;
 
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;
      
class Main extends PluginBase implements Listener{

     public function onEnable(){
     $this->getServer()->getPluginManager->registerEvents($this);
     $this->getLogger()->info("JoinMessage enabled!");
     }

     public function onPlayerJoin(PlayerJoinEvent $event){
     $p = $event->getPlayer();
     $p->sendMessage(TextFormat::DARK_AQUA . "Welcome to " . TextFormat::AQUA . "Diamond " . TextFormat::GREEN . "Realms " . TextFormat::YELLOW . "Pocket " . TextFormat::RED . "Edition " . TextFormat::DARK_AQUA . "!\n");
     $p->sendMessage(TextFormat::LIGHT_PURPLE . "There are currently " . TextFormat::YELLOW . Server::getInstance->getConnectedPlayers . TextFormat::LIGHT_PURPLE . "players online");
     $p->sendTip(TextFormat::GRAY . "Welcome " . $event->getPlayer() . "!\nYou need to authenticate to play");
     }
}
