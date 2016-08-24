$('document').ready(function()
    {
        $('#cho').change(function(){
            $('#db').val($(this).val());
            loadFields();
        });

        $('#db').val($('#db').val());

        loadFields();

        $('#calculate').live('click',function(e){
            ajax();
            e.preventDefault();
        });

        $('#print').live('click',function(e){

            var name = $("#cho option:selected").text();
            var html = $('#grid-container').html();
            if(name && html)
            {
                $('#print_name').val(name);
                $('#print_html').val(html);
                $('#print_form').submit();
            }


        });

        $("#cho").val("proline");


    });

function ajax()
{
    if(!validate())
        return false;

    $('#loading').removeClass('hidden');

    var data = '';
    data = $('#form').serialize();
    data+= '&db=' + $('#db').val();

    $.ajax({
        type: 'POST',
        url: '../htdocs/ajax.php',
        data: data,
        success: function(response)
        {
            $('#loading').addClass('hidden');
            $('#grid-container').html(response);

            $('#containers').removeClass('hidden');
        }
    });

    return true;
}

function validate()
{
    var valid = true;

    $('.data').each(function(){

        var label = $(this).siblings('label').html();
        var val = parseInt($(this).val());
        var max = parseInt($(this).attr('max'));
        var min = parseInt($(this).attr('min'));

        if(val > max || val < min)
        {
            var error = val > max ? 'max:' + max : 'min:' + min;

            $('<div class="validate-label"><span class="cap">'+label+'</span> '+error+'</div>')
            .appendTo($(this).parent('.inputs'))
            .delay(2000).fadeOut("slow",function(){
                $(this).remove();
            });

            valid = false;
        }
    });

    return valid;
}

function loadFields()
{
    var data = 'db=' + $('#db').val();

    $.ajax({
        type: 'POST',
        url: '../htdocs/inputs.php',
        data: data,
        success: function(response)
        {
            $('#form').html(response);
            ajax();

        }
    });
}

function log(value)
{
    if (typeof console != "undefined")
    {
        console.log(value);
    }
}

function getQueryParams(qs)
{
    qs = qs.split("+").join(" ");

    var params = {}, tokens,
    re = /[?&]?([^=]+)=([^&]*)/g;

    while (tokens = re.exec(qs)) {
        params[decodeURIComponent(tokens[1])]
        = decodeURIComponent(tokens[2]);
    }

    return params;
}


