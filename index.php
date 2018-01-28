<!DOCTYPE html>
<html>
    <head>
        <title>Vertical collapse Examples</title>
        <link href="./logo.ico" rel="shortcut icon" type="image/vnd.microsoft.icon">
        <meta charset="UTF-8">
        <meta name="description" content="How to vertical collapse">
        <meta name="keywords" content="Pleisterman, function, javascrript, collapse, container">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge"><link href="https://fonts.googleapis.com/css?family=Raleway" media="screen" rel="stylesheet" type="text/css">
        <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>   
        <script type="text/javascript" src="./bootstrap/bootstrap.min.js"></script>
        <script type="text/javascript" src="./vertical-collapse.js"></script>
        <link rel="stylesheet" id="bootstrap_css" href="./bootstrap/bootstrap.min.css" type="text/css" media="all">        
        <link rel="stylesheet" id="bootstrap_css" href="./dashicons.min.css" type="text/css" media="all">        
        <link rel="stylesheet" id="style_css" href="./styles.css" type="text/css" media="all">        
        <link rel="stylesheet" id="fields_css" href="./fields.css" type="text/css" media="all">        
        <link rel="stylesheet" id="collapse_css" href="./vertical-collapse-container.css" type="text/css" media="all">        
    </head>
    <body>
        
<div class="field-container" >
<div class="field-title"> Container 1</div>
<div class="dashicons dashicons-arrow-down-alt2 vertical-collapse-toggle-button vertical-collapse-toggle-button-top" ></div>
<div class="vertical-collapse-collapse-container" >
  <div class="field-text" >this is the content of the container.</div>
  <div class="field-text" >This container is</div>
  <div class="field-text" >in closed when </div>
  <div class="field-text" >showed the first time.</div>
</div>
<div class="dashicons dashicons-arrow-up-alt2 vertical-collapse-toggle-button vertical-collapse-toggle-button-bottom" ></div>
</div>


<div class="field-container vertical-collapse-start-open" >
<div class="field-title"> Container 2</div>
<div class="dashicons dashicons-arrow-down-alt2 vertical-collapse-toggle-button vertical-collapse-toggle-button-top" ></div>
<div class="vertical-collapse-collapse-container" >
  <div class="field-text" >this is the content of the container.</div>
  <div class="field-text" >This container is</div>
  <div class="field-text" >in open when </div>
  <div class="field-text" >showed the first time.</div>
</div>
<div class="dashicons dashicons-arrow-up-alt2 vertical-collapse-toggle-button vertical-collapse-toggle-button-bottom" ></div>
</div>

<div class="field-container" >
<div class="field-title"> Container 3</div>
<div class="dashicons dashicons-arrow-down-alt2 vertical-collapse-toggle-button vertical-collapse-toggle-button-top" ></div>
<div class="vertical-collapse-collapse-container" >
  <div class="field-text" >this is the content of the container.</div>
  <div class="field-text" >This container is</div>
  <div class="field-text" >in closed when </div>
  <div class="field-text" >showed the first time.</div>
</div>
<div class="dashicons dashicons-arrow-up-alt2 vertical-collapse-toggle-button vertical-collapse-toggle-button-bottom" ></div>
</div>
        
<div class="field-container" >
<div class="field-title"> Container 4</div>
<div class="dashicons dashicons-arrow-down-alt2 vertical-collapse-toggle-button vertical-collapse-toggle-button-top" ></div>
<div class="vertical-collapse-collapse-container" >
  <div class="field-text" >this is the content of the container.</div>
  <div class="field-text" >This container is</div>
  <div class="field-text" >in closed when </div>
  <div class="field-text" >showed the first time.</div>
</div>
<div class="dashicons dashicons-arrow-up-alt2 vertical-collapse-toggle-button vertical-collapse-toggle-button-bottom" ></div>
</div>


        <div style="margin-left: 1.2em;margin-top: 2.2em;display:inline-block;">
            This is the html for the container:
            
            <pre style="padding: 0.4em;margin-top: 1.2em; background-color: rgba( 46, 108, 89, 0.2 );">


&lt;div class="field-container" &gt;
&lt;div class="field-title"&gt; Container 4&lt;/div&gt;
&lt;div class="dashicons dashicons-arrow-down-alt2 vertical-collapse-toggle-button vertical-collapse-toggle-button-top" &gt;&lt;/div&gt;
&lt;div class="vertical-collapse-collapse-container" &gt;
  &lt;div class="field-text" &gt;this is the content of the container.&lt;/div&gt;
  &lt;div class="field-text" &gt;This container is&lt;/div&gt;
  &lt;div class="field-text" &gt;in closed when &lt;/div&gt;
  &lt;div class="field-text" &gt;showed the first time.&lt;/div&gt;
&lt;/div&gt;
&lt;div class="dashicons dashicons-arrow-up-alt2 vertical-collapse-toggle-button vertical-collapse-toggle-button-bottom" &gt;&lt;/div&gt;
&lt;/div&gt;

            </pre>
        </div>        
        

        <div style="margin-left: 1.2em;margin-top: 2.2em;display:inline-block;">
            This is the html for the open container:
            
            <pre style="padding: 0.4em;margin-top: 1.2em; background-color: rgba( 46, 108, 89, 0.2 );">


&lt;div class="field-container vertical-collapse-start-open" &gt;
&lt;div class="field-title"&gt; Container 4&lt;/div&gt;
&lt;div class="dashicons dashicons-arrow-down-alt2 vertical-collapse-toggle-button vertical-collapse-toggle-button-top" &gt;&lt;/div&gt;
&lt;div class="vertical-collapse-collapse-container" &gt;
  &lt;div class="field-text" &gt;this is the content of the container.&lt;/div&gt;
  &lt;div class="field-text" &gt;This container is&lt;/div&gt;
  &lt;div class="field-text" &gt;in closed when &lt;/div&gt;
  &lt;div class="field-text" &gt;showed the first time.&lt;/div&gt;
&lt;/div&gt;
&lt;div class="dashicons dashicons-arrow-up-alt2 vertical-collapse-toggle-button vertical-collapse-toggle-button-bottom" &gt;&lt;/div&gt;
&lt;/div&gt;

            </pre>
        </div>        
        
    </body>
</html>
