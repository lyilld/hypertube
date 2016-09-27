
if (nbPages < 5){
    if (nbPages == 1){
        hidden_all();
        document.getElementsByClassName("case2")[0].parentNode.style.visibility = "hidden";
        document.getElementsByClassName("case3")[0].parentNode.style.visibility = "hidden";
        document.getElementsByClassName("case4")[0].parentNode.style.visibility = "hidden";
        document.getElementsByClassName("case5")[0].parentNode.style.visibility = "hidden";
        document.getElementsByClassName("case2")[1].parentNode.style.visibility = "hidden";
        document.getElementsByClassName("case3")[1].parentNode.style.visibility = "hidden";
        document.getElementsByClassName("case4")[1].parentNode.style.visibility = "hidden";
        document.getElementsByClassName("case5")[1].parentNode.style.visibility = "hidden";
    }else if (nbPages == 2){
        document.getElementsByClassName("case3")[0].parentNode.style.visibility = "hidden";
        document.getElementsByClassName("case4")[0].parentNode.style.visibility = "hidden";
        document.getElementsByClassName("case5")[0].parentNode.style.visibility = "hidden";
        document.getElementsByClassName("case3")[1].parentNode.style.visibility = "hidden";
        document.getElementsByClassName("case4")[1].parentNode.style.visibility = "hidden";
        document.getElementsByClassName("case5")[1].parentNode.style.visibility = "hidden";
    }else if (nbPages == 3){
        document.getElementsByClassName("case4")[0].parentNode.style.visibility = "hidden";
        document.getElementsByClassName("case5")[0].parentNode.style.visibility = "hidden";
        document.getElementsByClassName("case4")[1].parentNode.style.visibility = "hidden";
        document.getElementsByClassName("case5")[1].parentNode.style.visibility = "hidden";
    }else if (nbPages == 4){
        document.getElementsByClassName("case5")[0].parentNode.style.visibility = "hidden";
        document.getElementsByClassName("case5")[1].parentNode.style.visibility = "hidden";
    }
}
var Case = 1;
var pc = 1;
var newNbPage;
function Button(action) {

    var nextButton = document.getElementsByClassName("nextButton");
    var previousButton = document.getElementsByClassName("previousButton");
    var newPage = parseInt(nextButton[0].value);

    pc = action > 1 ? pc += 1 : pc -= 1;
    newPage = action > 1 ? newPage += 1 : newPage -= 1;
    Case = action > 1 ? Case += 1 : Case -= 1;

    pagAjax(newPage, (function (callback) {
        nextButton[0].value = newPage;
        nextButton[1].value = newPage;
        previousButton[0].value = newPage;
        previousButton[1].value = newPage;

        if (newPage == 1 || newPage == nbPages)
            hidden_Button(newPage);
        else
            visibility_button();

        color_change();
    }));
}

function case_click(newPage) {
    pagAjax(newPage.value, (function (callback) {
    var nextButton = document.getElementsByClassName("nextButton");
    var previousButton = document.getElementsByClassName("previousButton");
    nextButton[0].value = newPage.value;
    nextButton[1].value = newPage.value;
    previousButton[0].value = newPage.value;
    previousButton[1].value = newPage.value;
    pc = parseInt(newPage.value);
    switch (newPage.className){
        case "case1 pagination-link" :
            Case = 1;
            break;
        case "case2 pagination-link" :
            Case = 2;
            break;
        case "case3 pagination-link" :
            Case = 3;
            break;
        case "case4 pagination-link" :
            Case = 4;
            break;
        case "case5 pagination-link" :
            Case = 5;
            break;
    }

    if (newPage == 1 || newPage == nbPages)
        hidden_Button(newPage);
    else
        visibility_button();

    color_change();
    }));
}

