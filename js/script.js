$(document).ready(function(){
      $('#click_search').click(function(){
  var q = $('#q').val();
         $('#search_form').fadeOut(100);
         $('#loading').fadeIn(1000);
         console.log(q);
     $.get("core/response.php",
    {
        q: q,
    },
    function(data, status){
      $('#loading').fadeOut(1000);
      $('#search_list').fadeIn();
        $("#append_item").append(data).fadeIn('slow');
    });

      });
});