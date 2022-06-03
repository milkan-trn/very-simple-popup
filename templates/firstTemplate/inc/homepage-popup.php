<!--Homepage Popup-->
<div class="popup-container" style="display:none;">
    <div class="popup-row">
        <div class="popup-col-6">
            <img src="https://www.mehadrin.com/wp-content/uploads/2022/05/Mehadrin-Shavuos-Cookbook-2022.png" alt="Shavous Cookbook" width="455" height="469">
        </div>
        <div class="popup-col-6">
        <div class="close-button">&#43;</div>
            <p>Our Shavuos Cookbook <br>2022 is out!</p>
            <p>
            Download our new cookbook with 20 new groundbreaking recipes, mouthwatering dishes, and innovative desserts.
        </p>
        <a class="popup_download_button" href="https://www.mehadrin.com/wp-content/uploads/2022/05/Mehadrin-Shavuos-Cookbook-2022.pdf" download>Download now</a>
        </div>

    </div>

</div>

<script>
function close_button(){
    let close_button = document.querySelector('.close-button');
    let popup_container = document.querySelector('.popup-container');
    
    close_button.addEventListener('click', function() {
        popup_container.style.display = "none";
    });
    const myInterval = setTimeout(function () {popup_container.style.display = "flex";}, 4000);

}
close_button();



</script>