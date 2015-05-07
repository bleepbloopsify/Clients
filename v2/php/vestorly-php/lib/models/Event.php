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

class Event implements ArrayAccess {
  static $swaggerTypes = array(
      '_id' => 'string',
      'type' => 'string',
      'referer' => 'string',
      'original_url' => 'string',
      'originator_email' => 'string',
      'subject_email' => 'string',
      'parent_event_id' => 'string',
      'originator_id' => 'string',
      'advisor_id' => 'string',
      'subject_id' => 'string',
      'event_content' => 'EventContent',
      'created_at' => 'string'
  );

  static $attributeMap = array(
      '_id' => '_id',
      'type' => 'type',
      'referer' => 'referer',
      'original_url' => 'original_url',
      'originator_email' => 'originator_email',
      'subject_email' => 'subject_email',
      'parent_event_id' => 'parent_event_id',
      'originator_id' => 'originator_id',
      'advisor_id' => 'advisor_id',
      'subject_id' => 'subject_id',
      'event_content' => 'event_content',
      'created_at' => 'created_at'
  );

  
  public $_id; /* string */
  public $type; /* string */
  public $referer; /* string */
  public $original_url; /* string */
  public $originator_email; /* string */
  public $subject_email; /* string */
  public $parent_event_id; /* string */
  public $originator_id; /* string */
  public $advisor_id; /* string */
  public $subject_id; /* string */
  public $event_content; /* EventContent */
  public $created_at; /* string */

  public function __construct(array $data = null) {
    $this->_id = $data["_id"];
    $this->type = $data["type"];
    $this->referer = $data["referer"];
    $this->original_url = $data["original_url"];
    $this->originator_email = $data["originator_email"];
    $this->subject_email = $data["subject_email"];
    $this->parent_event_id = $data["parent_event_id"];
    $this->originator_id = $data["originator_id"];
    $this->advisor_id = $data["advisor_id"];
    $this->subject_id = $data["subject_id"];
    $this->event_content = $data["event_content"];
    $this->created_at = $data["created_at"];
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
