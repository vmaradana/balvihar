<?php foreach ($person as $person_item): ?>

    <h2><?php echo $person_item['person_id'] ?></h2>
    <div class="main">
        <?php echo $person_item['first_name'] ?>
    </div>
    <p><a href="news/<?php echo $person_item['person_id'] ?>">View Person Details</a></p>

<?php endforeach ?>
