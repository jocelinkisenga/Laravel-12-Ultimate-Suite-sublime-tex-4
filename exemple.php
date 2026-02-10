<?php

use Laravel\Pulse\Facades\Pulse;

Pulse::user(fn ($user) => [
	'name' => $user->name,
	'extra' => $user->team->name,
]);
env('APP_KEY', 'default')

config('app.name', 'default')



AI::generate('Votre prompt ici');

@auth
	
@endauth