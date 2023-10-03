<?php  return array (
  'resourceClass' => 'MODX\\Revolution\\modDocument',
  'resource' => 
  array (
    'id' => 3,
    'type' => 'document',
    'pagetitle' => 'Новость1',
    'longtitle' => 'Новость1',
    'description' => '',
    'alias' => '1',
    'link_attributes' => '',
    'published' => 1,
    'pub_date' => 0,
    'unpub_date' => 0,
    'parent' => 2,
    'isfolder' => 0,
    'introtext' => '',
    'content' => 'Nulla maecenas fermentum potenti primis hymenaeos vulputate rhoncus. Mollis ut pede dignissim fames sollicitudin pharetra fusce non orci. Dictum. Faucibus urna lacinia vulputate. Orci nisi.

Nec cras nisi cubilia fermentum, sollicitudin ac nisl nulla iaculis cubilia auctor sapien mus ornare suspendisse fermentum pede.

Non. Nisi rhoncus interdum massa habitant elementum porta conubia faucibus nisl Dis mauris.

Penatibus massa nostra velit per. Sodales dolor nulla ullamcorper porta taciti congue, rutrum potenti odio lacus diam. Laoreet sed eu.

Risus molestie nascetur rhoncus sit neque nonummy nisi tellus, hendrerit at lobortis fames proin sem ipsum est ultrices porttitor id curabitur. Nisl felis tempus.',
    'richtext' => 1,
    'template' => 3,
    'menuindex' => 0,
    'searchable' => 1,
    'cacheable' => 1,
    'createdby' => 1,
    'createdon' => 1696337999,
    'editedby' => 1,
    'editedon' => 1696357790,
    'deleted' => 0,
    'deletedon' => 0,
    'deletedby' => 0,
    'publishedon' => 1696337940,
    'publishedby' => 1,
    'menutitle' => '',
    'donthit' => 0,
    'privateweb' => 0,
    'privatemgr' => 0,
    'content_dispo' => 0,
    'hidemenu' => 0,
    'class_key' => 'MODX\\Revolution\\modDocument',
    'context_key' => 'web',
    'content_type' => 1,
    'uri' => 'news/1',
    'uri_override' => 0,
    'hide_children_in_tree' => 0,
    'show_in_tree' => 1,
    'properties' => NULL,
    'alias_visible' => 1,
    'preview_image' => 
    array (
      0 => 'preview_image',
      1 => 'assets/frontend/img/news/1.jpg',
      2 => 'default',
      3 => NULL,
      4 => 'text',
    ),
    '_content' => '<!doctype html>
<html lang="en">
<head>
 <title>Новость1 - MODX Revolution</title>
<base href="[[!++site_url]]">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<link href="assets/frontend/css/styles.css" rel="stylesheet"/>
 <link href="assets/frontend/css/news.css" rel="stylesheet" />
</head>
<body>
 <main class="page">
  [[*$header_wrapper*]]

  <div class="container">
    <a href="/">Главная</a>
    <a href="news/">Все новости</a>
  </div>

  <section class="page_content">
    <div class="container">
     <h1>Новость1</h1>
     <p class="news-item-pubdate">{$publishedon | date : \'d.m.Y H:i\'} {$publishedby | user : \'fullname\'}</p>

     <img src="assets/frontend/img/news/1.jpg" />

     Nulla maecenas fermentum potenti primis hymenaeos vulputate rhoncus. Mollis ut pede dignissim fames sollicitudin pharetra fusce non orci. Dictum. Faucibus urna lacinia vulputate. Orci nisi.

Nec cras nisi cubilia fermentum, sollicitudin ac nisl nulla iaculis cubilia auctor sapien mus ornare suspendisse fermentum pede.

Non. Nisi rhoncus interdum massa habitant elementum porta conubia faucibus nisl Dis mauris.

Penatibus massa nostra velit per. Sodales dolor nulla ullamcorper porta taciti congue, rutrum potenti odio lacus diam. Laoreet sed eu.

Risus molestie nascetur rhoncus sit neque nonummy nisi tellus, hendrerit at lobortis fames proin sem ipsum est ultrices porttitor id curabitur. Nisl felis tempus.

    </div>
  </section>

  [[*$footer_wrapper*]]
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
    '[[$head]]' => '<title>Новость1 - MODX Revolution</title>
<base href="[[!++site_url]]">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<link href="assets/frontend/css/styles.css" rel="stylesheet"/>',
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
    ),
    'MODX\\Revolution\\modSnippet' => 
    array (
    ),
    'MODX\\Revolution\\modTemplateVar' => 
    array (
      'preview_image' => 
      array (
        'fields' => 
        array (
          'id' => 1,
          'source' => 0,
          'property_preprocess' => false,
          'type' => 'text',
          'name' => 'preview_image',
          'caption' => '',
          'description' => '',
          'editor_type' => 0,
          'category' => 0,
          'locked' => false,
          'elements' => '',
          'rank' => 0,
          'display' => 'default',
          'default_text' => '',
          'properties' => 
          array (
          ),
          'input_properties' => 
          array (
            'allowBlank' => 'true',
            'minLength' => '',
            'maxLength' => '',
            'regex' => '',
            'regexText' => '',
          ),
          'output_properties' => 
          array (
          ),
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
    ),
  ),
);