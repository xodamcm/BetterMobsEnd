<?php

declare(strict_types=1);

namespace tgwaste\EndMobs\Entities;
use pocketmine\nbt\tag\CompoundTag;
use pocketmine\data\bedrock\EntityLegacyIds;

class SkeletonHorse extends MobsEntity {
	const TYPE_ID = EntityLegacyIds::SKELETON_HORSE;
	const HEIGHT = 1.6;
}
