require "uri"

class ArticlesApi
  basePath = "https://staging.vestorly.com/api/v2"
  # apiInvoker = APIInvoker


  # 
  # Returns all articles
  # @param vestorly_auth Vestorly Auth Token
  # @param limit Limit on the number of articles to return
  # @param text_query Search query parameter
  # @return void
  def self.findArticles (vestorly_auth, limit, text_query, opts={})
    query_param_keys = [:vestorly_auth,:limit,:text_query]
    headerParams = {}

    
    
    # set default values and merge with input
    options = {
      :'vestorly_auth' => vestorly_auth,
      :'limit' => limit,
      :'text_query' => text_query
      
    }.merge(opts)

    #resource path
    path = "/articles".sub('{format}','json')
    
    # pull querystring keys from options
    queryopts = options.select do |key,value|
      query_param_keys.include? key
    end

    # header parameters
    headers = {}

    _header_accept = ''
    if _header_accept != ''
      headerParams['Accept'] = _header_accept
    end 
    _header_content_type = []
    headerParams['Content-Type'] = _header_content_type.length > 0 ? _header_content_type[0] : 'application/json'

    
    
    # http body (model)
    post_body = nil
    
    # form parameters
    form_parameter_hash = {}
    
    
    
    Swagger::Request.new(:GET, path, {:params=>queryopts,:headers=>headers, :body=>post_body, :form_params => form_parameter_hash }).make
    
  
  end
end
