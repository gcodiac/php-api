<?php

namespace GenericApiLayer;

use GuzzleHttp\Client;

class GenericApiLayer
{
    public $client;

    /**
     * 
     * 
     */
    public function __construct()
    {
        $this->client = new Client();
    }

    /**
     * A method to retrieve a single user by ID
     * @param string user id
     * @return array user data
     */
    public function getUser($id)
    {
        $response = $this->client->request('GET', 'https://reqres.in/api/users/' . $id);
        $body = $response->getBody();
        $user_body = json_decode($body, true);
        return $user_body;
    }

       /**
     * A method to retrieve a paginated list of users
     * @param string page id
     * @return array user data
     */
    public function getUsers($page)
    {
        $response = $this->client->request('GET', 'https://reqres.in/api/users', [
            'query' => [
                'page' => $page
            ]
        ]);
        $body = $response->getBody();
        $arr_body = json_decode($body, true);
        return $arr_body;
    }

}
