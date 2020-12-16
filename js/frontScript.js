$(document).ready(function() {
    // console.log('hii');
    $('#security').hide();
    $('#squestion').change(function(){
        $('#security').show();
    });

    // $('[data-toggle="arjun"]').tooltip();


    $('#signup').click(function(){
        var letter = /^([a-zA-Z]+\s?)*$/;

        var pattern = /^(0)?[4-9]{1}[0-9]{9}$/;
        var pattemail = /^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/;
        var pattpass = /^(?!.* )(?=.*\d)(?=.*[a-zA-Z]).{8,16}$/;
        // var pattanswer = /^(?=.*[a-zA-Z])([a-zA-Z0-9]+)$/;

        var sname = $('#name').val();
        name = sname.trim();
        var semail = $('#email').val();
        email = semail.trim(); 
        var smobile = $('#mobile').val();
        mobile = smobile.trim();
        var ssquestion = $('#squestion').val();
        squestion = ssquestion.trim();
        var ssanswer = $('#sanswer').val();
        sanswer = ssanswer.trim();
        var spassword = $('#password').val();
        password = spassword.trim();
        var sconpassword = $('#conpassword').val();
        conpassword = sconpassword.trim();

        console.log(name, email, mobile, squestion, sanswer, password);
        if (name == "") {
            alert('Name Is Required !');
            $('#name').focus();
            return false;
        } else if (email == "") {
            alert('Email Is Required !');
            $('#email').focus();
            return false;
        } else if (mobile == "") {
            alert('Mobile Is Required !');
            $('#mobile').focus();
            return false;
        } else if (squestion == "") {
            alert('Security Question Is Required !');
            $('#squestion').focus();
            return false;
        } else if (sanswer == "") {
            alert('Security Answer Is Required !');
            $('#sanswer').focus();
            return false;
        } else if (password == "") {
            alert('Password Is Required !');
            $('#password').focus();
            return false;
        } else if (conpassword == "") {
            alert('Confirm Password Is Required !');
            $('#conpassword').focus();
            return false;
        } else if (password != conpassword) {
            alert('Password should be same !');
            return false;
        // } else if (isNaN(mobile)){ 
        //     alert("You can enter only numeric value in mobile number field !");
        //     $('#mobile').focus();
        //     return false; 
        } else if (!(mobile.match(pattern))) {
            alert("Please enter valid mobile number !");
            $('#mobile').focus();
            return false;
        } else if (!isNaN(name)) {    
            alert("Name can not contain only numeric value !");
            $('#name').focus();
            return false;  
        } else if (!(name.match(letter))) {
            alert("Please enter valid name !");
            $('#name').focus();
            return false;
        } else if (!(password.match(pattpass))) {
            alert("Please enter valid password Like: Password@123 !");
            $('#password').focus();
            return false;
        } else if (!(email.match(pattemail))) {
            alert('Please enter valid email address Like: email@gmail.com !');
            return false;
        } else if (!isNaN(sanswer)){ 
            alert("Security answer should not contain only numeric value !");
            $('#sanswer').focus();
            return false;
        } else {
            // alert(sanswer);
            $.ajax({
                url: 'ajaxRequest.php',
                type: 'POST',
                data: {
                    name : name,
                    email : email,
                    mobile : mobile,
                    squestion : squestion,
                    sanswer : sanswer,
                    password : password,
                    action : 'signup' 
                }, 
                success: function(msg) 
                {
                    if (msg == true) {
                        alert("Registration Successfully !");
                        // console.log(msg);
                        window.location.href = 'verification.php?email='+email+'&name='+name+'&mobile='+mobile;
                    } else {
                        alert(msg);
                    }
                    
                }
            });
        }
    });

    $('#login').click(function(){
        var email = ($('#email').val()).trim();
        var pass = ($('#password').val()).trim();
        // console.log(email, pass);

        $.ajax({
            url: 'ajaxRequest.php',
            type: 'POST',
            data: {
                email : email,
                password : pass,
                action : 'login'
            }, 
            success: function(msg) 
            {
                // alert(msg);
                if (msg == "Login") {
                    alert('Login Successfully !');
                    window.location.href = 'index.php';
                } else if (msg == "admin") {
                    alert('Login Successfully !');
                    window.location.href = 'admin/index.php';
                } else {
                    alert('Bad Crediential !');
                }
                
            },
            error: function()
            {
                alert('error');
            }
        });

    });
    $('#loginbtn').hide();
    $('#verifyEmail').click(function(){
        event.preventDefault();
        var cust_email = $('#cust_email').val();
        // alert(cust_email);
        var eotp = $('#emailOtp').val();
        if (eotp == "") {
            alert("Otp is required field !");
            $('#emailOtp').focus();
            return false;
        } else {

            // alert(eotp);
            $.ajax({
                url : 'ajaxRequest.php',
                type : 'POST',
                data : {
                    eotp : eotp,
                    cust_email : cust_email,
                    action : 'verifyEmailOtp',
                },
                success: function(msg)
                {
                    // alert(msg);
                    if (msg == true) {
                        $('#loginbtn').show();
                        $('#successMsg').html('Your Email has been verified !');
                    } else {
                        alert(msg);
                    }
                }
            });
        }
    });


    $('#verifyMobile').click(function(){
        event.preventDefault();
        var cust_mobile = $('#cust_mobile').val();
        // alert(cust_email);
        var motp = $('#mobileOtp').val();
        if (motp == "") {
            alert("Otp is required field !");
            $('#mobileOtp').focus();
            return false;
        } else {

            // alert(eotp);
            $.ajax({
                url : 'ajaxRequest.php',
                type : 'POST',
                data : {
                    motp : motp,
                    cust_mobile : cust_mobile,
                    action : 'verifyMobileOtp',
                },
                success: function(msg)
                {
                    // alert(msg);
                    if (msg == true) {
                        $('#loginbtn').show();
                        $('#successMsg').html('Your Mobile has been verified !');
                    } else {
                        alert(msg);
                    }
                }
            });
        }
    });

});



// $('#submit_email_otp').click(function(){
//     event.preventDefault();
//     var email_otp = $('#email_otp').val();
//     var email = $('#email').val();
//    if(email_otp == ""){
//        alert("Firstly Enter OTP , received in your email");
//    }
//    else{
//     $.ajax({
//         url:'userRequest.php',
//         type:'POST',
//         data:{
//             email_otp:email_otp, 
//             email:email,
//             action : 'verify_email_otp'
//         },
//         success:function(result){
//             console.log(result);
//         },
//         error: function(){
//             alert("error");
//         }
//     });
//    }
// });



// function status_email_approved($conn,$email){
//     $sql = "UPDATE `tbl_user` SET `email_approved` = '1' AND `active`= '1' WHERE `email` ='$email'";
//     $res= mysqli_query($conn,$sql);
//     // if (mysqli_query($conn, $sql)) {
//     // 	echo "<script>alert('Email approved !');</script>";
//     // } else {
//     // 	echo "<script>alert('Request Failed !');</script>";
//     // }
//     // return $msg;
//     }