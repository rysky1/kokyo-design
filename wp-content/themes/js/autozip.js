jQuery(document).ready(function($){
    $("#zip").onKeyUp(function(){
        var zip = $(this).parents('tr').next().find('input').attr('name');
        //郵便番号の次の入力項目を探してます
        AjaxZip3.zip2addr(this, '', zip, zip);
        //AjaxZip3.zip2addr( '〒上3桁', '〒下4桁', '都道府県', '市区町村' );
    });
});
