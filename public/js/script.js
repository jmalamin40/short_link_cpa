// A $( document ).ready() block.
$( document ).ready(function() {
    $('#link-generator').submit(function(){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
          });
          var formData =$('#link-generator').serialize();
          console.log(formData, '-formData')
          $.ajax({
            type: "POST",
            url: base_url + '/generator-link',
            data: formData,
            dataType:"json",
            success: function( response ) {
                if(response.status){
                    $('#generated_link').val(response.data.short_link);
                }else{

                }
            }
          })
        return false;
    });

    $('#copy_data').click(function(){
        var copyText = document.getElementById("generated_link");
        copyText.select();
        document.execCommand("copy");
        $(this).html('COPYED');
        setTimeout(function() { 
            $('#copy_data').html('COPY');
        }, 1000);
        
    })
});