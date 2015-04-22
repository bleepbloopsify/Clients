<?php
/**
 *  Copyright 2015 Reverb Technologies, Inc.
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 */

/**
 * 
 *
 * NOTE: This class is auto generated by the swagger code generator program. Do not edit the class manually.
 *
 */

namespace Vestorly\models;

use \ArrayAccess;

class Member implements ArrayAccess {
  static $swaggerTypes = array(
      '_id' => 'string',
      'email' => 'string',
      'first_name' => 'string',
      'last_name' => 'string',
      'phone' => 'string',
      'address' => 'string',
      'city' => 'string',
      'state' => 'string',
      'zip' => 'string',
      'gender' => 'string',
      'age' => 'string',
      'education' => 'string',
      'high_net_worth' => 'boolean',
      'home_market_value' => 'string',
      'home_owner_status' => 'string',
      'household_income' => 'string',
      'marital_status' => 'string',
      'occupation' => 'string',
      'hometown' => 'string',
      'family' => 'string',
      'tags' => 'string',
      'message' => 'string',
      'location' => 'string',
      'picture_url' => 'string',
      'profile_url' => 'string',
      'estimated_location' => 'string',
      'estimated_zip' => 'string',
      'register_ip_addr' => 'string',
      'data_estimated' => 'boolean',
      'genuine_email' => 'boolean'
  );

  static $attributeMap = array(
      '_id' => '_id',
      'email' => 'email',
      'first_name' => 'first_name',
      'last_name' => 'last_name',
      'phone' => 'phone',
      'address' => 'address',
      'city' => 'city',
      'state' => 'state',
      'zip' => 'zip',
      'gender' => 'gender',
      'age' => 'age',
      'education' => 'education',
      'high_net_worth' => 'high_net_worth',
      'home_market_value' => 'home_market_value',
      'home_owner_status' => 'home_owner_status',
      'household_income' => 'household_income',
      'marital_status' => 'marital_status',
      'occupation' => 'occupation',
      'hometown' => 'hometown',
      'family' => 'family',
      'tags' => 'tags',
      'message' => 'message',
      'location' => 'location',
      'picture_url' => 'picture_url',
      'profile_url' => 'profile_url',
      'estimated_location' => 'estimated_location',
      'estimated_zip' => 'estimated_zip',
      'register_ip_addr' => 'register_ip_addr',
      'data_estimated' => 'data_estimated',
      'genuine_email' => 'genuine_email'
  );

  
  public $_id; /* string */
  public $email; /* string */
  public $first_name; /* string */
  public $last_name; /* string */
  public $phone; /* string */
  public $address; /* string */
  public $city; /* string */
  public $state; /* string */
  public $zip; /* string */
  public $gender; /* string */
  public $age; /* string */
  public $education; /* string */
  public $high_net_worth; /* boolean */
  public $home_market_value; /* string */
  public $home_owner_status; /* string */
  public $household_income; /* string */
  public $marital_status; /* string */
  public $occupation; /* string */
  public $hometown; /* string */
  public $family; /* string */
  public $tags; /* string */
  public $message; /* string */
  public $location; /* string */
  public $picture_url; /* string */
  public $profile_url; /* string */
  public $estimated_location; /* string */
  public $estimated_zip; /* string */
  public $register_ip_addr; /* string */
  public $data_estimated; /* boolean */
  public $genuine_email; /* boolean */

  public function __construct(array $data = null) {
    $this->_id = $data["_id"];
    $this->email = $data["email"];
    $this->first_name = $data["first_name"];
    $this->last_name = $data["last_name"];
    $this->phone = $data["phone"];
    $this->address = $data["address"];
    $this->city = $data["city"];
    $this->state = $data["state"];
    $this->zip = $data["zip"];
    $this->gender = $data["gender"];
    $this->age = $data["age"];
    $this->education = $data["education"];
    $this->high_net_worth = $data["high_net_worth"];
    $this->home_market_value = $data["home_market_value"];
    $this->home_owner_status = $data["home_owner_status"];
    $this->household_income = $data["household_income"];
    $this->marital_status = $data["marital_status"];
    $this->occupation = $data["occupation"];
    $this->hometown = $data["hometown"];
    $this->family = $data["family"];
    $this->tags = $data["tags"];
    $this->message = $data["message"];
    $this->location = $data["location"];
    $this->picture_url = $data["picture_url"];
    $this->profile_url = $data["profile_url"];
    $this->estimated_location = $data["estimated_location"];
    $this->estimated_zip = $data["estimated_zip"];
    $this->register_ip_addr = $data["register_ip_addr"];
    $this->data_estimated = $data["data_estimated"];
    $this->genuine_email = $data["genuine_email"];
  }

  public function offsetExists($offset) {
    return isset($this->$offset);
  }

  public function offsetGet($offset) {
    return $this->$offset;
  }

  public function offsetSet($offset, $value) {
    $this->$offset = $value;
  }

  public function offsetUnset($offset) {
    unset($this->$offset);
  }
}