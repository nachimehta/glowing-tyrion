<?php

/***********************************
 *          units.php
 ***********************************
 * Stores unit attack and defense
 * values and area types and 
 * muster points
 ***********************************/

return array(
	
	'footman'	=> array (
				'attack' => 1,
				'defense' => 1,
				'muster' => 1,
				'areas' => 'land',
				'count' => 9
				),

	'knight'	=> array (
				'attack' => 2,
				'defense' => 2,
				'muster' => 2,
				'areas' => 'land'
				'count' => 5
				),

	'siege'		=> array (
				'attack' => 4,
				'defense' => 0,
				'muster' => 2,
				'areas' => 'land',
				'count' => 2
				),

	'ship'		=> array (
				'attack' => 1,
				'defense' => 1,
				'muster' => 1,
				'areas' => array ('sea', 'port'),
				'count' => 2
				)
	);

