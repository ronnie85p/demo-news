<?php  return array (
  'resourceClass' => 'MODX\\Revolution\\modDocument',
  'resource' => 
  array (
    'id' => 2,
    'type' => 'document',
    'pagetitle' => 'Новости',
    'longtitle' => 'Новости',
    'description' => 'Новости',
    'alias' => 'news',
    'link_attributes' => '',
    'published' => 1,
    'pub_date' => 0,
    'unpub_date' => 0,
    'parent' => 0,
    'isfolder' => 1,
    'introtext' => '',
    'content' => '
',
    'richtext' => 1,
    'template' => 2,
    'menuindex' => 1,
    'searchable' => 1,
    'cacheable' => 1,
    'createdby' => 1,
    'createdon' => 1696337968,
    'editedby' => 1,
    'editedon' => 1696345298,
    'deleted' => 0,
    'deletedon' => 0,
    'deletedby' => 0,
    'publishedon' => 0,
    'publishedby' => 0,
    'menutitle' => '',
    'donthit' => 0,
    'privateweb' => 0,
    'privatemgr' => 0,
    'content_dispo' => 0,
    'hidemenu' => 0,
    'class_key' => 'MODX\\Revolution\\modDocument',
    'context_key' => 'web',
    'content_type' => 1,
    'uri' => 'news/',
    'uri_override' => 0,
    'hide_children_in_tree' => 0,
    'show_in_tree' => 1,
    'properties' => NULL,
    'alias_visible' => 1,
    'preview_image' => 
    array (
      0 => 'preview_image',
      1 => '',
      2 => 'default',
      3 => NULL,
      4 => 'text',
    ),
    '_content' => '<!doctype html>
<html lang="en">
<head>
 <title>Новости - MODX Revolution</title>
<base href="[[!++site_url]]">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<link href="assets/frontend/css/styles.css" rel="stylesheet"/>
</head>
<body>
 <main class="page">
  <header class="page_header">
  <div class="container"></div>
</header>

  <section class="page_content">
    <div class="container">
     <h1>Новости</h1>

     


     {\'!getNews\' | snippet : [
        \'tpl\' => \'news.item\',
        \'tplWrapper\' => \'news.wrapper\',
     ]}
    </div>
  </section>

  <footer class="page_footer">
  <div class="container"></div>
</footer>
 </main>
</body>
</html>
',
    '_isForward' => false,
  ),
  'contentType' => 
  array (
    'id' => 1,
    'name' => 'HTML',
    'description' => 'HTML content',
    'mime_type' => 'text/html',
    'file_extensions' => '',
    'icon' => '',
    'headers' => NULL,
    'binary' => 0,
  ),
  'policyCache' => 
  array (
  ),
  'elementCache' => 
  array (
    '[[$head]]' => '<title>Новости - MODX Revolution</title>
<base href="[[!++site_url]]">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<link href="assets/frontend/css/styles.css" rel="stylesheet"/>',
    '[[$header]]' => '',
    '[[$header_wrapper]]' => '<header class="page_header">
  <div class="container"></div>
</header>',
    '[[$footer]]' => '',
    '[[$footer_wrapper]]' => '<footer class="page_footer">
  <div class="container"></div>
</footer>',
  ),
  'sourceCache' => 
  array (
    'MODX\\Revolution\\modChunk' => 
    array (
      'head' => 
      array (
        'fields' => 
        array (
          'id' => 1,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'head',
          'description' => '',
          'editor_type' => 0,
          'category' => 1,
          'cache_type' => 0,
          'snippet' => '<title>[[*pagetitle]] - [[++site_name]]</title>
<base href="[[!++site_url]]">
<meta charset="[[++modx_charset]]">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<link href="assets/frontend/css/styles.css" rel="stylesheet"/>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<title>[[*pagetitle]] - [[++site_name]]</title>
<base href="[[!++site_url]]">
<meta charset="[[++modx_charset]]">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<link href="assets/frontend/css/styles.css" rel="stylesheet"/>',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
        ),
      ),
      'header_wrapper' => 
      array (
        'fields' => 
        array (
          'id' => 4,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'header_wrapper',
          'description' => '',
          'editor_type' => 0,
          'category' => 1,
          'cache_type' => 0,
          'snippet' => '<header class="page_header">
  <div class="container">[[$header]]</div>
</header>',
          'locked' => false,
          'properties' => NULL,
          'static' => false,
          'static_file' => '',
          'content' => '<header class="page_header">
  <div class="container">[[$header]]</div>
</header>',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
        ),
      ),
      'header' => 
      array (
        'fields' => 
        array (
          'id' => 2,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'header',
          'description' => '',
          'editor_type' => 0,
          'category' => 1,
          'cache_type' => 0,
          'snippet' => '',
          'locked' => false,
          'properties' => NULL,
          'static' => false,
          'static_file' => '',
          'content' => '',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
        ),
      ),
      'footer_wrapper' => 
      array (
        'fields' => 
        array (
          'id' => 5,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'footer_wrapper',
          'description' => '',
          'editor_type' => 0,
          'category' => 1,
          'cache_type' => 0,
          'snippet' => '<footer class="page_footer">
  <div class="container">[[$footer]]</div>
</footer>',
          'locked' => false,
          'properties' => NULL,
          'static' => false,
          'static_file' => '',
          'content' => '<footer class="page_footer">
  <div class="container">[[$footer]]</div>
</footer>',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
        ),
      ),
      'footer' => 
      array (
        'fields' => 
        array (
          'id' => 3,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'footer',
          'description' => '',
          'editor_type' => 0,
          'category' => 1,
          'cache_type' => 0,
          'snippet' => '',
          'locked' => false,
          'properties' => NULL,
          'static' => false,
          'static_file' => '',
          'content' => '',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
        ),
      ),
      'news.item' => 
      array (
        'fields' => 
        array (
          'id' => 6,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'news.item',
          'description' => '',
          'editor_type' => 0,
          'category' => 3,
          'cache_type' => 0,
          'snippet' => '<div class="news-item">
  <img class="news-item-preview" src="{$preview_image}">
  <div class="news-item-title">{$pagetitle}</div>
  <div class="news-item-text">{$content | truncate : \'200\'}</div>
  <div class="news-item-pubdate">{$publishedon | date: \'d.m.Y H:i\'}</div>
</div>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<div class="news-item">
  <img class="news-item-preview" src="{$preview_image}">
  <div class="news-item-title">{$pagetitle}</div>
  <div class="news-item-text">{$content | truncate : \'200\'}</div>
  <div class="news-item-pubdate">{$publishedon | date: \'d.m.Y H:i\'}</div>
</div>',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
        ),
      ),
      'news.wrapper' => 
      array (
        'fields' => 
        array (
          'id' => 7,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'news.wrapper',
          'description' => '',
          'editor_type' => 0,
          'category' => 3,
          'cache_type' => 0,
          'snippet' => '<div class="news">[[+output]]</div>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<div class="news">[[+output]]</div>',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
        ),
      ),
    ),
    'MODX\\Revolution\\modSnippet' => 
    array (
    ),
    'MODX\\Revolution\\modTemplateVar' => 
    array (
    ),
  ),
);