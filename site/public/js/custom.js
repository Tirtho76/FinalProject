// Contact Send

$('#contactSendBtnId').click(function () {
    var contactName= $('#contactNameId').val();
    var contactMobile= $('#contactMobileId').val();
    var contactEmail= $('#contactEmailId').val();
    var contactMsg= $('#contactMsgId').val();
    SendContact(contactName,contactMobile,contactEmail,contactMsg);
});

function SendContact(contact_name,contact_mobile,contact_email,contact_msg) {

    if(contact_name.length==0){
        $('#contactSendBtnId').html('Enter Your Name!');
        setTimeout(function () {
            $('#contactSendBtnId').html('Submit');
        },2000)
    }
    else if(contact_mobile.length==0){
        $('#contactSendBtnId').html('Enter Your Mobile Number!')
        setTimeout(function () {
            $('#contactSendBtnId').html('Submit');
        },2000)
    }
    else if(contact_email.length==0){
        $('#contactSendBtnId').html('Enter Your Email!')
        setTimeout(function () {
            $('#contactSendBtnId').html('Submit');
        },2000)
    }
    else if(contact_msg.length==0){

        $('#contactSendBtnId').html('Enter Your Text!')
        setTimeout(function () {
            $('#contactSendBtnId').html('Submit');
        },2000)

    }
    else {
        $('#contactSendBtnId').html('Sending...')
        axios.post('/contactSend',{
            contact_name:contact_name,
            contact_mobile:contact_mobile,
            contact_email:contact_email,
            contact_msg: contact_msg,
        })
            .then(function (response) {
                if(response.status==200){
                    if(response.data==1){
                        $('#contactSendBtnId').html('Successfully Send Data')
                        setTimeout(function () {
                            $('#contactSendBtnId').html('Submit');
                        },3000)

                    }
                    else{
                        $('#contactSendBtnId').html('Fail! Try Again')
                        setTimeout(function () {
                            $('#contactSendBtnId').html('Submit');
                        },3000)
                    }
                }
                else {
                    $('#contactSendBtnId').html('Fail! Try Again')
                    setTimeout(function () {
                        $('#contactSendBtnId').html('Submit');
                    },3000)
                }

            }).catch(function (error) {
            $('#contactSendBtnId').html('Try Again!')
            setTimeout(function () {
                $('#contactSendBtnId').html('Submit');
            },3000)
        })
    }
}
