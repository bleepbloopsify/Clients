using System;
using System.Collections.Generic;
using io.swagger.client;
using io.swagger.Model;

namespace io.swagger.Api {
  
  public class PostsApi {
    string basePath;
    private readonly ApiInvoker apiInvoker = ApiInvoker.GetInstance();

    public PostsApi(String basePath = "https://staging.vestorly.com/api/v2")
    {
      this.basePath = basePath;
    }

    public ApiInvoker getInvoker() {
      return apiInvoker;
    }

    // Sets the endpoint base url for the services being accessed
    public void setBasePath(string basePath) {
      this.basePath = basePath;
    }

    // Gets the endpoint base url for the services being accessed
    public String getBasePath() {
      return basePath;
    }

    

    /// <summary>
    ///  Query all posts
    /// </summary>
    /// <param name="VestorlyAuth">Vestorly Auth Token</param>
     /// <param name="FilterBy">Filter post by parameters</param>
    
    /// <returns></returns>
    public Posts  findPosts (string VestorlyAuth, string FilterBy) {
      // create path and map variables
      var path = "/posts".Replace("{format}","json");

      // query params
      var queryParams = new Dictionary<String, String>();
      var headerParams = new Dictionary<String, String>();
      var formParams = new Dictionary<String, object>();

      

      if (VestorlyAuth != null){
        queryParams.Add("vestorly_auth", apiInvoker.ParameterToString(VestorlyAuth));
      }
      if (FilterBy != null){
        queryParams.Add("filter_by", apiInvoker.ParameterToString(FilterBy));
      }
      

      

      

      try {
        if (typeof(Posts) == typeof(byte[])) {
          
          var response = apiInvoker.invokeBinaryAPI(basePath, path, "GET", queryParams, null, headerParams, formParams);
          return ((object)response) as Posts;
          
          
        } else {
          
          var response = apiInvoker.invokeAPI(basePath, path, "GET", queryParams, null, headerParams, formParams);
          if (response != null){
             return (Posts) ApiInvoker.deserialize(response, typeof(Posts));
          }
          else {
            return null;
          }
          
          
        }
      } catch (ApiException ex) {
        if(ex.ErrorCode == 404) {
          return null;
        }
        else {
          throw ex;
        }
      }
    }
    

    /// <summary>
    ///  Create a new post in the Vestorly Platform
    /// </summary>
    /// <param name="VestorlyAuth">Vestorly Auth Token</param>
     /// <param name="Post">Post</param>
    
    /// <returns></returns>
    public Post  createPost (string VestorlyAuth, string Post) {
      // create path and map variables
      var path = "/posts".Replace("{format}","json");

      // query params
      var queryParams = new Dictionary<String, String>();
      var headerParams = new Dictionary<String, String>();
      var formParams = new Dictionary<String, object>();

      

      if (VestorlyAuth != null){
        queryParams.Add("vestorly_auth", apiInvoker.ParameterToString(VestorlyAuth));
      }
      

      

      if (Post != null){
        if(Post is byte[]) {
          formParams.Add("Post", Post);
        } else {
          formParams.Add("Post", apiInvoker.ParameterToString(Post));
        }
      }
      

      try {
        if (typeof(Post) == typeof(byte[])) {
          
          var response = apiInvoker.invokeBinaryAPI(basePath, path, "GET", queryParams, null, headerParams, formParams);
          return ((object)response) as Post;
          
          
        } else {
          
          var response = apiInvoker.invokeAPI(basePath, path, "POST", queryParams, null, headerParams, formParams);
          if (response != null){
             return (Post) ApiInvoker.deserialize(response, typeof(Post));
          }
          else {
            return null;
          }
          
          
        }
      } catch (ApiException ex) {
        if(ex.ErrorCode == 404) {
          return null;
        }
        else {
          throw ex;
        }
      }
    }
    

    /// <summary>
    ///  Query all posts
    /// </summary>
    /// <param name="VestorlyAuth">Vestorly Auth Token</param>
     /// <param name="Id">ID of post to fetch</param>
     /// <param name="FilterBy">Filter post by parameters</param>
    
    /// <returns></returns>
    public Post  getPostByID (string VestorlyAuth, string Id, string FilterBy) {
      // create path and map variables
      var path = "/posts/{id}".Replace("{format}","json").Replace("{" + "id" + "}", apiInvoker.ParameterToString(Id));

      // query params
      var queryParams = new Dictionary<String, String>();
      var headerParams = new Dictionary<String, String>();
      var formParams = new Dictionary<String, object>();

      

      if (VestorlyAuth != null){
        queryParams.Add("vestorly_auth", apiInvoker.ParameterToString(VestorlyAuth));
      }
      if (FilterBy != null){
        queryParams.Add("filter_by", apiInvoker.ParameterToString(FilterBy));
      }
      

      

      

      try {
        if (typeof(Post) == typeof(byte[])) {
          
          var response = apiInvoker.invokeBinaryAPI(basePath, path, "GET", queryParams, null, headerParams, formParams);
          return ((object)response) as Post;
          
          
        } else {
          
          var response = apiInvoker.invokeAPI(basePath, path, "GET", queryParams, null, headerParams, formParams);
          if (response != null){
             return (Post) ApiInvoker.deserialize(response, typeof(Post));
          }
          else {
            return null;
          }
          
          
        }
      } catch (ApiException ex) {
        if(ex.ErrorCode == 404) {
          return null;
        }
        else {
          throw ex;
        }
      }
    }
    

    /// <summary>
    ///  Update A Post
    /// </summary>
    /// <param name="VestorlyAuth">Vestorly Auth Token</param>
     /// <param name="Id">ID of post to fetch</param>
     /// <param name="Post">Post</param>
    
    /// <returns></returns>
    public Post  updatePostByID (string VestorlyAuth, string Id, string Post) {
      // create path and map variables
      var path = "/posts/{id}".Replace("{format}","json").Replace("{" + "id" + "}", apiInvoker.ParameterToString(Id));

      // query params
      var queryParams = new Dictionary<String, String>();
      var headerParams = new Dictionary<String, String>();
      var formParams = new Dictionary<String, object>();

      

      if (VestorlyAuth != null){
        queryParams.Add("vestorly_auth", apiInvoker.ParameterToString(VestorlyAuth));
      }
      

      

      if (Post != null){
        if(Post is byte[]) {
          formParams.Add("Post", Post);
        } else {
          formParams.Add("Post", apiInvoker.ParameterToString(Post));
        }
      }
      

      try {
        if (typeof(Post) == typeof(byte[])) {
          
          var response = apiInvoker.invokeBinaryAPI(basePath, path, "GET", queryParams, null, headerParams, formParams);
          return ((object)response) as Post;
          
          
        } else {
          
          var response = apiInvoker.invokeAPI(basePath, path, "PUT", queryParams, null, headerParams, formParams);
          if (response != null){
             return (Post) ApiInvoker.deserialize(response, typeof(Post));
          }
          else {
            return null;
          }
          
          
        }
      } catch (ApiException ex) {
        if(ex.ErrorCode == 404) {
          return null;
        }
        else {
          throw ex;
        }
      }
    }
    
  }
  
}
