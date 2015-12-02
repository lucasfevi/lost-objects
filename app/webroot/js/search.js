$(document).ready(function()
{
    $('.filter-choice').on('click', chooseFilter);
});

function chooseFilter(e)
{
    e.preventDefault();

    $('#filterName').html($(this).html());
    $('#filter').val($(this).data('filter'));
}