function change_num(val){
    var case1 = document.getElementsByClassName('case1');
    var case2 = document.getElementsByClassName('case2');
    var case3 = document.getElementsByClassName('case3');
    var case4 = document.getElementsByClassName('case4');
    var case5 = document.getElementsByClassName('case5');

    var i = parseInt(case1[0].value);

    if (val == 1){
        Case = 1;
        case1[0].value = i + 5;case2[0].value = i + 6;case3[0].value = i + 7;case4[0].value = i + 8;
        case5[0].value = i + 9;case1[1].value = i + 5;case2[1].value = i + 6;case3[1].value = i + 7;
        case4[1].value = i + 8;case5[1].value = i + 9;case1[0].innerHTML = i + 5;case2[0].innerHTML = i + 6;
        case3[0].innerHTML = i + 7;case4[0].innerHTML = i + 8;case5[0].innerHTML = i + 9;case1[1].innerHTML = i + 5;
        case2[1].innerHTML = i + 6;case3[1].innerHTML = i + 7;case4[1].innerHTML = i + 8;case5[1].innerHTML = i + 9;
    }else if (val == 2){
        Case = 5;
        case1[0].value = i - 5;case2[0].value = i - 4;case3[0].value = i - 3;case4[0].value = i - 2;
        case5[0].value = i - 1;case1[1].value = i - 5;case2[1].value = i - 4;case3[1].value = i - 3;
        case4[1].value = i - 2;case5[1].value = i - 1;case1[0].innerHTML = i - 5;case2[0].innerHTML = i - 4;
        case3[0].innerHTML = i - 3;case4[0].innerHTML = i - 2;case5[0].innerHTML = i - 1;case1[1].innerHTML = i - 5;
        case2[1].innerHTML = i - 4;case3[1].innerHTML = i - 3;case4[1].innerHTML = i - 2;case5[1].innerHTML = i - 1;
    }else if (val == 3){
        case1[0].value = 1;case2[0].value = 2;case3[0].value = 3;case4[0].value = 4;
        case5[0].value = 5;case1[1].value = 1;case2[1].value = 2;case3[1].value = 3;
        case4[1].value = 4;case5[1].value = 5;case1[0].innerHTML = 1;case2[0].innerHTML = 2;
        case3[0].innerHTML = 3;case4[0].innerHTML = 4;case5[0].innerHTML = 5;case1[1].innerHTML = 1;
        case2[1].innerHTML = 2;case3[1].innerHTML = 3;case4[1].innerHTML = 4;case5[1].innerHTML = 5;
    }
}

function hidden_Button(newPage){
    if (newPage == 1){
        document.getElementsByClassName("previousButton")[0].style.visibility = "hidden";
        document.getElementsByClassName("previousButton")[1].style.visibility = "hidden";}
    else{
        document.getElementsByClassName("nextButton")[0].style.visibility = "hidden";
        document.getElementsByClassName("nextButton")[1].style.visibility = "hidden";}
}

function  visibility_button(){
    document.getElementsByClassName("previousButton")[0].style.visibility = "visible";
    document.getElementsByClassName("previousButton")[1].style.visibility = "visible";
    document.getElementsByClassName("nextButton")[0].style.visibility = "visible";
    document.getElementsByClassName("nextButton")[1].style.visibility = "visible";
}

function hidden_all() {
    document.getElementsByClassName("previousButton")[0].style.visibility = "hidden";
    document.getElementsByClassName("previousButton")[1].style.visibility = "hidden";
    document.getElementsByClassName("nextButton")[0].style.visibility = "hidden";
    document.getElementsByClassName("nextButton")[1].style.visibility = "hidden";
}

