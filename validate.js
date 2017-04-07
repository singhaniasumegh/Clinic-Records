function validation(event)
  {
      event.preventDefault(); 
    
      
      
      function validatename()
      {
        var fname = document.getElementById("firstname").value;
        var lname = document.getElementById("secondname").value;
        if (/^[A-Za-z ]+$/.test(fname) && /^[A-Za-z ]+$/.test(lname) && fname!=null && fname!="" )

            return true;
        else
        {
          alert("Invalid Name. Enter again");
          return false;

        }
      }

      function validatedob()
      {
        var dob = document.getElementById("dob").value;
        var pattern = /^([0-9]{2})-([0-9]{2})-([0-9]{4})$/;
        if (dob == null || dob == "" || !pattern.test(dob)) 
        {
            alert("Invalid Birthdate. Enter again");
            return false;
        }
        else
          return true;
      }

      function validatephonenumber()  
      {  
        var phone = document.getElementById("phone").value;
        var phoneno = /^[0-9]{10}$/;  
        if(!phoneno.test(phone) || phone==null || phone=="")  
        {  
            alert("Invalid Phone number. Enter again"); 
            return false;  
            
        }  
        else  
        {  
             return true;  
        }  
      }  
      function validateage()
      {
        var age=document.getElementById("age").value;
        var agecheck = /^[0-9]+$/;
        if(!agecheck.test(age) || age==null || age=="")  
        {  
            alert("Invalid Phone number. Enter again"); 
            return false;  
            
        }  
        else  
        {  
             return true;  
        }  
      }
      
      var a=validatename();
      var b=validatephonenumber();
      var c=validatedob();
      var d=validateage();
      if(a==true && b==true && c==true && d==true)
        document.loginform.submit();
      

      
  }