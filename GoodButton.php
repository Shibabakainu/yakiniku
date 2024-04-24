<link rel="stylesheet" href="styles/GoodButton.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

<div style="text-align: right;">
    <button type="button" class="likeButton">
        <span class="material-symbols-outlined">thumb_up</span>
    </button>
</div>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        var likeButtons = document.getElementsByClassName('likeButton');
        Array.from(likeButtons).forEach(function(likeButton) {
            likeButton.addEventListener('click', function() {
            likeButton.classList.toggle('liked');
            });
        });
    }, false);
</script>
