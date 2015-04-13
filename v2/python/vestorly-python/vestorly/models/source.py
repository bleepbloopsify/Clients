#!/usr/bin/env python
# coding: utf-8

"""
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
"""

class Source(object):
    """NOTE: This class is auto generated by the swagger code generator program.
    Do not edit the class manually."""


    def __init__(self):
        """
        Attributes:
          swaggerTypes (dict): The key is attribute name and the value is attribute type.
          attributeMap (dict): The key is attribute name and the value is json key in definition.
        """
        self.swaggerTypes = {
            
            '_id': 'str',
            
            
            'name': 'str',
            
            
            'url': 'str',
            
            
            'logo_url': 'str',
            
            
            'enabled': 'bool',
            
            
            'custom_rss_feed': 'bool',
            
            
            'rss_publisher': 'str'
            
        }

        self.attributeMap = {
            
            '_id': '_id',
            
            'name': 'name',
            
            'url': 'url',
            
            'logo_url': 'logo_url',
            
            'enabled': 'enabled',
            
            'custom_rss_feed': 'custom_rss_feed',
            
            'rss_publisher': 'rss_publisher'
            
        }

        
        #Id of source
        
        self._id = None # str
        
        #Name of source
        
        self.name = None # str
        
        #Url of source
        
        self.url = None # str
        
        #Logo url of source
        
        self.logo_url = None # str
        
        #Is the source enabled
        
        self.enabled = None # bool
        
        #Is the source using custom RSS feed
        
        self.custom_rss_feed = None # bool
        
        #RSS publisher of the source
        
        self.rss_publisher = None # str
        
