<?php
/*
Jangan Record gan walawpun ini tools sederhana
tapi jagan di record hargai karya orang lain

izin dulu kalu mau record
0895320325423
*/
echo "

######################
# Welcome To my TOOLS #
#######################
";

echo "\e[0;36m Tekan Enter untuk Menjalankan Program\n Start : ";
$gaada = trim(fgets(STDIN));
$dir = "/data/data/com.termux/files/home/.termux";
$file_to_write = 'termux.properties';
$content_to_write = "extra-keys = [['ESC','/','-','HOME','UP','END','PGUP'],['TAB','CTRL','ALT','LEFT','DOWN','RIGHT','PGDN']]";
if( is_dir($dir) === false )
{
    mkdir($dir);
}
$file = fopen($dir . '/' . $file_to_write,"w");
fwrite($file, $content_to_write);
fclose($file);
include $dir . '/' . $file_to_write;
system('termux-reload-settings');
system("clear");
echo "\e[0;41m  //////////////////////
 // [+] Berhasil [+] //
//////////////////////\e[0;36m
╭┳┳╮
┃┃┃┃
┃┗┗┃    Author : Mr.404rgr
┃┃╭━┃   Team : Rao Cyber Team
╰┳━┳╯   Telegram : t.me/Mr.404rgr
 ┃┈┃    Youtube : Pausi Channel
";
?>
