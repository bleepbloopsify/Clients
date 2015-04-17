#!/usr/bin/env python
# coding: utf-8

"""
ArticlesApi.py
Copyright 2015 Reverb Technologies, Inc.

   Licensed under the Apache License, Version 2.0 (the "License");
   you may not use this file except in compliance with the License.
   You may obtain a copy of the License at

       http://www.apache.org/licenses/LICENSE-2.0

   Unless required by applicable law or agreed to in writing, software
   distributed under the License is distributed on an "AS IS" BASIS,
   WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
   See the License for the specific language governing permissions and
   limitations under the License.

NOTE: This class is auto generated by the swagger code generator program. Do not edit the class manually.
"""
import sys
import os
import urllib

from models import *


class ArticlesApi(object):

    def __init__(self, apiClient):
      self.apiClient = apiClient

    
    
    def findArticles(self, **kwargs):
        """

        Args:
            
            vestorly_auth, str: Vestorly Auth Token (required)
            
            
            limit, int: Limit on the number of articles to return (required)
            
            
            text_query, str: Search query parameter (required)
            
            
        
        Returns: Articles
        """

        allParams = ['vestorly_auth', 'limit', 'text_query']

        params = locals()
        for (key, val) in params['kwargs'].iteritems():
            if key not in allParams:
                raise TypeError("Got an unexpected keyword argument '%s' to method findArticles" % key)
            params[key] = val
        del params['kwargs']

        resourcePath = '/articles'
        resourcePath = resourcePath.replace('{format}', 'json')
        method = 'GET'

        queryParams = {}
        headerParams = {}
        formParams = {}
        files = {}
        bodyParam = None

        accepts = []
        headerParams['Accept'] = ', '.join(accepts)

        content_types = []
        headerParams['Content-Type'] = content_types[0] if len(content_types) > 0 else 'application/json'

        
        if ('vestorly_auth' in params):
            queryParams['vestorly_auth'] = self.apiClient.toPathValue(params['vestorly_auth'])
        
        if ('limit' in params):
            queryParams['limit'] = self.apiClient.toPathValue(params['limit'])
        
        if ('text_query' in params):
            queryParams['text_query'] = self.apiClient.toPathValue(params['text_query'])
        

        

        

        

        

        postData = (formParams if formParams else bodyParam)

        response = self.apiClient.callAPI(resourcePath, method, queryParams,
                                          postData, headerParams, files=files)

        
        if not response:
            return None

        responseObject = self.apiClient.deserialize(response, 'Articles')
        return responseObject
        
        
        
    

