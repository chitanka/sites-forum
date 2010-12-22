<?php
//If other mods are installed you may have to change legend3 to the next available legend number
$display_vars['vars'] = array_merge($display_vars['vars'], array(
	'legend3'						=> 'USERNAME_COLOUR_CHANGE',
	'uccm_euclidean_distance'		=> array('lang' => 'SIMILAR_COLOUR_CHECK',	'validate' => 'int:0:650',	'type' => 'text:4:4', 'explain' => true),
	'uccm_disallowed_colours'		=> array('lang' => 'DISALLOWED_COLOURS',	'validate' => 'string',	'type' => 'text:25:255', 'explain' => true),

	//'legend4'					=> 'ACP_SUBMIT_CHANGES',
));
