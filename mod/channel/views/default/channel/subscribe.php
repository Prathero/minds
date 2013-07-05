<?php

$user = $vars['entity'];
 
if (elgg_is_logged_in()) {
		if (elgg_get_logged_in_user_guid() != $user->guid) {
			if ($user->isFriend()) {
				echo elgg_view('output/url', array(
										'text' => elgg_echo('friend:remove'),
										'href' => "action/friends/remove?friend={$user->guid}",
										'class' => 'elgg-button elgg-button-action subscribe subscribed',
										'is_action' => true
									));
			} else {
				echo elgg_view('output/url', array(	
										'text' => elgg_echo('friend:add'),
										'href' => "action/friends/add?friend={$user->guid}",
										'class' => 'elgg-button elgg-button-action subscribe',
										'is_action' => true
									));
			}
		}
} else {
	echo elgg_view('output/url', array(	
										'text' => elgg_echo('friend:add'),
										'href' => "action/friends/add?friend={$user->guid}",
										'class' => 'elgg-button elgg-button-action subscribe',
										'is_action' => true
									));
}