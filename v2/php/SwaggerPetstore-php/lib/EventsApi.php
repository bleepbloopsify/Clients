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
 * NOTE: This class is auto generated by the swagger code generator program. Do not edit the class manually.
 */

namespace SwaggerPetstore;

class EventsApi {

  function __construct($apiClient) {
    $this->apiClient = $apiClient;
  }

  
  /**
   * findEvents
   *
   * 
   *
   * @param string $vestorly_auth Vestorly Auth Token (required)
   * @return Events
   */
   public function findEvents($vestorly_auth) {

      // parse inputs
      $resourcePath = "/events";
      $resourcePath = str_replace("{format}", "json", $resourcePath);
      $method = "GET";
      $httpBody = '';
      $queryParams = array();
      $headerParams = array();
      $formParams = array();
      $_header_accept = '';
      if ($_header_accept !== '') {
        $headerParams['Accept'] = $_header_accept;
      }
      $_header_content_type = array();
      $headerParams['Content-Type'] = count($_header_content_type) > 0 ? $_header_content_type[0] : 'application/json';

      // query params
      if($vestorly_auth !== null) {
        $queryParams['vestorly-auth'] = $this->apiClient->toQueryValue($vestorly_auth);
      }
      
      
      
      

      // for model (json/xml)
      if (isset($body)) {
        $httpBody = $body; // $body is the method argument, if present
      }
      
      // for HTTP post (form)
      if (strpos($headerParams['Content-Type'], "application/x-www-form-urlencoded") !== FALSE) {
        $httpBody = http_build_query($formParams);
      }

      // make the API Call
      $response = $this->apiClient->callAPI($resourcePath, $method,
                                            $queryParams, $httpBody,
                                            $headerParams);

      if(! $response) {
        return null;
      }

  		$responseObject = $this->apiClient->deserialize($response,
  		                                                'Events');
  		return $responseObject;
  }
  
  /**
   * findEventByID
   *
   * 
   *
   * @param string $id Mongo ID of event to fetch (required)
   * @param string $vestorly_auth Vestorly Auth Token (required)
   * @return Event
   */
   public function findEventByID($id, $vestorly_auth) {

      // parse inputs
      $resourcePath = "/events/{id}";
      $resourcePath = str_replace("{format}", "json", $resourcePath);
      $method = "GET";
      $httpBody = '';
      $queryParams = array();
      $headerParams = array();
      $formParams = array();
      $_header_accept = '';
      if ($_header_accept !== '') {
        $headerParams['Accept'] = $_header_accept;
      }
      $_header_content_type = array();
      $headerParams['Content-Type'] = count($_header_content_type) > 0 ? $_header_content_type[0] : 'application/json';

      // query params
      if($vestorly_auth !== null) {
        $queryParams['vestorly-auth'] = $this->apiClient->toQueryValue($vestorly_auth);
      }
      
      // path params
      if($id !== null) {
        $resourcePath = str_replace("{" . "id" . "}",
                                    $this->apiClient->toPathValue($id), $resourcePath);
      }
      
      

      // for model (json/xml)
      if (isset($body)) {
        $httpBody = $body; // $body is the method argument, if present
      }
      
      // for HTTP post (form)
      if (strpos($headerParams['Content-Type'], "application/x-www-form-urlencoded") !== FALSE) {
        $httpBody = http_build_query($formParams);
      }

      // make the API Call
      $response = $this->apiClient->callAPI($resourcePath, $method,
                                            $queryParams, $httpBody,
                                            $headerParams);

      if(! $response) {
        return null;
      }

  		$responseObject = $this->apiClient->deserialize($response,
  		                                                'Event');
  		return $responseObject;
  }
  
  /**
   * updateEventByID
   *
   * 
   *
   * @param string $id Mongo ID of event to update (required)
   * @param string $vestorly_auth Vestorly Auth Token (required)
   * @param EventInput $event Event (required)
   * @return Event
   */
   public function updateEventByID($id, $vestorly_auth, $event) {

      // parse inputs
      $resourcePath = "/events/{id}";
      $resourcePath = str_replace("{format}", "json", $resourcePath);
      $method = "PUT";
      $httpBody = '';
      $queryParams = array();
      $headerParams = array();
      $formParams = array();
      $_header_accept = '';
      if ($_header_accept !== '') {
        $headerParams['Accept'] = $_header_accept;
      }
      $_header_content_type = array();
      $headerParams['Content-Type'] = count($_header_content_type) > 0 ? $_header_content_type[0] : 'application/json';

      // query params
      if($vestorly_auth !== null) {
        $queryParams['vestorly-auth'] = $this->apiClient->toQueryValue($vestorly_auth);
      }
      
      // path params
      if($id !== null) {
        $resourcePath = str_replace("{" . "id" . "}",
                                    $this->apiClient->toPathValue($id), $resourcePath);
      }
      
      // body params
      $body = null;
      if (isset($event)) {
        $body = $event;
      }

      // for model (json/xml)
      if (isset($body)) {
        $httpBody = $body; // $body is the method argument, if present
      }
      
      // for HTTP post (form)
      if (strpos($headerParams['Content-Type'], "application/x-www-form-urlencoded") !== FALSE) {
        $httpBody = http_build_query($formParams);
      }

      // make the API Call
      $response = $this->apiClient->callAPI($resourcePath, $method,
                                            $queryParams, $httpBody,
                                            $headerParams);

      if(! $response) {
        return null;
      }

  		$responseObject = $this->apiClient->deserialize($response,
  		                                                'Event');
  		return $responseObject;
  }
  

}
