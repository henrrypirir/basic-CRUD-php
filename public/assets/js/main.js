var SHOWSTUDENTS = SHOWSTUDENTS || {};

SHOWSTUDENTS.table = (function() {
    var self = {};

    self.init = function() {
        self.getStudents();
    }

    self.getStudents = function() {
        $.ajax({
          url: './show.php',
          success: function(result){
            $('#list-students').html(result);
            $('.delete').click(function() {
              var urlDelete = $(this).attr('href');
              self.delete(urlDelete);
            })
          },
          error: function(e){
            console.log(e);
          }
        });
      }

    self.delete = function(urlDelete) {
      $.ajax({
        url: urlDelete,
        type: 'post',
        success: function(){self.getStudents();},
        error: function(e){
          console.log(e);
        }
      });
    }

    return self;
} ());

jQuery('body').ready(SHOWSTUDENTS.table.init)