$(document).on('shown.bs.tab', 'a[data-toggle="tab"]', function (e)
{
    $($(this).attr('href') + ' p:last').focus().blur();
});

$(document).ready(function()
{
    $('#conversationMessages .well:first p:last').focus().blur();
});