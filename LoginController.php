<?php
	return function ($kirby, $pages, $page) {
		$error = false;
		$error_message = null;

		// 🔒Get authentication status
		$status = $kirby->auth()->status();

		// 📥 Form is submitted
		if ($kirby->request()->is('POST') && get('login')) {
			// ❗️Check CSRF token
			if (csrf(get('csrf')) === true) {
				try {
					$kirby->auth()->login(get('email'), get('password'));

					// 🔗 Redirect to the homepage if the login was successful
					go('home');
				} catch (Exception $e) {
					$error = true;
					$error_message = 'Invalid username or password';
					//var_dump($e->getMessage());
				}
			}
		}
	}
?>
