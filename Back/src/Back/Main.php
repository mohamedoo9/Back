<?php

namespace Back;

 use pocketmine\plugin\PluginBase;

  class Main extends PluginBase{
      
      public function onEnable(){
         $this->getServer()->getLogger()->info("back plugin has been enabled");
     }
   }
