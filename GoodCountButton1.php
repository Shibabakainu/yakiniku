<link rel="stylesheet" href="styles/GoodCountButton1.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

<div style="text-align: right;">
    <button type="button" class="likeButton1" id="likeBtn1">
        <span class="material-symbols-outlined">thumb_up</span>
        <span id="likeCount1">6</span>
    </button>
</div>


<script>
    let likeCount1 = 6;
    const likeBtn1 = document.getElementById('likeBtn1');
    const likeCountSpan1 = document.getElementById('likeCount1');

    likeBtn1.addEventListener('click', function() {
        if (likeBtn1.classList.contains('liked')) {
            likeCount1--;
            likeBtn1.classList.remove('liked');
            document.addEventListener('DOMContentLoaded', function() {
                var likeButtons = document.getElementsByClassName('likeButton1');
                Array.from(likeButtons).forEach(function(likeButton1) {
                    likeButton.addEventListener('click', function() {
                        likeButton.classList.toggle('liked');
                    });
                });
            }, false);
        } else {
            likeCount1++;
            likeBtn1.classList.add('liked');
            document.addEventListener('DOMContentLoaded', function() {
                var likeButtons = document.getElementsByClassName('likeButton1');
                Array.from(likeButtons).forEach(function(likeButton1) {
                    likeButton.addEventListener('click', function() {
                        likeButton.classList.toggle('liked');
                    });
                });
            }, false);
        }
        likeCountSpan1.textContent = likeCount1;
    });
</script>
