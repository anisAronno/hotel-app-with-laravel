$('#contactSubmitBtn').click(function(event) {
        event.preventDefault();
        var name = $('#name').val();
        var email = $('#email').val();
        var PhonNumber = $('#PhonNumber').val();
        var YourSubject = $('#YourSubject').val();
        var massage = $('#massage').val();

        sendContact(name, email, PhonNumber, YourSubject, massage);


    });

    function sendContact(name, email, PhonNumber, YourSubject, massage) {
        if(name.length==0){
            $('#contactSubmitBtn').html('Please Enter Your Name');
            setTimeout(function () {
                $('#contactSubmitBtn').html('Send Massage...');
            },2000)
        }
        else if(email.length==0){
            $('#contactSubmitBtn').html('Please Enter Your Email')
            setTimeout(function () {
                $('#contactSubmitBtn').html('Send Massage...');
            },2000)
        }
        else if(PhonNumber.length==0){
            $('#contactSubmitBtn').html('Please Enter Your Mobile Number !')
            setTimeout(function () {
                $('#contactSubmitBtn').html('Send Massage...');
            },2000)
        }
        else if(YourSubject==null){

            $('#contactSubmitBtn').html('Please Enter Subject!')
            setTimeout(function () {
                $('#contactSubmitBtn').html('Send Massage...');
            },2000)

        }
        else if(massage==null){

            $('#contactSubmitBtn').html('Please Enter Your massage')
            setTimeout(function () {
                $('#contactSubmitBtn').html('Send Massage...');
            },2000)

        }
        else {
            $('#contactSubmitBtn').html('Sending....')
            axios.post('/contactSend',{
                name: name,
                email: email,
                PhonNumber: PhonNumber,
                YourSubject: YourSubject,
                massage: massage,
            })
                .then(function (response) {
                    console.log(response.data);
                    $('#name').val('');
                    $('#email').val('');
                    $('#PhonNumber').val('');
                    $('#YourSubject').val('');
                    $('#massage').val('');

                    if(response.status==200){
                        if(response.data==1){
                            $('#contactSubmitBtn').html('Sending Successful....')
                            setTimeout(function () {
                                $('#contactSubmitBtn').html('Send Massage...');
                            },3000)

                        }
                        else{
                            $('#contactSubmitBtn').html('Sending Failed.... ')
                            setTimeout(function () {
                                $('#contactSubmitBtn').html('Send Massage...');
                            },3000)
                        }
                    }
                    else {
                        $('#contactSubmitBtn').html('Sending Failed. Try Again......')
                        setTimeout(function () {
                            $('#contactSubmitBtn').html('Send Massage...');
                        },3000)
                    }

                }).catch(function (error) {
                $('#contactSubmitBtn').html('Sending Failed. Try Again......')
                setTimeout(function () {
                    $('#contactSubmitBtn').html('Send Massage...');
                },3000)
            })
        }


    }
