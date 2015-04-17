'use strict';

var url = require('url');


var Posts = require('./PostsService');


module.exports.findPosts = function findPosts (req, res, next) {
  var vestorly-auth = req.swagger.params['vestorly-auth'].value;
  var filter_by = req.swagger.params['filter_by'].value;
  

  var result = Posts.findPosts(vestorly-auth, filter_by);

  if(typeof result !== 'undefined') {
    res.setHeader('Content-Type', 'application/json');
    res.end(JSON.stringify(result || {}, null, 2));
  }
  else
    res.end();
};

module.exports.createPost = function createPost (req, res, next) {
  var vestorly-auth = req.swagger.params['vestorly-auth'].value;
  var Post = req.swagger.params['Post'].value;
  

  var result = Posts.createPost(vestorly-auth, Post);

  if(typeof result !== 'undefined') {
    res.setHeader('Content-Type', 'application/json');
    res.end(JSON.stringify(result || {}, null, 2));
  }
  else
    res.end();
};

module.exports.getPostByID = function getPostByID (req, res, next) {
  var vestorly-auth = req.swagger.params['vestorly-auth'].value;
  var id = req.swagger.params['id'].value;
  var filter_by = req.swagger.params['filter_by'].value;
  

  var result = Posts.getPostByID(vestorly-auth, id, filter_by);

  if(typeof result !== 'undefined') {
    res.setHeader('Content-Type', 'application/json');
    res.end(JSON.stringify(result || {}, null, 2));
  }
  else
    res.end();
};

module.exports.updatePostByID = function updatePostByID (req, res, next) {
  var vestorly-auth = req.swagger.params['vestorly-auth'].value;
  var id = req.swagger.params['id'].value;
  var Post = req.swagger.params['Post'].value;
  

  var result = Posts.updatePostByID(vestorly-auth, id, Post);

  if(typeof result !== 'undefined') {
    res.setHeader('Content-Type', 'application/json');
    res.end(JSON.stringify(result || {}, null, 2));
  }
  else
    res.end();
};
