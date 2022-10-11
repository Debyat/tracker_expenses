function sidebar(){
    var element = document.getElementById('sidebar');
    element.classList.remove("hidden");
}

function close_sidebar(){
    var element = document.getElementById('sidebar');
    element.classList.add("hidden");
}

function show_modal(){
    document.getElementById('modal').style.display = 'flex';
    document.getElementById('body').style.overflow = 'hidden';
}

function close_modal(){
    document.getElementById('modal').style.display = 'none';
    document.getElementById('body').style.overflow = 'auto';
}
