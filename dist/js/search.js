function blogSearch() {
    // Declare variables
    var input, filter, a, i, txtValue;
    input = document.getElementById('searchBox');
    filter = input.value.toUpperCase();
    post = document.getElementsByClassName('index-post');

    // Loop through all posts, and hide those who don't match the search query
    for (i = 0; i < post.length; i++) {
        txtValue = post[i].innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            post[i].style.display = "";
        } else {
            post[i].style.display = "none";
        }
    }
}
