<?
// Verbindung zur ERP-db

// User which connects to the SQL Ledger database
$ERPuser="lxoffice";
// Password for the SQL Ledger database
$ERPpass="geheim";
// Datebbankserver where your SQL Ledger installation resides.
$ERPhost="localhost";
// Name of your SQL Ledger database
$ERPdbname="stable";
// This is a connect string which normally doesn't need to be changed
$ERPdns="pgsql://$ERPuser:$ERPpass@$ERPhost/$ERPdbname";
$ERPusr["Name"]="hli";
$ERPusr["ID"]="376";
$ERPdir="tmp/shopartikel.csv";
$ERPimgdir="/var/www/stable/";
$maxSize="";
$ERPftphost="localhost";
$ERPftpuser="oscom";
$ERPftppwd="oscom";
//Verbindung zur osCommerce-db

// MySQL database username for your osCommerce installation
$SHOPuser="root";
// Databse password for the specitic user to connect to the osCommerce MySQL database
$SHOPpass="db4web";
// The host where your database server for osCommerce resides.
$SHOPhost="localhost";
// Database name of the osCommerce MySQL database
$SHOPdbname="oscom";
$SHOPlang="";
// String to connect to the MySQL database, which normally doesn't need to be changed
$SHOPdns="mysql://$SHOPuser:$SHOPpass@$SHOPhost/$SHOPdbname";
$SHOPdir="tmp/shopartikel.csv";
// Absolute path where your article's images reside
$SHOPimgdir="/var/www/htdocs/oscommerce/images";
$SHOPftphost="localhost";
$SHOPftpuser="oscom";
$SHOPftppwd="oscom";
$div16["ID"]="413";
$div07["ID"]="";
$versand["ID"]="413";
$nachn["ID"]="";
$minder["ID"]="";
$treuh["ID"]="";
$paypal["ID"]="";
$div16["NR"]="div16";
$div07["NR"]="";
$versand["NR"]="div16";
$nachn["NR"]="";
$minder["NR"]="";
$treuh["NR"]="";
$paypal["NR"]="";
$div16["TAX"]="19.0000";
$div07["TAX"]="";
$versand["TAX"]="19.0000";
$nachn["TAX"]="";
$minder["TAX"]="";
$treuh["TAX"]="";
$paypal["TAX"]="";
$div16["TXT"]="Diverse Artikel 16% MWSt.";
$div07["TXT"]="";
$versand["TXT"]="Diverse Artikel 16% MWSt.";
$nachn["TXT"]="";
$minder["TXT"]="";
$treuh["TXT"]="";
$paypal["TXT"]="";
$pricegroup="0";
$bgcol[1]="#ddddff";
$bgcol[2]="#ddffdd";
$preA="";
$preK="";
$auftrnr="1";
$debug=true;
$kdnum="1";
$stdprice="";
$nopic="";
$showErr="true";
?>
