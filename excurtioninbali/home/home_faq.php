<style type="text/css">

html .faq .toggle-primary .toggle label {
    border-radius: 5px;
    font-family: var(--subtext);
    font-weight: 600;
    text-transform: unset;
    padding: 15px;
    line-height: 30px;
    font-size: 15px;
    color: var(--colors);
    letter-spacing: 0.1px;
    margin-bottom: 0px;
    background: #f9f9f9;
}

html .faq .toggle-primary .toggle.active>label {
    background-color: #000;
    border-color: #000;
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
    color: #333;
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

html .faq .toggle-primary .toggle.active>label h3 { color:var(--colors); }

@media (max-width: 768px) {
    .faq .toggle label h3 {
        padding: 5px;
        font-size: 15px;
        padding-right: 50px;
    }

    .faq .toggle { margin-bottom:0; }
}
</style>

<section class="pad6rem faq">

  <?php 
    $_faq = json_decode(json_encode([
      'span'=> 'Common Questions',
      'title' => 'Everything You Need to Know Before Booking',
      'items' => [
        'left' => [
          [
            'title' => 'What are the best adventure activities in Bali?',
            'content' => '<p>Bali offers a wide range of adventure activities, including <strong>white water rafting, ATV rides, VW tours, snorkeling, scuba diving, and parasailing</strong>. Whether you\'re looking for a thrilling jungle ride or an exciting ocean adventure, we have the perfect tour for you!</p>'
          ],
          [
            'title' => 'How do I book a tour with Excurtion In Bali',
            'content' => '<p>Booking your <strong>Bali adventure</strong> is easy! Simply visit our website, browse our <strong>adventure tours &amp; watersports</strong>, and click <strong>"Book Now"</strong>. You can also contact us via <strong>WhatsApp for instant reservations.</strong></p>'
          ],
          [
            'title' => 'What is the best time of year to visit Bali for outdoor activities?',
            'content' => '<p>Bali is a year-round destination! The <strong>dry season (April – October)</strong> is the best time for <strong>outdoor activities, watersports, and adventure tours</strong>, as the weather is sunny and ideal for exploring. The <strong>rainy season (November – March)</strong> is still great for cultural tours and jungle adventures.</p>'
          ],
          [
            'title' => 'Do I need to have experience for Bali watersports and adventure tours?',
            'content' => '<p>No experience? No problem! All of our <strong>watersports and adventure activities</strong> are guided by <strong>professional instructors.</strong> Whether you\'re trying <strong>snorkeling, jet skiing, ATV riding, or rafting for the first time</strong>, our team will ensure a <strong>safe and enjoyable experience</strong>.</p>'
          ],
          [
            'title' => 'What should I bring for a watersports or adventure tour in Bali?',
            'content' => '<p>For all watersports and outdoor activities, we recommend bringing:</p><ul><li>✅ Swimwear &amp; Change of Clothes</li><li>✅ Sunscreen &amp; Sunglasses</li><li>✅ Waterproof Camera or GoPro</li><li>✅ Comfortable Footwear (for land activities like ATV &amp; rafting)</li><li>✅ Cash or Card (for additional purchases or tips)</li></ul>'
          ],
        ],
        'right' => [
          [
            'title' => 'Do you provide hotel pickup and airport transfer services?',
            'content' => '<p>Yes! We offer <strong>private airport</strong> transfers and <strong>hotel pickup services</strong> for a hassle-free experience. Whether you\'re arriving at <strong>Ngurah Rai International Airport</strong> or need a <strong>comfortable ride to your tour location</strong>, our <strong>private car service</strong> is available 24/7.</p>'
          ],
          [
            'title' => 'Are the Bali tours and watersports suitable for families and kids?',
            'content' => '<p>Absolutely! We have a variety of <strong>family-friendly tours</strong>, including <strong>glass-bottom boat rides, snorkeling, and cultural excursions</strong>. Our activities are <strong>safe for kids</strong>, and professional guides are always available to assist.</p>'
          ],
          [
            'title' => 'What payment methods are accepted for booking?',
            'content' => '<p>We accept multiple payment options, including:</p><ul><li>✅ Credit/Debit Cards (Visa, MasterCard)</li><li>✅ PayPal &amp; Online Transfers</li><li>✅ Cash on Arrival (for selected activities)</li></ul><p>Secure your Bali adventure with a simple and reliable payment process!</p>'
          ],
          [
            'title' => 'Is travel insurance required for adventure activities in Bali?',
            'content' => '<p>While we ensure <strong>high safety standards</strong>, we highly recommend having <strong>travel insurance</strong> that covers <strong>adventure activities like rafting, ATV rides, and watersports</strong>. This provides extra peace of mind during your trip.</p>'
          ],
          [
            'title' => 'Why should I book with Excurtion In Bali?',
            'content' => '<p>Excurtion In Bali is a <strong>trusted and licensed tour operator</strong>, offering a <strong>wide selection of watersports, adventure tours, and airport transfers</strong> at the best <strong>price with no hidden fees</strong>. Our <strong>experienced local guides</strong> ensure a safe and memorable experience, while our <strong>instant booking system and 24/7 customer support</strong> make planning your Bali adventure easy and hassle-free.</p>'
          ],
        ]
      ]
    ]))
  ?>

    <div class="container-global">

        <div class="title-general text-center">
            <span class="tag-ats"><?= $_faq->span ?></span>
            <h2 class="title"><?= $_faq->title ?></h2>
        </div>

        <div class="row mt-5">

            <div class="col-md-6">
                
                <div class="toggle toggle-primary" data-plugin-toggle>

                    <?php foreach($_faq->items->left as $item): ?>
                        <section class="toggle">
                            <label><h3><?= $item->title; ?></h3></label>
                            <div class="toggle-content">
                              <?= $item->content; ?>
                            </div>
                        </section>
                    <?php endforeach ?>
                </div>

            </div>

            <div class="col-md-6">
                
                <div class="toggle toggle-primary" data-plugin-toggle>

                    <?php foreach($_faq->items->right as $item): ?>
                        <section class="toggle">
                            <label><h3><?= $item->title; ?></h3></label>
                            <div class="toggle-content">
                              <?= $item->content; ?>
                            </div>
                        </section>
                    <?php endforeach ?>

                </div>

            </div>
        </div>


    </div>
</section>



