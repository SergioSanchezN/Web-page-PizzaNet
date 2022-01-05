<?php

// intento 1: no funciona porque descarga el archivo.doc
//header("Content-type: application/msword");
//header("Content-Disposition: inline; filename=instructivo.doc");
//readfile('instructivo.doc');


//header('Content-disposition: inline');
//header('Content-type: application/msword'); // not sure if this is the correct MIME type
//readfile('instructivo.doc');


//iframe1.Attributes.Add ("Src", " https://docs.google.com/gview?url=http://localhost/proyecto/instructivo.doc&embedded=true");

//$app= new COM("Word.Application"); $file = "/instructivo.docx";
//$app->visible = true; $app->Documents->Open($file);
//$app->ActiveDocument->PrintOut();
//$app->ActiveDocument->Close(); $app->Quit();


//header('Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document');
//header('Content-Disposition: attachment;filename=instructivo.docx');

echo "<center><iframe src='https://docs.google.com/viewer?url=http://200.16.117.238/20202B102/datosPizzaNet/PizzaNet.docx&embedded=true' frameborder='0' width='1000' height='1000' ></iframe></center>";

?>