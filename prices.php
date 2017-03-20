<?php require_once "config.php";?>
<?php printHeader(true,"home"); ?>
<main>
    <div class="container">
        <div class="section">
            <div class="row">
                <section class="plans-container" id="plans">
                    <article class="col s12 m6 l4">
                        <div class="card hoverable">
                            <div class="card-image blue waves-effect">
                                <div class="card-title">BASIC</div>
                                <div class="price">9<sub>€/mo</sub></div>
                                <div class="price-desc">Free 1 month</div>
                            </div>
                            <div class="card-content">
                                <ul class="collection">
                                    <li class="collection-item">500 emails</li>
                                    <li class="collection-item">unlimited data</li>
                                    <li class="collection-item">1 users</li>
                                    <li class="collection-item">first 15 day free</li>
                                </ul>
                            </div>
                            <div class="card-action center-align">                      
                                <button class="waves-effect waves-light  btn">Select Plan</button>
                            </div>
                        </div>
                    </article>
                    <article class="col s12 m6 l4">
                        <div class="card z-depth-1 hoverable">
                            <div class="card-image blue darken-1 waves-effect">
                                <div class="card-title">PROFESSIONAL</div>
                                <div class="price">29<sub>€/mo</sub></div>
                                <div class="price-desc">Most Popular</div>
                            </div>
                            <div class="card-content">
                            <ul class="collection">
                                <li class="collection-item">2000 emails</li>
                                <li class="collection-item">unlimited data</li>
                                <li class="collection-item">10 users</li>
                                <li class="collection-item">first 30 day free</li>
                            </ul>
                            </div>
                            <div class="card-action center-align">                      
                            <button class="waves-effect waves-light  btn">Select Plan</button>
                            </div>
                        </div>
                    </article>
                    <article class="col s12 m6 l4">
                        <div class="card hoverable">
                            <div class="card-image blue darken-2 waves-effect">
                                <div class="card-title">PREMIUM</div>
                                <div class="price">49<sub>€/mo</sub></div>
                                <div class="price-desc">Get 20% off</div>
                            </div>
                            <div class="card-content">
                                <ul class="collection">
                                    <li class="collection-item">10,000 emails</li>
                                    <li class="collection-item">unlimited data</li>
                                    <li class="collection-item">unlimited users</li>
                                    <li class="collection-item">first 90 day free</li>
                                </ul>
                            </div>
                            <div class="card-action center-align">                      
                                <button class="waves-effect waves-light  btn">Select Plan</button>
                            </div>
                        </div>
                    </article>
                </section>
            </div>
        </div>
    </div>
</main>
<?php printFooter(true); ?>