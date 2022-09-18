var departments = [];
jQuery(document).delegate('a.add-record', 'click', function(e) {
    $('#row_value').html($('#department').val());
    departments.push($('#department').val());
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

const form = document.getElementById('projectForm');
const button = document.getElementById('projectSubmit');

$('#projectSubmit').click(function(e) {
    var projectName = $('#projectName').val();
    var description = $('#description').val();
    var deadline = $('#deadline').val();
    e.preventDefault();
    if(projectName === '' || projectName == null || description === '' || description == null){
        $('#emptyFieldsMessage').html('*You must fill up all the fields marked with an *');
    }
    else{
        $('#emptyFieldsMessage').html('');
        $.ajax({
            type: "POST",
            url: 'projects/projectCreate.php',
            data: { dep: JSON.stringify(departments),
                    name: projectName,
                    description: description,
                    deadline: deadline
            },
            success: function(result){
                window.location="project.php";
            },
            failure: function(result){
                alert("Event Could not be created. Please contact Fahmi. If he's contactable that is.....");
            }
        });
    }
    
});