function color_change(click) {

    if (Case == 0)
        change_num(2)
    else if(Case == 6 && parseInt(document.getElementsByClassName("case5")[0].value) < nbPages)
        change_num(1)

    var changeCase;
    var one = "pagination-item first-number is-active" ;
    var two = "pagination-item is-active";

    switch (Case){
        case 1 :
            changeCase = "case1";
            break;
        case 2 :
            changeCase = "case2";
            break;
        case 3 :
            changeCase = "case3";
            break;
        case 4 :
            changeCase = "case4";
            break;
        case 5 :
            changeCase = "case5";
            break;
    }

    document.getElementsByClassName("case1")[0].parentNode.className = "pagination-item first-number";
    document.getElementsByClassName("case2")[0].parentNode.className = "pagination-item";
    document.getElementsByClassName("case3")[0].parentNode.className = "pagination-item";
    document.getElementsByClassName("case4")[0].parentNode.className = "pagination-item";
    document.getElementsByClassName("case5")[0].parentNode.className = "pagination-item";
    document.getElementsByClassName("case1")[1].parentNode.className = "pagination-item first-number";
    document.getElementsByClassName("case2")[1].parentNode.className = "pagination-item";
    document.getElementsByClassName("case3")[1].parentNode.className = "pagination-item";
    document.getElementsByClassName("case4")[1].parentNode.className = "pagination-item";
    document.getElementsByClassName("case5")[1].parentNode.className = "pagination-item";

    var newColor = document.getElementsByClassName(changeCase);

    switch (Case){
        case 1 :
            newColor[0].parentNode.className = one;
            newColor[1].parentNode.className = one;
            break;
        default :
            newColor[0].parentNode.className = two;
            newColor[1].parentNode.className = two;
    }
    if (pc == 1 || pc == nbPages)
        hidden_Button(pc);
}


function callback() {

    var nextButton = document.getElementsByClassName("nextButton");
    var previousButton = document.getElementsByClassName("previousButton");

    Case = 1;
    pc = 1;
    nextButton[0].value = pc;
    nextButton[1].value = pc;
    previousButton[0].value = pc;
    previousButton[1].value = pc;

    hidden_Button(pc);
    remise();
    document.getElementsByClassName("nextButton")[0].style.visibility = "visible";
    document.getElementsByClassName("nextButton")[1].style.visibility = "visible";

    color_change();
    change_num(3);
}



function destroy_all(){
    document.getElementById("destroy").style.display = "none"
    document.getElementById("notFound").style.display = "block"
}

function new_all(){
    document.getElementById("destroy").style.display = "block"
    document.getElementById("notFound").style.display = "none"
}
function remise(){
    document.getElementsByClassName("nextButton")[0].style.visibility = "visible";
    document.getElementsByClassName("nextButton")[1].style.visibility = "visible";
    document.getElementsByClassName("case1")[0].parentNode.style.visibility = "visible";
    document.getElementsByClassName("case2")[0].parentNode.style.visibility = "visible";
    document.getElementsByClassName("case3")[0].parentNode.style.visibility = "visible";
    document.getElementsByClassName("case4")[0].parentNode.style.visibility = "visible";
    document.getElementsByClassName("case5")[0].parentNode.style.visibility = "visible";
    document.getElementsByClassName("case1")[1].parentNode.style.visibility = "visible";
    document.getElementsByClassName("case2")[1].parentNode.style.visibility = "visible";
    document.getElementsByClassName("case3")[1].parentNode.style.visibility = "visible";
    document.getElementsByClassName("case4")[1].parentNode.style.visibility = "visible";
    document.getElementsByClassName("case5")[1].parentNode.style.visibility = "visible";
}


