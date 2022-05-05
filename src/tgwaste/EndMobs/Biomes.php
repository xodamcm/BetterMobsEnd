<?php

declare(strict_types=1);

namespace tgwaste\EndMobs;

use pocketmine\data\bedrock\BiomeIds;
use pocketmine\player\Player;

class Biomes {
	public function getMobsForBiome(string $biome) {
		$biome = strtoupper($biome);
		$biometable = [
			"BIRCH FOREST" => ["Cat", "Chicken", "Cow", "Horse", "Parrot", "Pig", "Rabbit", "Sheep", "Slime", "Endermite", "Enderman", "EnderDragon", "Shulker", "Zombie", "Skeleton", "Phantom", "Creeper", "Spider", "Vindicator", "Evoker", "Cod", "Axolotl", "Dolphin", "ElderGuardian", "PufferFish", "Salmon", "Squid", "TropicalFish", "Blaze", "Ghast", "Piglin", "WitherSkeleton", "ZombiePigman", "Hoglin", "MagmaCube", "Strider"],
			"DESERT" => ["Cow", "Horse", "Pig", "Rabbit", "Sheep", "Endermite", "Enderman", "EnderDragon", "Shulker", "Zombie", "Skeleton", "Phantom", "Creeper", "Spider", "Vindicator", "Evoker", "Cod", "Axolotl", "Dolphin", "ElderGuardian", "PufferFish", "Salmon", "Squid", "TropicalFish", "Blaze", "Ghast", "Piglin", "WitherSkeleton", "ZombiePigman", "Hoglin", "MagmaCube", "Strider"],
			"END" => ["Endermite", "Enderman", "EnderDragon", "Shulker", "Zombie", "Skeleton", "Phantom", "Creeper", "Spider", "Vindicator", "Evoker", "Cod", "Axolotl", "Dolphin", "ElderGuardian", "PufferFish", "Salmon", "Squid", "TropicalFish", "Blaze", "Ghast", "Piglin", "WitherSkeleton", "ZombiePigman", "Hoglin", "MagmaCube"],
			"FOREST" => ["Bat", "Cat", "Chicken", "Cow", "Horse", "Parrot", "Pig", "Rabbit", "Sheep", "Bee", "Endermite", "Enderman", "EnderDragon", "Shulker", "Zombie", "Skeleton", "Phantom", "Creeper", "Spider", "Vindicator", "Evoker", "Cod", "Axolotl", "Dolphin", "ElderGuardian", "PufferFish", "Salmon", "Squid", "TropicalFish", "Blaze", "Ghast", "Piglin", "WitherSkeleton", "ZombiePigman", "Hoglin", "MagmaCube"],
			"HELL" => ["Bat", "Cat", "Chicken", "Cow", "Horse", "Parrot", "Pig", "Rabbit", "Sheep", "Endermite", "Enderman", "EnderDragon", "Shulker", "Zombie", "Skeleton", "Phantom", "Creeper", "Spider", "Vindicator", "Evoker", "Cod", "Axolotl", "Dolphin", "ElderGuardian", "PufferFish", "Salmon", "Squid", "TropicalFish", "Blaze", "Ghast", "Piglin", "WitherSkeleton", "ZombiePigman", "Hoglin", "MagmaCube"],
			"ICE PLAINS" => ["PolarBear", "Goat", "Endermite", "Enderman", "EnderDragon", "Shulker", "Zombie", "Skeleton", "Phantom", "Creeper", "Spider", "Vindicator", "Evoker", "Cod", "Axolotl", "Dolphin", "ElderGuardian", "PufferFish", "Salmon", "Squid", "TropicalFish", "Blaze", "Ghast", "Piglin", "WitherSkeleton", "ZombiePigman", "Hoglin", "MagmaCube"],
			"MOUNTAINS" => ["Bat", "Cat", "Chicken", "Cow", "Horse", "Llama", "Parrot", "Pig", "Rabbit", "Sheep", "Goat", "Endermite", "Enderman", "EnderDragon", "Shulker", "Zombie", "Skeleton", "Phantom", "Creeper", "Spider", "Vindicator", "Evoker", "Cod", "Axolotl", "Dolphin", "ElderGuardian", "PufferFish", "Salmon", "Squid", "TropicalFish", "Blaze", "Ghast", "Piglin", "WitherSkeleton", "ZombiePigman", "Hoglin", "MagmaCube"],
			//"OCEAN" => ["Cod", "Axolotl", "Dolphin", "ElderGuardian", "PufferFish", "Salmon", "Squid", "TropicalFish", "Blaze", "Ghast", "Piglin", "WitherSkeleton", "ZombiePigman", "Hoglin", "MagmaCube"],
			"PLAINS" => ["Bee", "Cat", "Chicken", "Cow", "Donkey", "Horse", "Parrot", "Pig", "Rabbit", "Sheep", "Fox", "Endermite", "Enderman", "EnderDragon", "Shulker", "Zombie", "Skeleton", "Phantom", "Creeper", "Spider", "Vindicator", "Evoker", "Cod", "Axolotl", "Dolphin", "ElderGuardian", "PufferFish", "Salmon", "Squid", "TropicalFish", "Blaze", "Ghast", "Piglin", "WitherSkeleton", "ZombiePigman", "Hoglin", "MagmaCube"],
			//"RIVER" => ["Cod", "Axolotl", "PufferFish", "Salmon", "TropicalFish", "Endermite", "Enderman", "EnderDragon", "Shulker", "Zombie", "Skeleton", "Phantom", "Creeper", "Spider", "Vindicator", "Evoker"],
			"SMALL MOUNTAIN" => ["Cat", "Chicken", "Cow", "Horse", "Llama", "Parrot", "Pig", "Rabbit", "Sheep", "Bee", "Fox", "Goat", "Endermite", "Enderman", "EnderDragon", "Shulker", "Zombie", "Skeleton", "Phantom", "Creeper", "Spider", "Vindicator", "Evoker", "Cod", "Axolotl", "Dolphin", "ElderGuardian", "PufferFish", "Salmon", "Squid", "TropicalFish", "Blaze", "Ghast", "Piglin", "WitherSkeleton", "ZombiePigman", "Hoglin", "MagmaCube"],
			"SWAMP" => ["Bat", "Cow", "Horse", "Pig", "Rabbit", "Sheep", "Slime", "Endermite", "Enderman", "EnderDragon", "Shulker", "Zombie", "Skeleton", "Phantom", "Creeper", "Spider", "Vindicator", "Evoker", "Cod", "Axolotl", "Dolphin", "ElderGuardian", "PufferFish", "Salmon", "Squid", "TropicalFish", "Blaze", "Ghast", "Piglin", "WitherSkeleton", "ZombiePigman", "Hoglin", "MagmaCube"],
			"TAIGA" => ["Bat", "Cat", "Chicken", "Cow", "Horse", "Ocelot", "Pig", "Rabbit", "Sheep", "Goat", "Endermite", "Enderman", "EnderDragon", "Shulker", "Zombie", "Skeleton", "Phantom", "Creeper", "Spider", "Vindicator", "Evoker", "Cod", "Axolotl", "Dolphin", "ElderGuardian", "PufferFish", "Salmon", "Squid", "TropicalFish", "Blaze", "Ghast", "Piglin", "WitherSkeleton", "ZombiePigman", "Hoglin", "MagmaCube"]
		];

		if (!array_key_exists($biome, $biometable)) {
			$biome = "PLAINS";
		}

		return $biometable[$biome];
	}

