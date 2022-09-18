<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <title>Document</title>
</head>
<body>
<form enctype="multipart/form-data">
      <table class="table table-hover" id="tbl_posts">
        <thead>
          <tr>
          </tr>
        </thead>
        <tbody id="tbl_posts_body">
          
        </tbody>
      </table>
  </form>

  <div style="display:none;">
    <table id="sample_table">
      <tr id="">
       <td><span class="sn"></span>.</td>
       <td id = "row_value"></td>
       <td style="float: right; padding-right: 5%"><a class="btn btn-xs delete-record" data-id="0"><i class="glyphicon glyphicon-trash"></i></a></td>
     </tr>
   </table>
 </div>

 <div class="well clearfix">
    <div id="search-autocomplete" class="form-outline">
        <input type="text" id="department" class="form-control" placeholder="Add Deapartments" />
    </div>
    <a class="btn btn-primary pull-right add-record" data-added="0">Add</a>
</div>


<script>
    jQuery(document).delegate('a.add-record', 'click', function(e) {
     $('#row_value').html($('#department').val());
     e.preventDefault();  
     var content = jQuery('#sample_table tr'),
     size = jQuery('#tbl_posts >tbody >tr').length + 1,
     element = null,    
     element = content.clone();
     element.attr('id', 'rec-'+size);
     element.find('.delete-record').attr('data-id', size);
     element.appendTo('#tbl_posts_body');
     element.find('.sn').html(size);
   });

   jQuery(document).delegate('a.delete-record', 'click', function(e) {
     e.preventDefault();    
     var didConfirm = confirm("Are you sure You want to delete");
     if (didConfirm == true) {
      var id = jQuery(this).attr('data-id');
      var targetDiv = jQuery(this).attr('targetDiv');
      jQuery('#rec-' + id).remove();
      
    //regnerate index number on table
    $('#tbl_posts_body tr').each(function(index) {
      //alert(index);
      $(this).find('span.sn').html(index+1);
    });
    return true;
  } else {
    return false;
  }
});
</script>


</body>
</html>