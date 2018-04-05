
function insertRecord(){

  $(document).ready(function() {

  $("#submit").on("submit", function(event) {
    
    $("#result").empty();
   
    if(!ValidateFormInput()){
        console.log('empty');
    }
    else{        
        $.ajax({
          url: "insertrecord.php",
          data: {
              name: $("#name").val(),
              surname: $("#surname").val(),    
              email: $("#email").val(), 
              studentno: $("#studentno").val(),
              course: $("#course").val(),                
          },
          success: function(result) {
            //$("#result").html(result);
            $("#result").html('Data Successfully Submitted');
            //alert(html);
          },
          dataType: "html",
          type: "POST"
        });    
    }
    event.stopPropagation();
    event.preventDefault();
    return false;
    
      
    
  }); 

});

}


function ValidateFormInput()
{
   $('span.error').html('');
   $("#name").html('');
   var success = true;
    $("#form1 input").each(function()
    {

      if($("#name").val()==="" ){
                $("#name").next().html("Please your name");
                success = false;
      }
            /*if($(this).val()==="" && $(this).is(":text"))
            {
                $("#name").next().html("Please your name");
                success = false;
            }
            if(!$.isNumeric($(this).val()) && $(this).val() !=="" && $(this).is(":text"))
            {
                $(this).next().html("Please enter a valid number");
                success = false;
            }         
            if(parseInt($("input#lowerNumber").val()) > parseInt($("input#upperNumber").val()))
            {
                $("span.error#upNum").html("Upper number must be greater that lower number");
                success = false;
            }*/
    });
    return success;
}

