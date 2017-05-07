$('document').ready(function(){

	 $('#student_register').on('submit', function(e) {
               
         e.preventDefault();      
         rules     =   validationRule();
         messages  =   validationMessage();

         $('.error').html('');
         
         var variable   =   [ "name", "fname", "country", "state", "city", "address", "pincode","email","num","day","month","year","category","last_exam","year_passing","percent_mark","annual_income","citizen","image","declare" ,"stu_dec_fname","stu_dec_name" ,"cource_choice","cordinator_id" ];      
         // var variable   =   [ "name", "fname", "country", "state", "city", "address", "pincode","email","num","day","month","year","category","last_exam","year_passing","percent_mark","annual_income","citizen" ];      
         var totalvar   =   24;
         var focuscount =   0;
         var count      =   0;
          
        /* For Required */
        for(i=0;i<totalvar;i++)
        {
          fieldname   =   variable[i];
          
          if(rules[fieldname]['required']==true)
          {
            if($('#'+fieldname).attr('type')=='text' || $('#'+fieldname).attr('type')=='number'||$('#'+fieldname).attr('type')=='hidden' || $('#'+fieldname).attr('data-type')=='select')
            {
              if($('#'+fieldname).val()=='')
              {
                $('#'+fieldname+'-error').html(messages[fieldname]['required']);
                if(focuscount==0) { $('#'+fieldname).focus(); focuscount++;}
                count++;
              }
            }
            if($('input[name="'+fieldname+'"]').attr('type')=='radio' || $('#'+fieldname).attr('type')=='checkbox')
            {
              if(!$('input[name='+fieldname+']:checked').val())
              {
                $('#'+fieldname+'-error').html(messages[fieldname]['required']);
                if(focuscount==0) { $('#'+fieldname).focus(); focuscount++;}
                count++;
              }
            }


          }
        }
        if(count>0){ return false; count = 0;}
        /* For Minimum Length */
        for(i=0;i<totalvar;i++)
        {
          fieldname   =   variable[i];
          
          if(rules[fieldname]['minlength']==true)
          {
            if($('#'+fieldname).val().length<rules[fieldname]['minlengthval'])
            {
              $('#'+fieldname+'-error').html(messages[fieldname]['minlength']);
              if(focuscount==0) { $('#'+fieldname).focus(); focuscount++;}
              count++;
            }
          }
        }
        if(count>0){ return false; count = 0;}
        
        /* For Fix Length */
        for(i=0;i<totalvar;i++)
        {
          fieldname   =   variable[i];
          
          if(rules[fieldname]['length']==true)
          {
            if($('#'+fieldname).val().length!=rules[fieldname]['lengthval'])
            {
              $('#'+fieldname+'-error').html(messages[fieldname]['length']);
              if(focuscount==0) { $('#'+fieldname).focus(); focuscount++;}
              count++;
            }
          }
        }

        if(count>0){ return false; count = 0;}
        /* For Format */
        for(i=0;i<totalvar;i++)
        {
          fieldname   =   variable[i];
          
          if(rules[fieldname]['format']==true)
          {
          var r = new RegExp("[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?");
            
            if($('#'+fieldname).val().match(r) == null)
            {
              $('#'+fieldname+'-error').html(messages[fieldname]['format']);
              if(focuscount==0) { $('#'+fieldname).focus(); focuscount++;}
              count++;
            }
          }
        }
        if(count>0){ return false; count = 0;}
        /* For Fix Length */
        for(i=0;i<totalvar;i++)
        {
          fieldname   =   variable[i];
          
          if(rules[fieldname]['length']==true)
          {
            if(jQuery('#'+fieldname).val().length!=rules[fieldname]['lengthval'])
            {
              jQuery('#'+fieldname+'-error').html(messages[fieldname]['length']);
              if(focuscount==0) { jQuery('#'+fieldname).focus(); focuscount++;}
              count++;
            }
          }
        }
        if(count>0){ return false; count = 0;}  
    



           var form = $(this);
          
           $("#submit").attr('disabled', 'disabled');
          
           var post_data = form.serialize();
        
            $.ajax({
                type: 'POST',
                url: 'user_register.php',
                data: post_data,
                success:function(json){
                    console.log(json);
                    // var data = JSON.parse(json);
                    // if (data.type=='success') {

                    //       // $('div#form-loader').fadeOut(500);
                    //       // Materialize.toast('Message Sent! I will contact you shortly, Thanks', 4000);
                    //       // $("form#contact-form")[0].reset();
                    //       // Materialize.updateTextFields();
                    //       // $("#submit").removeAttr('disabled', 'disabled');

                    // } else { 

                    //      // $('div#form-loader').fadeOut(500);
                    //      // Materialize.toast('Sorry! Something Wrong, Try Again', 4000);
                    //      // $("#submit").removeAttr('disabled', 'disabled');

                    // }

                }
            });
          return false;
         
      });

   $('#country').change(function(){
    var id = $(this).val();
    make_ajax_country(id,'state','state');
   });

   $('#state').change(function(){
    var id = $(this).val();
    make_ajax_country(id,'city','city');
   });


   // ajax image uplaod


$(document).on('change', '#file', function () {

var progressBar = $('.progressBar'), bar = $('.progressBar .bar'), percent = $('.progressBar .percent');


$('#image_upload_form').ajaxForm({
    beforeSend: function() {
        progressBar.fadeIn();
        var percentVal = '0%';
        bar.width(percentVal)
        percent.html(percentVal);
    },
    uploadProgress: function(event, position, total, percentComplete) {
        var percentVal = percentComplete + '%';
        bar.width(percentVal)
        percent.html(percentVal);
    },
    success: function(html, statusText, xhr, $form) {   
// alert(html);
// console.log(html);
    obj = $.parseJSON(html);  
    if(obj.status){   
      var percentVal = '100%';
      bar.width(percentVal)
      percent.html(percentVal);
      $('#image_upload_form').fadeOut();
      $('.progressBar').fadeOut();
      $('#image').val(obj.image_medium);
      $(".imgArea>img").prop('src',obj.image_medium);     
      $('.imgArea').fadeIn();
    }else{
      alert(obj.error);
    }
    },
  complete: function(xhr) {
    progressBar.fadeOut();      
  } 
}).submit();    

});
});


