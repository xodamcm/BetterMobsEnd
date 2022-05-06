<?php

declare(strict_types=1);

namespace tgwaste\EndMobs;

class Attributes {
	public function isFlying(string $name) : bool {
		return in_array($name, ["EnderDragon"]);
	}

	public function isJumping(string $name) : bool {
		return in_array($name, ["Shulker"]);
	}

	public function isSwimming(string $name) : bool {
		return in_array($name, []);
	}

	public function isHostile(string $name) : bool {
		return in_array($name, [
			"EnderDragon", "Enderman", "Shulker", "Endermite", "Enderman1", "Enderman2", "Enderman3", "Enderman4"
		]);
	}
	
	public function canCatchFire(string $name) : bool {
		return in_array($name, ["Enderman100"]);
	}

	public function getMortalEnemy(string $name) : string {
		$enemies = array("Endermite" => "Enderman", "Endermite" => "Enderman1", "Endermite" => "Enderman2");
		foreach ($enemies as $source => $target) {
			if ($source === $name) {
				return $target;
			}
		}
		return "none";
	}
}
