<?php

 $Word = "CARTHORSE";
 $Jumble = Jumble($Word);

 function Jumble($Word)
 {
   $TempWord=$Word ;
   for($Count1=8; $Count1>=0; $Count1--)
   {
     $JumbleNum=rand(0,$Count1) ;
     $Jumble.=$TempWord[$JumbleNum] ;
     for($Count2=$JumbleNum;$Count2<$Count1;$Count2++)
     {
       $TempWord[$Count2]=$TempWord[$Count2+1] ;
     }
   }
   return $Jumble;
 }

 function DoTable($Word)
 {
   $Indent="        ";  # Just to make it look pretty
   for($Count=0; $Count < 9; $Count++)
   {
     print("$Indent<td>$Word[$Count]</td>\n");
   }
 }
 ?>
 <!DOCTYPE html PUBLIC "-//W3C//Dtd XHTML 1.0 Transitional//EN" "http://www.w3.org/tr/xhtml1/Dtd/xhtml1-transitional.dtd">
 <html xmlns="http://www.w3.org/1999/xhtml">
 <head>
 <title>Mini Conundrum</title>
 </head>
 <body>
   <form>
     <table border="1">
       <tr>
 <?php DoTable($Word); ?>
       <try>
     </table>
     <p></p>
     <table border="1">
       <tr>
 <?php DoTable($Jumble); ?>
       <try>
     </table>
     <input type="hidden" id="Jumble" value="<?php print $Jumble;?>" />
   </form>
 </body>
 </html>
