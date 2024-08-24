<?php

	return [
		//= ❗️Error's
		'debug' => true,

		//= 🔐 Login
		'auth' => [
			'methods' => 'password'
		],

		//= 📤 Logout
		'routes' => [
			[
				'pattern' => 'logout',
				'action'  => function() {
					if ($user = kirby()->user()) {
						$user->logout();
					}

					// Goto
					go('login');
				}
			]
		],
	];

?>
