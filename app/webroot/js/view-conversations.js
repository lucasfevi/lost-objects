$(document).on('shown.bs.tab', 'a[data-toggle="tab"]', function (e)
{
    $($(this).attr('href') + ' p:last').focus().blur();
});

$(document).ready(function()
{
    $('#conversationMessages .well:first p:last').focus().blur();

    $('.form-send-message').on('submit', sendMessage);
});

function sendMessage(e)
{
	e.preventDefault();

	var dis  = this;
	var url  = $(dis).attr('action');
	var data = $(dis).serialize();

	$.post(url, data, function(response)
	{
		if (response.status == 'error') {
			alert("ERROR: Couldn't send your message!");
			return;
		}

		$(dis).parent().prepend('<p tabindex="10" class="text-right">' + response.message + '</p>');
		$(dis).find('.message').val('');
	}, 'json');
}