/**
 * Created by HAPPY WORLD 3 on 21/03/2018.
 */

$(document).ready(function () {
    var one_voucher_amount = 113.04;
    var minimum_quantity = 1;
    var current_percent = 0.1814;
    var days_percent = $("#duration").val() * current_percent;


    $("#voucher_quantity").val(minimum_quantity);
    var total = addAmount(minimum_quantity, days_percent);
    $("#pay_amount").val(total);

    $("#deduct").on("click", function() {

        var oldValue = $("#voucher_quantity").val();
        var newValue = parseFloat(oldValue) - 1;
        $("#voucher_quantity").val(newValue);

        changed(newValue);
    });

    $("#increase").on("click", function() {

        var oldValue = $("#voucher_quantity").val();
        var newValue = parseFloat(oldValue) + 1;
        $("#voucher_quantity").val(newValue);

        changed(newValue);

    });

    $("#voucher_quantity").on('input', function () {
        var newInput = $(this).val();
        var newValue = parseFloat(newInput)

        changed(newValue);
    });



    function changed(updVal)
    {
        var quantity = updVal;

        if(quantity < minimum_quantity)
        {
            alert('Oops, minimum Voucher quantity is 1 unit')
            $("#voucher_quantity").val(minimum_quantity);
            var min_amount = addAmount(minimum_quantity, days_percent);
            $("#voucher_amount").html('<h2 class="text-center" style="margin-top: 30px; margin-left:auto;">&#x20a6;' +min_amount+ '</h2>');
        }else{
            var amount = addAmount(quantity, days_percent);

            $("#voucher_amount").html('<h2 class="text-center" style="margin-top: 30px; margin-left:auto;">&#x20a6;' +amount+ '</h2>');
            $("#pay_amount").val(amount);
        }
    }

    // $("#voucher_quantity").on('change keyup', function () {
    // alert('hi');
    //     var quantity = $(this).val();
    //
    //     if(quantity < minimum_quantity)
    //     {
    //         alert('Oops, minimum Voucher quantity is 500 units')
    //         $("#voucher_quantity").val(minimum_quantity);
    //         var min_amount = addAmount(minimum_quantity, days_percent);
    //         $("#voucher_amount").html('<h2>&#x20a6;' +min_amount+ '</h2>');
    //     }else{
    //         var amount = addAmount(quantity, days_percent);
    //
    //         $("#voucher_amount").html('<h2>&#x20a6;' +amount+ '</h2>');
    //         $("#pay_amount").val(amount);
    //     }
    // });

    // $("#duration").on('change keyup', function () {
    //     // alert('hi');
    //
    //     var days = $(this).val();
    //     // alert('days:' + days);
    //     var days_percent = days * current_percent;
    //     // alert('Percent:' + days_percent);
    //     var quantity = $("#voucher_quantity").val();
    //
    //     // alert('quantity:' + quantity);
    //
    //     if(days < 1)
    //     {
    //         // alert('Oops, minimum days 1')
    //         days.val(1);
    //     }else{
    //         var amount = addAmount(quantity, days_percent);
    //
    //         $("#voucher_amount").html('<h2>&#x20a6;' +amount+ '</h2>');
    //         $("#pay_amount").val(amount);
    //     }
    // });

    $("#calc_clear").click(function () {
        $("#voucher_amount").html("");

    });


    function addAmount(quantity, days_percent)
    {

        var am = quantity * one_voucher_amount;
        var ap = am * days_percent;
        var amount = am + ap;

        $("#voucher_amount").html('<h2>&#x20a6;' +amount+ '</h2>');
        return amount;
    }

    // alert('hello');

$(".compose").click(function () {

    compose()

});
$(".composeOne").click(function () {

    compose()

});
$(".composeAll").click(function () {

    compose()

});


    function compose() {
        // alert('forget');
        $.ajaxSetup({
            headers:{
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });

        $.ajax({
            type: "POST",
            url: "sendmail",
            dataType: 'html',
            success: function (data) {

                if (data !== null) {

                    $(".mailContent").show();
                    $(".mailContent").html(data);

                } else {

                    $(".mailContent").html("<p> No data available");

                }
            }

        });
    }



    $("#paidVoucher").click(function () {
        $(this).loadingOverlay('show');
    });


    function copyToClipboard() {
        alert('hi');
        var link = $("#ref_link").attr('data-link').val();

        alert(link);
    }







});
