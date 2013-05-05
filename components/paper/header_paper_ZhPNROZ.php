<?php
  for($i = 0; $i < 4; $i++) {
   $k = mt_rand(0,30);
   $nbsp[$i] = '';
   for($j = 0; $j < $k; $j++) {
    $nbsp[$i] .= '&nbsp;';
   }
  }
  $meta['mtitle'] = 'ЖПНРОЗ';
  $meta['title'] = '<span class="ozz' . mt_rand(1, 6) . ' ozz_shadow">Ж</span>
  <span class="ozz' . mt_rand(1, 6) . ' ozz_shadow">П</span>
  <span class="ozz' . mt_rand(1, 6) . ' ozz_shadow">Н</span>
  <span class="ozz' . mt_rand(1, 6) . ' ozz_shadow">Р</span>
  <span class="ozz' . mt_rand(1, 6) . ' ozz_shadow">О</span>
  <span class="ozz' . mt_rand(1, 6) . ' ozz_shadow">З</span>';
  $meta['description'] = 'ЖПНРОЗ — ржанка головного мозга, Желание Поиздеваться Над Равнодушием Окружающих Зануд';
  $meta['keywords'] = 'ржанка, мозг, мозг, мозг, ржанка, жпнроз, позитив, юмор, психи, ура-ура, приехали, затыкай нанюхались';
  $meta['css'] = '/css/common.css';
  $meta['head'] = $nbsp[0] . ' жПНрОЗ&nbsp;<br>' .
    $nbsp[1] . 'ЖПнРОЗ&nbsp;<br>' .
   $nbsp[2] .  'ЖпНРОз&nbsp;<br>' .
  $nbsp[3] .  'жнроЗ&nbsp;';
  $meta['menu'] = 'ЖПНРОЗ';