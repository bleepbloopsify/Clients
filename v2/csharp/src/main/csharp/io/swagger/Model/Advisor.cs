using System;
using System.Text;
using System.Collections;
using System.Collections.Generic;

namespace io.swagger.Model {
  public class Advisor {
    

    
    public bool? NewUser { get; set; }

    

    public override string ToString()  {
      var sb = new StringBuilder();
      sb.Append("class Advisor {\n");
      
      sb.Append("  NewUser: ").Append(NewUser).Append("\n");
      
      sb.Append("}\n");
      return sb.ToString();
    }
  }
  
  
}