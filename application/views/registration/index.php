<h2><?php echo $title; ?></h2>

<?php foreach ($registration as $reg_item): ?>

        <h3><?php echo $reg_item['title']; ?></h3>
        <div class="main">
                <?php echo $reg_item['text']; ?>
        </div>
        <p><a href="<?php echo site_url('news/'.$reg_item['slug']); ?>">View article</a></p>

<?php endforeach; ?>