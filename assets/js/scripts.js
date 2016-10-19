$(document).ready(function() {


  $('body').addClass('isLoaded');


  // Owl carousel
  $('.owl-carousel').each(function() {

    $autoHeightBool = ($(this).attr('data-varheight')) ? true : false;

    $(this).owlCarousel({
      items: 1,
      loop: true,
      nav: true,
      navText: ["<i class='ion ion-15x ion-ios-arrow-back'></i>", "<i class='ion ion-15x ion-ios-arrow-forward'></i>"],
      lazyLoad : true,
      autoplay: true,
      autoplayTimeout: 4000,
      autoplaySpeed: 1000,
      autoHeight: $autoHeightBool
    });
  });


  // UI: open contact form
  $('[href="#contact_form"]').click(function() {
    if($(this).attr('rel')) {
      toggleDialog('open', $(this).attr('rel'));
    } else {
      toggleDialog('open');
    }
  });
  if(window.location.hash && $('.dialog' + window.location.hash).length > 0) { toggleDialog('open'); }


  // UI: submit form isBusy
  $('form .button').click(function(e) {
    addIsBusy($(this));
  });


  // UI: expand card
  $('.card [href="#expand"]').click(function(e) {
    e.preventDefault();
    $(this).closest('.card').toggleClass('isExpanded');
  });


  // UI: add isLoaded to u-appearOnLoadBody
  $('.u-appearOnLoadBody, .u-fromLeftOnLoadBody, .u-fromBottomOnLoadBody').each(function() {
    $this = $(this);
    $delay = ($(this).attr('data-delay')) ? $(this).attr('data-delay') : 500;
    setTimeout(function() { $this.addClass('isLoaded'); }, $delay);
  });


  scrollActions();
  setTimeout(function() { scrollActions() }, 500);
  setTimeout(function() { scrollActions() }, 1000);

});


//UI: add busy class for form
function addIsBusy(obj) {
  if(typeof obj != 'undefined') {
    $validated = true;
    // check all required inputs in form
    obj.closest('form').find('input[required], textarea[required]').each(function() {
      if($(this).attr('type') == 'checkbox') { 
        if(!$(this).is(':checked')) { $validated = false }
      } else if($(this).val().length < 1) { 
        $validated = false;
        $(this).addClass('field--error');
      }
    });
    // only apply isBusy class if inputs are validated
    if(obj.hasClass('button') && $validated == true) {
      obj.addClass('isBusy');
    }
  }
}



$(document).on('ready scroll resize scrollstart scrollstop', function() { scrollActions() });

// UI actions on scroll
function scrollActions() {
  scroll = $(window).scrollTop();

  alignLogo(scroll, '.logo-aligner');
}

function alignLogo(scroll, align_obj) {
  threshold = ($(align_obj)) ? $(align_obj).outerHeight() : 250;
  logo_offset_top = ($(document).width() < 768) ? 35 : 55;
  logo_offset_left = 400;
  small_scale = 0.3;
  $logo = $('.nav-logo-animated .logo-svg');

  // if ($logo && scroll < 0) {
  //   // before start
  //   $logo.removeAttr('style');
  // } else 
  if ($logo && scroll > (threshold - logo_offset_top)) {
    // past threshold
    $logo.css('top', logo_offset_top)
      // .css('left', logo_offset_left)
      .css('transform', '-webkit-scale(' + small_scale + ')')
      .css('transform', '-moz-scale(' + small_scale + ')')
      .css('transform', 'scale(' + small_scale + ')');
  } else {
    scale = 1 - scroll / (threshold-logo_offset_top) * (1 - small_scale);
    $logo.css('top', threshold - scroll)
      // .css('left', (threshold - scroll))
      .css('transform', '-webkit-scale(' + scale + ')')
      .css('transform', '-moz-scale(' + scale + ')')
      .css('transform', 'scale(' + scale + ')');
  }
}



// UI: toggle menu
function toggleMenu(state) {
  state = (state) ? state : '';
  if(state != 'close') {
    $('body').toggleClass('navIsOpen');
  } else {
    $('body').removeClass('navIsOpen');
  }
  return false;
}



