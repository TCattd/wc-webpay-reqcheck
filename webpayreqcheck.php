<?php
/*
https://github.com/TCattd/wc-webpay-reqcheck

Esteban Cuevas
esteban@actitud.xyz
http://actitud.xyz

License: GPLv2
License URI: https://www.gnu.org/licenses/gpl-2.0.html

How to:
Upload this file to the server and point your browser to it.
 */

echo '<title>Webpay requirements checker</title>';

echo 'Webpay requirements check.<br/>';
echo '-----------------------------------<br/><br/>';

echo 'Running OS: ';
echo php_uname() . ', ' . (PHP_INT_SIZE * 8) . '-bit.';
echo '<br/><br/>';

$errors = false;

//SOAP
echo '.- SOAP ';
if (extension_loaded('soap')) {
	echo 'enabled.';
} else {
	echo '<strong>not available</strong>.';
	$errors = true;
}

echo '<br/>';

//OpenSSL 1.0.1 or newer
echo '.- OpenSSL ';
if (extension_loaded('openssl')) {
	echo 'enabled, version ' . str_ireplace('OpenSSL ', '', OPENSSL_VERSION_TEXT) . '. Required 1.0.1 or newer.';
} else {
	echo '<strong>not available</strong>.';
	$errors = true;
}

echo '<br/>';

//SimpleXML
echo '.- SimpleXML ';
if (extension_loaded('simplexml')) {
	echo 'enabled.';
} else {
	echo '<strong>not available</strong>.';
	$errors = true;
}

echo '<br/>';

//DOM 2.7.8 or newer
echo '.- DOM ';
if (extension_loaded('dom')) {
	echo 'enabled, libxml version ' . LIBXML_DOTTED_VERSION . '. Required 2.7.8 or newer.';
} else {
	echo '<strong>not available</strong>.';
	$errors = true;
}

echo '<br/>';

//Sockets
echo '.- Sockets ';
if (extension_loaded('sockets')) {
	echo 'enabled.';
} else {
	echo '<strong>not available</strong>.';
	$errors = true;
}

echo '<br/><br/>';

if($errors === true) {
	echo 'Some extensions aren\'t loaded. You need to install them in order to run the official Transbank Webpay plugin for WooCommerce.';
} else {
	echo 'Check the minimum required versions. If everything in order, then proceed to install the <a href="http://www.transbankdevelopers.cl/?m=plugin">official plugin for Webpay</a>.';
}

echo '<br/><br/>';

echo '-----------------------------------<br/>';
echo '<a href="http://actitud.xyz/" target="_blank">It\'s about actitud.xyz</a>';
