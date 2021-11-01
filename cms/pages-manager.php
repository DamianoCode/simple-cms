<?php session_start(); if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){ ?>

<script type="text/javascript" src="editor/tinymce.min.js"></script>
<script type="text/javascript">
tinymce.init({
  selector: "textarea#tresc",
  theme: "modern",
    width: "800",
  height: "200",
  plugins: [
  "advlist autolink lists link image charmap print preview hr anchor pagebreak",
  "searchreplace wordcount visualblocks visualchars code fullscreen",
  "insertdatetime media nonbreaking save table contextmenu directionality",
  "emoticons template paste textcolor colorpicker textpattern imagetools"
  ],
  toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
  toolbar2: "print preview media | forecolor backcolor emoticons",
  image_advtab: true,
});
</script>


<center><? include('menu.php'); ?></center><br>

   <form method="post" action="save.php">
     Meta title: <input name="metatitle" id="metatitle"><br><br>
     Meta decription: <input name="metadesc" id="metadesc"><br><br>
     Tytuł: <input name="tytul" id="tytul"><br><br>
     Krótki opis: <input name="krotkiopis" id="krotkiopis"><br><br>
     Tytuł w menu: <input name="tytulmenu" id="tytulmenu"><br><br>
     Link: <input name="krotkanazwa" id="krotkanazwa"><br><br>
     <h3>Treść strony</h3><br>
     <textarea name="tresc" id="tresc"></textarea>
     <input type="submit" value="zapisz">
  </form>

<?php } else { echo "Nie jestes zalogowany"; }?>