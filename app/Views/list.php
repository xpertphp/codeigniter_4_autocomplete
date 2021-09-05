<html lang="en">
<head>
    <title>Codeigniter 4 Autocomplete Textbox using Typeahead JS - XpertPhp</title>  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" />
   <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script> 
</head>
<body>
 
 
<div class="container">
    <h1>Codeigniter 4 Autocomplete Textbox using Typeahead JS</h1>
    <input class="typeahead form-control" type="text">
</div>
 
 
<script type="text/javascript">
    $('input.typeahead').typeahead({
        source:  function (query, process) {
        return $.get('<?php echo site_url(); ?>student/ajaxSearch', { query: query }, function (data) {
                console.log(data);
                data = $.parseJSON(data);
                return process(data);
            });
        }
    });
</script>
 
 
</body>
</html>