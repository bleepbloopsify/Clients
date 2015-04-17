#!/usr/bin/env python
# coding: utf-8

"""
SourcesApi.py
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


class SourcesApi(object):

    def __init__(self, apiClient):
      self.apiClient = apiClient

    
    
    def findSources(self, **kwargs):
        """

        Args:
            
            vestorly_auth, str: Vestorly Auth Token (required)
            
            
        
        Returns: Sources
        """

        allParams = ['vestorly_auth']

        params = locals()
        for (key, val) in params['kwargs'].iteritems():
            if key not in allParams:
                raise TypeError("Got an unexpected keyword argument '%s' to method findSources" % key)
            params[key] = val
        del params['kwargs']

        resourcePath = '/sources'
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
            queryParams['vestorly-auth'] = self.apiClient.toPathValue(params['vestorly_auth'])
        

        

        

        

        

        postData = (formParams if formParams else bodyParam)

        response = self.apiClient.callAPI(resourcePath, method, queryParams,
                                          postData, headerParams, files=files)

        
        if not response:
            return None

        responseObject = self.apiClient.deserialize(response, 'Sources')
        return responseObject
        
        
        
    
    def createSource(self, **kwargs):
        """

        Args:
            
            vestorly_auth, str: Vestorly Auth Token (required)
            
            
            source, str: Source (required)
            
            
        
        Returns: Source
        """

        allParams = ['vestorly_auth', 'source']

        params = locals()
        for (key, val) in params['kwargs'].iteritems():
            if key not in allParams:
                raise TypeError("Got an unexpected keyword argument '%s' to method createSource" % key)
            params[key] = val
        del params['kwargs']

        resourcePath = '/sources/'
        resourcePath = resourcePath.replace('{format}', 'json')
        method = 'POST'

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
            queryParams['vestorly-auth'] = self.apiClient.toPathValue(params['vestorly_auth'])
        

        

        

        
        if ('source' in params):
            formParams['Source'] = params['source']
        

        

        postData = (formParams if formParams else bodyParam)

        response = self.apiClient.callAPI(resourcePath, method, queryParams,
                                          postData, headerParams, files=files)

        
        if not response:
            return None

        responseObject = self.apiClient.deserialize(response, 'Source')
        return responseObject
        
        
        
    
    def getSourceByID(self, **kwargs):
        """

        Args:
            
            vestorly_auth, str: Vestorly Auth Token (required)
            
            
            id, str: ID of source to fetch (required)
            
            
        
        Returns: Source
        """

        allParams = ['vestorly_auth', 'id']

        params = locals()
        for (key, val) in params['kwargs'].iteritems():
            if key not in allParams:
                raise TypeError("Got an unexpected keyword argument '%s' to method getSourceByID" % key)
            params[key] = val
        del params['kwargs']

        resourcePath = '/sources/{id}'
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
            queryParams['vestorly-auth'] = self.apiClient.toPathValue(params['vestorly_auth'])
        

        

        
        if ('id' in params):
            replacement = str(self.apiClient.toPathValue(params['id']))
            replacement = urllib.quote(replacement)
            resourcePath = resourcePath.replace('{' + 'id' + '}',
                                                replacement)
        

        

        

        postData = (formParams if formParams else bodyParam)

        response = self.apiClient.callAPI(resourcePath, method, queryParams,
                                          postData, headerParams, files=files)

        
        if not response:
            return None

        responseObject = self.apiClient.deserialize(response, 'Source')
        return responseObject
        
        
        
    
    def UpdateSourceByID(self, **kwargs):
        """

        Args:
            
            vestorly_auth, str: Vestorly Auth Token (required)
            
            
            id, str: ID of source to fetch (required)
            
            
            source, str: Source (required)
            
            
        
        Returns: Source
        """

        allParams = ['vestorly_auth', 'id', 'source']

        params = locals()
        for (key, val) in params['kwargs'].iteritems():
            if key not in allParams:
                raise TypeError("Got an unexpected keyword argument '%s' to method UpdateSourceByID" % key)
            params[key] = val
        del params['kwargs']

        resourcePath = '/sources/{id}'
        resourcePath = resourcePath.replace('{format}', 'json')
        method = 'PUT'

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
            queryParams['vestorly-auth'] = self.apiClient.toPathValue(params['vestorly_auth'])
        

        

        
        if ('id' in params):
            replacement = str(self.apiClient.toPathValue(params['id']))
            replacement = urllib.quote(replacement)
            resourcePath = resourcePath.replace('{' + 'id' + '}',
                                                replacement)
        

        
        if ('source' in params):
            formParams['Source'] = params['source']
        

        

        postData = (formParams if formParams else bodyParam)

        response = self.apiClient.callAPI(resourcePath, method, queryParams,
                                          postData, headerParams, files=files)

        
        if not response:
            return None

        responseObject = self.apiClient.deserialize(response, 'Source')
        return responseObject
        
        
        
    


