$('#newslatterSubmitBtn').click((event) => {
    event.preventDefault();
    var name = $('#subsriveName').val();
    var email = $('#subscribeEmail').val();
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
            $('#subsriveName').val('');
            $('#subscribeEmail').val('');


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
        axios.post('/bookingSend',{
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












