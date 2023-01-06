<?php

declare(strict_types=1);

namespace NhanAZ\CropGrowth\Plants;

use NhanAZ\CropGrowth\Main;
use pocketmine\block\VanillaBlocks;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerInteractEvent;

class SweetBerryBush implements Listener {

	public function onPlayerInteract(PlayerInteractEvent $event): void {
		$block = $event->getBlock();
		$blockPos = $block->getPosition();
		if (Main::isUseBoneMeal($event->getItem(), $event->getAction())) {
			if ($block->isSameType(VanillaBlocks::SWEET_BERRY_BUSH())) {
				Main::playParticleAndSound($blockPos->getWorld(), $blockPos);
			}
		}
	}
}