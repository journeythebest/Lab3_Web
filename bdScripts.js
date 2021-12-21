function addReviews() {
    var count = document.getElementsByClassName('review').length;
    let Req = new XMLHttpRequest();
    Req.onload = function () {
        const reviews = JSON.parse(this.responseText);
        let i = 0;
        while (i < reviews.length) {
            document.getElementById('container').innerHTML += reviews[i];
            i++;
        }
    }
    Req.open("get", "load_data.php?count=" + count, true);
    Req.send();
}