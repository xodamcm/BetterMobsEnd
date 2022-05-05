<?php

declare(strict_types=1);

namespace tgwaste\EndMobs;

use pocketmine\data\bedrock\EntityLegacyIds;
use pocketmine\entity\EntityDataHelper;
use pocketmine\entity\EntityFactory;
use pocketmine\nbt\tag\CompoundTag;
use pocketmine\world\World;
use tgwaste\EndMobs\Entities\Bat;
use tgwaste\EndMobs\Entities\Vindicator;
use tgwaste\EndMobs\Entities\Evoker;
use tgwaste\EndMobs\Entities\Axolotl;
use tgwaste\EndMobs\Entities\Endermite;
use tgwaste\EndMobs\Entities\Bee;
use tgwaste\EndMobs\Entities\Fox;
use tgwaste\EndMobs\Entities\Cat;
use tgwaste\EndMobs\Entities\CaveSpider;
use tgwaste\EndMobs\Entities\Chicken;
use tgwaste\EndMobs\Entities\Cod;
use tgwaste\EndMobs\Entities\Cow;
use tgwaste\EndMobs\Entities\Creeper;
use tgwaste\EndMobs\Entities\Dolphin;
use tgwaste\EndMobs\Entities\Donkey;
use tgwaste\EndMobs\Entities\ElderGuardian;
use tgwaste\EndMobs\Entities\Enderman;
use tgwaste\EndMobs\Entities\EnderDragon;
use tgwaste\EndMobs\Entities\Guardian;
use tgwaste\EndMobs\Entities\Horse;
use tgwaste\EndMobs\Entities\Husk;
use tgwaste\EndMobs\Entities\Goat;
use tgwaste\EndMobs\Entities\IronGolem;
use tgwaste\EndMobs\Entities\Llama;
use tgwaste\EndMobs\Entities\Shulker;
use tgwaste\EndMobs\Entities\MobsEntity;
use tgwaste\EndMobs\Entities\Mooshroom;
use tgwaste\EndMobs\Entities\Ocelot;
use tgwaste\EndMobs\Entities\Parrot;
use tgwaste\EndMobs\Entities\Phantom;
use tgwaste\EndMobs\Entities\Pig;
use tgwaste\EndMobs\Entities\PolarBear;
use tgwaste\EndMobs\Entities\PufferFish;
use tgwaste\EndMobs\Entities\Rabbit;
use tgwaste\EndMobs\Entities\Salmon;
use tgwaste\EndMobs\Entities\Sheep;
use tgwaste\EndMobs\Entities\Silverfish;
use tgwaste\EndMobs\Entities\Skeleton;
use tgwaste\EndMobs\Entities\SkeletonHorse;
use tgwaste\EndMobs\Entities\Slime;
use tgwaste\EndMobs\Entities\Spider;
use tgwaste\EndMobs\Entities\Squid;
use tgwaste\EndMobs\Entities\Stray;
use tgwaste\EndMobs\Entities\TropicalFish;
use tgwaste\EndMobs\Entities\Villager;
use tgwaste\EndMobs\Entities\Witch;
use tgwaste\EndMobs\Entities\Wolf;
use tgwaste\EndMobs\Entities\Zombie;
use tgwaste\EndMobs\Entities\ZombieVillager;
use tgwaste\EndMobs\Entities\Blaze;
use tgwaste\EndMobs\Entities\Ghast;
use tgwaste\EndMobs\Entities\Hoglin;
use tgwaste\EndMobs\Entities\Piglin;
use tgwaste\EndMobs\Entities\MagmaCube;
use tgwaste\EndMobs\Entities\WitherSkeleton;
use tgwaste\EndMobs\Entities\ZombiePigman;
use tgwaste\EndMobs\Entities\Strider;

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
			"Bat" => Bat::class,
			"Strider" => Strider::class,
			"Ghast" => Ghast::class,
			"Blaze" => Blaze::class,
			"MagmaCube" => MagmaCube::class,
			"Piglin" => Piglin::class,
			"Hoglin" => Hoglin::class,
			"ZombiePigman" => ZombiePigman::class,
			"WitherSkeleton" => WitherSkeleton::class,
			"Axolotl" => Axolotl::class,
			"Bee" => Bee::class,
			"Endermite" => Endermite::class,
			"Cat" => Cat::class,
			"Goat" => Goat::class,
			"CaveSpider" => CaveSpider::class,
			"Chicken" => Chicken::class,
			"Cod" => Cod::class,
			"Cow" => Cow::class,
			"Creeper" => Creeper::class,
			"Dolphin" => Dolphin::class,
			"Donkey" => Donkey::class,
			"Vindicator" => Vindicator::class,
			"Evoker" => Evoker::class,
			"Fox" => Fox::class,
			"ElderGuardian" => ElderGuardian::class,
			"Enderman" => Enderman::class,
			"EnderDragon" => EnderDragon::class,
			"Guardian" => Guardian::class,
			"Horse" => Horse::class,
			"Husk" => Husk::class,
			"IronGolem" => IronGolem::class,
			"Llama" => Llama::class,
			"Shulker" => Shulker::class,
			"Mooshroom" => Mooshroom::class,
			"Ocelot" => Ocelot::class,
			"Parrot" => Parrot::class,
			"Phantom" => Phantom::class,
			"Pig" => Pig::class,
			"PolarBear" => PolarBear::class,
			"PufferFish" => PufferFish::class,
			"Rabbit" => Rabbit::class,
			"Salmon" => Salmon::class,
			"Sheep" => Sheep::class,
			"Silverfish" => Silverfish::class,
			"Skeleton" => Skeleton::class,
			"SkeletonHorse" => SkeletonHorse::class,
			"Slime" => Slime::class,
			"Spider" => Spider::class,
			"Squid" => Squid::class,
			"Stray" => Stray::class,
			"TropicalFish" => TropicalFish::class,
			"Villager" => Villager::class,
			"Witch" => Witch::class,
			"Wolf" => Wolf::class,
			"Zombie" => Zombie::class,
			"ZombieVillager" => ZombieVillager::class
		];
	}
}
