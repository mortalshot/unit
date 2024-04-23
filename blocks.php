<?php
$blocks = get_field('all_blocks');
$blocks == '' ? $blocks = get_field('all_blocks', 'theme_' . get_queried_object()->term_id) : '';

if ($blocks) :
  $i = 1;

  foreach ($blocks as $block) :
    if ($block['acf_fc_layout'] == 'template1') :
      echo '<section id="template1-' . $i . '" class="template1">';
        $template1_slider = $block['template1_slider'];
        echo '<div class="template1__bg-slider swiper">';
          echo '<div class="template1__wrapper swiper-wrapper">';
            foreach ($template1_slider as $slide) :
              echo '<div class="template1__slide swiper-slide">';
                $slide_bg = $slide['slide_bg'];
                $slide_bg_mob = $slide['slide_bg-mob'];
                echo '<picture>';
                  echo '<source srcset="'. $slide_bg_mob['url'] .'" media="(max-width: 767.98px)">';
                  echo '<img src="'. $slide_bg['url'] .'" alt="'. $slide_bg['alt'] .'">';
                echo '</picture>';
              echo '</div>';
            endforeach;
          echo '</div>';
        echo '</div>';

        echo '<div class="template1__slider swiper">';
					echo '<div class="swiper__arrows">';
						echo '<div class="swiper-button swiper-button-prev"></div>';
						echo '<div class="swiper-button swiper-button-next"></div>';
					echo '</div>';
					echo '<div class="template1__wrapper swiper-wrapper">';
            foreach ($template1_slider as $slide) :
              echo '<div class="template1__slide swiper-slide">';
                echo '<div class="template1-slide">';
                  $slide_bg = $slide['slide_bg'];
                  $slide_bg_mob = $slide['slide_bg-mob'];
                  echo '<div class="template1-slide__bg">';
                    echo '<picture>';
                      echo '<source srcset="'. $slide_bg_mob['url'] .'" media="(max-width: 767.98px)">';
                      echo '<img src="'. $slide_bg['url'] .'" alt="'. $slide_bg['alt'] .'">';
                    echo '</picture>';
                  echo '</div>';
  
                  echo '<div class="template1-slide__wrapper" data-swiper-parallax-x="10%">';
                    $slide_title = $slide['slide_title'];
                    echo '<div class="template1-slide__title" data-swiper-parallax-opacity="0">'. $slide_title .'</div>';

                    $slide_mark = $slide['slide_mark'];
                    if ($slide_mark) :
                      echo '<div class="template1-slide__body">';
                        echo '<div class="template1-slide__mark" data-swiper-parallax-opacity="0" data-swiper-parallax-y="-50%"><span>'. $slide_mark .'</span></div>';
                      echo '</div>';
                    endif;

                    $slide_link = $slide['slide_link'];
                    if ($slide_link) :
                      echo '<div class="template1-slide__link link" data-swiper-parallax-opacity="0">';
                        echo '<a href="'. $slide_link['url'] .'">';
                          echo '<span class="link__text">'. $slide_link['title'] .'</span>';
                          echo '<i class="link__arrow"></i>';
                        echo '</a>';
                      echo '</div>';
                    endif;
                  echo '</div>';
                echo '</div>';
              echo '</div>';
            endforeach;
					echo '</div>';
					echo '<div class="template1__mousewheel">';
						echo '<img src="'. get_template_directory_uri() .'/dist/img/icons/mousewheel.svg" alt="">';
					echo '</div>';
				echo '</div>';
      echo '</section>';
    elseif ($block['acf_fc_layout'] == 'template2') :
      echo '<section id="template2-' . $i . '" class="template2">';
        echo '<div class="template2__container">';
          echo '<div class="template2__row">';
            $template2_text = $block['template2_text'];
            echo '<div class="template2__text _content">'. $template2_text .'</div>';

            $template2_pdf = $block['template2_pdf'];
            echo '<div class="template2__pdf">';
              echo '<a href="'. $template2_pdf['url'] .'" target="_blank" download>';
                echo '<span>PDF</span>';
                echo '<img src="'. get_template_directory_uri() .'/dist/img/icons/pdf.svg" alt="">';
              echo '</a>';
            echo '</div>';
          echo '</div>';
        echo '</div>';
      echo '</section>';
    elseif ($block['acf_fc_layout'] == 'template3') :
      echo '<section id="template3-' . $i . '" class="template3">';
        $template3_items = $block['template3_items'];
        echo '<div class="template3__items">';

          $j = 1;

          foreach ($template3_items as $card) :
            echo '<div class="template3__item">';
              echo '<a href="" data-popup="#template3-'. $i .'-card-'. $j .'" class="template3-card">';
                $card_bg = $card['card_bg'];
                echo '<div class="template3-card__bg">';
                  echo '<img src="'. $card_bg['url'] .'" alt="'. $card_bg['url'] .'">';
                echo '</div>';
  
                echo '<div class="template3-card__heading">';
                  $card_caption = $card['card_caption'];
                  echo '<div class="template3-card__caption">'. $card_caption .'</div>';
                  $card_description = $card['card_description'];
                  echo $card_description != '' ? '<div class="template3-card__description">'. $card_description .'</div>' : '';
                echo '</div>';
  
                $card_image = $card['card_image'];
                echo '<div class="template3-card__image">';
                  echo '<img src="'. $card_image['url'] .'" alt="'. $card_image['alt'] .'">';
                echo '</div>';
              echo '</a>';
  
              echo '<div id="template3-'. $i .'-card-'. $j .'" aria-hidden="true" class="popup">';
                echo '<div class="popup__wrapper">';
                  echo '<div class="popup__content">';
                    echo '<button data-close type="button" class="popup__close"></button>';
                    echo '<div class="popup__text">';
                      echo '<div class="template3-popup">';
                        echo '<div class="template3-popup__heading">';
                          echo '<div class="template3-popup__caption">'. $card_caption .'</div>';
                          echo '<div class="template3-popup__description">'. $card_description .'</div>';
                        echo '</div>';
  
                        $popup_text = $card['popup_text'];
                        echo '<div class="template3-popup__text _content">'. $popup_text .'</div>';
                      echo '</div>';
                    echo '</div>';
                  echo '</div>';
                echo '</div>';
              echo '</div>';
            echo '</div>';

            $j++;
          endforeach;
				echo '</div>';
      echo '</section>';
    elseif ($block['acf_fc_layout'] == 'template4') :
      echo '<section id="template4-' . $i . '" class="template4">';
        echo '<div class="template4__container">';
          echo '<div class="template4__title">';
            $template4_title = $block['template4_title'];
            echo '<h1>'. $template4_title .'</h1>';
            $template4_image = $block['template4_image'];
            echo '<img src="'. $template4_image['url'] .'" alt="'. $template4_image['alt'] .'">';
          echo '</div>';
        echo '</div>';
      echo '</section>';
    elseif ($block['acf_fc_layout'] == 'template5') :
      echo '<section id="template5-' . $i . '" class="template5">';
        echo '<div class="template5__row">';
          $template5_cards = $block['template5_cards'];
          echo '<div class="template5__left">';
            $j = 1;
            foreach ($template5_cards as $card) :
              if ($j % 2 == 1) :                  
                echo '<div class="template5__card template5-card">';
                  $card_bg = $card['card_bg'];
                  echo '<div class="template5-card__bg">';
                    echo '<img src="'. $card_bg['url'] .'" alt="'. $card_bg['alt'] .'">';
                  echo '</div>';

                  echo '<div class="template5-card__heading">';
                    $card_caption = $card['card_caption'];
                    echo '<div class="template5-card__caption">'. $card_caption .'</div>';
                    $card_text = $card['card_text'];
                    echo $card_text != '' ? '<div class="template5-card__text _content">'. $card_text .'</div>' : '';
                  echo '</div>';
                echo '</div>';
              endif;

              $j++;
            endforeach;
          echo '</div>';

          echo '<div class="template5__right">';
            $j = 1;
            foreach ($template5_cards as $card) :
              if ($j % 2 == 0) :                  
                echo '<div class="template5__card template5-card">';
                  $card_bg = $card['card_bg'];
                  echo '<div class="template5-card__bg">';
                    echo '<img src="'. $card_bg['url'] .'" alt="'. $card_bg['alt'] .'">';
                  echo '</div>';

                  echo '<div class="template5-card__heading">';
                    $card_caption = $card['card_caption'];
                    echo '<div class="template5-card__caption">'. $card_caption .'</div>';
                    $card_text = $card['card_text'];
                    echo $card_text != '' ? '<div class="template5-card__text _content">'. $card_text .'</div>' : '';
                  echo '</div>';
                echo '</div>';
              endif;

              $j++;
            endforeach;
          echo '</div>';
        echo '</div>';

        $template5_offer = $block['template5_offer'];
        echo '<div class="template5__container">';
          echo '<div class="template5__offer link link_dark">';
            echo '<a href="'. $template5_offer['url'] .'">';
              echo '<span class="link__text">'. $template5_offer['title'] .'</span>';
              echo '<i class="link__arrow"></i>';
            echo '</a>';
          echo '</div>';
        echo '</div>';
      echo '</section>';
    elseif ($block['acf_fc_layout'] == 'template6') :
      echo '<section id="template6-' . $i . '" class="template6">';
        echo '<div class="template6__container">';
          $template6_items = $block['template6_items'];
          echo '<div class="template6__items _row">';
            foreach ($template6_items as $item) :
              $item_col = $item['item_col'];
              echo '<div class="'. $item_col .'">';
                echo '<div class="template6__item template6-item">';
                  $item_icon = $item['item_icon'];
                  echo '<div class="template6-item__icon">';
                    echo '<img src="'. $item_icon['url'] .'" alt="'. $item_icon['alt'] .'">';
                  echo '</div>';
                  $item_caption = $item['item_caption'];
                  echo '<div class="template6-item__caption">'. $item_caption .'</div>';
                echo '</div>';
              echo '</div>';
            endforeach; 
          echo '</div>';
        echo '</div>';
      echo '</section>';
    elseif ($block['acf_fc_layout'] == 'template7') :
      echo '<section id="template7-' . $i . '" class="template7">';
        echo '<div class="template7__container">';
          $template7_items = $block['template7_items'];
          echo '<div class="template7__items">';
            foreach ($template7_items as $item) :
              echo '<div class="template7__item">';
                $template7_item = $item['template7_item'];
                echo '<img src="'. $template7_item['url'] .'" alt="'. $template7_item['alt'] .'">';
              echo '</div>';
            endforeach;
          echo '</div>';
        echo '</div>';
      echo '</section>';
    elseif ($block['acf_fc_layout'] == 'template8') :
      echo '<section id="template8-' . $i . '" class="template8">';
        echo '<div class="template8__container">';
          echo '<div class="template8__bg">';
            $template8_caption = $block['template8_caption'];
            echo '<div class="template8__caption">'. $template8_caption .'</div>';
            $template8_bg = $block['template8_bg'];
            echo '<img src="'. $template8_bg['url'] .'" alt="'. $template8_bg['alt'] .'">';
          echo '</div>';

          $template8_items = $block['template8_items'];
          echo '<div class="template8__items _row">';
            foreach ($template8_items as $item) :
              $item_cols = $item['item_cols'];
              echo '<div class="'. $item_cols .'">';
                echo '<div class="template8__item template8-item">';
                  $item_caption = $item['item_caption'];
                  echo '<div class="template8-item__caption">'. $item_caption .'</div>';
                  $item_text = $item['item_text'];
                  echo $item_text != '' ? '<div class="template8-item__text _content">'. $item_text .'</div>' : '';
                echo '</div>';
              echo '</div>';
            endforeach;
          echo '</div>';
        echo '</div>';
      echo '</section>';
    elseif ($block['acf_fc_layout'] == 'template9') :
      echo '<section id="template9-' . $i . '" class="template9">';
        echo '<div class="template9__container">';
          echo do_shortcode('[contact-form-7 id="0f3a0d8" title="Контактная форма 1"]');
        echo '</div>';
      echo '</section>';
    elseif ($block['acf_fc_layout'] == 'template0') :
      $heading = $block['template0_heading'];

      echo '<section id="template0-' . $i . '" class="template0">';
        echo '<div class="template0__container">';
          echo $heading != '' ? '<div class="template0__heading _content">' . $heading . '</div>' : '';
        echo '</div>';
      echo '</section>';
    endif;

    $i++;
  endforeach;
endif;
