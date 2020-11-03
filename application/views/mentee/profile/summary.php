<?php foreach ($dt_summary as $summary) { ?>
    <p class="title-section">Skills or Competencies</p>
    <p class="title-child"><?php echo $summary->keahlian ?></p>
    <hr>
    <p class="title-section">Value</p>
    <p class="title-child"><?php echo $summary->value ?></p>
    <hr>
    <p class="title-section">Tagline</p>
    <p class="title-child"><?php echo $summary->tagline ?></p>
    <hr>
    <p class="title-section">Dream or Vision expected</p>
    <p class="title-child"><?php echo $summary->dream ?></p>
<?php } ?>