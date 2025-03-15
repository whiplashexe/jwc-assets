<section class="pad6rem revieww" style="background: #191818;">
    <div class="container-global wow fadeIn" wow-data-duration="2s">

        <div class="title-general text-center">
            <span class="tag-ats">Our Testimonials</span>
            <h2 class="title text-light">What Our Riders Say?</h2>
        </div>

        <div class="review-slide revrev ss-arrow mt-5">

        <?php $review_single = $func->get_review() ?>

        <?php foreach ($review_single as $items): ?>

            <div class="rev-card">
                <div class="card p-4">
                    <div class="profile mb-4 d-flex align-items-center">
                        <img src="<?= $items->img ?>" alt="<?= $items->guest ?>" class="" />

                        <div class="txt-rev">
                            <h3 class="name mb-1"><?= $items->guest ?></h3>
                            <span class="from">Riders</span>
                        </div>
                    </div>
                    <div class="caption">
                        <p class="review-message" id="message-<?= $items->id ?>" data-full-message="<?= htmlspecialchars($items->message) ?>" data-short-message="<?= htmlspecialchars(strlen($items->message) > 300 ? substr($items->message, 0, 300) . '...' : $items->message) ?>">
                            <?= strlen($items->message) > 300 ? substr($items->message, 0, 300) . '...' : $items->message ?>
                        </p>
                        <?php if (strlen($items->message) > 300): ?>
                            <a class="read-more" onclick="toggleMessage('message-<?= $items->id ?>', true)">Read More</a>
                            <a class="read-less d-none" onclick="toggleMessage('message-<?= $items->id ?>', false)">Read Less</a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
        </div>



    </div>
</section>
