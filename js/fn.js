
$('#LogOut').click(()=>{
   $.ajax({
       url: 'LogOut'
   }).done(function (log) {
       if (log == '1')
       {
           location.reload();
       }
   });
});