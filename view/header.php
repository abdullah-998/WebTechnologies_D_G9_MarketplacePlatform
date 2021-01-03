<div class="header-container">
    <h1 class="header-name">Riverr<span id="dot">.</span></h1>
    <input type="text" name="search" id="search-box" placeholder="search...">
    <a href="#" id="search-button">search</a>
    <div class="header-right">
        <a href="http://localhost/php/webTechnologies_D_G9_MarketplacePlatform/view/home.php" class="header-right-menus">Home</a>
        <a href="http://localhost/php/webTechnologies_D_G9_MarketplacePlatform/view/notification.php" class="header-right-menus">Notification</a>
        <a href="http://localhost/php/webTechnologies_D_G9_MarketplacePlatform/view/message.php" class="header-right-menus">Message</a>
        <a href="http://localhost/php/webTechnologies_D_G9_MarketplacePlatform/view/profile.php?user_id=<?=$_SESSION['id']?>" class="header-right-menus"><?=$_SESSION['name']?></a>
        <a href="../controller/logoutCheck.php" class="header-right-menus btn1">Log out</a>
    </div>
</div>