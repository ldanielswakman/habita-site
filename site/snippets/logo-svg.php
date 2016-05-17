<?
// defaults
$height = (isset($height)) ? $height . 'px' : '20px';
$emblem = (isset($emblem)) ? $emblem : false;
$color = (isset($color)) ? $color : '#d3d4d5';
$emblem_color = (isset($emblem_color)) ? $emblem_color : $color;

if ($emblem) :
?>

<svg class="logo-svg" height="<?= $height ?>" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 60 60" style="enable-background:new 0 0 60 60;" xml:space="preserve">
<style type="text/css">
  .logo-svg .st0{fill:<?= $color ?>;}
  .logo-svg .emblem .st0{fill:<?= $emblem_color ?>;}
</style>
<g>
  <polygon class="st0" points="32.1,24.5 32.1,35.5 60,35.5 60,24.5  "/>
  <rect x="40.7" y="9" class="st0" width="10.6" height="9.3"/>
  <rect x="40.7" y="41.7" class="st0" width="10.6" height="9.3"/>
  <polygon class="st0" points="15.7,52.1 26.8,52.1 26.8,7.9 15.7,7.9  "/>
  <rect x="0" y="24.5" class="st0" width="10.4" height="11.1"/>
</g>
</svg>

<? else :?>

<svg class="logo-svg" height="<?= $height ?>" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 400 65.5" style="enable-background:new 0 0 400 65.5;" xml:space="preserve">
<style type="text/css">
  .logo-svg .st0{fill:<?= $color ?>;}
  .logo-svg .emblem .st0{fill:<?= $emblem_color ?>;}
</style>
<g>
  <g>
    <path class="st0" d="M118.7,1h13.1v24.6c3.8-5.3,8.5-7.1,14-7.1c12.7,0,16.1,10.1,16.1,21.6v24.5h-13.1V40.3c0-6.2-2.3-11-8.4-11
      c-6.1,0-8.6,4.8-8.6,11.1v24.2h-13.1V1z"/>
    <path class="st0" d="M219.2,19.4v45.1h-13.1V58c-3.3,4.7-7.6,7.6-14.2,7.6c-13.7,0-22-10.6-22-23.8c0-12.7,7.7-23.3,21.7-23.3
      c6.1,0,11.3,3,14.4,7.1v-6.2H219.2z M194.7,54.9c6.4,0,11.8-4.1,11.8-12.3c0-8.4-5-13.5-12.1-13.5c-7.2,0-11.3,5.8-11.3,12.8
      C183.1,49.1,187.5,54.9,194.7,54.9z"/>
    <path class="st0" d="M257.7,65.5c-6.6,0-10.9-2.9-14.2-7.6v6.6h-13.1V1h13.1v24.6c3.1-4.1,8.4-7.1,14.4-7.1
      c14.1,0,21.7,10.6,21.7,23.3C279.7,55,271.5,65.5,257.7,65.5z M255.4,29.1c-7.1,0-12.1,5.1-12.1,13.5c0,8.2,5.4,12.3,11.8,12.3
      c7.2,0,11.6-5.8,11.6-13C266.6,34.9,262.6,29.1,255.4,29.1z"/>
    <path class="st0" d="M295.2,0c4.7,0,8.4,3.1,8.4,7.5c0,4.3-3.7,7.3-8.4,7.3c-4.8,0-8.3-3-8.3-7.3C287,3.1,290.5,0,295.2,0z
       M288.5,64.6V19.4h13.1v45.1H288.5z"/>
    <path class="st0" d="M329.3,19.4h12.5v10.3h-12.5v21.1c0,1.9,0.8,4,3.3,4c2.6,0,3.4-2.1,3.4-4.2c0-1.3-0.4-3.2-0.6-3.9h10.4
      c0.8,1.7,1.1,3.8,1.1,5.4c0,6.7-4.4,13.5-15,13.5c-7.9,0-15.7-2.8-15.7-15.9V29.7h-6.8V19.4h7.7l2-11.1h10.1V19.4z"/>
    <path class="st0" d="M400,19.4v45.1h-13.1V58c-3.3,4.7-7.6,7.6-14.2,7.6c-13.7,0-22-10.6-22-23.8c0-12.7,7.7-23.3,21.7-23.3
      c6.1,0,11.3,3,14.4,7.1v-6.2H400z M375.5,54.9c6.4,0,11.8-4.1,11.8-12.3c0-8.4-5-13.5-12.1-13.5c-7.2,0-11.3,5.8-11.3,12.8
      C363.8,49.1,368.2,54.9,375.5,54.9z"/>
  </g>
  <g class="emblem">
    <polygon class="st0" points="40.7,29.6 40.7,43.6 76,43.6 76,29.6    "/>
    <rect x="51.6" y="10" class="st0" width="13.5" height="11.8"/>
    <rect x="51.6" y="51.4" class="st0" width="13.5" height="11.8"/>
    <polygon class="st0" points="19.9,64.6 33.9,64.6 33.9,8.6 19.9,8.6    "/>
    <rect x="0" y="29.6" class="st0" width="13.2" height="14"/>
  </g>
</g>
</svg>

<? endif ?>
