
   function is_url(str)
   {
     regexp =  /^(?:(?:):\/\/)?(?:(?!(?:10|127)(?:\.\d{1,3}){3})(?!(?:169\.254|192\.168)(?:\.\d{1,3}){2})(?!172\.(?:1[6-9]|2\d|3[0-1])(?:\.\d{1,3}){2})(?:[1-9]\d?|1\d\d|2[01]\d|22[0-3])(?:\.(?:1?\d{1,2}|2[0-4]\d|25[0-5])){2}(?:\.(?:[1-9]\d?|1\d\d|2[0-4]\d|25[0-4]))|(?:(?:[a-z\u00a1-\uffff0-9]-*)*[a-z\u00a1-\uffff0-9]+)(?:\.(?:[a-z\u00a1-\uffff0-9]-*)*[a-z\u00a1-\uffff0-9]+)*(?:\.(?:[a-z\u00a1-\uffff]{2,})))(?::\d{2,5})?(?:\/\S*)?$/;
           if (regexp.test(str))
           {
             return 1;
           }
           else
           {
             return 0;
           }
   }
   
   
   $(document).ready(function()
   {
     $("#add").click(function(){
       
       var count=0;
       var lines = $('textarea').val().split('\n');
   
       for(var j=0;j<lines.length;j++)
         {
           if(is_url(lines[j])==1)
           {
               count=1;
           }
        }
        if(count==1)
         {
            $("textarea").slideToggle();
          $("#add").slideToggle();
          $("#heading").slideToggle();
         
         $("<div>").load("test4.php", function() {
           $("#test").append('<h3 style="display:inline ;float:left;margin-left:250px;">'+' URL</h3><h3 style="display:inline;float:left;margin-left:320px;">'+' CRITICAL</h3><h3 style="display:inline;float:left;margin-left:70px;">'+' AUDITOR</h3><h3 style="float:left;margin-left:70px;">'+' REMARKS</h3>');

           for(var i=0;i<lines.length;i++)
             {
                 var x=lines[i];
                 if(is_url(x)==1)
                 {
   
                 $("#test").append('<input type=text class="input form-control"'+'style="display: inline;width:50%;margin-left:0px;margin-top:10px;"'+' name="tb[]" '+
                      'value=' + x + ' readonly/>');
                 $("#test").append('<select class="form-control"'+'id="job"'+' style="display: inline;width:15%;margin-left:10px;margin-top:0px;"'+''+'name="vulnerablity[]">'+ ' '+'<option value="Critical">'+ ' '+'Critical</option><option value="More_Critical">'+ ' '+'More_Critical</option><option value="General">'+ ' '+'General</option><option value="Urgennt">'+ ' '+'Urgent</option><option value="Third_Party">'+ ' '+'Third_Party</option></select>');
                   $("#test").append($(this).html());
                   $("#test").append('<input type=text class="input form-control"'+'style="margin-left:10px;margin-top:0px;display: inline;width:15%"'+' name="rm[]"'+'pattern="[a-zA-Z0-9_]+"'+'autocomplete="off" >');
                 
                 }
               }
               $("#test").append('<br><input type=submit style="margin-left:px;margin-top:30px;"'+' class="btn btn-success center-block"' + 
                'id=btSubmit value="Submit" />');
             });
             
           }
           else
        {
                     alert('all urls are invalid');
   
        }
           });
   });
   