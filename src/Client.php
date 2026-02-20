<?php

namespace Sushilk\HttpClient;

class Client
{
  public $handle;

  public function __construct()
  {
    $this->handle = curl_init();
  }
}
