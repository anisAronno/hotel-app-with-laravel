    

            $('#submitImageEXP').click(function() {
                var exp_image = $('#addImageEXP').prop('files')[0];
                addImageEXP(image3);
            })
    
            $('#addImageEXP').change(function() {
                var reader = new FileReader();
                reader.readAsDataURL(this.files[0]);
                reader.onload = function(event) {
                    var ImgSource = event.target.result;
                    $('#addimagepreviewEXP').attr('src', ImgSource)
                }
            })
    
    
            function addImageEXP(exp_image) {
    
    
                $('#submitImageEXP').html(
                    "<div class='spinner-border spinner-border-sm text-primary' role='status'></div>"); //animation
    
    
                var formData = new FormData();
                formData.append('photo', exp_image);
    
                axios.post('/addEXPimage', formData, {
                    headers: {
                        'Content-Type': 'multipart/form-data'
                    }
                }).then(function(response) {
    
                    $('#submitImageEXP').html("Update");
                    if (response.status = 300) {
                        if (response.data == 1) {
    
                            toastr.success('Updated Success .');
    
                        } else {
    
                            toastr.error('Updated Failed');
    
                        }
                    } else {
    
                        toastr.error('Something Went Wrong');
                    }
    
    
                }).catch(function(error) {
    
    
                    toastr.error('Something Went Wrong');
    
                });
    
    
    
            }
    
    
    
    