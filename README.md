PSX Sample
===

## About

This is a sample application wich can bootstrap a project based on the PSX 
framework. You can install it through composer

> php composer.phar create-project psx/sample .

More informations about PSX at http://phpsx.org

## Configuration

In the configuration.php file change the key "psx_url" to the absolute url to
the public folder. If you have setup a vhost this is simply the domain. In case
you use mod_rewrite you can set the key "psx_dispatch" to an empty value. 
Therefor you can use the sample htaccess file in the public folder.

## Getting started

This sample project uses a [RAML] specification to describe the behaviour of the
API. The RAML file is located at `src/Sample/Resource/population.raml`.
You can change the RAML and JSONSchema files to change the behaviour of the API.
The `routes` file contains the route to controller mapping. The controller files
located at `src/Sample/Api/Population` contain only the actual logic of the API.
The business logic is located in a seperate service class at 
`src/Sample/Service/Population.php`. All validation handling and formatting is 
done by PSX. There is also a automatic documentation which is available at 
`public/documentation`. The API contains also testcases for each API endpoint 
which you can run with `phpunit`.

[RAML]: http://raml.org/
