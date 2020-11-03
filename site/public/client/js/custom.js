$('#bookingSubmitform').submit(function(event) {
    event.preventDefault();
    var arrival_date = $('#arrivedDate').val();
    var departure_date = $('#leaveDate').val();
    var customer_mobile = $('#customerMobile').val();
    var adult_person = $('#adultPerson').val();
    var children_person = $('#childrenPerson').val();
    sendBooking(arrival_date, departure_date, customer_mobile, adult_person, children_person);

});

function sendBooking(arrival_date, departure_date, customer_mobile, adult_person, children_person) {
    if(arrival_date.length==0){
        $('#bookingSubmitBtn').html('Please Enter Your Arrived Date !');
        setTimeout(function () {
            $('#bookingSubmitBtn').html('Book Now');
        },2000)
    }
    else if(departure_date.length==0){
        $('#bookingSubmitBtn').html('Please Enter Your Depature Date !')
        setTimeout(function () {
            $('#bookingSubmitBtn').html('Book Now');
        },2000)
    }
    else if(customer_mobile.length==0){
        $('#bookingSubmitBtn').html('Please Enter Your Mobile Number !')
        setTimeout(function () {
            $('#bookingSubmitBtn').html('Book Now');
        },2000)
    }
    else if(adult_person==null){

        $('#bookingSubmitBtn').html('Please Enter Person Quantity!')
        setTimeout(function () {
            $('#bookingSubmitBtn').html('Book Now');
        },2000)

    }
    else if(children_person==null){

        $('#bookingSubmitBtn').html('Please Enter Children Quantity! !')
        setTimeout(function () {
            $('#bookingSubmitBtn').html('Book Now');
        },2000)

    }
    else {
        $('#bookingSubmitBtn').html('Sending....')
        axios.post('/booking',{
            arrival_date: arrival_date,
            departure_date: departure_date,
            customer_mobile: customer_mobile,
            adult_person: adult_person,
            children_person: children_person,
        })
            .then(function (response) {
                $('#arrivedDate').val('');
                $('#leaveDate').val('');
                $('#customerMobile').val('');
                $('#adultPerson').val('');
                $('#childrenPerson').val('');
                
                if(response.status==200){
                    if(response.data==1){
                        $('#bookingSubmitBtn').html('Sending Successful....')
                        setTimeout(function () {
                            $('#bookingSubmitBtn').html('Book Now');
                        },3000)

                    }
                    else{
                        $('#bookingSubmitBtn').html('Sending Failed.... ')
                        setTimeout(function () {
                            $('#bookingSubmitBtn').html('Book Now');
                        },3000)
                    }
                }
                else {
                    $('#bookingSubmitBtn').html('Sending Failed. Try Again......')
                    setTimeout(function () {
                        $('#bookingSubmitBtn').html('Book Now');
                    },3000)
                }

            }).catch(function (error) {
            $('#bookingSubmitBtn').html('Sending Failed. Try Again......')
            setTimeout(function () {
                $('#bookingSubmitBtn').html('Book Now');
            },3000)
        })
    }


}



// Contact Form Submit


$('#contactSubmitform').submit(function(event) {
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
                            $('#newslatterSubmitBtn').html('Subscribe Now');
                        },3000)

                    }
                    else{
                        $('#newslatterSubmitBtn').html('Sending Failed.... ')
                        setTimeout(function () {
                            $('#newslatterSubmitBtn').html('Subscribe Now');
                        },3000)
                    }
                }
                else {
                    $('#newslatterSubmitBtn').html('Sending Failed. Try Again......')
                    setTimeout(function () {
                        $('#newslatterSubmitBtn').html('Subscribe Now');
                    },3000)
                }

            }).catch(function (error) {
            $('#newslatterSubmitBtn').html('Sending Failed. Try Again......')
            setTimeout(function () {
                $('#newslatterSubmitBtn').html('Subscribe Now');
            },3000)
        })
    }


}

