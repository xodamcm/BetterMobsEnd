<?php

declare(strict_types=1);

namespace tgwaste\EndMobs;

use pocketmine\data\bedrock\EntityLegacyIds;
use pocketmine\entity\EntityDataHelper;
use pocketmine\entity\EntityFactory;
use pocketmine\nbt\tag\CompoundTag;
use pocketmine\world\World;
use tgwaste\EndMobs\Entities\MobsEntity;
use tgwaste\EndMobs\Entities\Enderman1;
use tgwaste\EndMobs\Entities\Enderman2;
use tgwaste\EndMobs\Entities\Enderman3;
use tgwaste\EndMobs\Entities\Enderman4;
use tgwaste\EndMobs\Entities\Enderman5;
use tgwaste\EndMobs\Entities\Enderman6;
use tgwaste\EndMobs\Entities\Enderman7;
use tgwaste\EndMobs\Entities\Enderman8;
use tgwaste\EndMobs\Entities\Enderman9;
use tgwaste\EndMobs\Entities\Enderman10;
use tgwaste\EndMobs\Entities\Enderman11;
use tgwaste\EndMobs\Entities\Enderman12;
use tgwaste\EndMobs\Entities\Enderman13;
use tgwaste\EndMobs\Entities\Enderman14;
use tgwaste\EndMobs\Entities\Enderman15;
use tgwaste\EndMobs\Entities\Enderman16;
use tgwaste\EndMobs\Entities\Enderman17;
use tgwaste\EndMobs\Entities\Enderman18;
use tgwaste\EndMobs\Entities\Enderman19;
use tgwaste\EndMobs\Entities\Enderman20;
use tgwaste\EndMobs\Entities\Enderman21;
use tgwaste\EndMobs\Entities\Enderman22;
use tgwaste\EndMobs\Entities\Enderman23;
use tgwaste\EndMobs\Entities\Enderman24;
use tgwaste\EndMobs\Entities\Enderman25;
use tgwaste\EndMobs\Entities\Enderman26;
use tgwaste\EndMobs\Entities\Enderman27;
use tgwaste\EndMobs\Entities\Enderman28;
use tgwaste\EndMobs\Entities\Enderman29;
use tgwaste\EndMobs\Entities\Enderman30;
use tgwaste\EndMobs\Entities\Enderman31;
use tgwaste\EndMobs\Entities\Enderman32;
use tgwaste\EndMobs\Entities\Enderman33;
use tgwaste\EndMobs\Entities\Enderman34;
use tgwaste\EndMobs\Entities\Enderman35;
use tgwaste\EndMobs\Entities\Enderman36;
use tgwaste\EndMobs\Entities\Enderman37;
use tgwaste\EndMobs\Entities\Enderman38;
use tgwaste\EndMobs\Entities\Enderman39;
use tgwaste\EndMobs\Entities\Enderman40;
use tgwaste\EndMobs\Entities\Enderman41;
use tgwaste\EndMobs\Entities\Enderman42;
use tgwaste\EndMobs\Entities\Enderman43;
use tgwaste\EndMobs\Entities\Enderman44;
use tgwaste\EndMobs\Entities\Enderman45;
use tgwaste\EndMobs\Entities\Enderman46;
use tgwaste\EndMobs\Entities\Enderman47;
use tgwaste\EndMobs\Entities\Enderman48;
use tgwaste\EndMobs\Entities\Enderman49;
use tgwaste\EndMobs\Entities\Enderman50;
use tgwaste\EndMobs\Entities\Enderman51;
use tgwaste\EndMobs\Entities\Enderman52;
use tgwaste\EndMobs\Entities\Enderman53;
use tgwaste\EndMobs\Entities\Enderman100;
use tgwaste\EndMobs\Entities\Endermite;
use tgwaste\EndMobs\Entities\Shulker;
use tgwaste\EndMobs\Entities\Enderman;
use tgwaste\EndMobs\Entities\EnderDragon;

class Registrations {
	public function registerEntities() {
		Main::$instance->classes = $this->getClasses();
		$entityFactory = EntityFactory::getInstance();
		foreach (Main::$instance->classes as $entityName => $typeClass) {
			$entityFactory->register($typeClass,
				static function(World $world, CompoundTag $nbt) use($typeClass): MobsEntity {
					return new $typeClass(EntityDataHelper::parseLocation($nbt, $world), $nbt);
				},
			[$entityName], $typeClass::TYPE_ID);
		}
	}

	public function getClasses() : array {
		return [
			"Enderman1" => Enderman1::class,
			"Enderman2" => Enderman2::class,
			"Enderman3" => Enderman3::class,
			"Enderman4" => Enderman4::class,
			"Enderman5" => Enderman5::class,
			"Enderman6" => Enderman6::class,
			"Enderman7" => Enderman7::class,
			"Enderman8" => Enderman8::class,
			"Enderman9" => Enderman9::class,
			"Enderman10" => Enderman10::class,
			"Enderman11" => Enderman11::class,
			"Enderman12" => Enderman12::class,
			"Enderman13" => Enderman13::class,
			"Enderman14" => Enderman14::class,
			"Enderman15" => Enderman15::class,
			"Enderman16" => Enderman16::class,
			"Enderman17" => Enderman17::class,
			"Enderman18" => Enderman18::class,
			"Enderman19" => Enderman19::class,
			"Enderman20" => Enderman20::class,
			"Enderman21" => Enderman21::class,
			"Enderman22" => Enderman22::class,
			"Enderman23" => Enderman23::class,
			"Enderman24" => Enderman24::class,
			"Enderman25" => Enderman25::class,
			"Enderman26" => Enderman26::class,
			"Enderman27" => Enderman27::class,
			"Enderman28" => Enderman28::class,
			"Enderman29" => Enderman29::class,
			"Enderman30" => Enderman30::class,
			"Enderman31" => Enderman31::class,
			"Enderman32" => Enderman32::class,
			"Enderman33" => Enderman33::class,
			"Enderman34" => Enderman34::class,
			"Enderman35" => Enderman35::class,
			"Enderman36" => Enderman36::class,
			"Enderman37" => Enderman37::class,
			"Enderman38" => Enderman38::class,
			"Enderman39" => Enderman39::class,
			"Enderman40" => Enderman40::class,
			"Enderman41" => Enderman41::class,
			"Enderman42" => Enderman43::class,
			"Enderman44" => Enderman44::class,
			"Enderman45" => Enderman45::class,
			"Enderman46" => Enderman46::class,
			"Enderman47" => Enderman47::class,
			"Enderman48" => Enderman48::class,
			"Enderman49" => Enderman49::class,
			"Enderman50" => Enderman51::class,
			"Enderman52" => Enderman52::class,
			"Enderman53" => Enderman53::class,
			"Enderman100" => Enderman100::class,			
			"Shulker" => Shulker::class,
			"Endermite" => Endermite::class,
			"Enderman" => Enderman::class,
			"EnderDragon" => EnderDragon::class
		];
	}
}
