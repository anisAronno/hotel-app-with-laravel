


// Newlatter JS




$('#newslatterSubmitform').submit(function(event) {
    event.preventDefault();
    var name = $('#name').val();
    var email = $('#email').val();
    
    sendNewslatter(name, email);

});

function sendNewslatter(name, email) {
    if(name.length==0){
        $('#newslatterSubmitBtn').html('Please Enter Your Name');
        setTimeout(function () {
            $('#newslatterSubmitBtn').html('Send Massage...');
        },2000)
    }
    else if(email.length==0){
        $('#newslatterSubmitBtn').html('Please Enter Your Email')
        setTimeout(function () {
            $('#newslatterSubmitBtn').html('Send Massage...');
        },2000)
    }
    else {
        $('#newslatterSubmitBtn').html('Sending....')
        axios.post('/newsLatterSend',{
            name: name,
            email: email,
           
        })
            .then(function (response) {
                $('#name').val('');
                $('#email').val('');
               
                
                if(response.status==200){
                    if(response.data==1){
                        $('#newslatterSubmitBtn').html('Sending Successful....')
                        setTimeout(function () {
                            $('#newslatterSubmitBtn').html('Send Massage...');
                        },3000)

                    }
                    else{
                        $('#newslatterSubmitBtn').html('Sending Failed.... ')
                        setTimeout(function () {
                            $('#newslatterSubmitBtn').html('Send Massage...');
                        },3000)
                    }
                }
                else {
                    $('#newslatterSubmitBtn').html('Sending Failed. Try Again......')
                    setTimeout(function () {
                        $('#newslatterSubmitBtn').html('Send Massage...');
                    },3000)
                }

            }).catch(function (error) {
            $('#newslatterSubmitBtn').html('Sending Failed. Try Again......')
            setTimeout(function () {
                $('#newslatterSubmitBtn').html('Send Massage...');
            },3000)
        })
    }


}

