
$('body').on('click touch', '.view_data', function(){
    $('#dataModal').modal("show");
});


$('body').on('click touch', '.view_data', function(){ 
        var personId = $(this).attr("id");

        $.ajax({
            url: "/systems/systems/systems/assets/php/manage-patient.php",
            method: "post",
            data: {personId:personId},
            success: function(data){
                $('#view-patient').html(data);
                $('#dataModal').modal("show");
            }
        })
});


 $('body').on('click touch', '.table-action-btn', function(){
        var getId = $(this).attr('data-id');
        console.log(getId);
        $('input#userId').val(getId);
        });
 