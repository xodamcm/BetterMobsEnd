<?php

declare(strict_types=1);

namespace tgwaste\EndMobs\Entities;
use pocketmine\nbt\tag\CompoundTag;
use pocketmine\data\bedrock\EntityLegacyIds;

class Cod extends MobsEntity {
	const TYPE_ID = EntityLegacyIds::COD;
	const HEIGHT = 1.0;
    public function initEntity(CompoundTag $nbt) : void{
        $this->setMaxHealth(6);
        $this->setMovementSpeed(1);
        parent::initEntity($nbt);
    }
}