function pagAjax(pag, callback, id)
{
    var search = 0;
    var	genre = document.getElementById('genre').value;
    var	filter = document.getElementById('filter').value;
    var	rated = document.getElementById('rated').value;
    var	years = document.getElementById('years').value;

    if (document.getElementById('search').value != '')
        search = document.getElementById('search').value;
    document.getElementById('search').value = '';
    $.ajax({
        url : path,
        type : 'POST',
        data : {'pag' : pag, 'genre' : genre, 'filter' : filter, 'rated' : rated, 'years' : years, 'search' : search},
        dataType : 'json',
        success : function(data)
        {
            new_all()
            if (data['count'] != 0){
                newNbPage = Math.ceil(data['count'] / 8);
                if(document.getElementById('content_page') != null){
                    const row = document.querySelector('#content_page');
                    row.parentNode.removeChild(row);
                }
                newDIvTest = document.createElement("div");
                newDIvTest.setAttribute("id", "content_page");
                var size = 0;
                console.log(data)
                for (var key in data)
                    if (data.hasOwnProperty(key)) size++;
                for(var i = 0; i < size - 1; i++){
                    var content =
                        '<div class="film_container" id="film">' +
                        '<a href="/stream/'+  data[i].Id +'" id="play_button" class="fa fa-youtube-play" aria-hidden="true"> </a>' +
                        '<h3 id="film_name" class="title">'+ data[i].Title +'</h3>' +
                        '<div class="plot">'+ data[i].Plot +'</div>'+
                        '<div class="actors">'+ data[i].Actor +'</div>' +
                        '<div class="rea">'+ data[i].Director +'</div>' +
                        '<div class="poster"><img id="real_poster" src="../../../'+ data[i].Poster +'"/></div>' +
                        '<div class="time">'+ data[i].Runtime +'</div>'+
                        '<div class="genre">'+ data[i].Genre +'</div>'+
                        '<div class="year">'+ data[i].Year +'</div>'+
                        '</div>';
                    newDIvTest.innerHTML += content;
                    document.querySelector('#test').appendChild(newDIvTest);
                }
            }else{
                newNbPage = 0;
            }

        },
        complete : function(data)
        {
            nbPages = newNbPage;

            if (newNbPage != 0) {
                //     new_all()
                if (newNbPage < 5) {
                    // document.getElementsByClassName("nextButton")[0].style.visibility = "visible";
                    // document.getElementsByClassName("nextButton")[1].style.visibility = "visible";
                    if (newNbPage == 1) {
                        hidden_all();
                        document.getElementsByClassName("case2")[0].parentNode.style.visibility = "hidden";
                        document.getElementsByClassName("case3")[0].parentNode.style.visibility = "hidden";
                        document.getElementsByClassName("case4")[0].parentNode.style.visibility = "hidden";
                        document.getElementsByClassName("case5")[0].parentNode.style.visibility = "hidden";
                        document.getElementsByClassName("case2")[1].parentNode.style.visibility = "hidden";
                        document.getElementsByClassName("case3")[1].parentNode.style.visibility = "hidden";
                        document.getElementsByClassName("case4")[1].parentNode.style.visibility = "hidden";
                        document.getElementsByClassName("case5")[1].parentNode.style.visibility = "hidden";
                    } else if (newNbPage == 2) {
                        document.getElementsByClassName("case3")[0].parentNode.style.visibility = "hidden";
                        document.getElementsByClassName("case4")[0].parentNode.style.visibility = "hidden";
                        document.getElementsByClassName("case5")[0].parentNode.style.visibility = "hidden";
                        document.getElementsByClassName("case3")[1].parentNode.style.visibility = "hidden";
                        document.getElementsByClassName("case4")[1].parentNode.style.visibility = "hidden";
                        document.getElementsByClassName("case5")[1].parentNode.style.visibility = "hidden";
                    } else if (newNbPage == 3) {
                        document.getElementsByClassName("case4")[0].parentNode.style.visibility = "hidden";
                        document.getElementsByClassName("case5")[0].parentNode.style.visibility = "hidden";
                        document.getElementsByClassName("case4")[1].parentNode.style.visibility = "hidden";
                        document.getElementsByClassName("case5")[1].parentNode.style.visibility = "hidden";
                    } else if (newNbPage == 4) {
                        document.getElementsByClassName("case5")[0].parentNode.style.visibility = "hidden";
                        document.getElementsByClassName("case5")[1].parentNode.style.visibility = "hidden";
                    }
                }
            }else {
                destroy_all();
            }
        }
    }).done(callback);
}