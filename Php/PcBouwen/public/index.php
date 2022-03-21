<?php

require_once ('header.php');

?>


<div class="page home">
    <div class="container">
        <h1>Informatie</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo inventore magni mollitia numquam optio quam qui quod rem reprehenderit temporibus? Aspernatur consectetur consequuntur doloremque eos est eum fugiat officia voluptatem.</p>
    </div>
</div>


<section class="hero">
    <div class="content">
        <h1>PCWinkel.nl</h1>
        <p>Kies tussen een van onze Prebuilds of bouw zelf je droom pc!</p>
        <div class="btn-group">
        <a href="<?php echo PUBLIC_PATH;?>/PreBuilds.php"" class="btn-primary">Prebuilds</a>
            <a href="<?php echo PUBLIC_PATH;?>/Custom.php"" class="btn-secondary">Custom pc's</a>
        </div>
    </div>
</section>

<?php

require_once ('footer.php');

?>