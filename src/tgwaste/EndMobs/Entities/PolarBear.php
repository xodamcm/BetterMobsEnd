<?php

declare(strict_types=1);

namespace tgwaste\EndMobs\Entities;
use pocketmine\nbt\tag\CompoundTag;
use pocketmine\data\bedrock\EntityLegacyIds;

class PolarBear extends MobsEntity {
	const TYPE_ID = EntityLegacyIds::POLAR_BEAR;
	const HEIGHT = 1.4;
    public function initEntity(CompoundTag $nbt) : void{
        $this->setMaxHealth(30);
	 $this->setMovementSpeed(1);
        parent::initEntity($nbt);
    }	
}
