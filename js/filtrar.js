$(document).ready(function(){

$('.category_lista .category_item[category="all"]').addClass('item_active');

$('.category_item').click(function(){

    var catProduct = $(this).attr('category');


    $('.category_item').removeClass('item_active');
    $(this).addClass('item_active');

    $('.card').css('transform', 'scale(0)');
    function hideProduct(){
        $('.card').hide();
    } setTimeout(hideProduct,400);

    function showProduct(){
        $('.card[category="'+catProduct+'"]').show();
        $('.card[category="'+catProduct+'"]').css('transform', 'scale(1)');
    } setTimeout(showProduct,400)

});

$('.category_item[category="all"]').click(function(){
    function showAll(){
        $('.card').show();
        $('.card').css('transform', 'scale(1)');
    } setTimeout(showAll,400);

});

});
