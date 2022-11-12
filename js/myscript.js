$(document).ready(function () {
    $('#empform').on('submit', function (e) {
        e.preventDefault();
        var id = $('#empid').val();
        var name = $('#empname').val();
        var email = $('#empemail').val();
        var pic = $('#profilepic')[0].files;

        var formData = new FormData($('#empform')[0]);
        formData.append('submit', 'create');
        if (id != '' && name != '' && email != '' && pic.length > 0) {
            $.ajax({
                type: 'post',
                url: 'manfunctions.php',
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                success: function (response) {
                    if (response == 'success') {
                        $('#empform').trigger('reset');
                    } else {
                        alert(response);
                    }
                }
            });

        } else {
            alert('Please provide all the information');
        }


    });

    $('#updateform').on('submit', function (e) {
        e.preventDefault();
        var id = $('#empid').val();
        var name = $('#empname').val();
        var email = $('#empemail').val();
        //var pic = $('#profilepic')[0].files;
        if (id != '' && name != '' && email != '') {
            var formData = new FormData($('#updateform')[0]);
            formData.append('submit', 'update');
            $.ajax({
                type: 'post',
                url: 'manfunctions.php',
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                success: function (response) {
                    if (response == 'success') {
                        $('#update-status').text('Successfully Updated');
                    } else {
                        alert(response);
                    }
                }
            });


        } else {
            alert('Please provide all the information');
        }

    });

});

function deleteFunction(id,element) {   
    var res = confirm('Are you sure to delete this row?');
    if (res) {
        $.ajax({
            type: 'post',
            url: 'manfunctions.php',
            cache: false,
            data:{
               empid: id,
               submit:'delete'
            },
            success:function(response){
                if(response=='success'){
                    alert('Successfully deleted');  
                    $(element).closest('tr').remove();
                }
            }
        });
    }
}