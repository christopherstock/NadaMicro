<?php

    require __DIR__ . '/vendor/autoload.php';

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    // check request from different domain
    if
    (
           !isset( $_SERVER[ 'HTTP_REFERER' ] )
        || !isset( $_SERVER[ 'HTTP_HOST' ] )
        || strpos( $_SERVER[ 'HTTP_REFERER' ], $_SERVER[ 'HTTP_HOST' ] ) === false
    )
    {
        http_response_code( 401 );
        die();
    }

    // check post value 'encryptedString'
    if ( !array_key_exists( 'encryptedString', $_POST ) )
    {
        http_response_code( 400 );
        die();
    }

    $fileToAttach    = 'tmp_' . uniqid();
    $encryptedString = filter_var( $_POST[ 'encryptedString' ], FILTER_SANITIZE_STRING );

    file_put_contents( $fileToAttach, $encryptedString );

    try
    {
        $email           = new PHPMailer();
        $email->From     = 'm.feineis@computy.de'; // cc@fsos-europe.de
        $email->FromName = 'Credit Card Submission Form';
        $email->Subject  = 'Credit Card Submission at ' . date( 'd.m.Y H:i:s' );
        $email->Body     = 'A new credit card submission was transferred on ' . date( 'd.m.Y H:i:s' ) . '. '
                         . 'Please pick the encrypted data from the attachments.';
        $email->AddAddress( 'm.feineis@computy.de' ); // kk@fsos-europe.com
        $email->AddAttachment( $fileToAttach, date( 'Y_m_d_H-i-s' ) . '_encrypted.txt' );

        $sendResult = $email->Send();

        unlink($fileToAttach );

        http_response_code( 200 );
        die();
    }
    catch ( Exception $e )
    {
        unlink($fileToAttach );

        http_response_code( 500 );
        die();
    }
