/* comentários */

// função de carregamento dinâmico (carregar página dinamicamente)
//$(document).ready(function(){
    // seleciona classe 'menu' ao clicar.
//    $(".menu").on("click", function () {
//        // console.log('teste')
//        // seta variável para renderizar arquivo html.
//           var item = $(this);
//        // console.log(item.data('url'))
//        // usa ajax para chamar o arquivo dentro da classe 'principal'
//        $.ajax(item.data('url')).done(function(data){
//            $(".content").html(data);
//       });
//    })
//});

// função de pesquisa por parâmetros (jquery)
$(document).ready(function () {
    $('.search').on('keyup', function () {
        var filtro = $(this).val().toLowerCase();
        $('.datagrid').find('tr').each(function () {
            var content = $(this).find('td').text();
            var datagrid = content.toLowerCase().indexOf(filtro) >= 0;
            $(this).css('display', datagrid ? '' : 'none');
        });
    });
});