function showModals(imgStr) {
    var urlImage = imgStr;
    $('#imgmodalshow').attr("src",urlImage);
    $('#showcontimg').modal('show');
}