// UI: toggle dialog
function toggleDialog(state, option) {
  state = (state) ? state : '';
  if(state == 'close') {
    $('body').removeClass('dialogIsOpen');
    $('#contact_form #message_success').addClass('u-hide');
  } else if (state == 'open') {
    $('body').addClass('dialogIsOpen');
  } else {
    $('body').toggleClass('dialogIsOpen');
  }
  // Contactform specific
  if (option && option.length > 1) {
    $('#contact_form form select#space_type').val(option);
  }
  return false;
}


// UI: listen for field-box empty
$(document).ready(function() {
  $('.field-box').bind('keyup change', function() {
    if($(this).val().length > 0) {
      $(this).addClass('field-box__notempty');
      $(this).removeClass('field--error');
    } else {
      $(this).removeClass('field-box__notempty');
    }
  });
});


// retrieve blog posts from API and output a random post
function getHabitaContent(baseURL, target, type, random) {

  // define parameters
  var $url = (baseURL) ? baseURL : '';
  var $target = (target) ? $(target) : '';
  var $type = (type) ? type : 'undefined';
  var $random = (random == true) ? true : false;

  console.log('making ' + $type + ' API call...');

  randomContentRequest = [];
  randomContentRequest[$type] = $.getJSON( $url, function(r) {

    console.log('...reply for ' + $type + ' received!');

    // empty target container
    $target.html('');

    // get random item from array
    if ($random) {

      var $randompost = Math.floor((Math.random() * r['data'].length));
      $item = r['data'][$randompost];

      $html = outputHtml($item, $type);
    } else {

      $html = '';
      $.each(r['data'], function() {
        $item = $(this)[0];
        $html += outputHtml($item, $type);
        $html += '<div class="u-pv20"></div>';
      });

    }

    $target.html($html);
    $target.closest('.u-appearOnLoad, .u-fromLeftOnLoad').addClass('isLoaded');

  })
}


// different output structure based on type
function outputHtml(item, type) {

  if (type == 'blog') {

    var $html  = '<a href="' + item['url'] + '">';
    $html += '<h4>' + item['title'] + '</h4>';
    $html += '<time pubdate class="date">' + item['date'] + '</time><br />';
    var $excerpt = item['excerpt'];
    var $readmore = '...';
    $html += '<p class="excerpt">' + $excerpt + $readmore + '</p>';
    $html += '</a>';

  } else if (type == 'member') {
    var $html  = '<a class="u-block u-clearfix u-mt5" href="' + item['url'] + '">';

    $html += '<div class="badge u-floatleft u-mr10" ';
    $html += 'style="background-image:url(\'' + item['profile_image'] + '\');">';
    $html += '</div>';

    $html += '<h4 class="u-pt5">' + item['title'] + '</h4>';

    if (item['job_title'].length > 0) {
      $html += '<p class="u-truncate"><small>' + item['job_title'] + '</small></p>';
    }

    $html += '</a>';
  } else if (type == 'event') {
    // var $html  = '<a href="' + item['url'] + '">';
    var $html  = '<a href="events">';
    $html += '<div class="u-widthfull u-height120 u-mv10 bg-imagemuted" style="background-image: url(\'' + item['image']['small'] + '\');"></div>';
    $html += '<h4>' + item['title'] + '</h4>';
    $html += '<time pubdate class="date">' + item['date'] + '</time><br />';
    $html += '</a>';
  } else {
    console.log('wrong or no `type` defined');
  }

  return $html;
}


// change favicon
function setFavicon(state) {
  $favicon = $("#favicon").attr("href");
  $new_favicon = (state == 'loading') ? $favicon.replace('.ico', '_loading.ico') : $favicon.replace('_loading.ico', '.ico');
  setTimeout(function() {
    $("#favicon").attr("href", $new_favicon);
  }, 500);
}


// gets language from <html>
// (note: works with TR as default language)
function getLang() {
  $lang = ($('html').attr('lang') && $('html').attr('lang') != 'tr') ? $('html').attr('lang') + '/' : '';
  return $lang;
}
