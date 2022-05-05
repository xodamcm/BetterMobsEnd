<?php

declare(strict_types=1);

namespace tgwaste\EndMobs\Entities;
use pocketmine\nbt\tag\CompoundTag;
use pocketmine\data\bedrock\EntityLegacyIds;

class Villager extends MobsEntity {
	const TYPE_ID = EntityLegacyIds::VILLAGER;
	const HEIGHT = 1.95;
    public function initEntity(CompoundTag $nbt) : void{
        $this->setMaxHealth(20);
	 $this->setMovementSpeed(1.2); 
        parent::initEntity($nbt);
    }	
}
