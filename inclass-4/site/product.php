<?php

$products = array('Personal' => array('pricing-primary' => array('price' => '18')),
                  'Profesional' => array('pricing-info' => array('price' => '28')),
                  'Business' => array('pricing-secondary' => array('price' => '48'))
                  );

foreach ($products as $key => $value) {
  foreach ($value as $class => $variable) {
    foreach ($variable as $price => $amount) {
      echo '<div class="col-md-4">
      <div class="pricing-card ', $class,'">
          <h3>', $key,'</h3>
          <h6 class="price">', $amount,'<span> $/MO</span></h6>
      </div>
      <div class="pricing-features">
          <ul class="features">
              <li>Gravida arcu ac tortor dignissim convallis aenean</li>
              <li>Gravida arcu ac tortor dignissim convallis aenean</li>
              <li>Gravida arcu ac tortor dignissim</li>
          </ul>

          <a href="#" class="btn btn-primary" title="">Subscribe</a>
      </div>

  </div>';
    }
  }
}
?>
