<style type="text/css">

html .faq .toggle-primary .toggle label {
    border-radius: 0px;
    font-family: var(--subtext);
    font-weight: 600;
    text-transform: unset;
    padding: 15px;
    line-height: 30px;
    font-size: 15px;
    color: var(--colors);
    letter-spacing: 0.1px;
    margin-bottom: 0px;
    background: #f0f0f0;
}

html .faq .toggle-primary .toggle.active>label {
    background-color: var(--colors);
    border-color: var(--colors);
    color: #fff;
}

.faq .toggle.active>label:before {
    transform: rotate(-45deg) translate3d(0,-50%,0);
    top: calc(50% + 1px);
}

.faq .toggle>label:before { 
    transform: rotate(135deg);
    top: calc(50% - 8px);
}

.faq .toggle-content {
    padding: 25px 30px;
    border: 1px solid #ccc;
    margin-bottom: 25px;
    font-family: var(--subtext);
    background: white;
}

.faq .toggle-content p {
    padding: 0 !important;
    margin-bottom: 15px !important;
    color: var(--color2);
}

.faq .toggle>label { background:white; }

.faq .toggle label h3 {
    margin-bottom: 0;
    text-transform: unset;
    font-size: 17px;
    line-height: 30px;
    font-weight: 600;
    letter-spacing: 0px;
    font-family: var(--primtext);
}

html .faq .toggle-primary .toggle.active>label h3 { color:white; }

@media (max-width: 768px) {
    .faq .toggle label h3 {
        padding: 5px;
        font-size: 15px;
        padding-right: 50px;
    }

    .faq .toggle { margin-bottom:0; }
}
</style>

<section class="pad6rem faq" style="background: #f9f9f9;">


    <?php 
        $_faq = json_decode(json_encode([
            'span' => 'Before you book',
            'title' => 'Everything You Need to Know <span>About Your Bali Taxi</span>',
            'items' => [
                'left' => [
                    [
                        'title' => 'How do I make a booking?',
                        'description' => 'You can book your ride through our website by filling out the online booking form with your travel details, including the date, time, and pickup location.'
                    ],
                    [
                        'title' => 'What payment methods do you accept?',
                        'description' => 'We accept various payment methods including credit and debit cards, as well as online wallets. All transactions are secured for your peace of mind.'
                    ],
                    [
                        'title' => 'Can I change my booking after confirmation?',
                        'description' => 'Yes, you can modify your booking details. Please contact our customer service as soon as possible to make any changes to your reservation.'
                    ],
                ],
                'right' => [
                    [
                        'title' => 'What should I do if my flight is delayed?',
                        'description' => 'If your flight is delayed, please inform us through the contact details provided in your confirmation email. We will adjust your pickup time accordingly.'
                    ],
                    [
                        'title' => 'Are pets allowed in the vehicles?',
                        'description' => 'Yes, we understand that pets are part of the family. Please inform us in advance if you will be traveling with pets so we can accommodate your needs.'
                    ],
                    [
                        'title' => 'What happens if I need to cancel my booking?',
                        'description' => 'Cancellations can be made up to 24 hours prior to your scheduled pickup time for a full refund. For cancellations made within 24 hours, please check our policy for any applicable fees.'
                    ],
                ]
            ]
        ]))
    ?>

    <div class="container-global">
        <div class="mar10">

            <div class="title-product text-center">
                <span class="tag-atas"><?= $_faq->span; ?></span>
                <h2><?= $_faq->title ?></h2>
            </div>
       
        <div class="row">

            <div class="col-md-6">
                
                <div class="toggle toggle-primary" data-plugin-toggle>
                    <?php foreach($_faq->items->left as $item): ?>
                    <section class="toggle">
                        <label><h3><?= $item->title; ?></h3></label>
                        <div class="toggle-content">
                            <p><?= $item->description; ?></p>
                        </div>
                    </section>
                    <?php endforeach; ?>
                </div>

            </div>

            <div class="col-md-6">
                
                <div class="toggle toggle-primary" data-plugin-toggle>
                    <?php foreach($_faq->items->right as $item): ?>
                    <section class="toggle">
                        <label><h3><?= $item->title; ?></h3></label>
                        <div class="toggle-content">
                            <p><?= $item->description; ?></p>
                        </div>
                    </section>
                    <?php endforeach; ?>
                 

                </div>

            </div>

        </div>


       
       </div>
    </div>
</section>



