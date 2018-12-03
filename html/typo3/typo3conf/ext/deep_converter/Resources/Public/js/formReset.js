// Nova java skript funkcija
$(document).ready(function () {
    $('#button').click(function () {
        $(':input', '#mass').not(':button, :submit, :reset, :hidden').val('');
    });
});

$(document).ready(function () {
    //dohvatio sam sva polja tipa number i hvatam ivent Change
    $("#mass input[type=number]").change(function () {
        var input = $(this) ;

        $("#mass input").not(':button, :submit, :reset, :hidden').each(function () {
            if(input.val() !== '') {
                //this se odnosi na funckiju u kojoj se nalazim
                //ako je vrdnost setovana na jednom ostalim daj prazno
                // i readonli atribut
                $(this).not(input).val('');
                $(this).not(input).attr('readonly', 'true');
            }
            else {
                // ako nije skloni atribut
                $(this).not(input).removeAttr('readonly');
            }
        });
    });
});