function make_ajax_country(id,child_id,find ) {

  $.ajax({

    url: "ajax.php",
    type: "post",
    data : {'type':find,id:id},
    beforeSend : function() {

    },
    success : function (html) {
     
        $("#"+child_id).html(html);

    }

  });

}

function onKeyPressValidation(e,fieldname,fieldvalue)
{
  rules     =   validationRule();
  messages  =   validationMessage();

  $('#'+fieldname+'-error').html('');
  
  /* For Required */
  if(rules[fieldname]['required']==true)
  {
    if(fieldvalue=='')
    {
      $('#'+fieldname+'-error').html(messages[fieldname]['required']);
      return false;
    }
  }
  
  /* For Minimum Length */
  if(rules[fieldname]['minlength']==true)
  {
    if(fieldvalue.length<rules[fieldname]['minlengthval'])
    {
      $('#'+fieldname+'-error').html(messages[fieldname]['minlength']);
      return false;
    }
  }
  
  /* For Length */
  if(rules[fieldname]['length']==true)
  {
    if(fieldvalue.length!=rules[fieldname]['lengthval'])
    {
      $('#'+fieldname+'-error').html(messages[fieldname]['length']);
      return false;
    }
  }
  
  /* For Format */
  if(rules[fieldname]['format']==true)
  {
    var r = new RegExp("[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?");
      
    if(fieldvalue.match(r) == null)
    {
      $('#'+fieldname+'-error').html(messages[fieldname]['format']);
      return false;
    }
  }
  
  /* For Equal To */
  if(rules[fieldname]['equalTo']==true)
  {
    if(fieldname=='reg_repasswordd')
    {
      if($('#reg_passwordd').val()!=fieldvalue)
      {
        $('#'+fieldname+'-error').html(messages[fieldname]['equalTo']);
        return false;
      }
    }
    
    if(fieldname=='profile_repasswordd')
    {
      if($('#profile_passwordd').val()!=fieldvalue)
      {
        $('#'+fieldname+'-error').html(messages[fieldname]['equalTo']);
        return false;
      }
    }
  }
  
  $('#'+fieldname+'-error').html('');
}

function onClickValidation(e,fieldname)
{
  rules     =   validationRule();
  messages  =   validationMessage();

  /* For Required */
  if(rules[fieldname]['required']==true)
  {
    if($('#'+fieldname).attr('type')=='radio')
    {
      if(!$('input[id='+fieldname+']:checked').val())
      {
        $('#'+fieldname+'-error').html(messages[fieldname]['required']);
        return false;
      }
    } 
  }
  
  $('#'+fieldname+'-error').html('');
}

