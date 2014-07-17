<?php

/*************************************
 *      housecards.php       
 *************************************
 * Lists the house cards, their house
 * the number of swords, fortifications
 * and special text
 ************************************/

 return array(
	
	"Patchface"		=> array(
					'house' => 'baratheon',
					'power' => 0,
					'swords' => 0,
					'forts' => 0,
					'text' => "After combat, you may look at your opponent's hand and discard one card of your choice."
					),

	"Melisandre"		=> array(
					'house' => 'baratheon',
					'power' => 1,
					'swords' => 1,
					'forts' => 0,
					'text' => ''
					),

	"Salladhor Saan"	=> array(
					'house' => 'baratheon',
					'power' => 1,
					'swords' => 0,
					'forts' => 0,
					'text' => "If you are being supported in this combat the combat strength of all non Baratheon Ships is reduced to 0."
					),

	"Brienne of Tarth"	=> array(
					'house' => 'baratheon',
					'power' => 2,
					'swords' => 1,
					'forts' => 1,
					'text' => ""
					),

	"Ser Davos Seaworth"	=> array(
					'house' => 'baratheon',
					'power' => 2,
					'swords' => 0,
					'forts' => 0,
					'text' => "If your 'Stannis Baratheon' House card is in your discard pile, this card gains +1 combat strength and a sword icon"
					),

	"Renly Baratheon"	=> array(
					'house' => 'baratheon',
					'power' => 3,
					'swords' => 0,
					'forts' => 0,
					'text' => "If you win this combat, you may upgrade one of your participating Footmen (or one supporting Baratheon Footmen) to a Knight"
					),

	"Stannis Baratheon"	=> array(
					'house' => 'baratheon',
					'power' => 4,
					'swords' => 0,
					'forts' => 0,
					'text' => "If your opponent has a higher position on the Iron Throne Influence track than you, this card gains +1 combat strength."
					),

	"Aeron Damphair"	=> array(
					'house' => 'greyjoy',
					'power' => 0,
					'swords' => 0,
					'forts' => 0,
					'text' => "You may immediately discard two of your available Power tokens to discard Aeron Damphair and choose a different House Card from your hand (if able)."
					),

	"Asha Greyjoy"		=> array(
					'house' => 'greyjoy',
					'power' => 0,
					'swords' => 0,
					'forts' => 0,
					'text' => "IF you are not being supported in this combat, this card gains two sword icons and one fortification icon."
					),

	"Dagmar Cleftjaw"	=> array(
					'house' => 'greyjoy',
					'power' => 1,
					'swords' => 1,
					'forts' => 1,
					'text' => ""
					),

	"Theon Greyjoy" 	=> array(
					'house' => 'greyjoy',
					'power' => 2,
					'swords' => 0,
					'forts' => 0,
					'text' => "If you are defending an area that contains either a Stronghold or a Castle this card gains +1 combat strength and a sword icon."
					),

	"Balon Greyjoy"		=> array(
					'house' => 'greyjoy',
					'power' => 2,
					'swords' => 0,
					'forts' => 0,
					'text' => "The printed combat strength of your opponent's House card is reduced to 0."
					),

	"Victarion Greyjoy"	=> array(
					'house' => 'greyjoy',
					'power' => 3,
					'swords' => 0,
					'forts' => 0,
					'text' => "If you are attacking all of your participating Ships (including supporting Greyoy ships) add +2 to combat strength instead of +1."
					),

	"Euron Crow's Eye"	=> array(
					'house' => 'greyjoy',
					'power' => 4,
					'swords' => 1,
					'forts' => 0,
					'text' => ""
					),

	"Cersei Lannister"		=> array(
					'house' => 'lannister',
					'power' => 0,
					'swords' => 0,
					'forts' => 0,
					'text' => "If you win this combat you may remove one of the losing opponents Order tokens from anywhere on the board."
					),

	"Tyrion Lannister"		=> array(
					'house' => 'lannister',
					'power' => 1,
					'swords' => 0,
					'forts' => 0,
					'text' => "You may immediately cancel your opponent's chosen House card and return it to his hand. He must then choose a different House card to reveal. If he has no other House cards in his hand, he cannot use a House card this combat."
					),

	"Ser Kevan Lannister"		=> array(
					'house' => 'lannister',
					'power' => 1,
					'swords' => 0,
					'forts' => 0,
					'text' => "If you are attacking, all of your participating Footmen (including supporting Lannister Footmen) and +2 combat strength instead of +1."
					),

	"Ser Jaime Lannister"		=> array(
					'house' => 'lannister',
					'power' => 2,
					'swords' => 1,
					'forts' => 0,
					'text' => ""
					),

	"The Hound"			=> array(
					'house' => 'lannister',
					'power' => 2,
					'swords' => 0,
					'forts' => 2,
					'text' => ""
					),

	"Ser Gregor Clegane"		=> array(
					'house' => 'lannister',
					'power' => 3,
					'swords' => 3,
					'forts' => 0,
					'text' => ""
					),

	"Tywin Lannister"	=> array(
					'house' => 'lannister',
					'power' => 4,
					'swords' => 0,
					'forts' => 0,
					'text' => "If you win this combat gain two Power tokens."
					),

	"Doran Martell"		=> array(
					'house' => 'martell',
					'power' => 0,
					'swords' => 0,
					'forts' => 0,
					'text' => "Immediately move your opponent to the bottom of one Influence track of your choice",
					),

	"Nymeria Sand"		=> array(
					'house' => 'martell',
					'power' => 1,
					'swords' => 0,
					'forts' => 0,
					'text' => "If you are defending, this card gains a fortification icon. If you are attacking this card gains a sword icon"
					),

	"Arianne Martell"		=> array(
					'house' => 'martell',
					'power' => 1,
					'swords' => 0,
					'forts' => 0,
					'text' => "If you are defending and lose this combat, your opponent may not move his units into the embattled area. They return to the area from which they marched. Your own units must still retreat."
					),

	"Obara Sand"			=> array(
					'house' => 'martell',
					'power' => 2,
					'swords' => 1,
					'forts' => 0,
					'text' => ""
					),

	"Darkstar"			=> array(
					'house' => 'martell',
					'power' => 2,
					'swords' => 1,
					'forts' => 0,
					'text' => ""
					),

	"Areo Hotah"			=> array(
					'house' => 'martell',
					'power' => 3,
					'swords' => 0,
					'forts' => 1,
					'text' => ""
					),

	"The Red Viper"			=> array(
					'house' => 'martell',
					'power' => 4,
					'swords' => 2,
					'forts' => 1,
					'text' => ""
					),

	"Catelyn Stark"			=> array(
					'house' => 'stark',
					'power' => 0,
					'swords' => 0,
					'forts' => 0,
					'text' => "If you have a Defense Order token in the embattled area, its value is doubled."
					),

	"The Blackfish"			=> array(
					'house' => 'stark',
					'power' => 1,
					'swords' => 0,
					'forts' => 0,
					'text' => "You do not take casualties in this combat from House card abilities, Combat icons, or Ties of Battle cards."
					),

	"Ser Rodrick Cassel"		=> array(
					'house' => 'stark',
					'power' => 1,
					'swords' => 0,
					'forts' => 2,
					'text' => ""
					),

	"Greatjon Umber"		=> array(
					'house' => 'stark',
					'power' => 2,
					'swords' => 1,
					'forts' => 0,
					'text' => ""
					),

	"Roose Bolton"			=> array(
					'house' => 'stark',
					'power' => 2,
					'swords' => 0,
					'forts' => 0,
					'text' => "If you lose this combat, return your entire House card discard pile into your hand (including this card)."
					),

	"Robb Stark"			=> array(
					'house' => 'stark',
					'power' => 3,
					'swords' => 0,
					'forts' => 0,
					'text' => "If you win this combat, you may choose the area to which your opponent retreats. You must choose a legal area where your opponent loses the fewest units."
					),

	"Eddard Stark"			=> array(
					'house' => 'stark',
					'power' => 4,
					'swords' => 2,
					'forts' => 0,
					'text' => ""
					),

	"Queen of Thorns"		=> array(
					'house' => 'tyrell',
					'power' => 0,
					'swords' => 0,
					'forts' => 0,
					'text' => "Immediately remove one of your opponent's Order tokens in any one area adjacent to the embattled area. You may not remove the March Order token used to start this combat."
					),

	"Alester Florent"		=> array(
					'house' => 'tyrell',
					'power' => 1,
					'swords' => 0,
					'forts' => 1,
					'text' => ""
					),

	"Margaery Tyrell"		=> array(
					'house' => 'tyrell',
					'power' => 1,
					'swords' => 0,
					'forts' => 1,
					'text' => ""
					),

	"Ser Garlan Tyrell"		=> array(
					'house' => 'tyrell',
					'power' => 2,
					'swords' => 2,
					'forts' => 0,
					'text' => ""
					),

	"Randyll Tarly"			=> array(
					'house' => 'tyrell',
					'power' => 2,
					'swords' => 1,
					'forts' => 0,
					'text' => ""
					),

	"Ser Loras Tyrell"		=> array(
					'house' => 'tyrell',
					'power' => 3,
					'swords' => 0,
					'forts' => 0,
					'text' => "If you are attacking and win this combat, move the March Order token into the conquered area (instead of discarding it). The March Order may be resolved again later this round."
					),

	"Mace Tyrell"			=> array(
					'house' => 'tyrell',
					'power' => 4,
					'swords' => 0,
					'forts' => 0,
					'text' => "Immediately destroy one of your opponent's attacking or defending Footmen units."
					),
	);
