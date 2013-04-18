$(function() {

  mediaCheck({
    media: '(max-width: 979px)',
    entry: function() {

      //alert("sss");
      $('#tabbableContainer').removeClass('tabs-left');
    },


    exit: function() {
      $('#tabbableContainer').addClass('tabs-left');
    }
  });

});