	public function getNightMobsForBiome(string $biome) {
		$biome = strtoupper($biome);
		$biometable = [
			"BIRCH FOREST" => ["Cat", "Chicken", "Cow", "Horse", "Parrot", "Pig", "Rabbit", "Sheep", "Slime", "Endermite", "Enderman", "EnderDragon", "Shulker", "Zombie", "Skeleton", "Phantom", "Creeper", "Spider", "Vindicator", "Evoker", "Cod", "Axolotl", "Dolphin", "ElderGuardian", "PufferFish", "Salmon", "Squid", "TropicalFish", "Blaze", "Ghast", "Piglin", "WitherSkeleton", "ZombiePigman", "Hoglin", "MagmaCube"],
			"DESERT" => ["Cat", "Chicken", "Cow", "Horse", "Parrot", "Pig", "Rabbit", "Sheep", "Slime", "Endermite", "Enderman", "EnderDragon", "Shulker", "Zombie", "Skeleton", "Phantom", "Creeper", "Spider", "Vindicator", "Evoker", "Cod", "Axolotl", "Dolphin", "ElderGuardian", "PufferFish", "Salmon", "Squid", "TropicalFish", "Blaze", "Ghast", "Piglin", "WitherSkeleton", "ZombiePigman", "Hoglin", "MagmaCube"],
			"END" => ["Cat", "Chicken", "Cow", "Horse", "Parrot", "Pig", "Rabbit", "Sheep", "Slime", "Endermite", "Enderman", "EnderDragon", "Shulker", "Zombie", "Skeleton", "Phantom", "Creeper", "Spider", "Vindicator", "Evoker", "Cod", "Axolotl", "Dolphin", "ElderGuardian", "PufferFish", "Salmon", "Squid", "TropicalFish", "Blaze", "Ghast", "Piglin", "WitherSkeleton", "ZombiePigman", "Hoglin", "MagmaCube"],
			"FOREST" => ["Cat", "Chicken", "Cow", "Horse", "Parrot", "Pig", "Rabbit", "Sheep", "Slime", "Endermite", "Enderman", "EnderDragon", "Shulker", "Zombie", "Skeleton", "Phantom", "Creeper", "Spider", "Vindicator", "Evoker", "Cod", "Axolotl", "Dolphin", "ElderGuardian", "PufferFish", "Salmon", "Squid", "TropicalFish", "Blaze", "Ghast", "Piglin", "WitherSkeleton", "ZombiePigman", "Hoglin", "MagmaCube"],
			"HELL" => ["Cat", "Chicken", "Cow", "Horse", "Parrot", "Pig", "Rabbit", "Sheep", "Slime", "Endermite", "Enderman", "EnderDragon", "Shulker", "Zombie", "Skeleton", "Phantom", "Creeper", "Spider", "Vindicator", "Evoker", "Cod", "Axolotl", "Dolphin", "ElderGuardian", "PufferFish", "Salmon", "Squid", "TropicalFish", "Blaze", "Ghast", "Piglin", "WitherSkeleton", "ZombiePigman", "Hoglin", "MagmaCube"],
			"ICE PLAINS" => ["Cat", "Chicken", "Cow", "Horse", "Parrot", "Pig", "Rabbit", "Sheep", "Slime", "Endermite", "Enderman", "EnderDragon", "Shulker", "Zombie", "Skeleton", "Phantom", "Creeper", "Spider", "Vindicator", "Evoker", "Cod", "Axolotl", "Dolphin", "ElderGuardian", "PufferFish", "Salmon", "Squid", "TropicalFish", "Blaze", "Ghast", "Piglin", "WitherSkeleton", "ZombiePigman", "Hoglin", "MagmaCube"],
			"MOUNTAINS" => ["Cat", "Chicken", "Cow", "Horse", "Parrot", "Pig", "Rabbit", "Sheep", "Slime", "Endermite", "Enderman", "EnderDragon", "Shulker", "Zombie", "Skeleton", "Phantom", "Creeper", "Spider", "Vindicator", "Evoker", "Cod", "Axolotl", "Dolphin", "ElderGuardian", "PufferFish", "Salmon", "Squid", "TropicalFish", "Blaze", "Ghast", "Piglin", "WitherSkeleton", "ZombiePigman", "Hoglin", "MagmaCube"],
			//"OCEAN" => ["Cod", "Axolotl", "PufferFish", "Salmon", "TropicalFish", "Guardian", "ElderGuardian"],
			"PLAINS" => ["Cat", "Chicken", "Cow", "Horse", "Parrot", "Pig", "Rabbit", "Sheep", "Slime", "Endermite", "Enderman", "EnderDragon", "Shulker", "Zombie", "Skeleton", "Phantom", "Creeper", "Spider", "Vindicator", "Evoker", "Cod", "Axolotl", "Dolphin", "ElderGuardian", "PufferFish", "Salmon", "Squid", "TropicalFish", "Blaze", "Ghast", "Piglin", "WitherSkeleton", "ZombiePigman", "Hoglin", "MagmaCube"],
			"SMALL MOUNTAIN" => ["Cat", "Chicken", "Cow", "Horse", "Parrot", "Pig", "Rabbit", "Sheep", "Slime", "Endermite", "Enderman", "EnderDragon", "Shulker", "Zombie", "Skeleton", "Phantom", "Creeper", "Spider", "Vindicator", "Evoker", "Cod", "Axolotl", "Dolphin", "ElderGuardian", "PufferFish", "Salmon", "Squid", "TropicalFish", "Blaze", "Ghast", "Piglin", "WitherSkeleton", "ZombiePigman", "Hoglin", "MagmaCube"],
			//"RIVER" => ["Cat", "Chicken", "Cow", "Horse", "Parrot", "Pig", "Rabbit", "Sheep", "Slime", "Endermite", "Enderman", "EnderDragon", "Shulker", "Zombie", "Skeleton", "Phantom", "Creeper", "Spider", "Vindicator", "Evoker"],
			"SMALL MOUNTAIN" => ["Cat", "Chicken", "Cow", "Horse", "Parrot", "Pig", "Rabbit", "Sheep", "Slime", "Endermite", "Enderman", "EnderDragon", "Shulker", "Zombie", "Skeleton", "Phantom", "Creeper", "Spider", "Vindicator", "Evoker", "Cod", "Axolotl", "Dolphin", "ElderGuardian", "PufferFish", "Salmon", "Squid", "TropicalFish", "Blaze", "Ghast", "Piglin", "WitherSkeleton", "ZombiePigman", "Hoglin", "MagmaCube"],
			"SWAMP" => ["Cat", "Chicken", "Cow", "Horse", "Parrot", "Pig", "Rabbit", "Sheep", "Slime", "Endermite", "Enderman", "EnderDragon", "Shulker", "Zombie", "Skeleton", "Phantom", "Creeper", "Spider", "Vindicator", "Evoker", "Cod", "Axolotl", "Dolphin", "ElderGuardian", "PufferFish", "Salmon", "Squid", "TropicalFish", "Blaze", "Ghast", "Piglin", "WitherSkeleton", "ZombiePigman", "Hoglin", "MagmaCube"],
			"TAIGA" => ["Cat", "Chicken", "Cow", "Horse", "Parrot", "Pig", "Rabbit", "Sheep", "Slime", "Endermite", "Enderman", "EnderDragon", "Shulker", "Zombie", "Skeleton", "Phantom", "Creeper", "Spider", "Vindicator", "Evoker", "Cod", "Axolotl", "Dolphin", "ElderGuardian", "PufferFish", "Salmon", "Squid", "TropicalFish", "Blaze", "Ghast", "Piglin", "WitherSkeleton", "ZombiePigman", "Hoglin", "MagmaCube"],
		];

		if (!array_key_exists($biome, $biometable)) {
			$biome = "PLAINS";
		}

		return $biometable[$biome];
	}
}
