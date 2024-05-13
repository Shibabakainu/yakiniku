<link rel="stylesheet" href="styles/GoodCountButton3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

<div style="text-align: right;">
    <button type="button" class="likeButton3" id="likeBtn3">
        <span class="material-symbols-outlined">thumb_up</span>
        <span id="likeCount3">4</span>
    </button>
</div>


<script>
    let likeCount3 = 4;
    const likeBtn3 = document.getElementById('likeBtn3');
    const likeCountSpan3 = document.getElementById('likeCount3');

    likeBtn3.addEventListener('click', function() {
        if (likeBtn3.classList.contains('liked')) {
            likeCount3--;
            likeBtn3.classList.remove('liked');
            document.addEventListener('DOMContentLoaded', function() {
                var likeButtons = document.getElementsByClassName('likeButton3');
                Array.from(likeButtons).forEach(function(likeButton3) {
                    likeButton.addEventListener('click', function() {
                        likeButton.classList.toggle('liked');
                    });
                });
            }, false);
        } else {
            likeCount3++;
            likeBtn3.classList.add('liked');
            document.addEventListener('DOMContentLoaded', function() {
                var likeButtons = document.getElementsByClassName('likeButton3');
                Array.from(likeButtons).forEach(function(likeButton3) {
                    likeButton.addEventListener('click', function() {
                        likeButton.classList.toggle('liked');
                    });
                });
            }, false);
        }
        likeCountSpan3.textContent = likeCount3;
    });
</script>
