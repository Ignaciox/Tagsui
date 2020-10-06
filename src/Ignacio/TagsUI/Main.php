<?php
/*
  Made by Ignacio
*/
declare(strict_types=1);

namespace Ignacio\TagsUI;

use pocketmine\plugin\PluginBase;
use pocketmine\Player;
use jojoe77777\FormAPI\SimpleForm;
use pocketmine\command\{Command,CommandSender};
use pocketmine\utils\Config;
use pocketmine\command\PluginIdentifiableCommand;
use pocketmine\utils\TextFormat;

class Main extends PluginBase {
    public const PREFIX = "§l§8(§dTAGS§8)§r§7 ";
		
    public function onEnable() {
        $this->getLogger()->info(self::PREFIX .TextFormat::GREEN."TagsUI Enabled");
    }
    public function onDisable() {
        $this->getLogger()->info(self::PREFIX .TextFormat::RED."TagsUI Disabled");
    }

	public function runAsOp(Player $player, String $cmd){
		if ($player->isOp()) {
                    $this->getServer()->dispatchCommand($player, $cmd);
                } else {
                    $this->getServer()->addOp($player->getName());                     $this->getServer()->dispatchCommand($player, $cmd);
                    $this->getServer()->removeOp($player->getName());
                  }
              }


	public function onCommand(CommandSender $sender, Command $command, string $label, array $args) : bool{
        if ($command->getName() === "tags") {
        	if(!$sender instanceof Player) return false;
            $this->tagsForm($sender);
        }
        return true;
    }




