[Русский](#русский) | [English](#english)

---

[![Latest Stable Version](https://img.shields.io/packagist/v/rosgear/rg-wd-lightgallery.svg)](https://packagist.org/packages/rosgear/rg-wd-lightgallery)
[![Total Downloads](https://img.shields.io/packagist/dt/rosgear/rg-wd-lightgallery.svg)](https://packagist.org/packages/rosgear/rg-wd-lightgallery)
[![Author](https://img.shields.io/badge/author-anton.tivonenko@gmail.com-blue.svg)](mailto:anton.tivonenko@gmail)
[![Source Code](https://img.shields.io/badge/source-rosgear/rg--wd--lightgallery-blue.svg)](https://github.com/rosgear/rg-wd-lightgallery)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg)](https://github.com/rosgear/rg-wd-lightgallery/blob/main/LICENSE)
![Component type: widget](https://img.shields.io/badge/component%20type-widget-green.svg)
![Component ID: rg-wd-lightgallery](https://img.shields.io/badge/component%20id-rg.wd.lightgallery-green.svg)
![php 8.2+](https://img.shields.io/badge/php-min%208.2-red.svg)

<a name="русский"></a>
## <img src="https://raw.githubusercontent.com/rosgear/rg-wd-lightgallery/refs/heads/main/assets/images/icon.svg" width="64px" height="64px" align="absmiddle"> Виджет «Галерея LightGallery»

Виджет предназначен для визуализации изображений на веб‑странице с использованием лайтбокса LightGallery, обеспечивающий удобный просмотр контента в полноэкранном режиме.

### Пример применения
#### с менеджером виджетов:
```
$gallery = Ge::$app->widgets->get(
    'rg.wd.lightgallery', 
    ['galleryId' => 1, 'sort' => 'index', limit' => 10, 'settings' => ['download' => false]]
);
$gallery->run();
```
#### c шорткодом:
```
echo $this->shortcode('[lightgallery id="1" sort="index" limit="10" download="false"]');
```
#### в шаблоне:
```
echo $this->widget('rg.wd.lightgallery', [
    'galleryId'  => 1,
    'mode'       => 'list',
    'sort'       => ['default' => 'index,a'],
    'pagination' => ['defaultLimit' => 20],
    'pager'      => [
        'itemTpl'       => '<li>{link}</li>',
        'activeItemTpl' => '<li class="active">{link}</li>',
        'options'       => ['class' => 'justify-content-center']
     ],
     'settings' => ['download' => false]
]);
```
#### с namespace:
```
use Rg\Widget\LightGallery\Widget as Gallery;
echo Gallery::widget(['mode' => 'list', pagination' => ['defaultLimit' => 20]]);
```
если namespace ранее не добавлен в PSR, необходимо выполнить:
```
Ge::$loader->addPsr4('Rg\Widget\LightGallery\\', Ge::$app->modulePath . '/rg/rg.wd.lightgallery/src');
```

### Установка

Для добавления виджета в ваш проект, вы можете просто выполнить команду ниже:

```
$ composer require rosgear/rg-wd-lightgallery
```

или добавить в файл composer.json вашего проекта:
```
"require": {
    "rosgear/rg-wd-lightgallery": "*"
}
```
или скачать архив на [странице виджета](https://rosgear.ru/component/rg-wd-lightgallery/) в каталоге приложений RosGear.

После добавления виджета в проект выполните его установку в редакцию веб‑приложения с помощью Панели управления GePanel.

### Ресурсы
- [Сайт LightGallery](https://www.lightgalleryjs.com/)

<a name="english"></a>
## <img src="https://raw.githubusercontent.com/rosgear/rg-wd-lightgallery/refs/heads/main/assets/images/icon.svg" width="64px" height="64px" align="absmiddle"> Widget «LightGallery»

The widget is designed to visualize images on a web page using the LightGallery lightbox, providing convenient viewing of content in full-screen mode.

### Installation

To add the widget to your project, you can simply run the command below:

```
$ composer require rosgear/rg-wd-lightgallery
```

or add to your project's composer.json file:
```
"require": {
    "rosgear/rg-wd-lightgallery": "*"
}
```
or download the archive from the [widget page](https://rosgear.ru/component/rg-wd-lightgallery/) in the RosGear application catalog.

After adding the widget to the project, install it into the web application edition using the GePanel Control Panel.