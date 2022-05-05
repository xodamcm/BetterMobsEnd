<?php

declare(strict_types=1);

namespace tgwaste\EndMobs\Entities;
use pocketmine\nbt\tag\CompoundTag;
use pocketmine\data\bedrock\EntityLegacyIds;

class CaveSpider extends MobsEntity {
	const TYPE_ID = EntityLegacyIds::CAVE_SPIDER;
	const HEIGHT = 0.5;
}
