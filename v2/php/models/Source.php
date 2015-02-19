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
 * $model.description$
 *
 * NOTE: This class is auto generated by the swagger code generator program. Do not edit the class manually.
 *
 */

class Source {
  static $swaggerTypes = array(
      '_id' => 'string',
      'name' => 'string',
      'url' => 'string',
      'logo_url' => 'string',
      'enabled' => 'boolean',
      'custom_rss_feed' => 'boolean',
      'rss_publisher' => 'string'
    );

  
  /**
  * Id of source
  */
  public $_id; /* string */
  /**
  * Name of source
  */
  public $name; /* string */
  /**
  * Url of source
  */
  public $url; /* string */
  /**
  * Logo url of source
  */
  public $logo_url; /* string */
  /**
  * Is the source enabled
  */
  public $enabled; /* boolean */
  /**
  * Is the source using custom RSS feed
  */
  public $custom_rss_feed; /* boolean */
  /**
  * RSS publisher of the source
  */
  public $rss_publisher; /* string */
}