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

class Meta implements ArrayAccess {
  static $swaggerTypes = array(
      'sort_order' => 'string',
      'more_results' => 'boolean',
      'message' => 'string',
      'sorted_by' => 'array[string]'
  );

  static $attributeMap = array(
      'sort_order' => 'sort_order',
      'more_results' => 'more_results',
      'message' => 'message',
      'sorted_by' => 'sorted_by'
  );

  
  public $sort_order; /* string */
  public $more_results; /* boolean */
  public $message; /* string */
  public $sorted_by; /* array[string] */

  public function __construct(array $data = null) {
    $this->sort_order = $data["sort_order"];
    $this->more_results = $data["more_results"];
    $this->message = $data["message"];
    $this->sorted_by = $data["sorted_by"];
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
