$(document).ready(function(){
      $('#click_search').click(function(){
         $('#search_form').fadeOut(100);
         $('#loading').fadeIn(1000);
     $.post("core/response.php",
    {
        q: "a",
    },
    function(data, status){
      $('#loading').fadeOut(1000);
      $('#search_list').fadeIn();
        $("#append_item").append(data).fadeIn('slow');
    });

      });
});