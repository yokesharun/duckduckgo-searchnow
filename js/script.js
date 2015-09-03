$(document).ready(function(){
      $('#click_search').click(function(){
      var q = $('#q').val();
        if(q != ""){
           $('#search_form').fadeOut(100);
         $('#loading').fadeIn(1000);
     $.get("core/response.php",
    {
        q: q,
    },
    function(data, status){
      console.log(data);
      $('#loading').fadeOut(1000);
      $('#search_list').fadeIn();
        $("#append_item").append(data).fadeIn('slow');
    });
   }

      });
});