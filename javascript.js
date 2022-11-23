

window.onload = function(){

    var topo = document.getElementById('topo');
    topo.addEventListener('click', irTopo);

    function irTopo(){
        let topoBt = document.getElementById('topo');
        if (window.scrollY>=100){
            window.scrollTo(0,0);
            topoBt.style.display = 'none';
        }
    }
}

window.addEventListener('scroll', function(){
    let topoBt = document.getElementById('topo');
    if (window.scrollY>=200){
        topoBt.style.display = 'block';
    }
    if (window.scrollY<200){
        topoBt.style.display = 'none';
    }
});


function openSideBar() {

    let check = document.getElementById('sidebarcheck');
    let sidebar = document.getElementById('sidebar');
    let sidebar_a = document.getElementById('sidebar').children;
    let sidebaritem = document.getElementsByClassName('sidebaritem');
    let fundo = document.getElementById('darkbackground');
    let todos = document.querySelector('*');

    if (check.checked) {
        check.checked = false;
        sidebar.style.width = '0px';
        sidebar.style.transform = 'translateX(-2px)';
        // fundo.style.display = 'none';
        fundo.style.opacity = '0';
        todos.style.overflow = '';
        for (i=0;i<sidebaritem.length;i++){
            let item = sidebaritem[i];
            item.style.opacity = "0";
        }

        function aNone() {
            for (i=0;i<sidebar_a.length;i++){
            let a = sidebar_a[i];
            a.style.display = "none";
            }
        }

        var timer = setInterval(aNone(),250);
        clearInterval(timer);
    
        // console.log('fechando sidebar');
    }


    else{
        check.checked = true;
        sidebar.style.width = '240px';
        // fundo.style.display = 'block';
        fundo.style.opacity = '0.3';
        if (window.innerWidth<=678){
        todos.style.overflow = 'hidden';
        }
        for (i=0;i<sidebaritem.length;i++){
            let item = sidebaritem[i];
            item.style.opacity = "1";
        }
        for (i=0;i<sidebar_a.length;i++){
            let a = sidebar_a[i];
            a.style.display = "block";
        }
        // console.log('abrindo sidebar');
    }

}

function fecharSideBar() {

    let check = document.getElementById('sidebarcheck');
    let sidebar = document.getElementById('sidebar');
    let sidebar_a = document.getElementById('sidebar').children;
    let sidebaritem = document.getElementsByClassName('sidebaritem');
    let fundo = document.getElementById('darkbackground');
    let todos = document.querySelector('*');

    if (check.checked) {
        check.checked = false;
        sidebar.style.width = '0px';
        sidebar.style.transform = 'translateX(-2px)';
        fundo.style.opacity = '0';
        todos.style.overflow = '';
        for (i=0;i<sidebaritem.length;i++){
            let item = sidebaritem[i];
            item.style.opacity = "0";
        }

        function aNone() {
            for (i=0;i<sidebar_a.length;i++){
            let a = sidebar_a[i];
            a.style.display = "none";
            }
        }

        var timer = setInterval(aNone(),250);
        clearInterval(timer);
    
        // console.log('fechando sidebar');
    }
}

function temaEscuro() {
    let check = document.getElementById('checkdark');
    let topo = document.getElementById('topo');
    let texto = document.getElementById('textescuro');
    let header = document.getElementsByTagName('header');
    let tr = document.getElementsByTagName('tr');
    let table = document.getElementsByTagName('table');
    let logo = document.getElementById('logo');
    let caixabars = document.getElementsByClassName('caixabars');
    let sidebar = document.getElementById('sidebar');
    let sidebaritem = document.getElementsByClassName('sidebaritem');
    let container = document.getElementsByClassName('container');
    let conteudo = document.getElementsByClassName('conteudo');
    let main = document.getElementsByTagName('main');
    let article = document.getElementsByTagName('article');
    let i_tag = document.getElementsByTagName('i');
    let h1 = document.getElementsByTagName('h1');
    let h2 = document.getElementsByTagName('h2');
    let h3 = document.getElementsByTagName('h3');
    let h4 = document.getElementsByTagName('h4');
    let h5 = document.getElementsByTagName('h5');
    let a = document.getElementsByTagName('a');
    

    // Claro
    if (check.checked) {
        check.checked = false;
        header[0].classList.remove('escuro');
        logo.src = 'img/logo.png';
        sidebar.classList.remove('escuro');
        topo.classList.remove('escuro');
        conteudo[0].classList.remove('escuro');
        main[0].classList.remove('escuro');
        texto.textContent = 'Escuro';
        for(i=0;i<caixabars.length;i++){
            caixabars[i].classList.remove('escuro');
        }
        for(i=0;i<article.length;i++){
            article[i].classList.remove('escuro');
        }
        for(i=0;i<i_tag.length;i++){
            i_tag[i].classList.remove('escuro');
        }
        for(i=0;i<h1.length;i++){
            h1[i].classList.remove('escuro');
        }
        for(i=0;i<h2.length;i++){
            h2[i].classList.remove('escuro');
        }
        for(i=0;i<h3.length;i++){
            h3[i].classList.remove('escuro');
        }
        for(i=0;i<h4.length;i++){
            h4[i].classList.remove('escuro')
        }
        for(i=0;i<h5.length;i++){
            h5[i].classList.remove('escuro');
        }

        for(i=0;i<sidebaritem.length;i++){
            sidebaritem[i].classList.remove('escuro');
        }
        for(i=0;i<container.length;i++){
            container[i].classList.remove('escuro');
        }
        for(i=0;i<tr.length;i++){
            tr[i].classList.remove('escuro');
        }
        for(i=0;i<table.length;i++){
            table[i].classList.remove('escuro');
        }
        for(i=0;i<a.length;i++){
            a[i].classList.remove('escuro');
        }
    }

    // Escuro
    else{ 
        check.checked = true;
        header[0].classList.add('escuro');
        topo.classList.add('escuro');
        logo.src = 'img/logoBranco.png';
        sidebar.classList.add('escuro');
        conteudo[0].classList.add('escuro');
        main[0].classList.add('escuro');
        texto.textContent = 'Claro';
        for(i=0;i<caixabars.length;i++){
            caixabars[i].classList.add('escuro');
        }
        for(i=0;i<article.length;i++){
            article[i].classList.add('escuro');
        }
        for(i=0;i<i_tag.length;i++){
            i_tag[i].classList.add('escuro');
        }
        for(i=0;i<h1.length;i++){
            h1[i].classList.add('escuro');
        }
        for(i=0;i<h2.length;i++){
            h2[i].classList.add('escuro');
        }
        for(i=0;i<h3.length;i++){
            h3[i].classList.add('escuro')
        }
        for(i=0;i<h4.length;i++){
            h4[i].classList.add('escuro')
        }
        for(i=0;i<h5.length;i++){
            h5[i].classList.add('escuro')
        }
        for(i=0;i<sidebaritem.length;i++){
            sidebaritem[i].classList.add('escuro');
        }
        for(i=0;i<container.length;i++){
            container[i].classList.add('escuro');
        }
        for(i=0;i<tr.length;i++){
            tr[i].classList.add('escuro');
        }
        for(i=0;i<table.length;i++){
            table[i].classList.add('escuro');
        }
        for(i=0;i<a.length;i++){
            a[i].classList.add('escuro');
        }
    }
}


