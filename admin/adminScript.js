$(document).ready(function() {
    $('#tableData').DataTable( {
        "ajax": 'adminRequest.php?fetchCategory=1'
    } );

    $('#viewProduct').DataTable( {
        "ajax": 'adminRequest.php?viewProduct=1'
    } );

    $('input, select').removeClass('is-invalid');
    

    $('#cid').focusout(function(){
        var cid = $('#cid').val();
        if (cid == '') {
            $('#cid').addClass('is-invalid');
        } else {
            $('#cid').addClass('is-valid');
            $('#cid').removeClass('is-invalid');
        }
    });
    $('#productName').on('focusout', validateProductName);
    $('#pageUrl').on('focusout', validateProductName);
    $('#monthPrice').on('blur', validatePrice);
    $('#annualPrice').on('blur', validatePrice);
    $('#sku').on('blur', validateSku);
    $('#webSpace').on('blur', validateGB);
    $('#bandWidth').on('blur', validateGB);
    $('#freeDomain').on('blur', validateNumber);
    $('#mailBox').on('blur', validateNumber);
    $('#language').on('blur', validateTechnology);
    // $('#prodForm').on('submit', validateForm);

    // $('#addProduct').attr('disabled', true);

    // var proname = 0;
    // var pageurl = 0;
    // var month = 0;
    // var annual = 0;
    // var sku = 0;
    // var webspace = 0;
    // var bandwidth = 0;
    // var freedomain = 0;
    // var mailbox = 0;
    // var language = 0;

    /**
     * Function for validateProductName
     * 
     * @return validateProductName()
     */
    function validateProductName()
    {
        let value = $(this).val();
        let pattern = /^[^0-9][a-zA-Z0-9-\s]+$/;

        if (value != '') {
                if (value[0] == ' ' || value[value.length-1] == ' ') {
                    $(this).addClass('is-invalid');
                    $('.invalid-feedback').html('No space allowed at start and end !');
                } else {
                    if (!pattern.test(value)) {
                        $(this).addClass('is-invalid');
                        $(this).removeClass('is-valid');
                        
                    } else {
                        $(this).addClass('is-valid');
                        $(this).removeClass('is-invalid');
                        $('#addProduct').attr('disabled', false);
                    }
                }
        } else {
            $(this).addClass('is-invalid');
            $(this).removeClass('is-valid');
            $('.invalid-feedback').html('Required field !');
        }
    }


    /**
     * Function for validatePrice
     * 
     * @return validatePrice()
     */
    function validatePrice()
    {
        let value = $(this).val();
        let pattern = /^([0-9]+(\.[0-9]+)?)$/;

        if (value != '') {
            if (value.length > 15) {
                $(this).addClass('is-invalid');
                $('.invalid-feedback').html('max-length 15 allowed !');
                $(this).removeClass('is-valid');
            } else {
                if (!pattern.test(value)) {
                    $(this).addClass('is-invalid');
                    $(this).removeClass('is-valid');
                } else {
                    $(this).addClass('is-valid');
                    $('#addProduct').attr('disabled', false);
                    $(this).removeClass('is-invalid');
                }
            }
        } else {
            $(this).addClass('is-invalid');
            $('.invalid-feedback').html
            $(this).removeClass('is-valid');('Required field !');
        }
    }


    /**
     * Function for validateSku
     * 
     * @return validateSku()
     */
    function validateSku()
    {
        let value = $(this).val();
        let pattern = /^[^0-9#-][a-zA-Z0-9#-]+$/;
        if (value != '') {
            if (!pattern.test(value)) {
                $(this).addClass('is-invalid');
                $(this).removeClass('is-valid');
            } else {
                $(this).addClass('is-valid');
                $('#addProduct').attr('disabled', false);
                $(this).removeClass('is-invalid');
            }
        } else {
            $(this).addClass('is-invalid');
            $('.invalid-feedback').html('Required field !');
            $(this).removeClass('is-valid');
        }
    }

    /**
     * Function for validateGB
     * 
     * @return validateGB()
     */
    function validateGB()
    {
        let value = $(this).val();
        let pattern = /^([0-9]+(\.[0-9]+)?)$/;
        if (value != '') {
            if (value.length > 5) {
                $(this).addClass('is-invalid');
                $('.invalid-feedback').html('max-length 5 allowed !');
                $(this).removeClass('is-valid');
            } else {
                if (!pattern.test(value)) {
                    $(this).addClass('is-invalid');
                    $(this).removeClass('is-valid');
                } else {
                    $(this).addClass('is-valid');
                    $('#addProduct').attr('disabled', false);
                    $(this).removeClass('is-invalid');
                }
            }
        } else {
            $(this).addClass('is-invalid');
            $(this).removeClass('is-valid');
            $('.invalid-feedback').html('Required field !');
        }
    }

    /**
     * Function for validateNumber
     * 
     * @return validateNumber()
     */
    function validateNumber()
    {
        let value = $(this).val();
        let pattern = /^[0-9]$/;
        if (value != '') {
            if (!pattern.test(value)) {
                $(this).addClass('is-invalid');
                $(this).removeClass('is-valid');
            } else {
                $(this).addClass('is-valid');
                $(this).removeClass('is-invalid');
                $('#addProduct').attr('disabled', false);
            }
        } else {
            $(this).addClass('is-invalid');
            $('.invalid-feedback').html('Required field !');
            $(this).removeClass('is-valid');
        }
    }



    /**
     * Function for validateTechnology
     * 
     * @return validateTechnology()
     */
    function validateTechnology()
    {
        let value = $(this).val();
        let pattern = /^[a-zA-Z0-9,\s]+$/;
        if (value != '') {
            if (value[0] == ' ' || value[value.length-1] == ' ') {
                $(this).addClass('is-invalid');
                $('.invalid-feedback').html('No space allowed at start and end !');
                $(this).removeClass('is-valid');
            } else if (!pattern.test(value)) {
                $(this).addClass('is-invalid');
                $(this).removeClass('is-valid');
            } else {
                $(this).addClass('is-valid');
                $('#addProduct').attr('disabled', false);
                $(this).removeClass('is-invalid');
            }
        } else {
            $(this).addClass('is-invalid');
            $('.invalid-feedback').html('Required field !');
            $(this).removeClass('is-valid');
        }
    }

    /**
     * Function for validate form
     * 
     * @return validateForm()
     */
    // function validateForm(e)
    // {
    //     // console.log('hii');
    //     alert('hii');
        
    // }





    $('#addProduct').click(function(e){
        event.preventDefault();
        // alert('success');
        let flag = 0;
        let fields = $('input, select');
        $.each(fields, function(index, item){
            if ($(item).val() == '') {
                $(this).addClass('is-invalid');
                flag = 0;
            } else {
                if ($(item).hasClass('is-invalid')) {
                   flag = 1;
                } else {
                   flag = 0;
                }
            }
        });
        
        var cid = ($('#cid').val()).trim();
        var productName = ($('#productName').val()).trim();
        var pageUrl = ($('#pageUrl').val()).trim();
        var monthPrice = ($('#monthPrice').val()).trim();
        var annualPrice = ($('#annualPrice').val()).trim();
        var sku = ($('#sku').val()).trim();
        var webSpace = ($('#webSpace').val()).trim();
        var bandWidth = ($('#bandWidth').val()).trim();
        var freeDomain = ($('#freeDomain').val()).trim();
        var language = ($('#language').val()).trim();
        var mailBox = ($('#mailBox').val()).trim();
            // $('#addProduct').attr('disabled', false);
            
            // console.log(cid, productName, pageUrl, monthPrice, annualPrice, sku, webSpace, bandWidth, freeDomain, language, mailBox);
        // if (cid == "" || productName == "" || monthPrice == "" || annualPrice == "" || sku == "" || webSpace == "" || bandWidth == "" || freeDomain == "" || language == "" || mailBox == "") {
        //     $('input, select').addClass('is-invalid');
        //     return false;
        // } else {
        // } 
        if(flag == 1) {
            $.ajax({
                url : 'adminRequest.php',
                type : 'POST',
                data : {
                    cid : cid,
                    productName : productName,
                    pageUrl : pageUrl,
                    monthPrice: monthPrice,
                    annualPrice : annualPrice,
                    sku : sku,
                    webSpace : webSpace,
                    bandWidth : bandWidth,
                    freeDomain : freeDomain,
                    language : language,
                    mailBox : mailBox,
                    action: 'addProduct'
                },
                success: function(msg)
                {
                    alert(msg);
                }
            });
        }
    });

   

    

    






    $('#tableData').on('click', '#editButton', function(){
        var id = $(this).data('id');
        // alert(id);
        $.ajax({
            url : 'adminRequest.php',
            type : 'POST',
            data : {
                id : id,
                action : 'editCategory',
            },
            dataType : 'json',
            success : function(msg)
            {
                // console.log(msg);
                // console.log(msg.prod_name);
                $('#ucname').val(msg.prod_name);
                $('#ulink').val(msg.html);
                $('#uid').val(msg.id);
            }
        });

    });

    $('#updateCategory').click(function(){
        // alert('hii');
        event.preventDefault();
        var cname = $('#ucname').val();
        var link = $('#ulink').val();
        var id = $('#uid').val();

        // console.log(cname, link);
        $.ajax({
            url : 'adminRequest.php',
            type : 'POST',
            data : {
                cname : cname,
                link : link,
                id : id,
                action: 'updateCategory'
            },
            success : function(msg)
            {
                alert(msg);
                window.location.reload();
            }
        });
    });


    $('#tableData').on('click', '#deleteButton', function(){
        var id = $(this).data('id');
        // alert(id);
        var conmsg = confirm('Are you sure want to delete..?');
        if (conmsg == true) {

            $.ajax({
                url : 'adminRequest.php',
                type : 'POST',
                data : {
                    id : id,
                    action : 'deleteCategory',
                },
                success : function(msg)
                {
                    alert(msg);
                    window.location.reload();
                }
            });
        }

    });


    $('#viewProduct').on('click', '#deleteProduct', function(){
        var id = $(this).data('id');
        // alert(id);
        var conmsg = confirm('Are you sure want to delete..?');
        if (conmsg == true) {

            $.ajax({
                url : 'adminRequest.php',
                type : 'POST',
                data : {
                    id : id,
                    action : 'deleteProduct',
                },
                success : function(msg)
                {
                    alert(msg);
                    window.location.reload();
                }
            });
        }

    });


    $('#viewProduct').on('click', '#editProduct', function(){
        var id = $(this).data('id');
        // alert(id);
        $.ajax({
            url : 'adminRequest.php',
            type : 'POST',
            data : {
                id : id,
                action : 'editProduct',
            },
            dataType : 'json',
            success : function(msg)
            {
                console.log(msg);
                console.log(msg[0]['prod_id']);
                $('#productName').val(msg[0]['prod_name']);

                $('#pageUrl').val(msg[0]['html']);
                $('#monthPrice').val(msg[0]['mon_price']);
                $('#annualPrice').val(msg[0]['annual_price']);
                $('#sku').val(msg[0]['sku']);
                $('#webSpace').val(msg[0]['webSpace']);
                $('#bandWidth').val(msg[0]['bandWidth']);
                $('#freeDomain').val(msg[0]['freeDomain']);
                $('#language').val(msg[0]['language']);
                $('#mailBox').val(msg[0]['mailBox']);

                $('#cid').val(msg[0]['prod_parent_id']);
                $('#updateDescId').val(msg[0]['id']);
                $('#updateCatId').val(msg[0]['prod_id']);

                // console.log(msg.prod_name);
                // $('#ucname').val(msg.prod_name);
                // $('#ulink').val(msg.link);
                // $('#uid').val(msg.id);
            }
        });
    });

    $('#updateProduct').click(function(e){
        e.preventDefault();
        // alert('hii');
        
        var cid = $('#cid').val();
        var productName = $('#productName').val();
        var pageUrl = $('#pageUrl').val();
        var monthPrice = $('#monthPrice').val();
        var annualPrice = $('#annualPrice').val();
        var sku = $('#sku').val();
        var webSpace = $('#webSpace').val();
        var bandWidth = $('#bandWidth').val();
        var freeDomain = $('#freeDomain').val();
        var language = $('#language').val();
        var mailBox = $('#mailBox').val();
        var updateDescId = $('#updateDescId').val();
        var updateCatId = $('#updateCatId').val();

        // console.log(cid, productName, pageUrl, monthPrice, annualPrice, sku, webSpace, bandWidth, freeDomain, language, mailBox);

        $.ajax({
            url : 'adminRequest.php',
            type : 'POST',
            data : {
                cid : cid,
                productName : productName,
                pageUrl : pageUrl,
                monthPrice : monthPrice,
                annualPrice : annualPrice,
                sku : sku,
                webSpace : webSpace,
                bandWidth : bandWidth,
                freeDomain : freeDomain,
                language : language,
                mailBox : mailBox,
                updateDescId : updateDescId,
                updateCatId : updateCatId,
                action : 'updateProduct'
            },
            success : function(msg)
            {
                alert(msg);
                window.location.reload();
            }
        });

    });

});