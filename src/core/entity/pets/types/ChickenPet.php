<?php

/**
 * ConflictCore – ChickenPet.php
 *
 * Copyright (C) 2017 Jack Noordhuis
 *
 * This is private software, you cannot redistribute and/or modify it in any way
 * unless given explicit permission to do so. If you have not been given explicit
 * permission to view or modify this software you should take the appropriate actions
 * to remove this software from your device immediately.
 *
 * @author JackNoordhuis
 *
 * Created on 11/5/17 at 1:19 PM
 *
 */

namespace core\entity\pets\types;

use core\entity\pets\BasePet;

class ChickenPet extends BasePet {

	const NETWORK_ID = 10;

	public $width = 0.4;
	public $height = 0.75;

	public function getName() {
		return "ChickenPet";
	}

	public function getPetName() : string {
		return "Chicken";
	}

	public function getSpeed() : int {
		return 1.8;
	}

}
