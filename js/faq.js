$(document).ready(function(){
      //reference:https://www.tutorialrepublic.com/codelab.php?topic=bootstrap&file=accordion-with-plus-minus-icon
      // Toggle plus minus icon on show hide of collapse element
      $(".collapse").on('show.bs.collapse', function(){
            $(this).prev().find(".btn").children().removeClass("fa-plus").addClass("fa-minus");
      }).on('hide.bs.collapse', function(){
            $(this).prev().find(".btn").children().removeClass("fa-minus").addClass("fa-plus")
      });
});