<?php
$factory('App\Models\User', [
	'name' => $faker->name,
	'email' => $faker->safeEmail,
	'password' => bcrypt('password'),
	'ip_address' => $faker->ipv4,
	'created_at' => $faker->dateTime($max = 'now'),
	'updated_at' => $faker->dateTime($max = 'now'),
]);
