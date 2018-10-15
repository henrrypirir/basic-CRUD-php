$(function() {

  function getStudentsTable() {
    $.ajax({
      url: './show.php',
      success: function(result){
        $('#list-students').html(result);
        $('.delete').click(function() {
          var id = $(this).attr("id");
          $.ajax({
            url: './delete.php',
            data: {"id": id},
            type: 'post',
            success: function(){getStudentsTable();},
            error: function(e){
              console.log(e);
            }
          });
        })
      },error: function(e){
        console.log(e);
      }
    });
  }


  getStudentsTable();


});