<?php

namespace GrumPHP\Task;

use Composer\Config;
use GrumPHP\Configuration\ConfigurationInterface;
use GrumPHP\Configuration\GrumPHP;
use GrumPHP\Locator\LocatorInterface;
use Symfony\Component\Process\ProcessBuilder;

abstract class AbstractExternalTask implements ExternalTaskInterface
{
    /**
     * @var GrumPHP
     */
    protected $grumPHP;

    /**
     * @var ConfigurationInterface
     */
    protected $configuration;

    /**
     * @var LocatorInterface
     */
    protected $externalCommandLocator;

    /**
     * @var ProcessBuilder
     */
    protected $processBuilder;

    /**
     * @param GrumPHP $grumPHP
     * @param ConfigurationInterface $configuration
     * @param LocatorInterface $externalCommandLocator
     * @param ProcessBuilder $processBuilder
     */
    public function __construct(GrumPHP $grumPHP, ConfigurationInterface $configuration, LocatorInterface $externalCommandLocator, ProcessBuilder $processBuilder)
    {
        $this->grumPHP = $grumPHP;
        $this->configuration = $configuration;
        $this->externalCommandLocator = $externalCommandLocator;
        $this->processBuilder = $processBuilder;
    }

    /**
     * {@inheritdoc}
     */
    public function getConfiguration()
    {
        return $this->configuration;
    }
}
