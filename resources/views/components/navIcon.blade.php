<div id="container-floating" class="fixed bottom-8 right-2 z-50">
    <div class="menu-content" id="menuContent">
        <div class="nds">
            <a class="ilink" href="#"><i class="ri-instagram-line text-orange-600 text-2xl"></i></a>
        </div>
        <div class="nds">
            <a class="ilink" href="#"><i class="ri-linkedin-box-fill text-blue-600 text-2xl"></i></a>
        </div>
        <div class="nds">
            <a class="ilink" href="#"><i class="ri-facebook-circle-fill text-blue-600 text-2xl"></i></a>
        </div>
    </div>

    <div id="floating-button"
        class="w-14 h-14 rounded-full bg-green-500 flex justify-center items-center cursor-pointer transition-colors duration-300">
        <i class="ri-add-line text-white text-2xl"></i>
        <i class="ri-subtract-line text-white text-2xl hidden"></i>
    </div>
</div>
<a href="/" class="fixed bottom-0 right-0 p-4 float-right">
    <div>
        <i class="ri-arrow-up-line text-2xl p-2 rounded-full bg-slate-100 border"></i>
    </div>
</a>
<script>
    const floatingButton = document.getElementById('floating-button');
    const menuContent = document.getElementById('menuContent');

    floatingButton.addEventListener('click', () => {
        menuContent.classList.toggle('show');
        floatingButton.classList.toggle('open');
    });
</script>
