<?php

declare(strict_types=1);

namespace tgwaste\EndMobs;

use pocketmine\scheduler\Task;

class Schedule extends Task {
	public function onRun() : void {
		Main::$instance->spawnobj->deSpawnMobs();
		Main::$instance->spawnobj->spawnMobs();
	}
}
