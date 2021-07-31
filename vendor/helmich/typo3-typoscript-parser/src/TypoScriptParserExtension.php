<?php

declare (strict_types=1);
namespace RectorPrefix20210731\Helmich\TypoScriptParser;

use RectorPrefix20210731\Symfony\Component\Config\FileLocator;
use RectorPrefix20210731\Symfony\Component\DependencyInjection\ContainerBuilder;
use RectorPrefix20210731\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use RectorPrefix20210731\Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
/**
 * Class TypoScriptParserExtension
 *
 * @package Helmich\TypoScriptParser
 * @codeCoverageIgnore
 */
class TypoScriptParserExtension implements \RectorPrefix20210731\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
{
    /**
     * Loads a specific configuration.
     *
     * @param array            $configs   An array of configuration values
     * @param ContainerBuilder $container A ContainerBuilder instance
     *
     * @throws \InvalidArgumentException When provided tag is not defined in this extension
     *
     * @api
     * @psalm-suppress MissingReturnType Signature is determined by Symfony DI -- nothing to fix, here
     */
    public function load($configs, $container)
    {
        $loader = new \RectorPrefix20210731\Symfony\Component\DependencyInjection\Loader\YamlFileLoader($container, new \RectorPrefix20210731\Symfony\Component\Config\FileLocator(__DIR__ . '/../config'));
        $loader->load('services.yml');
    }
    /**
     * Returns the namespace to be used for this extension (XML namespace).
     *
     * @return string The XML namespace
     *
     * @api
     */
    public function getNamespace()
    {
        return 'http://example.org/schema/dic/' . $this->getAlias();
    }
    /**
     * Returns the base path for the XSD files.
     *
     * @return false
     *
     * @api
     */
    public function getXsdValidationBasePath()
    {
        return \false;
    }
    /**
     * Returns the recommended alias to use in XML.
     *
     * This alias is also the mandatory prefix to use when using YAML.
     *
     * @return string The alias
     *
     * @api
     */
    public function getAlias()
    {
        return 'typoscript_parser';
    }
}
