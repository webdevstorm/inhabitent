
(function($) {
    $(function(){
       
    $('.icon-search').click(function(){
        event.preventDefault();
        $('.search-field').toggleClass('selected');
        $('.search-field').focus();
       
  });
       $('.search-field').on('blur', ()=>{
       if($('.search-field')>0){return false}
       $('.search-field').removeClass('selected');
      
})
    });
  })(jQuery);