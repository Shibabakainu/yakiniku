<link rel="stylesheet" href="styles/GoodCountButton2.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

<div style="text-align: right;">
    <button type="button" class="likeButton2" id="likeBtn2">
        <span class="material-symbols-outlined">thumb_up</span>
        <span id="likeCount2">11</span>
    </button>
</div>


<script>
    let likeCount2 = 11;
    const likeBtn2 = document.getElementById('likeBtn2');
    const likeCountSpan2 = document.getElementById('likeCount2');

    likeBtn2.addEventListener('click', function() {
        if (likeBtn2.classList.contains('liked')) {
            likeCount2--;
            likeBtn2.classList.remove('liked');
            document.addEventListener('DOMContentLoaded', function() {
                var likeButtons = document.getElementsByClassName('likeButton2');
                Array.from(likeButtons).forEach(function(likeButton2) {
                    likeButton.addEventListener('click', function() {
                        likeButton.classList.toggle('liked');
                    });
                });
            }, false);
        } else {
            likeCount2++;
            likeBtn2.classList.add('liked');
            document.addEventListener('DOMContentLoaded', function() {
                var likeButtons = document.getElementsByClassName('likeButton2');
                Array.from(likeButtons).forEach(function(likeButton2) {
                    likeButton.addEventListener('click', function() {
                        likeButton.classList.toggle('liked');
                    });
                });
            }, false);
        }
        likeCountSpan2.textContent = likeCount2;
    });
</script>
