<?php
namespace Tacnix\Salts;

/* =================================
   CUSTOM HASH
=================================== */
function customHash( $customSalt, $uppercaseSalt ) {
    $rendomSalt = mt_rand();
    $keyLength = strlen( $customSalt );
    $split = $keyLength / 2;
    $arrayKey = str_split( $customSalt, $split );
    $customHash = md5( $arrayKey[0] . $UppercaseSalt . $arrayKey[1] . $rendomSalt );
    return $customHash;
}

/* =================================
   PASSWORD SALT
=================================== */
function passwordSalt( $userPassword, $customSalt ) {
    $userPasswordLength = strlen( $userPassword );
    $split = $userPassword / 2;
    $arrayKey = str_split( $userPasswordLength, $split );
    $passwordSalt = sha1( $arrayKey[0] . $customSalt . $arrayKey[1] );
    return $passwordSalt;
}

/* =================================
   CUSTOM SALT
=================================== */
function customSalt( $saltSize = "" ) {
    $keySet = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
    for ( $i = 0; $i < $saltSize; $i++ )
        $customSalt .= substr( $keySet, rand( 0, strlen( $keySet ) - 1 ), 1 );
    return $customSalt;
}

/* =================================
   NUMRIC SALT
=================================== */
function numricSalt( $saltSize = "" ) {
	$keySet = "0123456789";
	for ( $i = 0; $i < $saltSize; $i++ )
		$numricSalt .= substr( $keySet, rand( 0, strlen( $keySet ) - 1 ), 1 );
	return $numricSalt;
}

/* =================================
   LOWERCASE SALT
=================================== */
function lowercaseSalt( $saltSize = "" ) {
    $keySet = "abcdefghijklmnopqrstuvwxyz";
    for ( $i = 0; $i < $saltSize; $i++ )
        $lowercaseSalt .= substr( $keySet, rand( 0, strlen( $keySet ) - 1 ), 1 );
    return $lowercaseSalt;
}

/* =================================
   UPPERCASE SALT
=================================== */
function uppercaseSalt( $saltSize = "" ) {
    $keyset = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    for ( $i = 0; $i < $saltSize; $i++ )
        $uppercaseSalt .= substr( $keySet, rand( 0, strlen( $keySet ) - 1 ), 1 );
    return $uppercaseSalt;
}
