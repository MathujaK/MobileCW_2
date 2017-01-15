<?php
/*
#####################################################################
#                          PHP Hangman Game                         #
#                           Version 1.2.0                           #
#               �2002,2003 0php.com - Free PHP Scripts              #
#####################################################################

#####################################################################
#                                                                   #
#  Author      :  0php.com                                          #
#  Created     :  July 12, 2002                                     #
#  Modified    :  March 22, 2004                                    #
#  E-mail      :  webmaster@0php.com                                #
#  Website     :  http://www.0php.com/                              #
#  License     :  FREE (GPL);  See Copyright and Terms below        #
#                                                                   #
#        Donations accepted via PayPal to webmaster@0php.com        #
#                                                                   #
#####################################################################

>> Copyright and Terms:

This software is copyright (C) 2002-2004 0php.com.  It is distributed
under the terms of the GNU General Public License (GPL).  Because it is licensed
free of charge, there is NO WARRANTY, it is provided AS IS.  The author can not
be held liable for any damage that might arise from the use of this software.
Use it at your own risk.

All copyright notices and links to 0PHP.com website MUST remain intact in the scripts and in the HTML for the scripts.

For more details, see http://www.0php.com/license_GNU_GPL.php (or http://www.gnu.org/).

>> Installation
Copy the PHP script and images to the same directory.  You can optionally edit the category and list of words/phrases to solve below.  You can also add additional characters to $additional_letters and/or $alpha if you want to use international (non-English) letters or other characters not included by default (see further instructions below for those).

To prevent Google from playing hangman, add the line below between <HEAD> and </HEAD>:
<META NAME="robots" CONTENT="NOINDEX,NOFOLLOW">


=======================================================================================*/


$Category = "Treasure Hunt";

# list of words (phrases) to guess below, separated by new line
$list = "DAMON SALVATORE
BLUE OCEAN 
BLOODY MARY
GINGER ALE
SHOT OF TEQUILA
HOTEL PASSION
TABLE FOR TWO
ALWAYS BELIEVE
DRINK UP
NACHO NIGHT
PARTY ALL NIGHT";

$alpha = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";

$additional_letters = " -.,;!?%&0123456789";


echo<<<endHTML
<HTML><HEAD><TITLE>Welcome to Hangman</TITLE>
<meta content="text/html; charset=windows-1252" http-equiv=content-type>
<meta http-equiv="Content-Style-Type" content="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<link href='http://fonts.googleapis.com/css?family=Merienda' rel='stylesheet'>
<link href='//fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
<link rel="stylesheet" href="hangman.css">
<style type="text/css">
<!--
	H1		{font-family: "Courier New", Courier, monospace; font-size: 27pt;}
	P		{font-family: Verdana, Arial, sans-serif; font-size: 12pt;}
	A:link	{COLOR: #0000FF; TEXT-DECORATION: underline;}
	A:visited	{COLOR: #0000FF; TEXT-DECORATION: underline;}
	A:active	{COLOR: #0000FF; TEXT-DECORATION: underline;}
	A:hover	{COLOR: #FF0000; TEXT-DECORATION: underline;}
-->
</style>
</HEAD>

<BODY align="center" background="op.jpg" background-size="cover" link="navy" vlink="navy" alink="navy">
endHTML;

$len_alpha = strlen($alpha);

if(isset($_GET["n"])) $n=$_GET["n"];
if(isset($_GET["letters"])) $letters=$_GET["letters"];
if(!isset($letters)) $letters="";

if(isset($PHP_SELF)) $self=$PHP_SELF;
else $self=$_SERVER["PHP_SELF"];

$links="";






$max=6;					# maximum number of wrong
# error_reporting(0);
$list = strtoupper($list);
$words = explode("\n",$list);
srand ((double)microtime()*1000000);
$all_letters=$letters.$additional_letters;
$wrong = 0;

echo<<<endHTML
<img class="header_img" src="pubcrawl.png" alt="some_text" style="width:545px;height:175px;">
endHTML;

echo "<hr>";
echo "<div><h1 class='page-header'>Welcome to Hangman</h1></div>";
echo "<br>";

echo "<div class='title'><P><B>RULES OF THE GAME:</B></P></div>";

echo "<ol>";
echo "<li> Visit Passion Pub</li>";
echo "<li> Go to the Wall</li>";
echo "<li> Click on the square with appropriate letter in it to reveal the letter within the word/phrase</li>";
echo "<li> Click on the letter in the alphabet area which will then trigger the letter to be revealed if it is contained in the word/phrase</li>";
echo "<li> The game continues until:
the word/phrase is guessed (all letters are revealed) – WINNER or,
all the parts of the hangman are displayed – LOSER</li>";
echo "</ol>";

if (!isset($n)) { $n = rand(1,count($words)) - 1; }
$word_line="";
$word = trim($words[$n]);
$done = 1;
for ($x=0; $x < strlen($word); $x++)
{
  if (strstr($all_letters, $word[$x]))
  {
    if ($word[$x]==" ") $word_line.="&nbsp; "; else $word_line.=$word[$x];
  } 
  else { $word_line.="_<font size=1>&nbsp;</font>"; $done = 0; }
}

if (!$done)
{

  for ($c=0; $c<$len_alpha; $c++)
  {
    if (strstr($letters, $alpha[$c]))
    {
      if (strstr($words[$n], $alpha[$c])) {$links .= "\n<B>$alpha[$c]</B> "; }
      else { $links .= "\n<FONT color=\"red\">$alpha[$c] </font>"; $wrong++; }
    }
    else
    { $links .= "\n<A HREF=\"$self?letters=$alpha[$c]$letters&n=$n\">$alpha[$c]</A> "; }
  }
  $nwrong=$wrong; if ($nwrong>6) $nwrong=6;

  echo "\n<div class='img2'><BR>\n<IMG SRC=\"hangman_$nwrong.gif\" ALIGN=\"MIDDLE\" BORDER=0 WIDTH=100 HEIGHT=100 ALT=\"Wrong: $wrong out of $max\"></div>\n";


  if ($wrong >= $max)
  {
    $n++;
    if ($n>(count($words)-1)) $n=0;

    echo "<div class='img1'><FONT color=\"red\"><BIG>SORRY, YOU ARE HANGED!!!</BIG></FONT></div>";
    if (strstr($word, " ")) $term="phrase"; else $term="word";
    echo "<div class='img1'>The $term was \"<B>$word</B>\"<BR><BR></div>\n";
    echo "<div class='img1'><A HREF=$self?n=$n>Play again.</A></div>\n\n";
  }
  else
  {
    echo "<div class='img1'>&nbsp; # Wrong Guesses Left: <B>".($max-$wrong)."</B><BR></div>\n";
    echo "<div class='img1'><H1><font size=5>\n$word_line</font></H1></div>\n";
    echo "<div class='img1'><P><BR>Choose a letter:<BR><BR></div>\n";
    echo "<div class='img1'>$links\n</div>";
  }
}
else
{
  $n++;	# get next word
  if ($n>(count($words)-1)) $n=0;
  echo "<div class='img5'><BR><BR><H1><font size=5>\n$word_line</font></H1></div>\n";
  echo "<div class='img5'><P><BR><BR><B>Congratulations!!! &nbsp;You win!!!<BR> YOUR SCORE : 5 </B><BR><BR><BR></div>\n";
  echo "<div class='img5'><A HREF='promotions.html'>Click Here to Claim Your Code</A>\n\n</div>";
}

include 'footer2.html';


echo<<<endHTML

</DIV></BODY></HTML>

endHTML;
?>
