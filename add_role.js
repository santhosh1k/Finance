
 $(document).ready(function(){
   // Check or Uncheck All checkboxes
   $("#checkall").change(function(){
     var checked = $(this).is(':checked');
     if(checked){
       $(".checkbox").each(function(){
         $(this).prop("checked",true);
       });
     }else{
       $(".checkbox").each(function(){
         $(this).prop("checked",false);
       });
     }
   });

  // Changing state of CheckAll checkbox
  $(".checkbox").click(function(){

    if($(".checkbox").length == $(".checkbox:checked").length) {
      $("#checkall").prop("checked", true);
    } else {
      $("#checkall").removeAttr("checked");
    }

  });
});
$(document).ready(function(){
   // Check or Uncheck All checkboxes
   $("#master_group").change(function(){
     var checked = $(this).is(':checked');
     if(checked){
       $(".master").each(function(){
         $(this).prop("checked",true);
       });
     }else{
       $(".master").each(function(){
         $(this).prop("checked",false);
       });
     }
   });

  // Changing state of CheckAll checkbox
  $(".master").click(function(){

    if($(".master").length == $(".master:checked").length) {
      $("#master_group").prop("checked", true);
    } else {
      $("#master_group").removeAttr("checked");
    }

  });
});
$(document).ready(function(){
   // Check or Uncheck All checkboxes
   $("#borrowers_group").change(function(){
     var checked = $(this).is(':checked');
     if(checked){
       $(".borrowers").each(function(){
         $(this).prop("checked",true);
       });
     }else{
       $(".borrowers").each(function(){
         $(this).prop("checked",false);
       });
     }
   });

  // Changing state of CheckAll checkbox
  $(".borrowers").click(function(){

    if($(".borrowers").length == $(".borrowers:checked").length) {
      $("#borrowers_group").prop("checked", true);
    } else {
      $("#borrowers_group").removeAttr("checked");
    }

  });
});
$(document).ready(function(){
   // Check or Uncheck All checkboxes
   $("#transaction_group").change(function(){
     var checked = $(this).is(':checked');
     if(checked){
       $(".transaction").each(function(){
         $(this).prop("checked",true);
       });
     }else{
       $(".transaction").each(function(){
         $(this).prop("checked",false);
       });
     }
   });

  // Changing state of CheckAll checkbox
  $(".transaction").click(function(){

    if($(".transaction").length == $(".transaction:checked").length) {
      $("#transaction_group").prop("checked", true);
    } else {
      $("#transaction_group").removeAttr("checked");
    }

  });
});
$(document).ready(function(){
   // Check or Uncheck All checkboxes
   $("#transaction_group").change(function(){
     var checked = $(this).is(':checked');
     if(checked){
       $(".transaction").each(function(){
         $(this).prop("checked",true);
       });
     }else{
       $(".transaction").each(function(){
         $(this).prop("checked",false);
       });
     }
   });

  // Changing state of CheckAll checkbox
  $(".transaction").click(function(){

    if($(".transaction").length == $(".transaction:checked").length) {
      $("#transaction_group").prop("checked", true);
    } else {
      $("#transaction_group").removeAttr("checked");
    }

  });
});
$(document).ready(function(){
   // Check or Uncheck All checkboxes
   $("#account_reports").change(function(){
     var checked = $(this).is(':checked');
     if(checked){
       $(".account").each(function(){
         $(this).prop("checked",true);
       });
     }else{
       $(".account").each(function(){
         $(this).prop("checked",false);
       });
     }
   });

  // Changing state of CheckAll checkbox
  $(".account").click(function(){

    if($(".account").length == $(".account:checked").length) {
      $("#account_reports").prop("checked", true);
    } else {
      $("#account_reports").removeAttr("checked");
    }

  });
});
$(document).ready(function(){
   // Check or Uncheck All checkboxes
   $("#int_calculation").change(function(){
     var checked = $(this).is(':checked');
     if(checked){
       $(".int_cal").each(function(){
         $(this).prop("checked",true);
       });
     }else{
       $(".int_cal").each(function(){
         $(this).prop("checked",false);
       });
     }
   });

  // Changing state of CheckAll checkbox
  $(".int_cal").click(function(){

    if($(".int_cal").length == $(".int_cal:checked").length) {
      $("#int_calculation").prop("checked", true);
    } else {
      $("#int_calculation").removeAttr("checked");
    }

  });
});
$(document).ready(function(){
   // Check or Uncheck All checkboxes
   $("#special_report").change(function(){
     var checked = $(this).is(':checked');
     if(checked){
       $(".special").each(function(){
         $(this).prop("checked",true);
       });
     }else{
       $(".special").each(function(){
         $(this).prop("checked",false);
       });
     }
   });

  // Changing state of CheckAll checkbox
  $(".special").click(function(){

    if($(".special").length == $(".special:checked").length) {
      $("#special_report").prop("checked", true);
    } else {
      $("#special_report").removeAttr("checked");
    }

  });
});
$(document).ready(function(){
   // Check or Uncheck All checkboxes
   $("#utilities_group").change(function(){
     var checked = $(this).is(':checked');
     if(checked){
       $(".utilities").each(function(){
         $(this).prop("checked",true);
       });
     }else{
       $(".utilities").each(function(){
         $(this).prop("checked",false);
       });
     }
   });

  // Changing state of CheckAll checkbox
  $(".utilities").click(function(){

    if($(".utilities").length == $(".utilities:checked").length) {
      $("#utilities_group").prop("checked", true);
    } else {
      $("#utilities_group").removeAttr("checked");
    }

  });
});
$(document).ready(function(){
   // Check or Uncheck All checkboxes
   $("#code_identification").change(function(){
     var checked = $(this).is(':checked');
     if(checked){
       $(".code").each(function(){
         $(this).prop("checked",true);
       });
     }else{
       $(".code").each(function(){
         $(this).prop("checked",false);
       });
     }
   });

  // Changing state of CheckAll checkbox
  $(".code").click(function(){

    if($(".code").length == $(".code:checked").length) {
      $("#code_identification").prop("checked", true);
    } else {
      $("#code_identification").removeAttr("checked");
    }

  });
});
$(document).ready(function(){
   // Check or Uncheck All checkboxes
   $("#direct_run").change(function(){
     var checked = $(this).is(':checked');
     if(checked){
       $(".direct").each(function(){
         $(this).prop("checked",true);
       });
     }else{
       $(".direct").each(function(){
         $(this).prop("checked",false);
       });
     }
   });

  // Changing state of CheckAll checkbox
  $(".direct").click(function(){

    if($(".direct").length == $(".direct:checked").length) {
      $("#direct_run").prop("checked", true);
    } else {
      $("#direct_run").removeAttr("checked");
    }

  });
});
$(document).ready(function(){
   // Check or Uncheck All checkboxes
   $("#exit_group").change(function(){
     var checked = $(this).is(':checked');
     if(checked){
       $(".exit").each(function(){
         $(this).prop("checked",true);
       });
     }else{
       $(".exit").each(function(){
         $(this).prop("checked",false);
       });
     }
   });

  // Changing state of CheckAll checkbox
  $(".exit").click(function(){

    if($(".direct").length == $(".exit:checked").length) {
      $("#exit_group").prop("checked", true);
    } else {
      $("#exit_group").removeAttr("checked");
    }

  });
});
$(document).ready(function(){
   // Check or Uncheck All checkboxes
   $("#branch_group").change(function(){
     var checked = $(this).is(':checked');
     if(checked){
       $(".branch").each(function(){
         $(this).prop("checked",true);
       });
     }else{
       $(".branch").each(function(){
         $(this).prop("checked",false);
       });
     }
   });

  // Changing state of CheckAll checkbox
  $(".branch").click(function(){

    if($(".direct").length == $(".branch:checked").length) {
      $("#branch_group").prop("checked", true);
    } else {
      $("#branch_group").removeAttr("checked");
    }

  });
});
$(document).ready(function(){
   // Check or Uncheck All checkboxes
   $("#assets_group").change(function(){
     var checked = $(this).is(':checked');
     if(checked){
       $(".assets").each(function(){
         $(this).prop("checked",true);
       });
     }else{
       $(".assets").each(function(){
         $(this).prop("checked",false);
       });
     }
   });

  // Changing state of CheckAll checkbox
  $(".assets").click(function(){

    if($(".assets").length == $(".assets:checked").length) {
      $("#assets_group").prop("checked", true);
    } else {
      $("#assets_group").removeAttr("checked");
    }

  });
});
$(document).ready(function(){
   // Check or Uncheck All checkboxes
   $("#accounting_group").change(function(){
     var checked = $(this).is(':checked');
     if(checked){
       $(".accounting").each(function(){
         $(this).prop("checked",true);
       });
     }else{
       $(".accounting").each(function(){
         $(this).prop("checked",false);
       });
     }
   });

  // Changing state of CheckAll checkbox
  $(".accounting").click(function(){

    if($(".accounting").length == $(".accounting:checked").length) {
      $("#accounting_group").prop("checked", true);
    } else {
      $("#accounting_group").removeAttr("checked");
    }

  });
});
$(document).ready(function(){
   // Check or Uncheck All checkboxes
   $("#expenses_group").change(function(){
     var checked = $(this).is(':checked');
     if(checked){
       $(".expenses").each(function(){
         $(this).prop("checked",true);
       });
     }else{
       $(".expenses").each(function(){
         $(this).prop("checked",false);
       });
     }
   });

  // Changing state of CheckAll checkbox
  $(".expenses").click(function(){

    if($(".expenses").length == $(".expenses:checked").length) {
      $("#expenses_group").prop("checked", true);
    } else {
      $("#expenses_group").removeAttr("checked");
    }

  });
});
$(document).ready(function(){
   // Check or Uncheck All checkboxes
   $("#other_group").change(function(){
     var checked = $(this).is(':checked');
     if(checked){
       $(".other").each(function(){
         $(this).prop("checked",true);
       });
     }else{
       $(".other").each(function(){
         $(this).prop("checked",false);
       });
     }
   });

  // Changing state of CheckAll checkbox
  $(".other").click(function(){

    if($(".other").length == $(".other:checked").length) {
      $("#other_group").prop("checked", true);
    } else {
      $("#other_group").removeAttr("checked");
    }

  });
});