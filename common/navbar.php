<nav class="navbar z-50 p-4">

    <?php
    include "cart/cart.php";
    include "search.php";
    $newsUpdate = true;
    ?>


    <ul class="navbar-list flex justify-around text-gray-400">
        <li>
            <a href="index.php" class="block flex flex-col items-center <?php echo($navActive == 'home') ? 'active' : '';?> ">
                <i class="fas fa-home pt-2"></i>
                <span>Home</span>
            </a>
        </li>
        <li>
            <a onclick="toggleSec('search')" class="block flex flex-col items-center">
                <i class="fas fa-search pt-2"></i>
                <span>Cerca</span>
            </a>
        </li>
        <li>
            <a onclick="toggleSec('cart')" class="block flex flex-col items-center">
                <i class="fas fa-shopping-cart pt-2"></i>
                <span>Carrello</span>
            </a>
        </li>
        <li>
            <a href="news.php" class="block flex flex-col items-center <?php echo($navActive == 'news') ? 'active' : '';?>">
                <i class="fab fa-buffer pt-2 relative">
                    <?php
                    if($newsUpdate):?>
                        <i class="fas fa-dot-circle text-xs absolute block text-red-300 rounded-full" style="top:0; left: 80%;"></i>
                    <?php endif; ?>
                </i>
                <span>News</span>
            </a>
        </li>
        <li>
            <a href="login_front.php" class="block flex flex-col items-center <?php echo($navActive == 'profile') ? 'active' : '';?>">
                <i class="fas fa-user pt-2"></i>
                <span>Profilo</span>
            </a>
        </li>
    </ul>
</nav>

<script type="text/javascript">
    function toggleSec(sectionId){
        el = document.getElementById(sectionId);
        if(el.classList.contains('max-height-menu-0')){
            el.classList.remove('max-height-menu-0');
            el.classList.add('max-height-menu-full');
        }
        else{
            el.classList.remove('max-height-menu-full');
            el.classList.add('max-height-menu-0');
        }
    }
</script>
