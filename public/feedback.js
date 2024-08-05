function apagaFeedBack(id, tempo) {
    setTimeout(function() {
        document.getElementById(id).remove();
    }, tempo);
}