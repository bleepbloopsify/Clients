#!/usr/bin/env python
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

class Event:
    """NOTE: This class is auto generated by the swagger code generator program.
    Do not edit the class manually."""


    def __init__(self):
        self.swaggerTypes = {
            
            '_id': 'str',
            
            
            'type': 'symbol',
            
            
            'referrer': 'str',
            
            
            'original_url': 'str',
            
            
            'originator_email': 'str',
            
            
            'subject_email': 'str',
            
            
            'advisor_email': 'str',
            
            
            'originator_group_name': 'str',
            
            
            'newsletter': 'str'
            
        }


        
        #Id of object
        
        self._id = None # str
        
        #Type of the event
        
        self.type = None # symbol
        
        #Event referrer
        
        self.referrer = None # str
        
        #Originator URL
        
        self.original_url = None # str
        
        #Originator email
        
        self.originator_email = None # str
        
        #Subject email
        
        self.subject_email = None # str
        
        #Advisor email
        
        self.advisor_email = None # str
        
        #Original group name
        
        self.originator_group_name = None # str
        
        #Newsletter
        
        self.newsletter = None # str
        