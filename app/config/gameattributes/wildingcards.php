<?php

/**************************
 *     wildingcards.php
 *************************
 *  List of all wilding cards
 * and their wind and lose
 * conditions
 *************************/

return array(

	"Massing on the Milkwater" => array(
			
			"Lowest Bidder" => "If he has more than one house card in his hand, he discards all cards with the highest combat strength.",
			"Everyone Else" => "If they have more than one house card in their hand, they must choose and discard one of these cards.",
			"Highest Bidder" => "Returns his entire House card discard pile to his hand."
	),

	"A King Beyond the Wall" => array(

			"Lowest Bidder" => "Moves his tokens to the lowest position of every influence track.",
			"Everyone Else" => "In turn order, each player chooses either the Fiefdoms or King's Court influence track and moves his token to the lowest position of that track.",
			"Highest Bidder" => "Moves his token to the top of one influence track of his choice, then takes the appropriate dominance token."
	),
			
	"Mammoth Riders" => array(

			"Lowest Bidder" => "Destroys 3 of his units anywhere.",
			"Everyone Else" => "Destroys 2 of their units anywhere.",
			"Highest Bidder" => "May retrieve 1 House card of his choice from his House card discard pile."
	),

	"Crow Killers" => array(

			"Lowest Bidder" => "Replaces all of his Knights with available Footmen. Any Knight unable to be replaced is destroyed.",
			"Everyone Else" => "Replaces 2 of their Knights with available Footmen. Any Knight unable to be replaced is destroyed.",
			"Highest Bidder" => "May immediately replace up to 2 of his Footmen, anywhere, with available Knights."
	),

	"The Horde Descends" => array(

			"Lowest Bidder" => "Destroys 2 of his units at one of his CAstles or Strongholds. If unable, he destroys 2 of his units anywhere.",
			"Everyone Else" => "Destroys 1 of their units anywhere.",
			"Highest Bidder" => "May muster forces (following normal mustering rules) in any one Castle or Stronghold area he controls."
	),

	"Skinchanger Scout" => array(

			"Lowest Bidder" => "Discards all available Power tokens.",
			"Everyone Else" => "Discards 2 available Power tokens, or as many as they are able.",
			"Highest Bidder" => "All Power tokens he bid on this attack are immediately returned to his available Power."
	),

	"Rattleshirt's Raiders" => array(

			"Lowest Bidder" => "Is reduced 2 positions on the Supply track (to no lower than 0), then reconciles armies to new Supply limits.",
			"Everyone Else" => "Is reduced 1 position on the Supply track (to no lower than 0), then reconciles armies to new Supply limits.",
			"Highest Bidder" => "Is increased 1 position on the Supply track (to no higher than 6)."
	),

	"Silence at the Wall" => array(

			"Lowest Bidder" => "Nothing happens.",
			"Everyone Else" => "Nothing happens.",
			"Highest Bidder" => "Nothing happens."
	),

	"Preemptive Raid" => array(

			"Lowest Bidder" => "Choose one of the following: A. Destroys 2 of his units anywhere. B. Is reduced 2 positions on his highest Influence track.",
			"Everyone Else" => "Nothing happens.",
			"Highest Bidder" => "The wildings immediately attack again with a strength of 6. You do not participate in the bidding against this attack (nor do you receive any rewards or penalties)."
	);
