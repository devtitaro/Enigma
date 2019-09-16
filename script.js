function validateForm(){
    let username = $('#username').val();
    let password = $('#password').val();

    

    let username = $.trim(username);
    let password = $.trim(password);

    if(username == ''){
        $('.alertUsername').html('Username cannot be empty').css('display', 'block');
    }else if(password == ''){
        $('.alertPassword').html('Password cannot be empty').css('display', 'block')
    }

}