<!DOCTYPE html>
<html>
<head>
	<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="css/froala_editor.min.css" rel="stylesheet" type="text/css">


    <style>
        body {
            text-align: center;
        }

        section {
            width: 80%;
            margin: auto;
            text-align: left;
        }
    </style>
</head>

<body>
  <section id="editor">
      <div id='edit' style="margin-top: 30px;">
          <img class="fr-fir" src="img/old_clock.jpg" alt="Old Clock" width="300"/>

          <h1>Click and edit</h1>

          <p>
      </div>
  </section>

  <script src="js/libs/jquery-1.11.1.min.js"></script>
  <script src="js/froala_editor.min.js"></script>
  <script src="js/plugins/tables.min.js"></script>
  <script src="js/plugins/lists.min.js"></script>
  <script src="js/plugins/colors.min.js"></script>
  <script src="js/plugins/media_manager.min.js"></script>
  <script src="js/plugins/font_family.min.js"></script>
  <script src="js/plugins/font_size.min.js"></script>
  <script src="js/plugins/block_styles.min.js"></script>
  <script src="js/plugins/video.min.js"></script>

  <script>
      $(function(){
          $('#edit').editable({inlineMode: false, alwaysBlank: true})
      });
  </script>
</body>
</html>
