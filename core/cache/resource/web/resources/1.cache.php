<?php  return array (
  'resourceClass' => 'MODX\\Revolution\\modDocument',
  'resource' => 
  array (
    'id' => 1,
    'type' => 'document',
    'pagetitle' => 'Главная',
    'longtitle' => 'Поздравляем!',
    'description' => '',
    'alias' => 'index',
    'link_attributes' => '',
    'published' => 1,
    'pub_date' => 0,
    'unpub_date' => 0,
    'parent' => 0,
    'isfolder' => 0,
    'introtext' => '',
    'content' => '<p>You have successfully installed MODX Revolution&nbsp;[[++settings_version]]!</p>
<p>Now that MODX is installed you can login to the manager to create your templates, manage content and install third party extras to add functionality to your&nbsp;website. </p>

<h2><a href="[[~2]]">Перейти к новостям</a></h2>
',
    'richtext' => 1,
    'template' => 1,
    'menuindex' => 0,
    'searchable' => 1,
    'cacheable' => 1,
    'createdby' => 1,
    'createdon' => 1696337514,
    'editedby' => 1,
    'editedon' => 1696345448,
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
    'uri' => 'index',
    'uri_override' => 0,
    'hide_children_in_tree' => 0,
    'show_in_tree' => 1,
    'properties' => NULL,
    'alias_visible' => 1,
    '_content' => '<!doctype html>
<html lang="en">
<head>
 <title>Главная - MODX Revolution</title>
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
     <h1>Поздравляем!</h1>

     <p>You have successfully installed MODX Revolution&nbsp;3.1.0-dev!</p>
<p>Now that MODX is installed you can login to the manager to create your templates, manage content and install third party extras to add functionality to your&nbsp;website. </p>

<h2><a href="news/">Перейти к новостям</a></h2>


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
    '[[$head]]' => '<title>Главная - MODX Revolution</title>
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
    ),
    'MODX\\Revolution\\modSnippet' => 
    array (
    ),
    'MODX\\Revolution\\modTemplateVar' => 
    array (
    ),
  ),
);