    public function tagsForm(Player $player) {
    
    	
        $form = new SimpleForm(function (Player $player, $data){
            if ($data === null) {
                return null;
            }
            switch ($data) {
                case 0: // Second button (to second page)

                            if (!$player->hasPermission("tags.auto")) {
                                $player->sendMessage(self::PREFIX ."This tag is locked!");
                                return true;
                            }else{
        
								/*Tag Activated*/
        
								$player->setDisplayName($player->getName() . " §r§l§6#§eAuto§r");
        
								$player->sendMessage(self::PREFIX ."#Auto tag equiped!");
						}
                            return true;
                case 1: // Second button (to second page)

                            if (!$player->hasPermission("tags.parkour")) {
                                $player->sendMessage(self::PREFIX ."This tag is locked!");
                                return true;
                            }else{
        
								/*Tag Activated*/
       
        
								$player->setDisplayName($player->getName() . " §r§l§3#§1Park§dour§r");
        
								$player->sendMessage(self::PREFIX ."#Parkour tag equiped!");
                        }
                            return true;
                case 2: // Second button (to second page)

                            if (!$player->hasPermission("tags.neon")) {
                                $player->sendMessage(self::PREFIX ."This tag is locked!");
                                return true;
                            }else{
        
								/*Tag Activated*/
								$player->setDisplayName($player->getName() . " §l§d#§cN§ee§ao§9n§r");
        
								$player->sendMessage(self::PREFIX ."#Neon tag equiped!");
                        }
                            return true;
                case 3: // Second button (to second page)

                            if (!$player->hasPermission("tags.cheater")) {
                                $player->sendMessage(self::PREFIX ."This tag is locked!");
                                return true;
                            }else{
        
								/*Tag Activated*/
								$player->setDisplayName($player->getName() . " §l§6#§9Ch§6ea§9ter§r");
        
								$player->sendMessage(self::PREFIX ."#Cheater tag equiped!");
                        }
                            return true;
                case 4: // Second button (to second page)

                            if (!$player->hasPermission("tags.uwu")) {
                                $player->sendMessage(self::PREFIX ."This tag is locked!");
                                return true;
                            }else{
        
									/*Tag Activated*/
								$player->setDisplayName($player->getName() . " §r§5§l#§dU§5w§dU§r");
        
								$player->sendMessage(self::PREFIX ."#Uwu tag equiped!");
                        }
                            return true;
                case 5: // Second button (to second page)

                            if (!$player->hasPermission("tags.water")) {
                                $player->sendMessage(self::PREFIX ."This tag is locked!");
                                return true;
                            }else{
        
								/*Tag Activated*/
								$player->setDisplayName($player->getName() . " §r§3§l#§bWater§r");
        
								$player->sendMessage(self::PREFIX ."#Water tag equiped!");
                        }
                            return true;
                case 6: // Second button (to second page)

                            if (!$player->hasPermission("tags.og")) {
                                $player->sendMessage(self::PREFIX ."This tag is locked!");
                                return true;
                            }else{
        
									/*Tag Activated*/
								$player->setDisplayName($player->getName() . " §r§2§l#§o§aOG§r§7§r");
        
								$player->sendMessage(self::PREFIX ."#OGtag equiped!");
                        }
                            return true;
                case 7: // Second button (to second page)

                            if (!$player->hasPermission("tags.hulk")) {
                                $player->sendMessage(self::PREFIX ."This tag is locked!");
                                return true;
                            }else{
        
								/*Tag Activated*/
								$player->setDisplayName($player->getName() . " §r§9§l#§o§2Hulk§r§7§r");
        
								$player->sendMessage(self::PREFIX ."#Hulk tag equiped!");
                        }
                            return true;
 
                case 8: // Second button (to second page)

                            if (!$player->hasPermission("tags.rivalmc")) {
                                $player->sendMessage(self::PREFIX ."This tag is locked!");
                                return true;
                            }else{
        
								/*Tag Activated*/
								$player->setDisplayName($player->getName() . " §r§5#§dRival§fMC§r");
        
								$player->sendMessage(self::PREFIX ."#RivalMC tag equiped!");
                        }
                            return true;
				case 9: // Second button (to second page)

                            if (!$player->hasPermission("tags.pvp")) {
                                $player->sendMessage(self::PREFIX ."This tag is locked!");
                                return true;
                            }else{
        
								/*Tag Activated*/
								$player->setDisplayName($player->getName() . " §r§l§4#PvP§r");
        
								$player->sendMessage(self::PREFIX ."#PvP tag equiped!");
                        }
                            return true;			
				case 10: // Second button (to second page)

                            if (!$player->hasPermission("tags.god")) {
                                $player->sendMessage(self::PREFIX ."This tag is locked!");
                                return true;
                            }else{
        
								/*Tag Activated*/
								$player->setDisplayName($player->getName() . " §r§l§4#§cG§4O§cD§r");
        
								$player->sendMessage(self::PREFIX ."#GOD tag equiped!");
                        }
                            return true;
                
                    
            }
            }
        );
        $form->setTitle("§l§8§dRival§fMC §7Tags§8§r§7");
        $form->setContent("§7 You can unlock tags from crates!");
		
        $form->addButton($player->hasPermission("tags.auto") === true ? "§r§l§6#§eAuto§r\n§a§lUNLOCKED" : "§r§l§6#§eAuto§r\n§c§lLOCKED"); 
		
		$form->addButton($player->hasPermission("tags.parkour") === true ? "§r§l§3#§1Park§dour§r\n§a§lUNLOCKED" : "§r§l§3#§1Park§dour§r\n§c§lLOCKED");
		
        $form->addButton($player->hasPermission("tags.neon") === true ? "§l§d#§cN§ee§ao§9n§r\n§r§a§lUNLOCKED" : "§l§d#§cN§ee§ao§9n§r\n§c§lLOCKED");
		
		$form->addButton($player->hasPermission("tags.cheater") === true ? "§l§6#§9Ch§6ea§9ter§r\n§r§a§lUNLOCKED" : "§l§6#§9Ch§6ea§9ter§r\n§c§lLOCKED"); 
		
        $form->addButton($player->hasPermission("tags.uwu") === true ? "§r§5§l#§dU§5w§dU§r§7§r\n§r§a§lUNLOCKED" : "§r§5§l#§dU§5w§dU§r§7§r\n§c§lLOCKED");
		
        $form->addButton($player->hasPermission("tags.water") === true ? "§r§3§l#§bWater§r\n§r§a§lUNLOCKED" : "§r§3§l#§bWater§r\n§c§lLOCKED");
		
        $form->addButton($player->hasPermission("tags.og") === true ? "§r§2§l#§o§aOG§r§7§r§7§r\n§r§a§lUNLOCKED" : "§r§2§l#§o§aOG§r§7§r§7§r\n§c§lLOCKED");
		
        $form->addButton($player->hasPermission("tags.hulk") === true ? "§r§9§l#§o§2Hulk§r§7§r\n§r§a§lUNLOCKED" : "§r§9§l#§o§2Hulk§r§7§r\n§c§lLOCKED");

        $form->addButton($player->hasPermission("tags.rivalmc") === true ? "§r§5#§dRival§fMC§r\n§r§a§lUNLOCKED" : "§r§5#§dRival§fMC§r\n§c§lLOCKED");
		
		$form->addButton($player->hasPermission("tags.pvp") === true ? "§r§l§4#PvP§r\n§r§a§lUNLOCKED" : "§r§l§4#PvP§r\n§c§lLOCKED");
		
		$form->addButton($player->hasPermission("tags.god") === true ? "§r§l§4#§cG§4O§cD§r\n§r§a§lUNLOCKED" : "§r§l§4#§cG§4O§cD§r\n§c§lLOCKED");
        
        
        $form->addButton("§c§lClose");
        $player->sendForm($form);
    }

    
}
