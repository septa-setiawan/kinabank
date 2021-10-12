<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit50478dfc75549edea87a587529262f05
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'TkhConsult\\KinaBankGateway\\' => 27,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'TkhConsult\\KinaBankGateway\\' => 
        array (
            0 => __DIR__ . '/..' . '/tkhconsult/kina-bank-gateway/src',
        ),
    );

    public static $classMap = array (
        'TkhConsult\\KinaBankGateway\\KinaBankGateway' => __DIR__ . '/..' . '/tkhconsult/kina-bank-gateway/src/KinaBankGateway.php',
        'TkhConsult\\KinaBankGateway\\KinaBank\\Authorization\\AuthorizationRequest' => __DIR__ . '/..' . '/tkhconsult/kina-bank-gateway/src/KinaBank/Authorization/AuthorizationRequest.php',
        'TkhConsult\\KinaBankGateway\\KinaBank\\Authorization\\AuthorizationResponse' => __DIR__ . '/..' . '/tkhconsult/kina-bank-gateway/src/KinaBank/Authorization/AuthorizationResponse.php',
        'TkhConsult\\KinaBankGateway\\KinaBank\\Completion\\CompletionRequest' => __DIR__ . '/..' . '/tkhconsult/kina-bank-gateway/src/KinaBank/Completion/CompletionRequest.php',
        'TkhConsult\\KinaBankGateway\\KinaBank\\Completion\\CompletionResponse' => __DIR__ . '/..' . '/tkhconsult/kina-bank-gateway/src/KinaBank/Completion/CompletionResponse.php',
        'TkhConsult\\KinaBankGateway\\KinaBank\\Exception' => __DIR__ . '/..' . '/tkhconsult/kina-bank-gateway/src/KinaBank/Exception.php',
        'TkhConsult\\KinaBankGateway\\KinaBank\\Form' => __DIR__ . '/..' . '/tkhconsult/kina-bank-gateway/src/KinaBank/Form.php',
        'TkhConsult\\KinaBankGateway\\KinaBank\\Refund\\RefundRequest' => __DIR__ . '/..' . '/tkhconsult/kina-bank-gateway/src/KinaBank/Refund/RefundRequest.php',
        'TkhConsult\\KinaBankGateway\\KinaBank\\Refund\\RefundResponse' => __DIR__ . '/..' . '/tkhconsult/kina-bank-gateway/src/KinaBank/Refund/RefundResponse.php',
        'TkhConsult\\KinaBankGateway\\KinaBank\\Request' => __DIR__ . '/..' . '/tkhconsult/kina-bank-gateway/src/KinaBank/Request.php',
        'TkhConsult\\KinaBankGateway\\KinaBank\\RequestInterface' => __DIR__ . '/..' . '/tkhconsult/kina-bank-gateway/src/KinaBank/RequestInterface.php',
        'TkhConsult\\KinaBankGateway\\KinaBank\\Response' => __DIR__ . '/..' . '/tkhconsult/kina-bank-gateway/src/KinaBank/Response.php',
        'TkhConsult\\KinaBankGateway\\KinaBank\\ResponseInterface' => __DIR__ . '/..' . '/tkhconsult/kina-bank-gateway/src/KinaBank/ResponseInterface.php',
        'TkhConsult\\KinaBankGateway\\KinaBank\\Reversal\\ReversalRequest' => __DIR__ . '/..' . '/tkhconsult/kina-bank-gateway/src/KinaBank/Reversal/ReversalRequest.php',
        'TkhConsult\\KinaBankGateway\\KinaBank\\Reversal\\ReversalResponse' => __DIR__ . '/..' . '/tkhconsult/kina-bank-gateway/src/KinaBank/Reversal/ReversalResponse.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit50478dfc75549edea87a587529262f05::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit50478dfc75549edea87a587529262f05::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit50478dfc75549edea87a587529262f05::$classMap;

        }, null, ClassLoader::class);
    }
}
