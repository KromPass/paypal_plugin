<?php

/**
 * Created by PhpStorm.
 * User: riccio
 * Date: 22/09/17
 * Time: 10.47
 */

namespace Features\Paypal\Utils;


class Routes {

    public static function staticBuild( $file, $options = [] ) {
        $host = \Routes::pluginsBase( $options );

        return $host . "/paypal/static/build/$file";
    }

    public static function staticSrc( $file, $options = [] ) {
        $host = \Routes::pluginsBase( $options );

        return $host . "/paypal/static/$file";
    }

    public static function projectImageReferences( $projectStructure, $fileName, $options = [] ) {
        $host = \Routes::pluginsBase( $options );

        return [ 'path' => $host . "/paypal/preview/{$projectStructure[ 'id_project' ]}/{$projectStructure[ 'ppassword' ]}/", 'file_index' => $fileName ];
    }

    public function lqa( $project_name, $id_job, $password, $source, $target, $options = [] ) {
        $host = \Routes::httpHost( $options );

        return "$host/lqa/$project_name/$source-$target/$id_job-$password";

    }

}