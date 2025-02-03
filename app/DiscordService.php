<?php

namespace App;

class DiscordService {

    /**
     * @var \Illuminate\Config\Repository|\Illuminate\Foundation\Application|mixed|null
     */
    protected mixed $userAccessToken;

    public function __construct() {
        $this->userAccessToken = config('services.discord.user_token');
    }

    public function getUserName() {

        $serverId = config('services.discord.server_id');

        $response = \Http::acceptJson()->withToken($this->userAccessToken)
            ->get("https://discord.com/api/users/@me/guilds/{$serverId}/member");

        return $response->json()['nick'];
    }

    public function getAccessToken($authToken) {
        $response = \Http::acceptJson()->asForm()
            ->post('https://discord.com/api/oauth2/token',[
                'client_id' => config('services.discord.app_id'),
                'client_secret' => config('services.discord.client_secret'),
                "grant_type" => "authorization_code",
                "code" => $authToken,
                "redirect_uri" => "http://localhost/discord/redirect"
            ]);

        dd($response->json());
    }
}
