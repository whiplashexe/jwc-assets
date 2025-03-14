<?php if ($opsi == 'profile'): ?>
    <?php foreach ($data->data as $key => $item): ?>
        <div class="col-md-6">
            <iframe width="100%" height="315" src="https://www.youtube.com/embed/<?= $item->video_id ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>
    <?php endforeach ?>  
<?php endif ?>

<?php if ($opsi == 'video'): ?>
    <?php if (!empty($data->title)): ?>      
        <h5 class="heading-light background-color-primary pd10"><strong><?= $data->title ?></strong></h5>
    <?php endif ?>
    <ul class="nav nav-list flex-column mb-4">   
        <?php foreach ($data->data as $key => $item): ?>
           <li class="nav-item"><a class="nav-link" href="<?= $func->link(ROUTE_VIDEO_VIEW.$item->slug) ?>"><?= $item->title ?></a></li>
       <?php endforeach ?>
   </ul>
   <hr class="invisible mt-5 mb-2">
   <?php endif ?>

   <?php if ($opsi == 'video_style_2'): ?>
    <?php if (!empty($data->title)): ?>      
        <h5 class="heading-light background-color-tertiary pd10"><strong><?= $data->title ?></strong></h5>
    <?php endif ?>
        <?php foreach ($data->data as $key => $item): ?>
          <iframe style="width: 100%; height: 250px;" src="https://www.youtube.com/embed/<?= $item->video_id ?>" frameborder="0"></iframe>
       <?php endforeach ?>
   <hr class="invisible mt-5 mb-2">
   <?php endif ?>