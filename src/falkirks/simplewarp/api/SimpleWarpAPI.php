<?php
namespace falkirks\simplewarp\api;


use falkirks\simplewarp\SimpleWarp;
use pocketmine\plugin\PluginBase;

/**
 * This class provides an API for interacting with
 * SimpleWarp, whenever possible, use methods from this
 * class instead of elsewhere.
 *
 * Class SimpleWarpAPI
 * @package falkirks\simplewarp\api
 */
class SimpleWarpAPI {
    private $plugin;
    public function __construct(SimpleWarp $simpleWarp){
        $this->plugin = $simpleWarp;
    }
    public function getSimpleWarp(){
        return $this->plugin;
    }
    public function getConfigItem($name){
        return $this->plugin->getConfig()->get($name);
    }
    public function getTranslationItem($name){
        return $this->plugin->getTranslationManager()->get($name);
    }
    public function getWarpManager(){
        return $this->plugin->getWarpManager();
    }
    public function isFastTransferLoaded(){
        return $this->getSimpleWarp()->getServer()->getPluginManager()->getPlugin("FastTrasnfer") instanceof PluginBase;
    }
    /**
     * This will hopefully save someone typing.
     * @param PluginBase $base
     * @return mixed
     */
    public static function getInstance(PluginBase $base){
        return $base->getServer()->getPluginManager()->getPlugin("SimpleWarp")->getApi();
    }
}