function onChangeValidation(e,fieldname)
{
  rules     =   validationRule();
  messages  =   validationMessage();

  /* For Required */
  if(rules[fieldname]['required']==true)
  {
    fieldvalue = $('#'+fieldname).val();
    
    if(fieldvalue=='')
    {
      $('#'+fieldname+'-error').html(messages[fieldname]['required']);
      return false;
    }
  }
  
  $('#'+fieldname+'-error').html('');
}

function validationRule() {
  var rules = 
  {
    name   : 
            {
              required    :   true,
              alphanumeric  :   true,
              minlength   :   true,
              minlengthval  :   3,
            }, 
            
    fname    : 
            {
              required    :   true,
              alphanumeric  :   true,
              minlength   :   true ,
              minlengthval  :   3,
            },  
            
    num   : 
            {
              required    :   true,
              numeric     :   true,
              length      :   true,
              lengthval   :   10,
            },        
            
    state      : 
            {
              required    :   true,
            },  
    
    email   : 
            {
              required    :   true,
              format      :   true
            }, 
                    
    pincode : 
            {
              required    :   true
            }, 
            
    address : 
            {
              required    :   true
            },
    
    country : 
            {
              required    :   true
            },
    
    day : 
            {
              required    :   true
            }, 
            
    month : 
            {
              required    :   true
            },  
            
    year : 
            {
              required    :   true
            },  
            
    category  : 
            {
              required    :   true
            },
    
    last_exam  : 
            {
              required    :   true
            },
            

    year_passing : 
            {
              required    :   true
            },
    
    percent_mark  : 
            {
              required    :   true
            },
            
    annual_income : 
            {
              required    :   true
            },
    
    citizen : 
            {
              required    :   true
            },
    city : 
            {
              required    :   true
            },
    image : 
            {
              required    :   true
            },
    declare : 
            {
              required    :   true
            },
    stu_dec_fname : 
            {
              required    :   true
            },

    stu_dec_name : 
            {
              required    :   true
            },
    cource_choice:
            {
              required    :   true
            },
    cordinator_id : 
          {
            required      :   true
          }

  };
  
  return rules;
}


function validationMessage() {
  var messages = 
  {
    name   : 
            {
              required      :   "Please enter your name",
              alphanumeric  :   "Your name should be alphanumeric",
              minlength     :   "Your name must be at least 3 characters long",
            }, 
            
    fname    : 
            {
              required      :   "Please enter your father's name",
              alphanumeric  :   "Your father's name should be alphanumeric",
              minlength     :   "Your father's name must be at least 3 characters long" ,
            },
            
    num   : 
            {
              required    :   "Please enter your contact number",
              numeric     :   "Your contact number should be numeric",
              length      :   "Your contact number must be 10 digit long",
            }, 
            
    state      : 
            {
              required    :   "Please choose state",
            }, 
            
    email   : 
            {
              required    :   "Please enter your email id",
              format      :   "Your email id should be valid",
            },
            
    pincode : 
            {
              required    :   "Please enter your pincode"
            }, 
            
    address : 
            {
              required    :   "Please enter your address"
            },
            
    country:  
            {
              required    :   "Please select country",
            },
    
    day : 
            {
              required    :   "Please select day"
            }, 
            
    month : 
            {
              required    :   "Please select month"
            },
            
    year : 
            {
              required    :   "Please select year",
            },
            
    category  : 
            {
              required    :   "Please choose a category",
            },
            
    last_exam : 
            {
              required    :   "Please choose last examination passes/appeared",
            },
            
    year_passing  : 
            {
              required    :   "Please select year of passing",
            },
            
    percent_mark : 
            {
              required    :   "Please enter percentage marks",
            },
    
    annual_income  : 
            {
              required    :   "Please enter annual family's income",
            },
            
    citizen : 
            {
              required    :   "Please select citizenship",
            },
    city : 
            {
              required    :   "Please select citizenship",
            },
    declare : 
            {
              required    : "Please accept declaration"
            },
    stu_dec_fname : 
            {
              required    : "Please enter the father's name"
            },

    stu_dec_name : 
            {
              required    : "Please enter the name"
            },
    cource_choice:
            {
              required    : "Please choose a course"
            },

    cordinator_id : 
          {
            required      :   "please enter the cordinator id"
          },
    image : 
        {
          required : 'please choose an image'
        }


                                                                                    
  };
  
  return messages;
}


