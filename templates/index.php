<?php

require_once('data.php');

$lots = [
  ['name' => '2014 Rossignol District Snowboard',  'category_name' => 'Доски и лыжи', 'price' => '10999', 'img_url' => 'img/lot-1.jpg', 'img_alt' => 'Сноуборд'],
  ['name' => 'DC Ply Mens 2016/2017 Snowboard',  'category_name' => 'Доски и лыжи', 'price' => '159999', 'img_url' => 'img/lot-2.jpg', 'img_alt' => 'Сноуборд'],
  ['name' => 'Крепления Union Contact Pro 2015 года размер L/XL',  'category_name' => 'Крепления', 'price' => '8000', 'img_url' => 'img/lot-3.jpg', 'img_alt' => 'Крепления'],
  ['name' => 'Ботинки для сноуборда DC Mutiny Charocal',  'category_name' => 'Ботинки', 'price' => '10999', 'img_url' => 'img/lot-4.jpg', 'img_alt' => 'Ботинки для сноуборда'],
  ['name' => 'Куртка для сноуборда DC Mutiny Charocal',  'category_name' => 'Одежда', 'price' => '7500', 'img_url' => 'img/lot-5.jpg', 'img_alt' => 'Куртка для сноуборда'],
  ['name' => 'Маска Oakley Canopy',  'category_name' => 'Разное', 'price' => '5400', 'img_url' => 'img/lot-6.jpg', 'img_alt' => 'Маска'],
];

?>
   
    <section class="promo">
        <h2 class="promo__title">Нужен стафф для катки?</h2>
        <p class="promo__text">На нашем интернет-аукционе ты найдёшь самое эксклюзивное сноубордическое и горнолыжное снаряжение.</p>
        <ul class="promo__list">
          <? foreach ($categories as $title => $name) : ?>
            <li class="promo__item promo__item--<?=$title; ?>">
                <a class="promo__link" href="all-lots.html"><?=$name; ?></a>
            </li>
          <? endforeach ; ?>
        </ul>
    </section>
    <section class="lots">
        <div class="lots__header">
            <h2>Открытые лоты</h2>
        </div>
        <ul class="lots__list">
          
           <? foreach ($lots as $key => $lot) : ?>
           
            <li class="lots__item lot">
                <div class="lot__image">
                    <img src="<?=$lot['img_url']; ?>" width="350" height="260" alt="<?=$lot['img_alt']; ?>">
                </div>
                <div class="lot__info">
                    <span class="lot__category"><?=$lot['category_name']; ?></span>
                    <h3 class="lot__title"><a class="text-link" href="lot.php?id=<?=$key; ?>"><?=strip_tags($lot['name']); ?> "> <?=$lot['name']; ?> </a></h3>
                    <div class="lot__state">
                        <div class="lot__rate">
                            <span class="lot__amount">Стартовая цена</span>
                            <span class="lot__cost"><?=$lot['price']; ?><b class="rub">р</b></span>
                        </div>
                        <div class="lot__timer timer">
                            <?=$lot_time_remaining;?>
                        </div>
                    </div>
                </div>
            </li>
            
          <? endforeach ; ?>
          
        </ul>
    </section>