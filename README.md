# BitlyApiBundle

A symfony wrapper bundle for Bit.ly API.

 ## Install
 
 Via Composer
 
 ``` bash
 composer require alessandrodipierro/bitly-api-bundle
 ```
 
  ## Configure the bundle
  
  This bundle was designed to just work out of the box. The only thing you have to configure in order to get this bundle up and running is your API [token](https://dev.bitly.com/v4/#section/Authentication).
  
  ```yaml
  # config/packages/bitly.yaml

  bitly_api:
    api_key: 'API_KEY_HERE'
  ```
Add bundle to the bundles configuration.
  ```php
  # config/bundles.php

[ AlessandroDiPierro\BitlyApiBundle\BitlyApiBundle::class => ['all' => true]]
  ```
