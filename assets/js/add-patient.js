
    // process the form
    $("form.add-patient").on('submit', function(){

        var that = $(this),
        url = that.attr('action'),
        type = that.attr('method'),
        data = {}

        that.find('[name]').each(function(index, value){
          var that = $(this),
          name = that.attr('name'),
          value = that.val();

          data[name] = value;

        });

        // send ajax
        $.ajax({

            headers:{
                'Accept' : 'application/json',
                'content-Type' : 'application/json'
            },
            url     : 'https://admissions-dot-medipark-hospital.appspot.com/v1/Patient/create',
            crossDomain: true,
            async   : true,
            contentType: "application/json; charset=utf-8",
            dataType: 'json',
            type    : 'POST',            
            data: JSON.stringify(data),
            success : function(data) {
                // you can see the result from the console
                // tab of the developer tools
                console.log(data);
            },
            error: function(xhr, resp, text) {
                console.log(xhr, resp, text);
            }
        });
      
        return false;
    });


