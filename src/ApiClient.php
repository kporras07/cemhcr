<?php

namespace kporras07\cemhcr;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;

class ApiClient {

  private $accessToken;

  private $refreshToken;

  private $baseUrl;

  private $authUrl;

  private $clientId;

  private $client;

  /**
   * Construct
   */
  public function __construct($type = 'prod') {
    switch ($type) {
      case 'prod':
        $this->baseUrl = 'https://api.comprobanteselectronicos.go.cr/recepcion/v1/';
        $this->authUrl = 'https://idp.comprobanteselectronicos.go.cr/auth/realms/rut/protocol/openid-connect/token';
        $this->clientId = 'api-prod';
        break;

      case 'stag':
        $this->baseUrl = 'https://api.comprobanteselectronicos.go.cr/recepcion-sandbox/v1/';
        $this->authUrl = 'https://idp.comprobanteselectronicos.go.cr/auth/realms/rut-stag/protocol/openid-connect/token';
        $this->clientId = 'api-stag';
        break;

    }

    $this->accessToken = NULL;
    $this->refreshToken = NULL;

    $this->client = new Client([
      'timeout' => 4.0,
    ]);
  }

  /**
   * Auth and get access token.
   */
  public function authenticateROPC($username, $password) {
    $client_secret = '';
    $scope = '';
    $grant_type = 'password';
    $headers = [
      'Content-Type' => 'application/x-www-form-urlencoded',
    ];

    $body = [
      'client_id' => $this->clientId,
      'username' => $username,
      'password' => $password,
      'client_secret' => $client_secret,
      'scope' => $scope,
      'grant_type' => $grant_type,
    ];

    $response = $this->client->request('POST', $this->authUrl, ['form_params' => $body]);
    $body = $response->getBody();
    $content = $body->getContents();
    $result = json_decode($content);
    if (!empty($result->access_token) && !empty($result->refresh_token)) {
      $this->setAccessToken($result->access_token);
      $this->setRefreshToken($result->refresh_token);
    }
  }

  /**
   * Set access token.
   */
  public function setAccessToken($access_token) {
    $this->accessToken = $access_token;
  }

  /**
   * Get access token.
   */
  public function getAccessToken() {
    return $this->accessToken;
  }

  /**
   * Set refresh token.
   */
  public function setRefreshToken($refresh_token) {
    $this->refreshToken = $refresh_token;
  }

  /**
   * Get refresh token.
   */
  public function getRefreshToken() {
    return $this->refreshToken;
  }

}
