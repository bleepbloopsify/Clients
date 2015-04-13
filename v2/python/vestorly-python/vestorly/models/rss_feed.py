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

class RSSFeed(object):
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
            
            
            'category': 'str',
            
            
            'url': 'url',
            
            
            'logo_url': 'url',
            
            
            'needs_sanitize': 'str'
            
        }

        self.attributeMap = {
            
            '_id': '_id',
            
            'name': 'name',
            
            'category': 'category',
            
            'url': 'url',
            
            'logo_url': 'logo_url',
            
            'needs_sanitize': 'needs_sanitize'
            
        }

        
        #Id of object
        
        self._id = None # str
        
        #Name of rss feed
        
        self.name = None # str
        
        #Category of rss feed
        
        self.category = None # str
        
        #URL of rss feed
        
        self.url = None # url
        
        #Logo URL of rss feed
        
        self.logo_url = None # url
        
        #Does the feed need to be sanatized.
        
        self.needs_sanitize = None # str
        