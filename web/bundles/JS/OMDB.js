function omdb_data($movie_name, $id)
{
    //alert($movie_name + ' ' + $id);
    var sUrl, oData;
    $Container = $('#film' + $id);
    //alert('film' + $id);
    sUrl = 'https://www.omdbapi.com/?t=' + $movie_name + '&type=movie&tomatoes=true'
    $.ajax(sUrl, {
        complete: function(p_oXHR, p_sStatus){
            oData = $.parseJSON(p_oXHR.responseText);
            $Container.find('.title').text(oData.Title);
            $Container.find('.plot').text(oData.Plot);
            $Container.find('.poster').html('<img src="' + oData.Poster + '"/>');
            $Container.find('.year').text(oData.Year);
        }
    });
}