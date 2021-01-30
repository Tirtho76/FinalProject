// FeedBack Send

$('#FeedBackSendBtnId').click(function () {
    var FeedBackName= $('#FeedBackNameId').val();
    var FeedBackEmail= $('#FeedBackEmailId').val();
    var FeedBack= $('#FeedBackId').val();
    SendContact(FeedBackName,FeedBackEmail,FeedBack);
});

function SendContact(FeedBackName,FeedBackEmail,FeedBack) {

    if(FeedBackName.length==0){
        $('#FeedBackSendBtnId').html('Enter Your Name!');
        setTimeout(function () {
            $('#FeedBackSendBtnId').html('Fedback submitted');
        },2000)
    }
    else if(FeedBackEmail.length==0){
        $('#FeedBackSendBtnId').html('Enter Your Email!')
        setTimeout(function () {
            $('#FeedBackSendBtnId').html('Fedback submitted');
        },2000)
    }
    else if(FeedBack.length==0){
        $('#FeedBackSendBtnId').html('Write Your FeedBack!')
        setTimeout(function () {
            $('#FeedBackSendBtnId').html('Fedback submitted');
        },2000)
    }
    else {
        $('#FeedBackSendBtnId').html('Sending...')
        axios.post('/FeedBackSend',{
            name:FeedBackName,
            email:FeedBackEmail,
            feedback:FeedBack,
        })
        .then(function (response) {
            if(response.status==200){
                if(response.data==1){
                    $('#FeedBackSendBtnId').html('Successfully Send FeedBack')
                    setTimeout(function () {
                    $('#FeedBackSendBtnId').html('Fedback submitted');
                    },3000)
                    }
                else{
                    $('#FeedBackSendBtnId').html('Fail! Try Again')
                    setTimeout(function () {
                    $('#FeedBackSendBtnId').html('Fedback submitted');
                    },3000)
                    }
                }
                else {
                    $('#FeedBackSendBtnId').html('Fail! Try Again')
                    setTimeout(function () {
                    $('#FeedBackSendBtnId').html('Fedback submitted');
                    },3000)
                }

        }).catch(function (error) {
            $('#FeedBackSendBtnId').html('Try Again!')
            setTimeout(function () {
            $('#FeedBackSendBtnId').html('Fedback submitted');
            },3000)
        })
    }
}
