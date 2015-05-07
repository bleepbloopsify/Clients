package com.wordnik.client.api

import com.wordnik.client.model.Members
import com.wordnik.client.model.Memberresponse
import com.wordnik.client.model.Member

import java.io.File

import org.scalatra.{ TypedParamSupport, ScalatraServlet }
import org.scalatra.swagger._
import org.json4s._
import org.json4s.JsonDSL._
import org.scalatra.json.{ JValueResult, JacksonJsonSupport }
import org.scalatra.servlet.{FileUploadSupport, MultipartConfig, SizeConstraintExceededException}

import scala.collection.JavaConverters._

class MembersApi (implicit val swagger: Swagger) extends ScalatraServlet 
    with FileUploadSupport
    with JacksonJsonSupport
    with SwaggerSupport {
  protected implicit val jsonFormats: Formats = DefaultFormats

  protected val applicationDescription: String = "MembersApi"
  override protected val applicationName: Option[String] = Some("Members")

  before() {
    contentType = formats("json")
    response.headers += ("Access-Control-Allow-Origin" -> "*")
  }
  

  val findMembersOperation = (apiOperation[Members]("findMembers")
      summary ""
      parameters(
        queryParam[String]("vestorly-auth").description("")
        
        
        
        
        
        
        )
  )

  get("/members",operation(findMembersOperation)) {
    
    
    
    

    
      
      val vestorly-auth = params.getAs[String]("vestorly-auth")
      
    

    

    

    
    
    println("vestorly-auth: " + vestorly-auth)
  
  }

  

  val createMemberOperation = (apiOperation[Memberresponse]("createMember")
      summary ""
      parameters(
        queryParam[String]("vestorly-auth").description("")
        
        
        
        
        
        ,
        
        
        
        bodyParam[Member]("member").description("")
        
        
        
        )
  )

  post("/members",operation(createMemberOperation)) {
    
    
    
    

    
      
      val vestorly-auth = params.getAs[String]("vestorly-auth")
      
    

    

    

    
    
    println("vestorly-auth: " + vestorly-auth)
  
    
    
    

    

    

    

    
      val member = parsedBody.extract[Member]
    
    
    println("member: " + member)
  
  }

  

  val findMemberByIDOperation = (apiOperation[Memberresponse]("findMemberByID")
      summary ""
      parameters(
        
        pathParam[String]("id").description("")
        
        
        
        
        ,
        queryParam[String]("vestorly-auth").description("")
        
        
        
        
        
        
        )
  )

  get("/members/{id}",operation(findMemberByIDOperation)) {
    
    
    
    
      val id = params.getOrElse("id", halt(400))
    

    

    

    

    
    
    println("id: " + id)
  
    
    
    

    
      
      val vestorly-auth = params.getAs[String]("vestorly-auth")
      
    

    

    

    
    
    println("vestorly-auth: " + vestorly-auth)
  
  }

  

  val findMemberByID_1Operation = (apiOperation[Memberresponse]("findMemberByID_1")
      summary ""
      parameters(
        
        pathParam[String]("id").description("")
        
        
        
        
        ,
        queryParam[String]("vestorly-auth").description("")
        
        
        
        
        
        ,
        
        
        
        bodyParam[Member]("member").description("")
        
        
        
        )
  )

  put("/members/{id}",operation(findMemberByID_1Operation)) {
    
    
    
    
      val id = params.getOrElse("id", halt(400))
    

    

    

    

    
    
    println("id: " + id)
  
    
    
    

    
      
      val vestorly-auth = params.getAs[String]("vestorly-auth")
      
    

    

    

    
    
    println("vestorly-auth: " + vestorly-auth)
  
    
    
    

    

    

    

    
      val member = parsedBody.extract[Member]
    
    
    println("member: " + member)
  
  }

}